<!-- resources/views/courses/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Courses</h3>
            <a href="{{ route('courses.create') }}" class="btn btn-primary">Create Course</a>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Duration</th>
                                    <th>Type</th>
                                    <th>Fee</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($courses as $course)
                                <tr>
                                    <td>{{ $course->title }}</td>
                                    <td>{{ $course->category->name }}</td>
                                    <td>{{ $course->duration }}</td>
                                    <td>{{ $course->type }}</td>
                                    <td>{{ $course->fee }}</td>
                                    <td>{{ $course->status ? 'Active' : 'Inactive' }}</td>
                                    <td>
                                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('courses.edit', $course->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
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
@endsection