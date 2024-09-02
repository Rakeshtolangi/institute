@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Payroll</h3>
            <!-- <div class="float-right">
                <a href="{{ route('payrolls.index') }}" class="btn btn-primary">List Payrolls</a>
            </div> -->

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Payroll Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('payrolls.store') }}" method="POST">
                            @csrf

                            <div class="row g-3">
                                <!-- Select Designations -->
                                <div class="col-md-4">
                                    <label for="designations_id">Select Role</label>
                                    <select name="designations_id" id="designations_id" class="form-control" required>
                                        <option value="">-- Select Course --</option>
                                        @foreach($designations as $designation)
                                        <option value="{{ $designation->id }}">{{ $designation->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select Month -->
                                <div class="col-md-4">
                                    <label for="month">Select Month</label>
                                    <select name="month" id="month" class="form-control" required>
                                        <option value="">-- Select Month --</option>
                                        @foreach(range(1, 12) as $month)
                                        <option value="{{ $month }}">
                                            {{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <!-- Select Year -->
                                <div class="col-md-4">
                                    <label for="year">Select Year</label>
                                    <select name="year" id="year" class="form-control" required>
                                        <option value="">-- Select Year --</option>
                                        @foreach(range(date('Y') - 10, date('Y')) as $year)
                                        <option value="{{ $year }}">{{ $year }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Generate Payroll</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection