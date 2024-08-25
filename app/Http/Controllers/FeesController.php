<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Batch;
use App\Models\Fee;
use App\Models\FeesCategory;
use Illuminate\Support\Str;

class FeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $fees = Fee::all();
        $courses = Course::all();
        $batches = Batch::all();

        // handle filtering by course and batch
        $selectedCourse = $request->course_id;
        $selectedBatch = $request->batch_id;
        $search = $request->input('search');

        $query = Student::query();

        if ($selectedCourse){
            $query->where('course_id', $selectedCourse);
        }

        if ($selectedBatch){
            $query->where('batch_id', $selectedBatch);
        }

        $students = $query->get();

        return view('backend.fees.index', compact('courses','batches', 'students', 'selectedCourse', 'selectedBatch','fees'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
{

    // $reciept_no = $this->generateUniqueId();
    // $batches = Batch::all(); // Fetch all batches
    // $student = Student::findOrFail($request->id);
    // dd($student);
    // return view('backend.fees.create', compact('reciept_no', 'batches','student'));
}


public function addPayment($id)
{
    $reciept_no = $this->generateUniqueId();
    $batches = Batch::all(); // Fetch all batches
    $student = Student::findOrFail($id);
    $fee = Fee::findOrFail($student->id);
    // dd($student);
    return view('backend.fees.create', compact('fee','reciept_no', 'batches','student'));
}

    // Generate random unique number
    private function generateUniqueId()
{
    $date = date('Ymd');
    $randomString = Str::upper(Str::random(5)); // Generates a 5-character alphanumeric string
    return "IMS-{$date}-{$randomString}";
}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'receipt_no' => 'required|unique:fees',
            'fee_date' => 'required|date',
            'batch_id' => 'required|exists:batches,id',
            'due_fee' => 'required|numeric',
            'amount' => 'required|numeric',
            'remarks' => 'nullable|string',
            'student_fee' => 'required|numeric', 
        ]);

        // Create a new fee record
    Fee::create([
        'receipt_no' => $validated['receipt_no'],
        'fee_date' => $validated['fee_date'],
        'batch_id' => $validated['batch_id'],
        'due_fee' => $dueFee, // Use student_fee as due_fee
        'amount' => $validated['amount'],
        'remaining_fee' => $dueFee - $validated['amount'], // Calculate remaining fee
        'remarks' => $validated['remarks'],

        // case-1
        // 1000 = 1000
        // due_fee = student_fee
        // amount_pay = student_fee 
        //paid_amount = total_studnent_amount

        // case-2
        // 1000 - 4000 = 6000 -> deu_fee

        // amount = 4000
        // due_amount = student_fee - amount
        //  paid_amount = amount

        // amount = 3000 
        // paid_amount = deu_amount- amount
        // paid = amount

    

    ]);

        return redirect()->route('fees.index')->with('success', 'Fee record created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Fee $fee)
    {
        // return view('backend.fees.show', compact('fee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Fee $fee)
    {
        $batches = Batch::all();
        return view('backend.fees.edit', compact('fee', 'batches'));
    }

    public function update(Request $request, Fee $fee)
    {
        $validated = $request->validate([
            'fee_date' => 'required|date',
            'batch_id' => 'required|exists:batches,id',
            'due_fee' => 'required|numeric',
            'amount' => 'required|numeric',
            'remarks' => 'nullable|string',
        ]);

        $fee->update($validated);

        return redirect()->route('fees.index')->with('success', 'Fee record updated successfully.');
    }

    public function destroy(Fee $fee)
    {
        $fee->delete();
        return redirect()->route('fees.index')->with('success', 'Fee record deleted successfully.');
    }
}