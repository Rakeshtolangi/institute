<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ExpenseCategory;
use App\Models\Course;  
use App\Models\Teacher;
use App\Models\ClassModel;
USE App\Models\Category;
USE App\Models\Student;

class ExpenseCategoryController extends Controller
{
    function __construct()
    {
        $this->middleware('permission:ExpenseCategory-list|ExpenseCategory-create|ExpenseCategory-edit|ExpenseCategory-delete', ['only' => ['index','show']]);
        $this->middleware('permission:ExpenseCategory-create', ['only' => ['create','store']]);
        $this->middleware('permission:ExpenseCategory-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:ExpenseCategory-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('backend.expenseCategories.index', compact('expenseCategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // No need to pass all categories to the create view
        return view('backend.expenseCategories.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'expense_category_id' => 'required',
        ]);
        ExpenseCategory::create($validated);
        return redirect()->route('expense-categories.index')->with('success', 'Expense Category created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(ExpenseCategory $expenseCategory)
    {
        return view('backend.expenseCategories.show', compact('expenseCategory'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('backend.expenseCategories.edit', compact('expenseCategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $expenseCategory->update($validated);

        return redirect()->route('expense-categories.index')->with('success', 'Expense Category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();

        return redirect()->route('expense-categories.index')->with('success', 'Expense Category deleted successfully.');
    }
}