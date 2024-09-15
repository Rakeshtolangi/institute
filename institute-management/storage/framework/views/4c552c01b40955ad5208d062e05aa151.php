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
<?php $__env->startSection('content'); ?>


<div class="container">
    <div class="page-inner">
    
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
            <div class="">
                          <h3 class="fw-bold p-0 m-0">Hi,</h3>
       <h6 class="fw-bold mb-3" style="text-align:right;"><?php echo e(__('Welcome')); ?> <?php echo e(Auth::user()->name); ?>

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
                                    <h4 class="card-title"><?php echo e($totalStudents); ?></h4>
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
                                    <h4 class="card-title"><?php echo e($totalCourses); ?></h4>
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
                                    <h4 class="card-title"><?php echo e($totalBatches); ?></h4>
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
                                    <h4 class="card-title"><?php echo e($totalTeachers); ?></h4>
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
                        <div class="card-category"><?php echo e($startOfMonthFormatted); ?> to <?php echo e($currentDateFormatted); ?></div>
                    </div>
                    <div class="card-body pb-0">
                        <div class="mb-4">
                            <h1><?php echo e($totalEnrollStudents); ?></h1>
                        </div>
                        
                    </div>
                </div>
                <div class="card card-round bg-success">
                    <div class="card-body pb-0">
                        <h5 class="text-white">Total Completed Courses</h5>
                        <h2 class="mb-2 text-white"><?php echo e($completedCourses); ?></h2>
                        
                    </div>
                </div>
                <div class="card card-round bg-warning">
                    <div class="card-body pb-0">
                        <h5 class="text-white">Total Running Courses</h5>

                        <h2 class="mb-2 text-white"><?php echo e($runningCourses); ?></h2>
                        
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

                            <?php $__currentLoopData = $latestStudents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                
                            
                            <div class="item-list">
                                <div class="avatar">
                                    <img src="<?php echo e(asset($student->image)); ?>" alt="..." class="avatar-img rounded-circle" />
                                </div>
                                <div class="info-user ms-3">
                                    <div class="username"><?php echo e($student->name); ?></div>
                                    <div class="status"><?php echo e($student->admission_number); ?></div>
                                </div>
                                <a class="btn btn-icon btn-link op-8 me-1" href="<?php echo e(route('students.show', $student->id)); ?>">
                                    <i class="far fa-eye"></i>
                                </a>
                                
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                         
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

                                    <?php $__currentLoopData = $latestFees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row" style="font-size: 13px;">
                                            <a class="btn btn-icon btn-round btn-success btn-sm me-2" href="">
                                                <i class="fa fa-check"></i>
                                            </a>
                                            <?php echo e($fee->receipt_no); ?>

                                        </th>
                                        <td class="text-end"><?php echo e(\Carbon\Carbon::parse($fee->created_at)->format('M d, Y')); ?></td>
                                        <td class="text-end">Rs. <?php echo e($fee->amount); ?></td>
                                        
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                  
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var userData = <?php echo json_encode($userData, 15, 512) ?>;

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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/dashboard.blade.php ENDPATH**/ ?>