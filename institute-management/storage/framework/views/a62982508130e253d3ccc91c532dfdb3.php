<?php $__env->startSection('content'); ?>
<div class="container">


    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Teacher</h3>
            <div class="float-right">
                <a href="<?php echo e(route('teachers.create')); ?>" class="btn btn-primary">Add Teacher</a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Teachers Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="student-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>father_name</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>gender</th>
                                        <th>dob</th>
                                        <th>image</th>
                                        <th>address</th>
                                        <th>course</th>
                                        <th>Batch</th>
                                        <th>qualification</th>
                                        <th>experience</th>
                                        <th>date_of_join</th>
                                        <th>designation</th>


                                        
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $teachers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $teacher): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key  + 1); ?></td>
                                        <td>

<img src="<?php echo e(asset($teacher->image)); ?>" alt="" srcset="" height="70px"
    width="70px">
</td>
                                        <td>
                                            <a href="<?php echo e(route('teachers.show', $teacher->id)); ?>">
                                                <?php echo e($teacher->name); ?>

                                            </a>
                                        </td>
                                        <td><?php echo e($teacher->father_name); ?></td>
                                        <td><?php echo e($teacher->email); ?></td>
                                        <td><?php echo e($teacher->phone); ?></td>
                                        <td><?php echo e($teacher->gender); ?></td>
                                        <td><?php echo e($teacher->dob); ?></td>
                                
                                        <td><?php echo e($teacher->address); ?></td>
                                        <td><?php echo e($teacher->course->title); ?></td>
                                        <td><?php echo e($teacher->batch->title); ?></td>
                                        <td><?php echo e($teacher->qualification); ?></td>
                                        <td><?php echo e($teacher->experience); ?></td>
                                        <td><?php echo e($teacher->date_of_join); ?></td>
                                        <td><?php echo e($teacher->designation->name ?? 'No Designation'); ?></td>
                                        
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="<?php echo e(route('teachers.show', $teacher->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('teachers.edit', $teacher->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('teachers.destroy', $teacher->id)); ?>"
                                                            method="POST">
                                                            <?php echo csrf_field(); ?>
                                                            <?php echo method_field('DELETE'); ?>
                                                            <button type="submit" class="
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/teachers/index.blade.php ENDPATH**/ ?>