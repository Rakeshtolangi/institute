<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Batch;
use App\Models\ClassModel;
use App\Models\Course;  
use App\Models\Teacher;  


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $totalStudents = Student::count();
        $totalCourses = Course::count();
        $totalBatches = Batch::count();
        $totalTeachers = Teacher::count();
        return view('backend.dashboard', compact('totalStudents' , 'totalCourses','totalBatches','totalTeachers'));
    }
}