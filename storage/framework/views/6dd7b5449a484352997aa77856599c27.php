<!-- resources/views/courses/show.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Course Details</h3>
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
                        <p><strong>Title:</strong> <?php echo e($course->title); ?></p>
                        <p><strong>Category:</strong> <?php echo e($course->category->name); ?></p>
                        <p><strong>Duration:</strong> <?php echo e($course->duration); ?></p>
                        <p><strong>Type:</strong> <?php echo e($course->type); ?></p>
                        <p><strong>Fee:</strong> <?php echo e($course->fee); ?></p>
                        <p><strong>Status:</strong> <?php echo e($course->status ? 'Active' : 'Inactive'); ?></p>
                        <p><strong>Skill Level:</strong> <?php echo e($course->skill_level); ?></p>
                        <p><strong>Description:</strong> <?php echo e($course->description); ?></p>
                        <p><strong>Outcome:</strong> <?php echo e($course->outcome); ?></p>
                        <a href="<?php echo e(route('courses.edit', $course->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('courses.destroy', $course->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        <a href="<?php echo e(route('courses.index')); ?>" class="btn btn-secondary">Back to List</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\institute\institute-management\resources\views/backend/courses/show.blade.php ENDPATH**/ ?>