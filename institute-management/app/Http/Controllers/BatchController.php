<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Batch;
USE App\Models\Student;
USE App\Models\Course;
USE App\Models\Category;


class BatchController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:batch-list|batch-create|batch-edit|batch-delete', ['only' => ['index','show']]);
        $this->middleware('permission:batch-create', ['only' => ['create','store']]);
        $this->middleware('permission:batch-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:batch-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batch::all();
        return view('backend.batches.index', compact('batches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        // dd($request->all());
         $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);
        // dd($validated) ->all();
        Batch::create($request->all());

        return redirect()->route('batches.index')->with('success', 'Batch created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $batch = Batch::findOrFail($id);
        return view('backend.batches.show', compact('batch'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $batch = Batch::findOrFail($id);
        return view('backend.batches.edit', compact('batch'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        $request->validate([
            'title' => 'required|string|max:255',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $batch = Batch::findOrFail($id);
        $batch->update($request->all());

        return redirect()->route('batches.index')->with('success', 'Batch updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Batch::destroy($id);
        return redirect()->route('batches.index')->with('success', 'Batch deleted successfully.');
   
    }
}