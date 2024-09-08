<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Enquiries</h3>
            <div class="float-right">
                <a href="<?php echo e(route('enquiries.create')); ?>" class="btn btn-primary">Add Enquiry</a>
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
                        <h4 class="card-title">Enquiry Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="enquiry-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Preferred Time</th>
                                        <th>Course</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $enquiries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $enquiry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($enquiry->name); ?></td>
                                        <td><?php echo e($enquiry->father_name); ?></td>
                                        <td><?php echo e($enquiry->email); ?></td>
                                        <td><?php echo e($enquiry->mobile); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($enquiry->preferred_time)->format('h:i A')); ?></td>
                                        <td><?php echo e($enquiry->course->title); ?></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="<?php echo e(route('enquiries.show', $enquiry->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('enquiries.edit', $enquiry->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('enquiries.destroy', $enquiry->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="dropdown-item">Delete</button>
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/enquiries/index.blade.php ENDPATH**/ ?>