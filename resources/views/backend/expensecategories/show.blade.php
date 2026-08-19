<!-- resources/views/backend/expenseCategories/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Expense Category Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $expenseCategory->title }}</h4>
                        <p>{{ $expenseCategory->description }}</p>
                        <a href="{{ route('expense-categories.edit', $expenseCategory->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('expense-categories.destroy', $expenseCategory->id) }}" method="POST"
                            style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
