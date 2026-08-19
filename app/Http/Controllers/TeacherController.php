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
    $request->validate([
        'name' => 'required|string|max:255',
        'father_name' => 'nullable|string|max:255',
        'email' => 'required|email|unique:users,email',
        'password' => 'nullable|string|min:8',
        'phone' => 'required|string|max:20',
        'gender' => 'nullable|string|in:male,female',
        'dob' => 'nullable|date',
        'image' => 'nullable|image|max:2048',
        'doc_file' => 'nullable|file|mimes:pdf|max:2048',
        'address' => 'nullable|string',
        'course_id' => 'required|exists:courses,id',
        'batch_id' => 'required|exists:batches,id',
        'qualification' => 'nullable|string',
        'experience' => 'nullable|integer',
        'date_of_join' => 'nullable|date',
        'designation_id' => 'nullable|exists:designations,id',
    ]);

    $data = $request->all();

    // Handle image upload
    if ($request->hasFile('image')) {
        $fileName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('uploads/teachers/profile'), $fileName);
        $data['image'] = 'uploads/teachers/profile/' . $fileName;
    }

    // Handle document upload
    if ($request->hasFile('doc_file')) {
        $docName = time().'.'.$request->doc_file->extension();  
        $request->doc_file->move(public_path('uploads/teachers/documents'), $docName);
        $data['doc_file'] = 'uploads/teachers/documents/' . $docName;
    }

    // Create user
    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => $request->password ? Hash::make($request->password) : null,
        'role_id' => 17,
    ]);

    // Attach user_id to teacher
    $data['user_id'] = $user->id;

    // Create teacher
    Teacher::create($data);

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
            'designation_id' => 'nullable|exists:designations,id',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/teachers/profile'), $fileName);
            $validated['image'] = 'uploads/teachers/profile/' . $fileName;
        }

        // Handle doc_file upload if an image is provided
        if ($request->hasFile('doc_file')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->doc_file->move(public_path('uploads/teachers/doc_file'), $fileName);
            $validated['doc_file'] = 'uploads/teachers/doc_file' . $fileName;
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