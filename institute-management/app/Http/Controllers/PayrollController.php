<?php

namespace App\Http\Controllers;

use App\Models\Payroll;
use App\Models\User;
use App\Models\Course;
use App\Models\Teacher;
use App\Models\Fee;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\Designation;
use Spatie\Permission\Models\Permission;
use DB;
use Illuminate\Support\Str;

class PayrollController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:Payroll-list|Payroll-create|Payroll-edit|Payroll-delete', ['only' => ['index','show']]);
        $this->middleware('permission:Payroll-create', ['only' => ['create','store']]);
        $this->middleware('permission:Payroll-edit', ['only' => ['edit','update']]);
        $this->middleware('permission:Payroll-delete', ['only' => ['destroy']]);
    }


    public function index(Request $request)
    {
            $roles = Role::all();

            $selectedRole = $request->role_id;
          
            session([
                'role_id' => $selectedRole,
               
            ]);

            $query = user::query();
            if ($selectedRole){
                $query->where('role_id', $selectedRole);
            }
            $users = $query->get();

            return view('backend.payrolls.index', compact('users','roles'));
    }

    public function create(Request $request)
    {
        $reciept_no = $this->generateUniqueId();
        $userId = $request->id;
        
        $userDetails = User::findOrFail($userId);

        $courseIds = Teacher::where('user_id', $userId)->pluck('course_id');

        $courses = Course::whereIn('id', $courseIds)->get();
        $totalAmount = Fee::whereIn('course_id', $courseIds)->sum('amount');
        

        return view('backend.payrolls.create', compact('reciept_no','userDetails','courses','totalAmount'));

    }
    // Generate random unique number
    private function generateUniqueId()
{
    $date = date('Ymd');
    $randomString = Str::upper(Str::random(5)); 
    return "IMS-{$date}-{$randomString}";
}
    public function payrollForm(){

        return view('backend.payrolls.store');
    


    }
    public function show(){

     

    }

    public function payrollList($userId){

        $payrolls = Payroll::where('user_id', $userId)->get();
        $userDetails = User::findOrFail($userId);


        $courseIds = Teacher::where('user_id', $userId)->pluck('course_id');


        return view('backend.payrolls.show',compact('payrolls','userDetails'));

    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'receipt_no' => 'required|string|max:255',
            'date' => 'required|date',
            'type' => 'required|in:percentage,flat',
            'amount' => 'required|numeric',
            'remarks' => 'nullable|string',
            'user_id' => 'required|exists:users,id',
            'course_id' => 'required|exists:courses,id',
            'total_amount' => 'required|numeric',
        ]);
    
        $payrollAmount = 0;
        if ($validatedData['type'] === 'percentage') {
            $payrollAmount = ($validatedData['total_amount'] * $validatedData['amount']) / 100;
        } elseif ($validatedData['type'] === 'flat') {
            $payrollAmount = $validatedData['amount'];
        }
    
        Payroll::create([
            'receipt_no' => $validatedData['receipt_no'],
            'date' => $validatedData['date'],
            'type' => $validatedData['type'],
            'amount' => $payrollAmount,
            'remarks' => $validatedData['remarks'],
            'user_id' => $validatedData['user_id'],
            'courses_id' => $validatedData['course_id'],
            'total_amount' => $validatedData['total_amount'],
            
        ]);
    
        return redirect()->route('payrolls.index')->with('success', 'Payroll record created successfully');
    }
    

//     public function store(Request $request)
// {
//     $validatedData = $request->validate([
//         'receipt_no' => 'required|string|max:255',
//         'date' => 'required|date',
//         'type' => 'required|in:percentage,flat',
//         'amount' => 'required|numeric',
//         'remarks' => 'nullable|string',
//         'user_id' => 'required|exists:users,id',
//         'course_ids' => 'required|array',
//         'course_ids.*' => 'exists:courses,id',
//         'total_amount' => 'required|numeric',
//     ]);

//     // Calculate payroll amount
//     $payrollAmount = 0;
//     if ($validatedData['type'] === 'percentage') {
//         $payrollAmount = ($validatedData['total_amount'] * $validatedData['amount']) / 100;
//     } elseif ($validatedData['type'] === 'flat') {
//         $payrollAmount = $validatedData['amount'];
//     }

//     // Convert course IDs array to a comma-separated string
//     $courseIds = implode(',', $validatedData['course_ids']);

//     // Create payroll record
//     Payroll::create([
//         'receipt_no' => $validatedData['receipt_no'],
//         'date' => $validatedData['date'],
//         'type' => $validatedData['type'],
//         'amount' => $payrollAmount,
//         'remarks' => $validatedData['remarks'],
//         'user_id' => $validatedData['user_id'],
//         'course_id' => $courseIds, // Store as comma-separated string
//         'total_amount' => $validatedData['total_amount'],
//     ]);

//     return redirect()->route('payrolls.index')->with('success', 'Payroll record created successfully');
// }

}