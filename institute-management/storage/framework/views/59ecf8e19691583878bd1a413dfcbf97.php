<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Courses</h3>
            <div class="float-right">
                <a href="<?php echo e(route('courses.create')); ?>" class="btn btn-primary">Add Course</a>
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
                        <h4 class="card-title">Course Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="course-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Category</th>
                                        <th>Duration</th>
                                        <th>Type</th>
                                        <th>Fee</th>
                                        <th>Status</th>
                                        <th>Skill Level</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key  + 1); ?></td>
                                        <td>

                                            <img src="<?php echo e(asset($course->image)); ?>" alt="" srcset="" height="70px"
                                                width="70px">
                                        </td>
                                        <td><?php echo e($course->title); ?></td>
                                        <td><?php echo e($course->category->name); ?></td>
                                        <td><?php echo e($course->duration); ?></td>
                                        <td><?php echo e($course->type); ?></td>
                                        <td><?php echo e($course->fee); ?></td>
                                        <td><?php echo e($course->status ? 'Active' : 'Inactive'); ?></td>
                                        <td><?php echo e($course->skill_level); ?></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>
                                                        <a href="<?php echo e(route('courses.show', $course->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('courses.edit', $course->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('courses.destroy', $course->id)); ?>"
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/courses/index.blade.php ENDPATH**/ ?>