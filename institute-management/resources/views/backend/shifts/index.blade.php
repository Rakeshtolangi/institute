@extends('layouts.backend')

@section('content')
<div class="container">


    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Students</h3>
            <div class="float-right">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Student Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="student-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile no.</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Gender</th>
                                        <th>Course Fee</th>
                                        <th>Student Fee</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $key => $student)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->course }}</td>
                                        <td>{{ $student->batch }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->course_fee }}</td>
                                        <td>{{ $student->student_fee }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('students.show', $student->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('students.edit', $student->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('students.destroy', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="
                                                                dropdown-item">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
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
</div>
@endsection