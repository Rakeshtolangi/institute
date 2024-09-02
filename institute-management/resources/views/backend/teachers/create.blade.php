<!-- resources/views/backend/teachers/create.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Teacher</h3>
            <div class="float-right">
                <a href="{{ route('teachers.index') }}" class="btn btn-primary">List Teacher</a>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teacher Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('teachers.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @include('backend.teachers._form')
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
