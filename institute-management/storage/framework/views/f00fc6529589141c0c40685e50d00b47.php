

<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Add Payroll</h3>
             

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
                            <h4 class="card-title">Payroll Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo e(route('payrolls.index')); ?>" method="get">

                                <div class="row g-3">
                                    <!-- Select Designations -->
                                    <div class="col-md-6">
                                        <label for="role_id">Select Role</label>
                                        <select name="role_id" id="role_id" class="form-control" required>
                                            <option value="">-- Select Role --</option>
                                            <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <?php if($role->id != 18): ?>
                                                <option value="<?php echo e($role->id); ?>"><?php echo e($role->name); ?></option>

                                                <?php endif; ?>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>

                                    <!-- Select Month -->
                                    

                                    <!-- Select Year -->
                                    
                                    <div class="col-md-6 mt-4">
                                        <button type="submit" class="mt-3 btn btn-primary" style="float: right">Generate Payroll</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Lists</h4>
                        </div>
                        <div class="card-body">

                            <dv class="table-responsive">

                                <table class="table table-borderd">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Name</th>
                                            <th>Email</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($key + 1); ?></td>
                                                <td><?php echo e($user->name); ?></td>

                                                <td><?php echo e($user->email); ?></td>
                                                <td>
                                                    <div class="btn-group dropstart">
                                                        <button type="button" class="btn dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="false"
                                                            aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i> </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>

                                                                <a href="<?php echo e(route('payrolls.create',['id' => $user->id])); ?>"
                                                                    class="dropdown-item">Add Payment</a>

                                                                <a href="<?php echo e(route('payrolls.list',['userId' => $user->id])); ?>" class="dropdown-item">view Payment</a>

                                                                <form action="<?php echo e(route('payrolls.destroy', $user->id)); ?>"
                                                                    method="POST">
                                                                    <?php echo csrf_field(); ?>
                                                                    <?php echo method_field('DELETE'); ?>
                                                                    <button type="submit"
                                                                        class="dropdown-item">Delete</button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </dv>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/payrolls/index.blade.php ENDPATH**/ ?>