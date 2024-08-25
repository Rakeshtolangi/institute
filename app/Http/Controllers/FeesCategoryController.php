<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Batch;
use App\Models\FeesCategory;

class FeesCategoryController extends Controller
{
    public function index()
    {
        $feesCategories = FeesCategory::all();
        return view('backend.feecategories.index', compact('feesCategories'));
        // return view('backend.feecategories.test');
    }

    public function create()
    {
        return view('backend.feecategories.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);
        
        FeesCategory::create($validated);
        return redirect()->route('fees-categories.index')->with('success', 'Fees Category created successfully.');
    }

    public function show(FeesCategory $feesCategory)
    {
        return view('backend.feecategories.show', compact('feesCategory'));
    }

    public function edit(FeesCategory $feesCategory)
    {
        return view('backend.feecategories.edit', compact('feesCategory'));
    }

    public function update(Request $request, FeesCategory $feesCategory)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $feesCategory->update($request->all());
        return redirect()->route('fees-categories.index')->with('success', 'Fees Category updated successfully.');
    }

    public function destroy(FeesCategory $feesCategory)
    {
        $feesCategory->delete();
        return redirect()->route('fees-categories.index')->with('success', 'Fees Category deleted successfully.');
    }
}