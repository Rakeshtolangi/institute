<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Enquiry Details</h3>
            <!-- alert edit message -->
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
                        <h4 class="card-title">Details of <?php echo e($enquiry->name); ?></h4>
                    </div>
                    <div class="card-body">
                        <p><strong>Name:</strong> <?php echo e($enquiry->name); ?></p>
                        <p><strong>Father's Name:</strong> <?php echo e($enquiry->father_name); ?></p>
                        <p><strong>Date of Birth:</strong> <?php echo e($enquiry->dob); ?></p>
                        <p><strong>Email:</strong> <?php echo e($enquiry->email); ?></p>
                        <p><strong>Mobile:</strong> <?php echo e($enquiry->mobile); ?></p>
                        <p><strong>Preferred Time:</strong> <?php echo e($enquiry->preferred_time); ?></p>
                        <p><strong>Course:</strong> <?php echo e($enquiry->course->title); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/enquiries/show.blade.php ENDPATH**/ ?>