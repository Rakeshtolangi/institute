@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Expense Categories</h3>
        </div>

        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif

        <div class="row">
            <!-- Add Expense Category Form (40% width) -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Expense Category</h4>
                    </div>

                    <div class="card-body">
                        <form action="{{ isset($expenseCategory) ? route('expense-categories.update', $expenseCategory->id) : route('expense-categories.store') }}" method="POST">
                            @csrf
                            @if(isset($expenseCategory))
                                @method('PUT')
                            @endif

                            <!-- Title Input -->
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" id="title" class="form-control" required value="{{ $expenseCategory->title ?? '' }}">
                            </div>

                            <!-- Description Input -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control">{{ $expenseCategory->description ?? '' }}</textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Expense Category List (60% width) -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Expense Category List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($expenseCategories as $key => $expenseCategory)
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
                                                        <a href="{{ route('expense-categories.index', $expenseCategory->id) }}"
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
                                    @empty
                                    <tr>
                                        <td colspan="4" class="text-center">No expense categories found</td>
                                    </tr>
                                    @endforelse
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
