<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Create Fee</h3>
        </div>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('fees.store')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <div class="row">


                            <?php echo $__env->make('backend.fees._form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>                            

                            <input type="hidden" name="student_id"  value="<?php echo e($student->id); ?>" id="">
                            <input type="hidden" name="course_id"  value="<?php echo e($student->course_id); ?>" id="">
                            <input type="hidden" name="batch_id"  value="<?php echo e($student->batch_id); ?>" id="">
                            <input type="hidden" name="shift_id"  value="1" id="">
                            <input type="hidden" name="student_fee"  value="<?php echo e($student->student_fee); ?>" id="">
                            
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/fees/create.blade.php ENDPATH**/ ?>