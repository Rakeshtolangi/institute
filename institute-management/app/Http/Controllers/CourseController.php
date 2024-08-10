<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Category;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all courses with their associated categories
        $courses = Course::with('category')->get();
        return view('backend.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch all categories to populate the dropdown
        $categories = Category::all();
        return view('backend.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'duration' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'fee' => 'required|numeric',
            'status' => 'required|boolean',
            'skill_level' => 'required|string|max:100',
            'description' => 'required|string',
            'outcome' => 'required|string',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/courses'), $fileName);
            $validated['image'] = 'uploads/courses/' . $fileName;
        }

        // Create a new course
        Course::create($validated);

        return redirect()->route('courses.index')->with('success', 'Course created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        // Return the view with the specific course
        return view('backend.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        // Fetch all categories to populate the dropdown
        $categories = Category::all();
        return view('backend.courses.edit', compact('course', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        // Validate the request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'duration' => 'required|string|max:100',
            'type' => 'required|string|max:50',
            'fee' => 'required|numeric',
            'status' => 'required|boolean',
            'skill_level' => 'required|string|max:100',
            'description' => 'required|string',
            'outcome' => 'required|string',
        ]);

        // Handle file upload if an image is provided
        if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/courses'), $fileName);
            $validated['image'] = 'uploads/courses/' . $fileName;
        }

        // Update the course
        $course->update($validated);

        return redirect()->route('courses.index')->with('success', 'Course updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        // Delete the course
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Course deleted successfully.');
    }
}