<!-- create.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Courses</h3>
            <div class="float-right">
                <a href="{{ route('courses.index') }}" class="btn btn-primary">List Courses</a>

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
                        <h4 class="card-title">Course Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="POST">
                            @csrf
                            @include('backend.courses._form')
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection