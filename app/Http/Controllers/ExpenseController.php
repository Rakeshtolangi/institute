<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Expense;
use App\Models\Designation;
use App\Models\Course;
use App\Models\Category;
use App\Models\Teacher;
use App\Models\Student;
use App\Models\ExpenseCategory;


class ExpenseController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Expense-list|Expense-create|Expense-edit|Expense-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Expense-create', ['only' => ['create','store']]);
        $this->middleware('permission:Expense-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Expense-delete', ['only' => ['destroy']]);
    }


    public function index()
    {
        $expenses = Expense::with('expenseCategory')->get();
        return view('backend.expenses.index', compact('expenses'));
    }

    public function create()
{
    $expenseCategories = ExpenseCategory::all();
    return view('backend.expenses.create', compact('expenseCategories'));
}

public function store(Request $request)
{
    // dd($request->all());
    $validated = $request->validate([
        'expense_date' => 'required|date',
        'title' => 'required|string|max:255',
        'expense_category_id' => 'required|exists:expense_categories,id',
        'amount' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        'description' => 'nullable|string',
    ]);

       if ($request->hasFile('image')) {
            $fileName = time().'.'.$request->image->extension();  
            $request->image->move(public_path('uploads/expenses'), $fileName);
            $validated['image'] = 'uploads/expeses/' . $fileName;
        }

    Expense::create($validated);

    return redirect()->route('expenses.index')->with('success', 'Expense added successfully!');
}

    public function show(Expense $expense)
    {
        return view('backend.expenses.show', compact('expense'));
    }

    public function edit(Expense $expense)
{
    $expenseCategories = ExpenseCategory::all();
    return view('backend.expenses.edit', compact('expense', 'expenseCategories'));
}

public function update(Request $request, Expense $expense)
{
    $validated = $request->validate([
        'expense_date' => 'required|date',
        'title' => 'required|string|max:255',
        'expense_category_id' => 'required|exists:expense_categories,id', // Validate and include the category ID
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