@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Transaction List</h3>
        </div>

      
      
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">

                        <div class="col-10">
                        <h4 class="card-title">{{$student->name}} 
                        </h4>
                        </div>
                        </div>
                      
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="datatables table table-striped" id="fees-table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Receipt No.</th>
                                        <th>Date</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Paid Amount</th>
                                        <th>Due_amount</th>
                                </thead>
                                <tbody>

                                    @foreach($fees as $key => $fee)
                                    <tr>
                                        <td>{{$key + 1 }}</td>
                                        <td>{{$fee->receipt_no}}</td>
                                        <td>
                                            {{$fee->fee_date}}
                                        </td>
                                        <td>{{ $fee->course->title }}</td>
                                        <td>{{ $fee->batch->title }}</td>
                                        <td>{{$fee->paid_amount}}</td>
                                        <td>{{$fee->due_fee}}</td>
                                        

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