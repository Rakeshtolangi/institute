<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;
use App\Models\Attandance;
use App\Models\Batch;
use Illuminate\Http\Log;
class AttandanceController extends Controller
{
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

        // if ($search){
        //     $query->where('name', 'LIKE', "%{$search}%");
        // }

        $students = $query->get();

        return view('backend.attandance.index', compact('courses','batches', 'students', 'selectedCourse', 'selectedBatch'));
    }
    public function store(Request $request){
        // dd($request->all());
        $data = $request->validate([
            'student_id' => 'required',
            'status'    => 'required',
            'batch_id' => 'required',
            'course_id' => 'required',
        ]);
    
        // Process attendance
        foreach($data['student_id'] as $key => $studentId){
            Attandance::create([
                'student_id' => $studentId,
                'batch_id' => $data['batch_id'],
                'course_id' => $data['course_id'],
                'status'    => $data['status'][$key],
            ]);
        }
    
        return redirect()->back()->with('success','Attendance recorded successfully.');
    }
    


    // report generating
    public function report(Request $request)
    {
        // Set the start and end date of the report
        $startDate = $request->input('start_date', Carbon::now()->startOfMonth()->format('Y-m-d'));
        $endDate = $request->input('end_date', Carbon::now()->endOfMonth()->format('Y-m-d'));

        // Get the list of students
        $students = Student::all();

        // Fetch attendance records for the specified date range
        $attendances = Attendance::whereBetween('date', [$startDate, $endDate])->get();

        // Prepare data for the report
        $report = [];
        foreach ($students as $student) {
            $studentData = ['name' => $student->name];
            for ($date = Carbon::parse($startDate); $date <= Carbon::parse($endDate); $date->addDay()) {
                $attendance = $attendances->where('student_id', $student->id)
                                          ->where('date', $date->format('Y-m-d'))
                                          ->first();

                $studentData[$date->format('d')] = $attendance->status ?? '-';
            }
            $report[] = $studentData;
        }

        return view('attendance.report', compact('report', 'startDate', 'endDate'));
    }
}