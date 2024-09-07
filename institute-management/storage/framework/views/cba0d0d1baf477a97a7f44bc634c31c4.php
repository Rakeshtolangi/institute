<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Student</h3>
            <!-- alert edit message   -->
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
                        <h4 class="card-title">Student Details</h4>
                    </div>
                    <div class="card-body">

                        <form action="<?php echo e(route('students.update', $student->id)); ?>" method="POST"  enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="row g-3">
                            <div class="col-md-6">
                                    <label for="admission_number">Admission No.</label>
                                    <input type="text" name="admission_number" id="admission_number" class="form-control" value="<?php echo e($student->admission_number); ?>" readonly>
                                </div>
                                    <div class="col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control"
                                        value="<?php echo e($student->name); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="father_name">Father's Name</label>
                                    <input type="text" name="father_name" id="father_name" class="form-control"
                                        value="<?php echo e($student->father_name); ?>">
                                </div>
                          
                                <div class="col-md-6">
                                    <label for="dob">Date of Birth</label>
                                    <input type="date" name="dob" id="dob" class="form-control"
                                        value="<?php echo e($student->dob); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control"
                                        value="<?php echo e($student->email); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for=" mobile">Mobile Number</label>
                                    <input type="text" name="mobile" id="mobile" class="form-control"
                                        value="<?php echo e($student->mobile); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="gender">Gender</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="male" <?php echo e($student->gender == 'male' ? 'selected' : ''); ?>>Male
                                        </option>
                                        <option value="female" <?php echo e($student->gender == 'female' ? 'selected' : ''); ?>>
                                            Female</option>
                                    </select>
                                </div>
                             <!-- image section -->
                                
                             
                             
                             
                             <div class="col-md-6">
                                    <label for="image">Image</label>
                                    <input type="file" name="image" id="image" class="form-control">
                                </div>

                                <div class="col-md-6">
                                    <label for="course_id">Course</label>
                                    <select name="course_id" id="course_id" class="form-control">
                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($course->id); ?>"
                                            <?php echo e($student->course_id  == $course->id ? 'selected' : ''); ?>>
                                            <?php echo e($course->title); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>

                                <div class="col-md-6 mb-2">
                                    <label for="batch_id">Batch</label>
                                    <select name="batch_id" id="batch_id" class="form-control">
                                        <option value="">Choose..</option>
                                        <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($batch->id); ?>"
                                            <?php echo e($student->batch_id  == $batch->id ? 'selected' : ''); ?>>
                                            <?php echo e($batch->title); ?>

                                        </option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    </select>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label for="course_fee">Course Fee</label>
                                    <input type="number" name="course_fee" id="course_fee" class="form-control"
                                        value="<?php echo e($student->course_fee); ?>">
                                </div>

                                <div class="col-md-6">
                                    <label for="student_fee">Student Fee</label>
                                    <input type="number" name="student_fee" id="student_fee" class="form-control"
                                        value="<?php echo e($student->student_fee); ?>">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/students/edit.blade.php ENDPATH**/ ?>