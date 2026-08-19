@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Payroll List</h3>
             

             
            </div>

            <div class="row">
                <div class="col-md-12">
                  

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">{{$userDetails->name}}</h4>
                        </div>
                        <div class="card-body">

                            <dv class="table-responsive">

                                <table class="table table-borderd">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Reciept No.</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($payrolls as $key => $payroll)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $payroll->receipt_no }}</td>
                                                <td>{{ $payroll->date }}</td>
                                                <td>{{ $payroll->type}}</td>
                                                <td>{{ $payroll->amount }}</td>
                                               
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </dv>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
