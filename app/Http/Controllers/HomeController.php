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
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
        $this->middleware('auth');
    }

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

        // user statics

          $users = User::selectRaw('COUNT(*) as count, DATE_FORMAT(created_at, "%Y-%m") as month')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        // Convert data to JSON format
        $userData = $users->map(function ($user) {
            return [
                'month' => Carbon::parse($user->month)->format('F Y'),
                'count' => $user->count,
            ];
        });

        $startOfMonth = Carbon::now()->startOfMonth();
        $currentDate = Carbon::now(); // Current date

        $startOfMonthFormatted = $startOfMonth->format('M j'); // e.g., September 1
        $currentDateFormatted = $currentDate->format('M j'); // e.g., September 13
        $totalEnrollStudents = Student::whereBetween('created_at', [$startOfMonth, $currentDate])->count();


         // Get today's date
            $today = Carbon::now();

            // Query for running courses
            $runningCourses = Course::where(function ($query) use ($today) {
                $query->where(function ($q) use ($today) {
                    // Courses with duration in 'days'
                    $q->where('type', 'days')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration DAY) >= ?", [$today]);
                })
                ->orWhere(function ($q) use ($today) {
                    // Courses with duration in 'weeks'
                    $q->where('type', 'weeks')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration WEEK) >= ?", [$today]);
                })
                ->orWhere(function ($q) use ($today) {
                    // Courses with duration in 'months'
                    $q->where('type', 'months')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration MONTH) >= ?", [$today]);
                });
            })->count();

            $completedCourses = Course::where(function ($query) use ($today) {
                $query->where(function ($q) use ($today) {
                    $q->where('type', 'days')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration DAY) < ?", [$today]);
                })
                ->orWhere(function ($q) use ($today) {
                    $q->where('type', 'weeks')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration WEEK) < ?", [$today]);
                })
                ->orWhere(function ($q) use ($today) {
                    $q->where('type', 'months')
                    ->whereRaw("DATE_ADD(created_at, INTERVAL duration MONTH) < ?", [$today]);
                });
            })->count();


            $latestStudents = Student::orderBy('created_at', 'desc')->take(5)->get();
            $latestFees = Fee::orderBy('created_at', 'desc')->take(7)->get();


        return view('backend.dashboard', compact('totalStudents', 'totalCourses', 'totalBatches', 'totalTeachers', 'userData', 'totalEnrollStudents', 'startOfMonthFormatted', 'currentDateFormatted','runningCourses','completedCourses','latestStudents','latestFees'));
   }
}
