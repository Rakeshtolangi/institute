<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Course;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $enquiries = Enquiry::with('course')->get();
        return view('backend.enquiries.index', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $courses = Course::all();
        return view('backend.enquiries.enquiry', compact('courses'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $validated = $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'preferred_time' => 'required|string|max:10',
            'course_id' => 'required',
        ]);

        Enquiry::create($validated);

        return redirect()->route('enquiries.index')->with('success', 'Enquries added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('backend.enquiries.show', compact('enquiry'));
  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('backend.enquiries.edit', compact('enquiry'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email',
            'mobile' => 'required|string|max:15',
            'preferred_time' => 'required|string|max:255',
            'course_id' => 'required|exists:courses,id',
        ]);

        $enquiry = Enquiry::findOrFail($id);
        $enquiry->update($request->all());

        return redirect()->route('enquiries.index')->with('success', 'Enquiry updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Enquiry::destroy($id);
        return redirect()->route('enquiries.index')->with('success', 'Enquiry deleted successfully.');
   
    }
}