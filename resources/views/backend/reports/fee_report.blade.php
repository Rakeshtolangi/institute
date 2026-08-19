@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Fee List</h3>
            <div class="float-right">
                <form method="GET" action="{{ route('reports.fee') }}">
                    <div class="row">
                        <div class="col-md-3">
                            <input type="date" name="from_date" class="form-control" value="{{ request('from_date') }}">
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="to_date" class="form-control" value="{{ request('to_date') }}">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Show</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row my-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Fee Report</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="fee-report-table" class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Mobile</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Course Fee</th>
                                        <th>Student Agreed Fee</th>
                                        <th>Paid Fee</th>
                                        <th>Due Fee</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($students as $key => $student)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>
                                            <a href="{{ route('students.show', $student->id) }}">
                                                {{ $student->name }}
                                            </a>
                                        </td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->course->title ?? 'N/A' }}</td>
                                        <td>{{ $student->batch->title ?? 'N/A' }}</td>
                                        <td>{{ $student->course_fee }}</td>
                                        <td>{{ $student->student_fee }}</td>
                                        <td>{{ $student->paid_fee ?? 0 }}</td>
                                        <td>{{ $student->student_fee - ($student->paid_fee ?? 0) }}</td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="9" class="text-center">No data available in table</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5">Total</th>
                                        <th>{{ $totalCourseFee }}</th>
                                        <th>{{ $totalStudentFee }}</th>
                                        <th>{{ $totalPaidFee }}</th>
                                        <th>{{ $totalDueFee }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                            <!-- {{ $students->links() }} -->
                            <!-- Pagination links -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection