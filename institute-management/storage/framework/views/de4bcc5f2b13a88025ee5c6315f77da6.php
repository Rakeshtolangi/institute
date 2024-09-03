<div class="row g-3">
    <div class="form-group col-md-6 mb-2">
        <label for="admission_number">Admission No.</label>
        <input type="text" name="admission_number" id="admission_number" class="form-control" value="<?php echo e(old('admission_number', $admission_number ?? '')); ?>" readonly>
    </div>
    <div class="col-md-6 mb-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for=" mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male"> Male</option>
            <option value="female">>Female
            </option>
        </select>
    </div>

    <!-- image section -->
    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <!-- docx upload section -->
    <div class="col-md-6">
        <label for="documents">Documents</label>
        <input type="file" name="doc_file" id="documents" class="form-control">
    </div>

    <div class="col-md-6 mb-2">
        <label for="course_id">Course</label>
        <select name="course_id" id="course_id" class="form-control">
        <option value="">Choose..</option>

        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($course->id); ?>">
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
        <option value="<?php echo e($batch->id); ?>">
            <?php echo e($batch->title); ?>

        </option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </select>
    </div>
    
    <div class="col-md-6 mb-2">
        <label for="course_fee">Course Fee</label>
        <input type="number" name="course_fee" id="course_fee" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for="student_fee">Student Fee</label>
        <input type="number" name="student_fee" id="student_fee" class="form-control" value="">
    </div>
</div><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/students/_form.blade.php ENDPATH**/ ?>