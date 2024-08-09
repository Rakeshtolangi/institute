<!-- resources/views/shifts/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Shifts</h3>
            <a href="{{ route('shifts.create') }}" class="btn btn-primary">Create Shift</a>
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($shifts as $shift)
                                <tr>
                                    <td>{{ $shift->name }}</td>
                                    <td>
                                        {{ \Carbon\Carbon::parse($shift->start_time)->format('h:i A') }}
                                    </td>

                                    <td>
                                        {{ \Carbon\Carbon::parse($shift->end_time)->format('h:i A') }}
                                    </td>

                                    <td>
                                        <a href="{{ route('shifts.show', $shift->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('shifts.edit', $shift->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('shifts.destroy', $shift->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection