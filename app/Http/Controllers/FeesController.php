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
    function __construct()
    {
        $this->middleware('auth');

        $this->middleware('permission:Fees-list|Fees-create|Fees-edit|Fees-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Fees-create', ['only' => ['create','store']]);
        $this->middleware('permission:Fees-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Fees-delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
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

        return view('backend.fees.index', compact('courses','batches', 'students', 'selectedCourse', 'selectedBatch'));
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
    $student = Student::findOrFail($id);
    $fee = $student->fees()->latest()->first(); // Adjust as needed to get the correct fee

    // dd($fee);
    return view('backend.fees.create', compact('reciept_no', 'student','fee'));
}

    // Generate random unique number
    private function generateUniqueId()
{
    $date = date('Ymd');
    $randomString = Str::upper(Str::random(5)); // Generates a 5-character alphanumeric string
    return "IMS-{$date}-{$randomString}";
}
public function storePayment($id){

}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'receipt_no' => 'required',
            'fee_date' => 'required',
            'student_id' => 'required',
            'course_id' => 'required',
            'shift_id' => 'required',
            'batch_id' => 'required',
            'amount' => 'required|numeric|min:0',
            'remarks' => 'nullable',
        ]);
    
        // Find the existing fee record for the student
        $fee = Fee::where('student_id', $request->student_id)->latest()->first();
        $paid_amount = 0;

        if (!$fee) {
            // First payment scenario, calculate due amount from the total student fee
            $student_fee = $request->student_fee; // Assuming $request->student_fee is passed correctly
            $due_amount = max(0, $student_fee - $request->amount);
            $paid_amount = $paid_amount + $request->amount; 
        } else {
            // Subsequent payment scenario, calculate due amount from the remaining due fee
            $due_amount = max(0, $fee->due_fee - $request->amount);
            $paid_amount = $fee->paid_amount + $request->amount; 

        }
    
        // Create the new fee record
        Fee::create([
            'student_id' => $validated['student_id'],
            'receipt_no' => $validated['receipt_no'],
            'fee_date' => $validated['fee_date'],
            'batch_id' => $request->batch_id,
            'amount' => $validated['amount'],
            'paid_amount' => $paid_amount, // Store the updated paid amount
            'due_fee' => $due_amount, // Store the updated due amount
            'remarks' => $validated['remarks'],
            'course_id' => $request->course_id,
            'shift_id' => $request->shift_id,
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