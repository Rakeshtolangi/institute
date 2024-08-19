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

                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="{{$student->name}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control"
                                        value="{{$student->father_name}}">
                                </div>
                          
                                <div class="col-md-6">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="{{$student->dob}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="{{$student->email}}">
                                </div>

                                <div class="col-md-6">
                                    <label for=" mobile">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        value="{{$student->mobile}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male" {{ $student->gender == 'male' ? 'selected' : '' }}>Male
                                        </option>
                                        <option value="female" {{ $student->gender == 'female' ? 'selected' : '' }}>
                                            Female</option>
                                    </select>
                                </div>
                           
                                <div class="col-md-6">
                                    <label for="course_id">Course</label>
                                    <select name="course_id" id="course_id" class="form-control">
                                        @foreach ($courses as $course)
                                        <option value="{{ $course->id }}"
                                            {{  $student->course_id  == $course->id ? 'selected' : '' }}>
                                            {{ $course->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label for="batch_id">Batch</label>
                                    <select name="batch_id" id="batch_id" class="form-control">
                                        <option value="">Choose..</option>
                                        @foreach ($batches as $batch)
                                        <option value="{{ $batch->id }}"
                                            {{  $student->batch_id  == $batch->id ? 'selected' : '' }}>
                                            {{ $batch->title }}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="course_fee">Course Fee</label>
                                    <input type="number" name="course_fee" id="course_fee" class="form-control"
                                        value="{{$student->course_fee}}">
                                </div>

                                <div class="col-md-6">
                                    <label for="student_fee">Student Fee</label>
                                    <input type="number" name="student_fee" id="student_fee" class="form-control"
                                        value="{{$student->student_fee}}">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection