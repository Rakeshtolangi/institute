<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassModel;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Shift;
use App\Models\Batch;
use App\Models\Student;
use App\Models\User;

use App\Models\Fee;
use Carbon\Carbon;
class FrontendController extends Controller
{
   
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {


        return view('frontend');
   }
}
