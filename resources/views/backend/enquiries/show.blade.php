@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Enquiry Details</h3>
            <!-- alert edit message -->
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
                        <h4 class="card-title">Details of {{ $enquiry->name }}</h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> {{ $enquiry->name }}</p>
                        <p><strong>Father's Name:</strong> {{ $enquiry->father_name }}</p>
                        <p><strong>Date of Birth:</strong> {{ $enquiry->dob }}</p>
                        <p><strong>Email:</strong> {{ $enquiry->email }}</p>
                        <p><strong>Mobile:</strong> {{ $enquiry->mobile }}</p>
                        <p><strong>Preferred Time:</strong> {{ $enquiry->preferred_time }}</p>
                        <p><strong>Course:</strong> {{ $enquiry->course->title }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection