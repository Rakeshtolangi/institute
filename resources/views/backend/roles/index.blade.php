@extends('layouts.backend')
<style>
    .ul-lists{
        list-style:none;
    }
    .ul-lists li{
        display:inline-block !important;
        margin-bottom:5px;
    }
    .li-items{
        background: #83adff;
    color: white;
    border-radius: 5px;
    width: fit-content;
    padding: 0px 5px 0 5px;
    }
     
</style>
@section('content')

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Roles</h3>
            <div class="float-right">
                <a href="{{ route('roles.create') }}" class="btn btn-primary">Add Role</a>
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
                        <h4 class="card-title">Role Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="expense-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $role)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <ul class="ul-lists">
                                                @forelse ($role->permissions as $permission)
                                                <li class="li-items">{{ $permission->name }}</li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </td>
                                        <td>
                                            <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                                                @csrf
                                                @method('DELETE')

                                                @if ($role->name!='Super Admin')
                                                @can('edit-role')
                                                <a href="{{ route('roles.edit', $role->id) }}"
                                                    class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                                    Edit</a>
                                                @endcan

                                                @can('delete-role')
                                                @if ($role->name!=Auth::user()->hasRole($role->name))
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this role?');"><i
                                                        class="bi bi-trash"></i> Delete</button>
                                                @endif
                                                @endcan
                                                @endif

                                            </form>
                                        </td>
                                    </tr>
                                    @empty
                                    <td colspan="3">
                                        <span class="text-danger">
                                            <strong>No Role Found!</strong>
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