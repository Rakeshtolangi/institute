<?php

namespace App\Http\Controllers;

use App\Models\payrolls;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Designation;

class PayrollController extends Controller
{
    public function create()
    {
        $designations = Designation::all();
        return view('backend.payrolls.create', compact('designations'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'role_id' => 'required|integer',
            'month' => 'required|integer|between:1,12',
            'year' => 'required|integer|min:2000|max:' . date('Y'),
        ]);

        Payroll::create($validated);

        return redirect()->route('payrolls.index')->with('success', 'Payroll generated successfully!');
    }
}