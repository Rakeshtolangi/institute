<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ShiftController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('classes', ClassController::class);
Route::resource('shifts', ShiftController::class);

// Make a custom route for students

Route::get('students/getmarks', [StudentController::class,'getMarks']);
Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard/students/inquiry', [App\Http\Controllers\StudentController::class, 'showInquiryForm'])
        ->name('students.inquiry');