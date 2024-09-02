@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Collect fees</h3>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <form action="{{ route('fees.index') }}" method="GET">
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


            </div>
        </form>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">

                        <div class="col-10">
                        <h4 class="card-title">Students</h4>
                        </div>
                        </div>
                      
                        <div class="card-body">
                            <table class="datatables table table-striped" id="fees-table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Admission No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Paid Amount</th>
                                        <th>Due_amount</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($students as $key => $student)
                                    <tr>
                                        <td>{{$key + 1 }}</td>
                                        <td>aa</td>
                                        <td>
                                        <a href="{{ route('students.show', $student->id) }}">
                                            {{ $student->name }}
                                        </a>
                                        </td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>

                                                   

                                                    <a href="{{ route('fees.addpayment', $student->id) }}"
                                                    class="dropdown-item">Add Payment</a>
                                                
                                                        <a href=""
                                                            class="dropdown-item">view Payment</a>

                                                        <form action="{{ route('students.destroy', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>

                                    </tr>
                                    @endforeach


                                </tbody>
                            </table>
                            <input type="hidden" name="course_id" id="" value="{{$selectedCourse}}">
                            <input type="hidden" name="batch_id" id="" value="{{$selectedBatch}}">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@endsection