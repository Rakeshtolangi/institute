<!-- resources/views/classes/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Class Details</h3>
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
                        <p><strong>Name:</strong> {{ $class->name }}</p>
                        <p><strong>Course:</strong> {{ $class->course->title }}</p>
                        <p><strong>Teacher:</strong> {{ $class->teacher->name }}</p>
                        <p><strong>Shift:</strong> {{ $class->shift->name }}</p>
                        <p><strong>Batch:</strong> {{ $class->batch->title }}</p>
                        <a href="{{ route('classes.edit', $class->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('classes.destroy', $class->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('classes.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection