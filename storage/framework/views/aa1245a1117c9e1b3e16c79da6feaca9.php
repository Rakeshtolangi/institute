<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" 
               value="<?php echo e(old('name', $enquiry->name ?? '')); ?>" required>
    </div>

    <div class="col-md-6">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control"
               value="<?php echo e(old('father_name', $enquiry->father_name ?? '')); ?>" required>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" 
               value="<?php echo e(old('dob', $enquiry->dob ?? '')); ?>" required>
    </div>

    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control"
               value="<?php echo e(old('email', $enquiry->email ?? '')); ?>" required>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control"
               value="<?php echo e(old('mobile', $enquiry->mobile ?? '')); ?>" required>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="course_id">Course</label>
        <select name="course_id" id="course_id" class="form-control" required>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($course->id); ?>"
                    <?php echo e(old('course_id', $enquiry->course_id ?? '') == $course->id ? 'selected' : ''); ?>>
                    <?php echo e($course->title); ?>

                </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="col-md-6">
        <label for="preferred_time">Preferred Time</label>
        <input type="time" name="preferred_time" id="preferred_time" class="form-control" 
               value="<?php echo e(old('preferred_time', $enquiry->preferred_time ?? '')); ?>" required>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\Projects\institute\institute-management\resources\views/backend/enquiries/_form.blade.php ENDPATH**/ ?>