<!-- create.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Student</h1>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <form action="{{ route('students.store') }}" method="POST">
        @csrf
        @include('students._form')
    </form>
</div>
@endsection