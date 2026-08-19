<!-- resources/views/classes/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Classes</h3>
            <a href="{{ route('classes.create') }}" class="btn btn-primary">Create Class</a>
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
                                    <th>Name</th>
                                    <th>Course</th>
                                    <th>Teacher</th>
                                    <th>Shift</th>
                                    <th>Batch</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classes as $class)
                                <tr>
                                    <td>{{ $class->name }}</td>
                                    <td>{{ $class->course->title }}</td>
                                    <td>{{ $class->teacher->name }}</td>
                                    <td>{{ $class->shift->name }}</td>
                                    <td>{{ $class->batch->title }}</td>
                                    <td>
                                        <a href="{{ route('classes.show', $class->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('classes.edit', $class->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('classes.destroy', $class->id) }}" method="POST"
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