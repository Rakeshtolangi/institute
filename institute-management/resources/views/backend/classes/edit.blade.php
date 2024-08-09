<!-- resources/views/classes/edit.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Class</h3>
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
                        <form action="{{ route('classes.update', $class->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control"
                                    value="{{ old('name', $class->name ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="course_id">Course</label>
                                <select name="course_id" class="form-control" required>
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}"
                                        {{ $class->course_id == $course->id ? 'selected' : '' }}>
                                        {{ $course->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="teacher_id">Teacher</label>
                                <select name="teacher_id" class="form-control" required>
                                    @foreach($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"
                                        {{ $class->teacher_id == $teacher->id ? 'selected' : '' }}>
                                        {{ $teacher->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="shift_id">Shift</label>
                                <select name="shift_id" class="form-control" required>
                                    @foreach($shifts as $shift)
                                    <option value="{{ $shift->id }}"
                                        {{ $class->shift_id == $shift->id ? 'selected' : '' }}>
                                        {{ $shift->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="batch_id">Batch</label>
                                <select name="batch_id" class="form-control" required>
                                    @foreach($batches as $batch)
                                    <option value="{{ $batch->id }}"
                                        {{ $class->batch_id == $batch->id ? 'selected' : '' }}>
                                        {{ $batch->title }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection