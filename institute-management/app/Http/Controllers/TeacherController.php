<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Teacher;
use App\Models\ClassModel;
use App\Models\Course;  


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
        return view('backend.teachers.create', compact('classes', 'courses'));
        
    }

    public function store(Request $request)
    {
        
       $validated = $request->validate([
        // adding if data is being recieved correctly.

        'name'=> 'required',
        'email'=>'required',
        'phone'=>'required',
        
        // 'subject_id',

        
       ]);

       dd($validated);

       Teacher::create($validated);

       return redirect()->route('teachers.index')->with('success', 'Teacher added successfully');
       
    }


    
    public function show(Teacher $teacher)
    {
     return view('teachers.show', compact('teacher'));
    }


    
    public function edit(Teacher $teacher)
    {
        $classes = ClassModel::all();
        $courses = Course::all();
        return view('backend.teachers.edit', compact('teacher', 'classes','courses'));
    }

    public function update(Request $request, Teacher $teacher)
    {

         // Check the request data
    dd($request->all());

    
        $validated = $request->validate([
            'name'=> 'required',
            'email'=>'required',
            'phone'=>'required',
            // 'subject_id',
        ]);

            $teacher->update($validated);

            return redirect()->route('teachers.index')->with('success','student updated successfully!');
            
            
    }

    public function destroy(Teacher $teacher)
    {
       $teacher->delete();
       return redirect()->route('teachers.index')->with('success','Teacher deleted successfully');
       
    }
}