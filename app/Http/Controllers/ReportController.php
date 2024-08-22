<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fee; // Assuming you have a Fee model

class ReportController extends Controller
{
    public function feeList(Request $request)
    {
        // Get filter inputs
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $search = $request->input('search');
        $entries = $request->input('entries', 10); // Default to 10 entries per page

        // Query to fetch fee data based on filters
        $fees = Fee::whereBetween('created_at', [$fromDate, $toDate])
                    ->when($search, function ($query, $search) {
                        return $query->where('name', 'like', "%{$search}%")
                                     ->orWhere('mobile', 'like', "%{$search}%");
                    })
                    ->get(); // Retrieve all results without pagination

        // Calculate totals
        $totalCourseFee = $fees->sum('course_fee');
        $totalAgreedFee = $fees->sum('agreed_fee');
        $totalPaidFee = $fees->sum('paid_fee');
        $totalDueFee = $fees->sum('due_fee');

        return view('backend.reports.fee_list', [
            'fees' => $fees,
            'fromDate' => $fromDate,
            'toDate' => $toDate,
            'totalCourseFee' => $totalCourseFee,
            'totalAgreedFee' => $totalAgreedFee,
            'totalPaidFee' => $totalPaidFee,
            'totalDueFee' => $totalDueFee,
        ]);
    }
}
