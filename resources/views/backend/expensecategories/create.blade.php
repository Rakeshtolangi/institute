<!-- resources/views/backend/expenseCategories/create.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create Expense Category</h3>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('expense-categories.store') }}" method="POST">
            @csrf
            @include('backend.expenseCategories._form')
            <button type="submit" class="btn btn-primary mt-3">Save Expense Category</button>
        </form>
    </div>
</div>
@endsection
