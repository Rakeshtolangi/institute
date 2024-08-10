<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnquiryController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('classes', ClassController::class);
Route::resource('shifts', ShiftController::class);
Route::resource('batches', BatchController::class);
Route::resource('enquiries', EnquiryController::class);

// Make a custom route for students

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');