@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Enquiry</h3>
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
                        <h4 class="card-title">Student Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('enquiries.store') }}" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{ old('name') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control"
                                        value="{{ old('father_name') }}">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="{{ old('dob') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{ old('email') }}">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="mobile">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        value="{{ old('mobile') }}">
                                </div>

                                <div class="col-md-6">
                                    <label for="preferred_time">Preferred Time</label>
                                    <input type="time" name="preferred_time" id="preferred_time" class="form-control"
                                        value="{{ old('preferred_time') }}">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="course_id">Select Course</label>
                                    <select name="course_id" id="course_id" class="form-control">
                                        <!-- @foreach ($courses as $course)
                                        <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @endforeach -->
                                        <option value="1">1</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection