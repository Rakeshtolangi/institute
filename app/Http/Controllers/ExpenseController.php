<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Designation;
use App\Models\Course;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Student;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();
        return view('backend.expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('backend.expenses.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'expense_date' => 'required|date',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'file' => 'nullable|string', // Assuming file is a string (file path). Adjust as needed.
            'description' => 'nullable|string',
        ]);

        Expense::create($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense added successfully!');
    }

    public function show(Expense $expense)
    {
        return view('backend.expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
    {
        $categories = Category::all(); 
        return view('backend.expenses.edit', compact('expense'));
    }

    public function update(Request $request, Expense $expense)
    {
        $validated = $request->validate([
            'expense_date' => 'required|date',
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'amount' => 'required|numeric',
            'file' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $expense->update($validated);

        return redirect()->route('expenses.index')->with('success', 'Expense updated successfully!');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expenses.index')->with('success', 'Expense deleted successfully!');
    }
}
