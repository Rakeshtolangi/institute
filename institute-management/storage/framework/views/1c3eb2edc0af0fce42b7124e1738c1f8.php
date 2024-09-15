<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Collect fees</h3>
        </div>

        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('fees.index')); ?>" method="GET">
            <div class="row">
                <div class="col-md-4">
                    <label for="course_id">Select Course</label>
                    <select name="course_id" id="course_id" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Select Course --</option>
                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($course->id); ?>" <?php echo e($selectedCourse == $course->id ? 'selected' : ''); ?>>
                            <?php echo e($course->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="batch_id">Select Batch</label>
                    <select name="batch_id" id="batch_id" class="form-control" onchange="this.form.submit()">
                        <option value="">-- Select Batch --</option>
                        <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($batch->id); ?>"  <?php echo e($selectedBatch == $batch->id ? 'selected' : ''); ?>>
                            <?php echo e($batch->title); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


            </div>
        </form>
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">

                        <div class="col-10">
                        <h4 class="card-title">Students</h4>
                        </div>
                        </div>
                      
                        <div class="card-body">
                            <div class="table-responsive">
                            <table class="datatables table table-striped" id="fees-table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Admission No.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($student->admission_number); ?></td>
                                        <td>
                                        <a href="<?php echo e(route('students.show', $student->id)); ?>">
                                            <?php echo e($student->name); ?>

                                        </a>
                                        </td>
                                        <td><?php echo e($student->email); ?></td>
                                        <td><?php echo e($student->mobile); ?></td>
                                        
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li>

                                                   

                                                    <a href="<?php echo e(route('fees.addpayment', $student->id)); ?>"
                                                    class="dropdown-item">Add Payment</a>
                                                
                                                        <a href="<?php echo e(route('fees.list', $student->id)); ?>"
                                                            class="dropdown-item">view Payment</a>

                                                        <form action="<?php echo e(route('students.destroy', $student->id)); ?>"
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
                            <input type="hidden" name="course_id" id="" value="<?php echo e($selectedCourse); ?>">
                            <input type="hidden" name="batch_id" id="" value="<?php echo e($selectedBatch); ?>">
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/fees/index.blade.php ENDPATH**/ ?>