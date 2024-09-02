<!-- resources/views/backend/expenseCategories/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Expense Categories</h3>
            <div class="float-right">
                <a href="{{ route('expense-categories.create') }}" class="btn btn-primary">Add Expense Category</a>
            </div>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Expense Category List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="expense-category-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenseCategories as $key => $expenseCategory)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $expenseCategory->title }}</td>
                                        <td>{{ $expenseCategory->description }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('expense-categories.show', $expenseCategory->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('expense-categories.edit', $expenseCategory->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('expense-categories.destroy', $expenseCategory->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
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
</div>
@endsection
