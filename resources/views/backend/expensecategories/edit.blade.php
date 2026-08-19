<!-- resources/views/backend/expenseCategories/edit.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Expense Category</h3>
        </div>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('expense-categories.update', $expenseCategory->id) }}" method="POST">
            @csrf
            @method('PUT')
            @include('backend.expenseCategories._form')
            <button type="submit" class="btn btn-primary mt-3">Update Expense Category</button>
        </form>
    </div>
</div>
@endsection
