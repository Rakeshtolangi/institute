<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Record Attendance</h3>
        </div>

        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>

        <form action="<?php echo e(route('attendance.index')); ?>" method="GET">
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

                <!-- <div class="col-md-4">
                    <label for="search">Search Student</label>
                    <input type="text" name="search" id="search" class="form-control" value=""
                        placeholder="Enter student name...">
                </div> -->
            </div>
        </form>

  
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header d-flex">
                        
                        <div class="col-10">
                        <h4 class="card-title">Students</h4>

                        </div>
                           <div class="col-2">
                            <label for="select-att"><?php echo e(__('Select')); ?></label>
                            <select name="attendance" id="select-att" class="form-control" onchange="updateRadio()">
                                <option value="">Choose...</option>
                            <option value="present">Present</option>
                            <option value="absent">Absent</option>
                            </select>
                           </div>
                       
                        </div>
                        <form action="<?php echo e(route('attendance.store')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <div class="card-body">
                            <table class="datatables table table-striped" id="attendance-table">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                             
                                    <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key + 1); ?></td>
                                        <td><?php echo e($student->name); ?></td>
                                        <td><?php echo e($student->email); ?></td>
                                        <td><?php echo e($student->mobile); ?></td>
                                        <td>
                                            <input type="hidden" name="student_id[]" value="<?php echo e($student->id); ?>">
                                            <input type="radio" name="status[<?php echo e($key); ?>]" id="attendance-present-<?php echo e($key); ?>" value="present"> Present
                                            <input type="radio" name="status[<?php echo e($key); ?>]" id="attendance-absent-<?php echo e($key); ?>" value="absent"> Absent
                                        </td>

                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            

                                </tbody>
                            </table>
                            <input type="hidden" name="course_id" id="" value="<?php echo e($selectedCourse); ?>">
                            <input type="hidden" name="batch_id" id="" value="<?php echo e($selectedBatch); ?>">
                            <button type="submit" class="btn btn-primary mt-3">Record Attendance</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<script>
    function updateRadio() {
        // Get the selected value from the dropdown
        var selectedValue = document.getElementById('select-att').value;

        // Loop through all students
        <?php $__currentLoopData = $students; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            // Get the radio buttons for each student
            var presentRadio = document.getElementById('attendance-present-<?php echo e($key); ?>');
            var absentRadio = document.getElementById('attendance-absent-<?php echo e($key); ?>');

            // Check the radio button based on the selected value
            if (selectedValue === 'present') {
                presentRadio.checked = true;
            } else if (selectedValue === 'absent') {
                absentRadio.checked = true;
            }
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    }
</script>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/attandance/index.blade.php ENDPATH**/ ?>