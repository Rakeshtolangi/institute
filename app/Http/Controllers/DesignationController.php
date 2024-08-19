<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
use App\Models\Course;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Student;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $designations = Designation::all();
        return view('backend.designations.index', compact('designations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.designations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        Designation::create($request->all());

        return redirect()->route('designations.index')->with('success', 'Designation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Designation $designation)
    {
        return view('backend.designations.show', compact('designation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Designation $designation)
    {
        dd($designation);
        $designations = Designation::findOrFail($designation);
        return view('backend.designations.index', compact('designation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Designation $designation)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $designation->update($request->all());

        return redirect()->route('designations.index')->with('success', 'Designation updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Designation $designation)
    {
        $designation->delete();

        return redirect()->route('designations.index')->with('success', 'Designation deleted successfully.');
    }
}