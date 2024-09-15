@extends('layouts.backend')
<style>
     .table > tbody > tr > th {
    padding: 16px 15px !important;
}
.btn-icon.btn-sm {
    height: 1.5rem !important;
    min-width: 1.5rem !important;
    width: 1.5rem !important;
}
</style>
@section('content')


<div class="container">
    <div class="page-inner">
    
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div class="">
                          <h3 class="fw-bold p-0 m-0">Hi,</h3>
       <h6 class="fw-bold mb-3" style="text-align:right;">{{__('Welcome')}} {{ Auth::user()->name }}
</h6>
            </div>
          
</div>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-primary bubble-shadow-small">
                                    <i class="fas fa-users"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-title" style="font-size:16px;">Total Students</p>
                                    <h4 class="card-title">{{$totalStudents}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-info bubble-shadow-small">
                                    <i class="fas fa-user-check"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-title" style="font-size:16px;">Total Courses</p>
                                    <h4 class="card-title">{{$totalCourses}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-success bubble-shadow-small">
                                    <i class="fas fa-luggage-cart"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-title" style="font-size:16px;">Total Batches</p>
                                    <h4 class="card-title">{{$totalBatches}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="card card-stats card-round">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-icon">
                                <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                    <i class="far fa-check-circle"></i>
                                </div>
                            </div>
                            <div class="col col-stats ms-3 ms-sm-0">
                                <div class="numbers">
                                    <p class="card-title" style="font-size:16px;">Total Teachers</p>
                                    <h4 class="card-title">{{$totalTeachers}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">User Statistics</div>
                          
                        </div>
                    </div>
                    <div class="card-body">
                        <canvas id="user-stats-chart" width="800" height="430"></canvas>

                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-primary card-round">
                    <div class="card-header">
                        <div class="card-head-row">
                            <div class="card-title">Enrolled Students</div>
                           
                        </div>
                        <div class="card-category">{{$startOfMonthFormatted }} to {{ $currentDateFormatted }}</div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="mb-4">
                            <h1>{{$totalEnrollStudents}}</h1>
                        </div>
                        
                    </div>
                </div>
                <div class="card card-round bg-success">
                    <div class="card-body pb-0">
                        <h5 class="text-white">Total Completed Courses</h5>
                        <h2 class="mb-2 text-white">{{$completedCourses}}</h2>
                        
                    </div>
                </div>
                <div class="card card-round bg-warning">
                    <div class="card-body pb-0">
                        <h5 class="text-white">Total Running Courses</h5>

                        <h2 class="mb-2 text-white">{{$runningCourses}}</h2>
                        
                    </div>
                </div>
            </div>
        </div>
     
        <div class="row">
            <div class="col-md-6">
                <div class="card card-round">
                    <div class="card-body">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">New Students</div>
                              
                            </div>
                        </div>
                        <div class="card-list py-4">

                            @foreach ($latestStudents as $student)
                                
                            
                            <div class="item-list">
                                <div class="avatar">
                                    <img src="{{asset($student->image)}}" alt="..." class="avatar-img rounded-circle" />
                                </div>
                                <div class="info-user ms-3">
                                    <div class="username">{{$student->name}}</div>
                                    <div class="status">{{$student->admission_number}}</div>
                                </div>
                                <a class="btn btn-icon btn-link op-8 me-1" href="{{ route('students.show', $student->id) }}">
                                    <i class="far fa-eye"></i>
                                </a>
                                
                            </div>
                            @endforeach
                         
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card card-round">
                    <div class="card-header">
                        <div class="card-head-row card-tools-still-right">
                            <div class="card-title">Payment History</div>
                          
                        </div>
                    </div>
                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <!-- Projects table -->
                            <table class="table align-items-center mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Reciept No.</th>
                                        <th scope="col" class="text-end">Date</th>
                                        <th scope="col" class="text-end">Amount</th>

                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($latestFees as $fee)
                                    <tr>
                                        <th scope="row" style="font-size: 13px;">
                                            <a class="btn btn-icon btn-round btn-success btn-sm me-2" href="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            {{$fee->receipt_no}}
                                        </th>
                                        <td class="text-end">{{ \Carbon\Carbon::parse($fee->created_at)->format('M d, Y') }}</td>
                                        <td class="text-end">Rs. {{$fee->amount}}</td>
                                        
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
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var userData = @json($userData);

        var ctx = document.getElementById('user-stats-chart').getContext('2d');

        var chart = new Chart(ctx, {
            type: 'bar', // Change to 'line' if you prefer a line chart
            data: {
                labels: userData.map(item => item.month),
                datasets: [{
                    label: 'No. of Users',
                    data: userData.map(item => item.count),
                    borderColor: 'rgba(75, 192, 192, 1)',
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    x: {
                        title: {
                            display: true,
                            text: 'Month'
                        },
                        ticks: {
                            autoSkip: false
                        }
                    },
                    y: {
                        title: {
                            display: true,
                            text: 'No. of Users'
                        },
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>