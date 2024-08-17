@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Record Attendance</h3>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <form action="{{ route('attendance.index') }}" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <label for="course_id">Select Course</label>
                    <select name="course_id" id="course_id" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Select Course --</option>
                        @foreach($courses as $course)
                        <option value="{{ $course->id }}" {{ $selectedCourse == $course->id ? 'selected' : '' }}>
                            {{ $course->title }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="batch_id">Select Batch</label>
                    <select name="batch_id" id="batch_id" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Select Batch --</option>
                        @foreach($batches as $batch)
                        <option value="{{ $batch->id }}"  {{ $selectedBatch == $batch->id ? 'selected' : '' }}>
                            {{ $batch->title }}
                        </option>
                        @endforeach
                    </select>
                </div>

                <!-- <div class="col-md-4">
                    <label for="search">Search Student</label>
                    <input type="text" name="search" id="search" class="form-control" value=""
                        placeholder="Enter student name...">
                </div> -->
            </div>
        </form>

  
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                        
                        <div class="col-10">
                        <h4 class="card-title">Students</h4>

                        </div>
                           <div class="col-2">
                            <label for="select-att">{{__('Select')}}</label>
                            <select name="attendance" id="select-att" class="form-control" onchange="updateRadio()">
                                <option value="">Choose...</option>
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                            </select>
                           </div>
                       
                        </div>
                        <form action="{{ route('attendance.store') }}" method="POST">
                        @csrf
                        <div class="card-body">
                            <table class="datatables table table-striped" id="attendance-table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                             
                                    @foreach($students as $key => $student)
                                    <tr>
                                        <td>{{$key + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>
                                            <input type="hidden" name="student_id[]" value="{{ $student->id }}">
                                            <input type="radio" name="status[{{$key}}]" id="attendance-present-{{$key}}" value="present"> Present
                                            <input type="radio" name="status[{{$key}}]" id="attendance-absent-{{$key}}" value="absent"> Absent
                                        </td>

                                    </tr>
                                    @endforeach
                            

                                </tbody>
                            </table>
                            <input type="hidden" name="course_id" id="" value="{{$selectedCourse}}">
                            <input type="hidden" name="batch_id" id="" value="{{$selectedBatch}}">
                            <button type="submit" class="btn btn-primary mt-3">Record Attendance</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection
<script>
    function updateRadio() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('select-att').value;

        // Loop through all students
        @foreach($students as $key => $student)
            // Get the radio buttons for each student
            var presentRadio = document.getElementById('attendance-present-{{$key}}');
            var absentRadio = document.getElementById('attendance-absent-{{$key}}');

            // Check the radio button based on the selected value
            if (selectedValue === 'present') {
                presentRadio.checked = true;
            } else if (selectedValue === 'absent') {
                absentRadio.checked = true;
            }
        @endforeach
    }
</script>