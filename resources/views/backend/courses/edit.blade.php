<!-- resources/views/courses/edit.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Course</h3>
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
                        <form action="{{ route('courses.update', $course->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="{{ old('title', $course->title ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" required>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $course->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                @if($course->image)
                                <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}"
                                    width="100">
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" class="form-control"
                                    value="{{ old('duration', $course->duration ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" class="form-control"
                                    value="{{ old('type', $course->type ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="number" name="fee" class="form-control"
                                    value="{{ old('fee', $course->fee ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="1" {{ $course->status == 1 ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ $course->status == 0 ? 'selected' : '' }}>Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="skill_level">Skill Level</label>
                                <input type="text" name="skill_level" class="form-control"
                                    value="{{ old('skill_level', $course->skill_level ?? '') }}" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control"
                                    required>{{ old('description', $course->description ?? '') }}</textarea>
                            </div>

                            <div class="form-group">
                                <label for="outcome">Outcome</label>
                                <textarea name="outcome" class="form-control"
                                    required>{{ old('outcome', $course->outcome ?? '') }}</textarea>
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