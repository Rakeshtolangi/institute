<!-- resources/views/batches/show.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Batch Details</h3>
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
                        <p><strong>Title:</strong> <?php echo e($batch->title); ?></p>
                        <p><strong>Start Date:</strong> <?php echo e($batch->start_date); ?></p>
                        <p><strong>End Date:</strong> <?php echo e($batch->end_date); ?></p>
                        <p><strong>Description:</strong> <?php echo e($batch->description); ?></p>
                        <a href="<?php echo e(route('batches.edit', $batch->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('batches.destroy', $batch->id)); ?>" method="POST" style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="<?php echo e(route('batches.index')); ?>" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\institute\institute-management\resources\views/backend/batches/show.blade.php ENDPATH**/ ?>