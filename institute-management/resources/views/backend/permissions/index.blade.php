@extends('layouts.backend')

@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Permissions</h3>
            <div class="float-right">
                <a href="{{ route('permissions.create') }}" class="btn btn-primary">Add Permission</a>
            </div>
        </div>
        @session('success')
        <div class="alert alert-success" role="alert">
            {{ $value }}
        </div>
        @endsession
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Permission Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="expense-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Permission Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($permissions as $permission)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $permission->name }}</td>

                                        <td>
                                            <form action="{{ route('permissions.destroy', $permission->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')


                                                <a href="{{ route('permissions.edit', $permission->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                                    Edit</a>

                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this role?');"><i
                                                        class="bi bi-trash"></i> Delete</button>

                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="3">
                                        <span class="text-danger">
                                            <strong>No Permissions Found!</strong>
                                        </span>
                                    </td>
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