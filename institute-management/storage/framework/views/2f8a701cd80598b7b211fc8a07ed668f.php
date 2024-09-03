<?php $__env->startSection('content'); ?>
<div class="container">

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Students</h3>
            <div class="float-right">
                <a href="<?php echo e(route('students.create')); ?>" class="btn btn-primary">Add Student</a>

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
                        <h4 class="card-title">Student Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="student-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Admission number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile no.</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Gender</th>
                                        <th>Course Fee</th>
                                        <th>Student Fee</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key  + 1); ?></td>
                                        <td><img src="<?php echo e(asset($student->image)); ?>" alt="" width="70" height="70"></td>
                                        <td><?php echo e($student->admission_number); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('students.show', $student->id)); ?>">
                                                <?php echo e($student->name); ?>

                                            </a>
                                        </td>
                                        <td><?php echo e($student->email); ?></td>
                                        <td><?php echo e($student->mobile); ?></td>
                                        <td><?php echo e($student->course->title); ?></td>
                                        <td><?php echo e($student->batch->title); ?></td>
                                        <td><?php echo e($student->gender); ?></td>
                                        <td><?php echo e($student->course_fee); ?></td>
                                        <td><?php echo e($student->student_fee); ?></td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="<?php echo e(route('students.show', $student->id)); ?>"
                                                            class="dropdown-item">View</a>
                                                        <a href="<?php echo e(route('students.edit', $student->id)); ?>"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>"
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
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/students/index.blade.php ENDPATH**/ ?>