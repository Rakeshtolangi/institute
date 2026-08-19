<!-- resources/views/backend/expenseCategories/show.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Expense Category Details</h3>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo e($expenseCategory->title); ?></h4>
                        <p><?php echo e($expenseCategory->description); ?></p>
                        <a href="<?php echo e(route('expense-categories.edit', $expenseCategory->id)); ?>" class="btn btn-warning">Edit</a>
                        <form action="<?php echo e(route('expense-categories.destroy', $expenseCategory->id)); ?>" method="POST"
                            style="display:inline;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Projects\institute\institute-management\resources\views/backend/expenseCategories/show.blade.php ENDPATH**/ ?>