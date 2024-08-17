<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ShiftController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\AttandanceController;
use App\Http\Controllers\ExpenseCategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });


// ExpenseCategoryController



Route::resource('students', StudentController::class);
Route::resource('teachers', TeacherController::class);
Route::resource('courses', CourseController::class);
Route::resource('classes', ClassController::class);
Route::resource('shifts', ShiftController::class);
Route::resource('batches', BatchController::class);
Route::resource('enquiries', EnquiryController::class);
Route::resource('categories', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('designations', DesignationController::class);

Route::resource('expense-categories',ExpenseCategoryController::class);

// Make a custom route for students

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// custom routes are here
Route::get('/attendance', [AttandanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance', [AttandanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/report', [AttandanceController::class, 'report'])->name('attendance.report');

Route::get('/reports/fee', [StudentController::class, 'feeReport'])->name('reports.fee');