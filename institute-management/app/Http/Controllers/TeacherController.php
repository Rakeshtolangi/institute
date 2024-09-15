<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\ClassModel;
use App\Models\Course; 
use App\Models\Designation;
use App\Models\Batch;
use App\Models\Student;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class TeacherController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Teacher-list|Teacher-create|Teacher-edit|Teacher-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Teacher-create', ['only' => ['create','store']]);
        $this->middleware('permission:Teacher-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Teacher-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $teachers = Teacher::all();
        return view('backend.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $batches = Batch::all();
        $courses = Course::all();
        $designations = Designation::all();
        return view('backend.teachers.create', compact('courses', 'designations','batches'));
    }

    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'father_name' => 'nullable|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'password' => 'nullable|string|min:8', // Ensure password is provided or make it required
        //     'phone' => 'required|string|max:20',
        //     'gender' => 'nullable|string|in:male,female',
        //     'dob' => 'nullable|date',
        //     'image' => 'nullable|image|max:2048',
        //     'doc_file' => 'nullable|file|mimes:pdf|max:2048',
        //     'address' => 'nullable|string',
        //     'course_id' => 'required|exists:courses,id', // Ensure course_id exists
        //     'batch_id' => 'required|exists:batches,id', // Ensure batch_id exists
        //     'qualification' => 'nullable|string',
        //     'experience' => 'nullable|integer',
        //     'date_of_join' => 'nullable|date',
        //     'designation_id' => 'nullable|exists:designations,id', // Ensure designation_id exists
        // ]);
    
        // Handle file upload if an image is provided
        $imagePath = null;
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/teachers/profile'), $fileName);
            $imagePath = 'uploads/teachers/profile/' . $fileName;
        }
    
        // Handle Documents upload if a file is provided
        $docFilePath = null;
        if ($request->hasFile('doc_file')) {
            $docFile = time().'.'.$request->doc_file->extension();  
            $request->doc_file->move(public_path('uploads/teachers/documents'), $docFile);
            $docFilePath = 'uploads/teachers/documents/' . $docFile;
        }
    
        // Insert into users table
        $user = User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => $request->password ? Hash::make($request->password) : null, 
            'role_id' => 17, 
        ]);
    
        // dd($user);
        // Insert into teachers table
        Teacher::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'father_name' => $request->father_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'course_id' => $request->course_id,
            'batch_id' => $request->batch_id,
            'qualification' => $request->qualification,
            'experience' => $request->experience,
            'date_of_join' => $request->date_of_join,
            'designation_id' => $request->designation_id,
            'image' => $imagePath,
            'doc_file' => $docFilePath,
        ]);
    
        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
    }
    

    // public function show(Teacher $teacher)
    // {
    //     return view('backend.teachers.t_profile', compact('teacher'));
    // }
    public function show($id)
    {
        $teacher = Teacher::with('course')->findOrFail($id);
        return view('backend.teachers.t_profile', compact('teacher'));
    }
    public function edit(Teacher $teacher)
    {
        $classes = ClassModel::all();
        $batches = Batch::all();
        $courses = Course::all();
        $designations = Designation::all();
        return view('backend.teachers.edit', compact('teacher', 'classes', 'courses', 'designations', 'batches'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:teachers,email,' . $teacher->id,
            'phone' => 'required|string|max:20',
            'gender' => 'nullable|string|in:male,female',
            'dob' => 'nullable|date',
            'image' => 'nullable|image|max:2048',
            'address' => 'nullable|string',
            'course_id' => 'required',
            'batch_id' => 'required',
            'qualification' => 'nullable|string',
            'experience' => 'nullable|integer',
            'date_of_join' => 'nullable|date',
            'designation' => 'nullable|string',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/teachers/profile'), $fileName);
            $validated['image'] = 'uploads/teachers/profile/' . $fileName;
        }

        // Handle Documents upload if an image is provided
        if ($request->hasFile('documents')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->documents->move(public_path('uploads/teachers/documents'), $fileName);
            $validated['documents'] = 'uploads/teachers/documents' . $fileName;
            }

              // Dump validated data before saving
        // dd($validated);


        $teacher->update($request->all());
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }

}