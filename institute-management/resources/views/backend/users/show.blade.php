<!-- resources/views/batches/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Batch Details</h3>
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
                        <p><strong>Title:</strong> {{ $batch->title }}</p>
                        <p><strong>Start Date:</strong> {{ $batch->start_date }}</p>
                        <p><strong>End Date:</strong> {{ $batch->end_date }}</p>
                        <p><strong>Description:</strong> {{ $batch->description }}</p>
                        <a href="{{ route('batches.edit', $batch->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('batches.destroy', $batch->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('batches.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection