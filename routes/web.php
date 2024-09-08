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
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\FeesController;
use App\Http\Controllers\FeesCategoryController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;

Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');





Route::resource('students', StudentController::class);
Route::get('/students/{student}', [StudentController::class, 'show'])->name('students.show');
Route::post('/students/documents/{id}',[StudentController::class, 'uploadDocuments'])->name('students.uploadDocuments');
Route::resource('teachers', TeacherController::class);
Route::get('/teachers/{teacher}', [TeacherController::class, 'show'])->name('teachers.show');

Route::resource('courses', CourseController::class);
Route::resource('classes', ClassController::class);
Route::resource('shifts', ShiftController::class);
Route::resource('batches', BatchController::class);
Route::resource('enquiries', EnquiryController::class);
Route::resource('categories', CategoryController::class);
Route::resource('expenses', ExpenseController::class);
Route::resource('designations', DesignationController::class);

Route::resource('expense-categories',ExpenseCategoryController::class);
Route::resource('payrolls', PayrollController::class);
Route::resource('fees', FeesController::class);
Route::resource('fees-categories', FeesCategoryController::class);

Route::get('fees/student/add-payment/{id}',[FeesController::class, 'addPayment'])->name('fees.addpayment');
Route::get('fees/student/store-payment/{id}',[FeesController::class, 'storePayment'])->name('fees.storePayment');
// Make a custom route for students


// custom routes are here
Route::get('/attendance', [AttandanceController::class, 'index'])->name('attendance.index');
Route::post('/attendance', [AttandanceController::class, 'store'])->name('attendance.store');
Route::get('/attendance/report', [AttandanceController::class, 'report'])->name('attendance.report');

Route::get('/reports/fee', [StudentController::class, 'feeReport'])->name('reports.fee');

Route::resource('roles', RoleController::class);
Route::resource('permissions', PermissionController::class);

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
