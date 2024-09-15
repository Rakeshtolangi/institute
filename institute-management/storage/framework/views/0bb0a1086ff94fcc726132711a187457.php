<style>
    .ul-lists{
        list-style:none;
    }
    .ul-lists li{
        display:inline-block !important;
        margin-bottom:5px;
    }
    .li-items{
        background: #83adff;
    color: white;
    border-radius: 5px;
    width: fit-content;
    padding: 0px 5px 0 5px;
    }
     
</style>
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Roles</h3>
            <div class="float-right">
                <a href="<?php echo e(route('roles.create')); ?>" class="btn btn-primary">Add Role</a>
            </div>
        </div>
        <?php $__sessionArgs = ['success'];
if (session()->has($__sessionArgs[0])) :
if (isset($value)) { $__sessionPrevious[] = $value; }
$value = session()->get($__sessionArgs[0]); ?>
        <div class="alert alert-success" role="alert">
            <?php echo e($value); ?>

        </div>
        <?php unset($value);
if (isset($__sessionPrevious) && !empty($__sessionPrevious)) { $value = array_pop($__sessionPrevious); }
if (isset($__sessionPrevious) && empty($__sessionPrevious)) { unset($__sessionPrevious); }
endif;
unset($__sessionArgs); ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Role Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="expense-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th scope="col">S.N</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Permissions</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__empty_1 = true; $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <th scope="row"><?php echo e($loop->iteration); ?></th>
                                        <td><?php echo e($role->name); ?></td>
                                        <td>
                                            <ul class="ul-lists">
                                                <?php $__empty_2 = true; $__currentLoopData = $role->permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_2 = false; ?>
                                                <li class="li-items"><?php echo e($permission->name); ?></li>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_2): ?>
                                                <?php endif; ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <form action="<?php echo e(route('roles.destroy', $role->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <?php echo method_field('DELETE'); ?>

                                                <?php if($role->name!='Super Admin'): ?>
                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('edit-role')): ?>
                                                <a href="<?php echo e(route('roles.edit', $role->id)); ?>"
                                                    class="btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i>
                                                    Edit</a>
                                                <?php endif; ?>

                                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('delete-role')): ?>
                                                <?php if($role->name!=Auth::user()->hasRole($role->name)): ?>
                                                <button type="submit" class="btn btn-danger btn-sm"
                                                    onclick="return confirm('Do you want to delete this role?');"><i
                                                        class="bi bi-trash"></i> Delete</button>
                                                <?php endif; ?>
                                                <?php endif; ?>
                                                <?php endif; ?>

                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <td colspan="3">
                                        <span class="text-danger">
                                            <strong>No Role Found!</strong>
                                        </span>
                                    </td>
                                    <?php endif; ?>
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/roles/index.blade.php ENDPATH**/ ?>