<!-- resources/views/courses/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Course Details</h3>
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
                        <p><strong>Title:</strong> {{ $course->title }}</p>
                        <p><strong>Category:</strong> {{ $course->category->name }}</p>
                        <p><strong>Duration:</strong> {{ $course->duration }}</p>
                        <p><strong>Type:</strong> {{ $course->type }}</p>
                        <p><strong>Fee:</strong> {{ $course->fee }}</p>
                        <p><strong>Status:</strong> {{ $course->status ? 'Active' : 'Inactive' }}</p>
                        <p><strong>Skill Level:</strong> {{ $course->skill_level }}</p>
                        <p><strong>Description:</strong> {{ $course->description }}</p>
                        <p><strong>Outcome:</strong> {{ $course->outcome }}</p>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection