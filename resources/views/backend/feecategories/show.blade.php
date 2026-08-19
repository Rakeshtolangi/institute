<!-- resources/views/backend/fees_categories/show.blade.php -->
@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Fees Category Details</h3>
            <div class="float-right">
                <a href="{{ route('fees-categories.index') }}" class="btn btn-primary">List Fees Categories</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $feesCategory->title }}</h4>
                        <p>{{ $feesCategory->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
