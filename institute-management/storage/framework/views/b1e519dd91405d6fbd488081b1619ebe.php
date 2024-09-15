<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Template</h3>
            <!-- alert edit message   -->
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
                        <h4 class="card-title">Template Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo e(route('certificates.update', $template->id)); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="col-md-6 mb-2">
                                
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" id="name" name="name" value="<?php echo e($template->name); ?>" class="form-control" required>
                        
                        </div>
                        <div class="col-md-12 mb-2">
                            <label for="content" class="form-label">Content:</label>
                            <textarea id="content" name="content" required><?php echo e($template->content); ?></textarea>
                        </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/certificates/edit.blade.php ENDPATH**/ ?>