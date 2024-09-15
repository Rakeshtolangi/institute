<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\ClassModel;
use App\Models\Course;  
use App\Models\Category;
use App\Models\Batch;
use App\Models\Certificate;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Clegginabox\PDFMerger\PDFMerger;
use setasign\Fpdi\Fpdi;
class CertificateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $templates = Certificate::all();
        
        return view('backend.certificates.index', compact('templates'));

        
    }





    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.certificates.create');


    }

    public function studentList(){

       $students = Student::with('course','batch')->latest()->get();

        $studentsWithStatus = $students->map(function ($student) {
            $isCompleted = $student->course ? $student->course->isCompleted($student) : false;
            return [
                'student' => $student,
                'course_name' => $student->course->title ?? 'N/A',
                'batch_name' => $student->batch->title ?? 'N/A',
                'is_completed' => $isCompleted,
            ];
        });
        $templates = Certificate::all();
        
        return view('backend.certificates.student_certificate', compact('studentsWithStatus','templates'));
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'content' => 'required|string',
            ]);
    
            Certificate::create($validatedData);
    
            return redirect()->route('certificates.index')->with('success', 'Certificate template created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $template = Certificate::findOrFail($id);
        return view('backend.certificates.edit', compact('template'));
    }
    

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'content' => 'required|string',
        ]);
    
        $template = Certificate::findOrFail($id);
        $template->update($validatedData);
    
        return redirect()->route('certificates.index')->with('success', 'Certificate template updated successfully.');
    }
    
    public function destroy($id)
    {
        $template = Certificate::findOrFail($id);
        $template->delete();
    
        return redirect()->route('certificates.index')->with('success', 'Certificate template deleted successfully.');
    }


    
    public function generateCertificate(Request $request){

        
    }

    public function generateMultiple(Request $request)
    {
        // Validate the input
        $request->validate([
            'student_ids' => 'required|array',
            'certificate_template' => 'required|exists:certificates,id',
        ]);
    
        // Fetch students and certificate template
        $students = Student::whereIn('id', $request->student_ids)->get();
        $template = Certificate::findOrFail($request->certificate_template);
    
        // Prepare data for replacement
        $dataList = [];
        foreach ($students as $student) {
            $dataList[] = [
                '[STUDENT NAME]' => $student->name,
                '[COURSE NAME]' => $student->course->title,
                '[BATCH NAME]' => $student->batch->title,
                '[ISSUE DATE]' => date('Y-m-d'),
                '[DIRECTOR NAME]' => 'Prem Chand',
                '[INSTRUCTOR NAME]' => 'Instructor Name',
                '[INSTITUTE NAME]' => 'Everest Infosys',
                '[INSTITUTE EMAIL]' => 'info@everestinfosys.com.np',
                '[INSTITUTE ADDRESS]' => 'New Road, Birendranagar, Surkhet, Nepal',
                '[INSTITUTE PHONE]' => '+977-83-520243/+977-9858057957'
            ];
        }
    
        // Replace placeholders with actual data for each student
        $certificates = [];
        foreach ($dataList as $data) {
            $content = $template->content;
            foreach ($data as $placeholder => $value) {
                $content = str_replace($placeholder, $value, $content);
            }
            $certificates[] = $content;
        }
    
        // Pass the content to the Blade view
        return view('certificate', ['certificates' => $certificates]);
    }
    
  
}