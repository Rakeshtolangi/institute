@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Student Details</h1>
    <p><strong>ID:</strong> {{ $student->id }}</p>
    <p><strong>Name:</strong> {{ $student->name }}</p>
    <p><strong>Class:</strong> {{ $student->class_id }}</p>
    <a href="{{ route('students.index') }}" class="btn btn-secondary">Back</a>
</div>
@endsection