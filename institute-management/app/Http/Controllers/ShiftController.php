<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;
use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Course;  
USE App\Models\Category;

class ShiftController extends Controller
{
    public function index()
    {
        $shifts = Shift::all();
        return view('backend.shifts.index', compact('shifts'));
    }

    public function create()
    {
        return view('backend.shifts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        Shift::create($request->all());

        return redirect()->route('shifts.index')->with('success', 'Shift created successfully.');
    }

    public function show($id)
    {
        $shift = Shift::findOrFail($id);
        return view('backend.shifts.show', compact('shift'));
    }

    public function edit($id)
    {
        $shift = Shift::findOrFail($id);
        return view('backend.shifts.edit', compact('shift'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
        ]);

        $shift = Shift::findOrFail($id);
        $shift->update($request->all());

        return redirect()->route('shifts.index')->with('success', 'Shift updated successfully.');
    }

    public function destroy($id)
    {
        Shift::destroy($id);
        return redirect()->route('shifts.index')->with('success', 'Shift deleted successfully.');
    }
}