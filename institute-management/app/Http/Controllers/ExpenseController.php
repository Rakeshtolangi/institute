<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense; // Ensure you use the correct model

class ExpenseCategoryController extends Controller
{
    public function index()
    {
        $expenseCategories = ExpenseCategory::all();
        return view('backend.expense_categories.index', compact('expenseCategories'));
    }

    public function create()
    {
        return view('backend.expense_categories.create'); // Ensure the path matches the view file
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        ExpenseCategory::create($validated);

        return redirect()->route('expense-categories.index')->with('success', 'Expense Category added successfully!');
    }

    public function show(ExpenseCategory $expenseCategory) // Changed from Expense to ExpenseCategory
    {
        return view('backend.expense_categories.show', compact('expenseCategory')); // Ensure the path matches the view file
    }

    public function edit(ExpenseCategory $expenseCategory)
    {
        return view('backend.expense_categories.edit', compact('expenseCategory')); // Changed view path to edit
    }

    public function update(Request $request, ExpenseCategory $expenseCategory)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
        ]);

        $expenseCategory->update($validated);

        return redirect()->route('expense-categories.index')->with('success', 'Expense Category updated successfully!');
    }

    public function destroy(ExpenseCategory $expenseCategory)
    {
        $expenseCategory->delete();

        return redirect()->route('expense-categories.index')->with('success', 'Expense Category deleted successfully!');
    }
}
