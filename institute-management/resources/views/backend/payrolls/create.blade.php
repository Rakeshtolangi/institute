@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create Payroll</h3>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('payrolls.store') }}" method="POST">
                            @csrf
                            <div class="row">


                            @include('backend.payrolls._form')
                            </div>                            
                            <input type="hidden" name="user_id" value="{{ $userDetails->id }}">
                            <input type="hidden" name="total_amount" value="{{ $totalAmount }}">
                            
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection