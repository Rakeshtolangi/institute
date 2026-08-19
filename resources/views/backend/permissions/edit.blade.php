<!-- resources/views/courses/edit.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
    <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Permission</h3>
            <div class="float-right">
                <a href="{{ route('roles.index') }}" class="btn btn-primary">List Permissions</a>
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
                        <h4 class="card-title">Update Permissions</h4>
                    </div>
                    <div class="card-body">
                    <form action="{{ route('permissions.update', $permissions->id) }}" method="post">
                    @csrf
                    @method("PUT")

                    <div class="mb-3 row">
                        <label for="name" class="col-md-4 col-form-label text-md-end text-start">Name</label>
                        <div class="col-md-6">
                          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $permissions->name }}">
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                  
                    
                    <div class="mb-3 row">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Update Permission">
                    </div>
                    
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection