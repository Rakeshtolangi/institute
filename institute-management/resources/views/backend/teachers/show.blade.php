@extends('layouts.backend')

@section('content')
<div class="container">
    <h1>Teacher Details</h1>
    <p><strong>ID:</strong> {{ $teacher->id }}</p>
    <p><strong>Name:</strong> {{ $teacher->name }}</p>
    <p><strong>Class:</strong> {{ $teacher->class_id }}</p>
    <a href="{{ route('teachers.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection