<!-- resources/views/backend/expenses/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Expense Details</h3>
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
                        <p><strong>Date:</strong> {{ $expense->expense_date }}</p>
                        <p><strong>Title:</strong> {{ $expense->title }}</p>
                        <p><strong>Category:</strong> {{ $expense->category }}</p>
                        <p><strong>Amount:</strong> {{ $expense->amount }}</p>
                        <p><strong>Description:</strong> {{ $expense->description }}</p>
                        <p><strong>File:</strong>
                            @if($expense->file)
                            <a href="{{ asset('storage/' . $expense->file) }}" target="_blank">View File</a>
                            @else
                            No file uploaded.
                            @endif
                        </p>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('expenses.index') }}" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
