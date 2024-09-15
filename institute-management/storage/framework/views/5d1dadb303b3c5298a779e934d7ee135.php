<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Certificate Templates</h3>
                <div class="float-right">
                    <a href="<?php echo e(route('certificates.create')); ?>" class="btn btn-primary">Add Template</a>

                </div>

            </div>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Template Lists</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="student-datatables" class="datatables display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($template->name); ?></td>



                                                <td>
                                                    <div class="btn-group dropstart">
                                                        <button type="button" class="btn  dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="false"
                                                            aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i> </button>
                                                        <ul class="dropdown-menu" role="menu" style="">
                                                            <li>

                                                                <a href="<?php echo e(route('certificates.edit', $template->id)); ?>"
                                                                    class="dropdown-item">Edit</a>
                                                                <form
                                                                    action="<?php echo e(route('certificates.destroy', $template->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit"
                                                                        class="
                                                                    dropdown-item">Delete</button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                </td>



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

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/certificates/index.blade.php ENDPATH**/ ?>