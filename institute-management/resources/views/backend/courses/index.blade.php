@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Courses</h3>
            <div class="float-right">
                <a href="{{ route('courses.create') }}" class="btn btn-primary">Add Course</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Course Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="course-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Fee</th>
                                        <th>Status</th>
                                        <th>Skill Level</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($courses as $key => $course)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td>{{ $course->title }}</td>
                                        <td>{{ $course->category->name }}</td>
                                        <td>{{ $course->duration }}</td>
                                        <td>{{ $course->type }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td>{{ $course->status ? 'Active' : 'Inactive' }}</td>
                                        <td>{{ $course->skill_level }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('courses.show', $course->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('courses.edit', $course->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('courses.destroy', $course->id) }}"
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection