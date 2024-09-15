

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Payroll List</h3>
             

             
            </div>

            <div class="row">
                <div class="col-md-12">
                  

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><?php echo e($userDetails->name); ?></h4>
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

                                        <?php $__currentLoopData = $payrolls; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $payroll): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($payroll->receipt_no); ?></td>
                                                <td><?php echo e($payroll->date); ?></td>
                                                <td><?php echo e($payroll->type); ?></td>
                                                <td><?php echo e($payroll->amount); ?></td>
                                               
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </dv>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/payrolls/show.blade.php ENDPATH**/ ?>