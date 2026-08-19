@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Template</h3>
            <!-- alert edit message   -->
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Template Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="{{ route('certificates.update', $template->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6 mb-2">
                                
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" value="{{ $template->name }}" class="form-control" required>
                        
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="content" class="form-label">Content:</label>
                            <textarea id="content" name="content" required>{{ $template->content }}</textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
