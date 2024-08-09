@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Student Enquiries</h3>
            <div class="float-right">
                <a href="{{ route('enquiries.create') }}" class="btn btn-primary">Add Enquiry</a>
            </div>


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
                        <h4 class="card-title">List of Enquiries</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <!-- <th>S.N.</th>  need to be set up here-->
                                    <th>Name</th>
                                    <th>Father's Name</th>
                                    <th>Date of Birth</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Preferred Time</th>
                                    <th>Course</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiries as $enquiry)
                                <tr>
                                    <td>{{ $enquiry->name }}</td>
                                    <td>{{ $enquiry->father_name }}</td>
                                    <td>{{ $enquiry->dob }}</td>
                                    <td>{{ $enquiry->email }}</td>
                                    <td>{{ $enquiry->mobile }}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($enquiry->preferred_time)->format('h:i A') }}
                                    </td>
                                    <td>{{ $enquiry->course->name ?? "" }}</td>
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