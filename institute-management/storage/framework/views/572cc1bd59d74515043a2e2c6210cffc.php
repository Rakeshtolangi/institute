<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Designation</h3>
      
        </div>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>


        <?php
        $id = $id ?? null;


        ?>

        <?php if(isset($id)): ?>
        <?php echo Form::model($data, [
            'route' => ['location.index', $id],
            'method' => 'patch',
            'enctype' => 'multipart/form-data',
            ]); ?>


        <?php else: ?>{ Form ::open (['location.store'], 'method'=>'post', 'enctype' => 'multipart/form-data') !! }
        <?php endif; ?>

        <div class="row">
            <!-- Add Designation Form (40% width) -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Designation</h4>
                    </div>

                    <div class="card-body">
                    <form action="<?php echo e(isset($designation) ? route('designations.update', $designation->id) : route('designations.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                            <!-- Title Input -->
                            <div class="mb-3">
                                <label for="name" class="form-label">Title</label>
                                <input type="text" name="name" id="name" class="form-control" required value="<?php echo e($designation->name ?? ''); ?>">
                            </div>

                            <!-- Description Input -->
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" class="form-control" value="<?php echo e($designation->descriptions ?? ''); ?>"></textarea>
                            </div>

                            <!-- Submit Button -->
                            <div class="mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Designation List (60% width) -->
            <div class="col-md-8">
                <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
                <?php endif; ?>
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Designation List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatables display  table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php $__empty_1 = true; $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($designation->name); ?></td>
                                        <td><?php echo e($designation->description); ?></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="<?php echo e(route('designations.show', $designation->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('designations.index', $designation->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('designations.destroy', $designation->id)); ?>"
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
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                    <tr>
                                        <td colspan="4" class="text-center">No designations found</td>
                                    </tr>


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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/designations/index.blade.php ENDPATH**/ ?>