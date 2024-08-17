<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Course;  
use App\Models\Category;
use App\Models\Batch;



class StudentController extends Controller
{
    public function index()
    
    {
        $students = Student::latest()->get();
        return view('backend.students.index', compact('students'));

    }

    public function create()
    {
        // $classes = ClassModel::all();
        $courses = Course::all();
        $batches = Batch::all();

 
        return view('backend.students.create', compact('courses','batches'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validated = $request->validate([
            //adding this to check if data is being received correctly
    
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'gender' => 'required|in:male,female',
             'course_id' => 'required',
            'batch_id' => 'required',

            'course_fee' => 'required',
            'student_fee' => 'required',
        ]); 
        // dd($validated);

        Student::create($validated);

        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }


    
    public function show(Student $student)
    {  
        return view('backend.students.show', compact('student'));
    }


    
    public function edit(Student $student)
    {
        
        // $classes = ClassModel::all();
        $courses = Course::all();
        $batches = Batch::all();
        return view('backend.students.edit', compact('student', 'batches', 'courses'));
    }

    public function update(Request $request, Student $student)
    {
        $validated = $request->validate([
            //adding this to check if data is being received correctly
    
            'name' => 'required|string|max:255',
            'father_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'email' => 'required|email|max:255',
            'mobile' => 'required|string|max:15',
            'gender' => 'required|in:male,female',
            'course_id' => 'required',
            'batch_id' => 'required',
            'course_fee' => 'required',
            'student_fee' => 'required',
        ]);
       
        
        $student->update($validated);

        return redirect()->route('students.index')->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }

//   report generating model in studentmodel
public function feeReport(Request $request)
{
    $query = Student::query();

    // Filter by date range if provided
    if ($request->has('from_date') && $request->has('to_date')) {
        $query->whereBetween('created_at', [$request->from_date, $request->to_date]);
    }

    // Get the list of students along with their related batch and course information
    $students = $query->with(['course', 'batch']);

    // Calculate the totals
    $totalCourseFee = $students->sum('course_fee');
    $totalStudentFee = $students->sum('student_fee');
    $totalPaidFee = $students->sum('paid_fee');  // Assuming you have a `paid_fee` column
    $totalDueFee = $totalStudentFee - $totalPaidFee;

    return view('backend.reports.fee_report', compact(
        'students', 'totalCourseFee', 'totalStudentFee', 'totalPaidFee', 'totalDueFee'
    ));
}

    
// enquiry form student model
    
// public function showEnquiryForm()
// {
//     $courses = Course::all();
//     return view('backend.students.enquiry', compact('courses'));
// }

// public function submitEnquiry(Request $request)
// {
//     $validatedData = $request->validate([
//         'name' => 'required',
//         'father_name' => 'require',
//         'dob' => 'required|date',
//         'email' => 'required',
//         'mobile' => 'required',
//         'preferred_time' => 'required',
//         'course_id' => 'required',
//     ]);

//     // Create a new enquiry or student record
//     Student::create($validatedData);

//     return redirect()->route('students.enquiry')->with('success', 'Enquiry submitted successfully!');
// }

// public function listEnquiries()
// {
//     $enquiries = Student::with('course')->get();
//     return view('backend.students.enquiries', compact('enquiries'));
// }
}