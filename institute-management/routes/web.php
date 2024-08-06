<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\BatchController;


// Route::get('/', function () {
//     return view('welcome');
// });



Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('classes', ClassController::class);
Route::resource('shifts', ShiftController::class);
Route::resource('batches', BatchController::class);

// Make a custom route for students

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('enquiry', [StudentController::class, 'showEnquiryForm'])->name('students.enquiry');
// Route::post('enquiry', [StudentController::class, 'submitEnquiry'])->name('students.submitEnquiry');
// Route::get('enquiries', [StudentController::class, 'listEnquiries'])->name('students.listEnquiries');