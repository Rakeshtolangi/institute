<!-- resources/views/backend/expenses/index.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Expenses</h3>
            <div class="float-right">
                <a href="{{ route('expenses.create') }}" class="btn btn-primary">Add Expense</a>
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
                        <h4 class="card-title">Expense Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="expense-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Date</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Amount</th>
                                        <th>Description</th>
                                        <th>File</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($expenses as $key => $expense)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td>{{ $expense->expense_date }}</td>
                                        <td>{{ $expense->title }}</td>
                                        <td>{{ $expense->expenseCategory->title }}</td>
                                        <td>{{ $expense->amount }}</td>
                                        <td>{{ $expense->description }}</td>
                                        <td>
                                            
                                            <img src="{{asset($expense->image )}}" alt="" srcset="">
                                        </td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="{{ route('expenses.show', $expense->id) }}" class="dropdown-item">View</a>
                                                        <a href="{{ route('expenses.edit', $expense->id) }}" class="dropdown-item">Edit</a>
                                                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST">
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
