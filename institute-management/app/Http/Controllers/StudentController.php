<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Course;  



class StudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classModel')->get();
        return view('backend.students.index', compact('students'));
    }

    public function create()
    {
        $classes = ClassModel::all();
        $courses = Course::all();
        return view('backend.students.create', compact('classes', 'courses'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            //adding this to check if data is being received correctly
    
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'gender' => 'required|in:male,female',
            // 'course_id' => 'required|exists:courses,id',
            'course_id' => 'required',

            'course_fee' => 'required',
            'student_fee' => 'required',
            // 'class_id' => 'required|exists:class_models,id',
        ]);
        // dd($validated);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        $classes = ClassModel::all();
        $courses = Course::all();
        return view('backend.students.edit', compact('student', 'classes', 'courses'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            //adding this to check if data is being received correctly
    
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'gender' => 'required|in:male,female',
            'course_id' => 'required',
            'course_fee' => 'required',
            'student_fee' => 'required',
        ]);
       
        
        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

    public function getMarks()
    {
        // Implement this method if needed
    }
}