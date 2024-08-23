<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\ClassModel;
use App\Models\Course; 
use App\Models\Designation;
use App\Models\Batch;
use App\Models\Student;

class TeacherController extends Controller
{
    public function index()
    {
        
        $teachers = Teacher::with('classModel')->get();
        return view('backend.teachers.index', compact('teachers'));
    }

    public function create()
    {
        $classes = ClassModel::all();
        $batches = Batch::all();
        $courses = Course::all();
        $designations = Designation::all();
        return view('backend.teachers.create', compact('classes', 'courses', 'designations','batches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'nullable|string|max:255',
            'email' => 'required|email|unique:teachers,email',
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
        $request->image->move(public_path('uploads/courses'), $fileName);
        $validated['image'] = 'uploads/courses/' . $fileName;
    }
 

        Teacher::create($validated);
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
        return view('backend.teachers.edit', compact('teacher', 'classes', 'courses', 'designations'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
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
            $request->image->move(public_path('uploads/courses'), $fileName);
            $validated['image'] = 'uploads/courses/' . $fileName;
        }

        $teacher->update($validated);
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
