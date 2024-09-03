<!-- create.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Add Student</h3>
            <div class="float-right">
                <a href="<?php echo e(route('students.index')); ?>" class="btn btn-primary">List Students</a>
            </div>


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
                        <h4 class="card-title">Student Details</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo e(route('students.store')); ?>" method="POST"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo $__env->make('backend.students._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/students/create.blade.php ENDPATH**/ ?>