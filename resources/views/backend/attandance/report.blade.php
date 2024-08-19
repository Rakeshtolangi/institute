@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Attendance Report</h3>
        </div>

        <form method="GET" action="{{ route('attendance.report') }}">
            <div class="row">
                <div class="col-md-5">
                    <label for="start_date">Start Date</label>
                    <input type="date" name="start_date" class="form-control" value="{{ $startDate }}">
                </div>
                <div class="col-md-5">
                    <label for="end_date">End Date</label>
                    <input type="date" name="end_date" class="form-control" value="{{ $endDate }}">
                </div>
                <div class="col-md-2">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary form-control">Generate Report</button>
                </div>
            </div>
        </form>

        <div class="row mt-4">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Student</th>
                                    @for ($date = \Carbon\Carbon::parse($startDate); $date <=
                                        \Carbon\Carbon::parse($endDate); $date->addDay())
                                        <th>{{ $date->format('d') }}</th>
                                        @endfor
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($report as $studentData)
                                <tr>
                                    <td>{{ $studentData['name'] }}</td>
                                    @for ($date = \Carbon\Carbon::parse($startDate); $date <=
                                        \Carbon\Carbon::parse($endDate); $date->addDay())
                                        <td>{{ $studentData[$date->format('d')] }}</td>
                                        @endfor
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection