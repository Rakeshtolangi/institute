@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Users</h3>
            <div class="float-right">
                <a href="{{ route('roles.index') }}" class="btn btn-primary">List Users</a>
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
                        <h4 class="card-title">Edit User</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('users.update', $user->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="mb-3 col-md-6">
                                    <label for="name" class="col-md-4">Name</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            id="name" name="name" value="{{ $user->name }}">
                                        @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="email" class="col-md-4">Email Address</label>
                                    <div class="col-md-12">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            id="email" name="email" value="{{ $user->email }}">
                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="password" class="col-md-4">Password</label>
                                    <div class="col-md-12">
                                        <input type="password"
                                            class="form-control @error('password') is-invalid @enderror" id="password"
                                            name="password">
                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="password_confirmation" class="col-md-4">Confirm Password</label>
                                    <div class="col-md-12">
                                        <input type="password" class="form-control" id="password_confirmation"
                                            name="password_confirmation">
                                    </div>
                                </div>

                                <div class="mb-3 col-md-6">
                                    <label for="roles" class="col-md-4">Roles</label>
                                    <div class="col-md-12">
                                        <select class="form-select @error('roles') is-invalid @enderror" multiple
                                            aria-label="Roles" id="roles" name="roles[]">
                                            @forelse ($roles as $role)

                                            @if ($role!='Super Admin' && $role!='Teacher')
                                            <option value="{{ $role }}"
                                                {{ in_array($role, $userRoles ?? []) ? 'selected' : '' }}>
                                                {{ $role }}
                                            </option>
                                            @else
                                            @if ($role!='Super Admin' && $role!='Teacher')
                                            <option value="{{ $role }}"
                                                {{ in_array($role, $userRoles ?? []) ? 'selected' : '' }}>
                                                {{ $role }}
                                            </option>
                                            @endif
                                            @endif

                                            @empty

                                            @endforelse
                                        </select>
                                        @error('roles')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <input type="submit" class="col-md-3 btn btn-primary" value="Update User">
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection