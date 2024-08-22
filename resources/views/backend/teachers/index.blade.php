@extends('layouts.backend')

@section('content')
<div class="container">


    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Teacher</h3>
            <div class="float-right">
                <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add Teacher</a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teachers Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="student-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile no.</th>
                                        <th>Course</th>
                                        <!-- <th>Batch</th>
                                        <th>Gender</th>
                                        <th>Course Fee</th>
                                        <th>Student Fee</th> -->
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($teachers as $key => $teacher)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td>
                                            <a href="{{ route('teachers.show', $teacher->id) }}">
                                                {{ $teacher->name }}
                                            </a>
                                        </td>
                                        <td>{{ $teacher->email }}</td>
                                        <td>{{ $teacher->phone }}</td>
                                        <td>{{ $teacher->course }}</td>
                                        <!-- <td>{{ $teacher->batch }}</td>
                                        <td>{{ $teacher->gender }}</td>
                                        <td>{{ $teacher->course_fee }}</td>
                                        <td>{{ $teacher->student_fee }}</td> -->
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('teachers.show', $teacher->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('teachers.edit', $teacher->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('teachers.destroy', $teacher->id) }}"
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