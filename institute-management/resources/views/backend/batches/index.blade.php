<!-- resources/views/batches/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Batches</h3>
            <a href="{{ route('batches.create') }}" class="btn btn-primary">Create Batch</a>
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
                                    <th>Title</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Description</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($batches as $batch)
                                <tr>
                                    <td>{{ $batch->title }}</td>
                                    <td>{{ $batch->start_date }}</td>
                                    <td>{{ $batch->end_date }}</td>
                                    <td>{{ $batch->description }}</td>
                                    <td>
                                        <a href="{{ route('batches.show', $batch->id) }}" class="btn btn-info">View</a>
                                        <a href="{{ route('batches.edit', $batch->id) }}"
                                            class="btn btn-warning">Edit</a>
                                        <form action="{{ route('batches.destroy', $batch->id) }}" method="POST"
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