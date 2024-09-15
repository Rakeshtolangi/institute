

<?php $__env->startSection('content'); ?>
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
                        <h4 class="card-title"><?php echo e($student->name); ?> 
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

                                    <?php $__currentLoopData = $fees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $fee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($fee->receipt_no); ?></td>
                                        <td>
                                            <?php echo e($fee->fee_date); ?>

                                        </td>
                                        <td><?php echo e($fee->course->title); ?></td>
                                        <td><?php echo e($fee->batch->title); ?></td>
                                        <td><?php echo e($fee->paid_amount); ?></td>
                                        <td><?php echo e($fee->due_fee); ?></td>
                                        

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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/fees/show.blade.php ENDPATH**/ ?>