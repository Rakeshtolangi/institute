<!-- create.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Template</h3>
            <div class="float-right">
                <a href="{{ route('certificates.index') }}" class="btn btn-primary">Template Lists</a>
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
                        <h4 class="card-title">Template Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('certificates.store') }}" method="POST">
                            @csrf
                            @include('backend.certificates._form')

                            <div class="col-md-3">
                                <button type="submit" class="btn btn-primary">Submit</button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
