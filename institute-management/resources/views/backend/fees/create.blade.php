@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create Fee</h3>
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
                        <form action="{{ route('fees.store') }}" method="POST">
                            @csrf
                            <div class="row">


                            @include('backend.fees._form')
                            </div>                            

                            <input type="hidden" name="student_id"  value="{{$student->id}}" id="">
                            <input type="hidden" name="course_id"  value="{{$student->course_id}}" id="">
                            <input type="hidden" name="batch_id"  value="{{$student->batch_id}}" id="">
                            <input type="hidden" name="shift_id"  value="1" id="">
                            <input type="hidden" name="student_fee"  value="{{$student->student_fee}}" id="">
                            
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection