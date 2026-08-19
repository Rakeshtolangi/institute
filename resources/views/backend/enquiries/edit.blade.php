@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Student</h3>
            <!-- alert edit message   -->
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

                        <form action="{{ route('enquiries.update', $enquiry->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{$enquiry->name}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control"
                                        value="{{$enquiry->father_name}}">
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="{{$enquiry->dob}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{$enquiry->email}}">
                                </div>

                            </div>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for=" mobile">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        value="{{$enquiry->mobile}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male" {{ $enquiry->gender == 'male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $enquiry->gender == 'female' ? 'selected' : '' }}>
                                            Female</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="course_id">Course</label>
                                    <select name="course_id" id="course_id" class="form-control">
                                        <!-- @foreach ($courses as $course)
                                            <option value="{{ $course->id }}"
                                                {{ (old('course_id') ?? $enquiry->course_id ?? '') == $course->id ? 'selected' : '' }}>
                                                {{ $course->name }}
                                            </option>
                                            @endforeach -->
                                        <option value="1" {{ $enquiry->category_id == '1' ? 'selected' : '' }}>
                                            1
                                        </option>
                                        <option value="2" {{ $enquiry->category_id == '2' ? 'selected' : '' }}>
                                            2
                                        </option>
                                    </select>
                                </div>

                                <!-- <div class="form-group">
                                        <label for="batch_id">Batch</label>
                                    </div> -->

                                <div class="col-md-6">
                                    <label for="course_fee">Course Fee</label>
                                    <input type="number" name="course_fee" id="course_fee" class="form-control"
                                        value="{{$enquiry->course_fee}}">
                                </div>

                            </div>

                            <div class="row g-3">
                                <div class="col-md-5">
                                    <label for="student_fee">Student Fee</label>
                                    <input type="number" name="student_fee" id="student_fee" class="form-control"
                                        value="{{$enquiry->student_fee}}">
                                </div>
                            </div>
                            <input type="text" value="1" name="batch_id">

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection