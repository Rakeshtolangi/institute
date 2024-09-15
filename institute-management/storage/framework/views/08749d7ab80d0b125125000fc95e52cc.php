<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Shifts</h3>
            <div class="float-right">
                <a href="<?php echo e(route('shifts.create')); ?>" class="btn btn-primary">Create Shift</a>
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
                        <h4 class="card-title">Shift List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="shifts-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th class="no-sorting">Actions</th> <!-- Updated to use dropdown for actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $shifts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $shift): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($shift->name); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($shift->start_time)->format('h:i A')); ?></td>
                                        <td><?php echo e(\Carbon\Carbon::parse($shift->end_time)->format('h:i A')); ?></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="<?php echo e(route('shifts.show', $shift->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('shifts.edit', $shift->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('shifts.destroy', $shift->id)); ?>"
                                                            method="POST" style="display:inline;">
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

<?php $__env->startPush('scripts'); ?>
<script>
$(document).ready(function() {
    $('#shifts-datatables').DataTable({
        "order": [
            [0, 'asc']
        ],
        // Additional DataTables options can be added here
    });
});
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/shifts/index.blade.php ENDPATH**/ ?>