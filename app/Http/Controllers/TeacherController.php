<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\ClassModel;
use App\Models\Course; 
use App\Models\Designation;

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
        $courses = Course::all();
        $designations = Designation::all();
        return view('backend.teachers.create', compact('classes', 'courses', 'designations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        Teacher::create($validated);
        return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
    }

    public function show(Teacher $teacher)
    {
        return view('backend.teachers.profile', compact('teacher'));
    }

    public function edit(Teacher $teacher)
    {
        $classes = ClassModel::all();
        $courses = Course::all();
        $designations = Designation::all();
        return view('backend.teachers.edit', compact('teacher', 'classes', 'courses', 'designations'));
    }

    public function update(Request $request, Teacher $teacher)
    {
        $validated = $request->validate([
            'name'=> 'required',
            'email'=>'required|email',
            'phone'=>'required',
        ]);

        $teacher->update($validated);
        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully!');
    }

    public function destroy(Teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
