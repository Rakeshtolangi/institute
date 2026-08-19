<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Shift;
use App\Models\Batch;
use App\Models\Student;

class ClassController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Class-list|Class-create|Class-edit|Class-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Class-create', ['only' => ['create','store']]);
        $this->middleware('permission:Class-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Class-delete', ['only' => ['destroy']]);
    }

    public function index()
    {
        $classes = ClassModel::with(['course', 'teachers', 'shift', 'batch'])->get();
        return view('backend.classes.index', compact('classes'));
    }

    public function create()
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $shifts = Shift::all();
        $batches = Batch::all();
        return view('backend.classes.create', compact('courses', 'teachers', 'shifts', 'batches'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'required|array',
            'shift_id' => 'required|exists:shifts,id',
            'batch_id' => 'required|exists:batches,id',
        ]);

        $class = ClassModel::create($validated);
        $class->teachers()->sync($request->teacher_id);

        return redirect()->route('classes.index')->with('success', 'Class created successfully!');
    }

    public function show(ClassModel $class)
    {
        return view('backend.classes.show', compact('class'));
    }

    public function edit(ClassModel $class)
    {
        $courses = Course::all();
        $teachers = Teacher::all();
        $shifts = Shift::all();
        $batches = Batch::all();
        return view('backend.classes.edit', compact('class', 'courses', 'teachers', 'shifts', 'batches'));
    }

    public function update(Request $request, ClassModel $class)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
            'teacher_id' => 'required|array',
            'shift_id' => 'required|exists:shifts,id',
            'batch_id' => 'required|exists:batches,id',
        ]);

        $class->update($validated);
        $class->teachers()->sync($request->teacher_id);

        return redirect()->route('classes.index')->with('success', 'Class updated successfully!');
    }

    public function destroy(ClassModel $class)
    {
        $class->delete();
        return redirect()->route('classes.index')->with('success', 'Class deleted successfully!');
    }
}