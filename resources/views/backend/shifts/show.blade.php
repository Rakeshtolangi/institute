<!-- resources/views/shifts/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Shift Details</h3>
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
                        <p><strong>Name:</strong> {{ $shift->name }}</p>
                        <p><strong>Start Time:</strong> {{ $shift->start_time }}</p>
                        <p><strong>End Time:</strong> {{ $shift->end_time }}</p>
                        <a href="{{ route('shifts.edit', $shift->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('shifts.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection