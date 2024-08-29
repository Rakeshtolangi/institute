<?php

namespace App\Http\Controllers;

use App\Models\payrolls;
use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Designation;

class PayrollController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Payroll-list|Payroll-create|Payroll-edit|Payroll-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Payroll-create', ['only' => ['create','store']]);
        $this->middleware('permission:Payroll-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Payroll-delete', ['only' => ['destroy']]);
    }


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