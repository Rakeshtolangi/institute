<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\ClassModel;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view('backend.courses.index', compact('courses'));
    }

    public function create()
    {
        return view('backend.courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'duration' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'fee' => 'required|numeric',
            'status' => 'required|boolean',
            'skill_level' => 'required|string|max:255',
            'description' => 'nullable|string',
            'outcome' => 'nullable|string',
        ]);

        Course::create($request->all());

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.courses.show', compact('course'));
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('backend.courses.edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image',
            'duration' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'fee' => 'required|numeric',
            'status' => 'required|boolean',
            'skill_level' => 'required|string|max:255',
            'description' => 'nullable|string',
            'outcome' => 'nullable|string',
        ]);

        $course = Course::findOrFail($id);
        $course->update($request->all());

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    public function destroy($id)
    {
        Course::destroy($id);
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}