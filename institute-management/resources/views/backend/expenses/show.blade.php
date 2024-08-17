@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Expense Details</h3>
            <div class="float-right">
                <a href="{{ route('expenses.index') }}" class="btn btn-primary">Back to Expenses</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Details of Expense: {{ $expense->title }}</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Expense Date</th>
                                <td>{{ $expense->expense_date }}</td>
                            </tr>
                            <tr>
                                <th>Title</th>
                                <td>{{ $expense->title }}</td>
                            </tr>
                            <tr>
                                <th>Category</th>
                                <td>{{ $expense->category }}</td>
                            </tr>
                            <tr>
                                <th>Amount</th>
                                <td>{{ $expense->amount }}</td>
                            </tr>
                            <tr>
                                <th>Description</th>
                                <td>{{ $expense->description }}</td>
                            </tr>
                        </table>
                        <a href="{{ route('expenses.edit', $expense->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('expenses.destroy', $expense->id) }}" method="POST" class="d-inline">
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