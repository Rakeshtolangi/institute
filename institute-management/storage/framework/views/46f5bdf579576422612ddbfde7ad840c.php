<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Payroll</h3>
            <!-- <div class="float-right">
                <a href="<?php echo e(route('payrolls.index')); ?>" class="btn btn-primary">List Payrolls</a>
            </div> -->

            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success">
                <p><?php echo e($message); ?></p>
            </div>
            <?php endif; ?>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Payroll Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('payrolls.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="row g-3">
                                <!-- Select Designations -->
                                <div class="col-md-4">
                                    <label for="designations_id">Select Role</label>
                                    <select name="designations_id" id="designations_id" class="form-control" required>
                                        <option value="">-- Select Role --</option>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($role->name); ?>"></option>
                                       

                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <!-- Select Month -->
                                <div class="col-md-4">
                                    <label for="month">Select Month</label>
                                    <select name="month" id="month" class="form-control" required>
                                        <option value="">-- Select Month --</option>
                                        <?php $__currentLoopData = range(1, 12); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $month): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($month); ?>">
                                            <?php echo e(DateTime::createFromFormat('!m', $month)->format('F')); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <!-- Select Year -->
                                <div class="col-md-4">
                                    <label for="year">Select Year</label>
                                    <select name="year" id="year" class="form-control" required>
                                        <option value="">-- Select Year --</option>
                                        <?php $__currentLoopData = range(date('Y') - 10, date('Y')); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $year): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($year); ?>"><?php echo e($year); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>

                            <div class="row g-3 mt-3">
                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-primary">Generate Payroll</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/payrolls/create.blade.php ENDPATH**/ ?>