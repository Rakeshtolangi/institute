<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name', $enquiry->name ?? '')); ?>">
    </div>

    <div class="col-md-6">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control"
            value="<?php echo e(old('father_name', $enquiry->father_name ?? '')); ?>">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="<?php echo e(old('dob', $enquiry->dob ?? '')); ?>">
    </div>

    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control"
            value="<?php echo e(old('email', $enquiry->email ?? '')); ?>">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control"
            value="<?php echo e(old('mobile', $enquiry->mobile ?? '')); ?>">
    </div>

    <div class="col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male" <?php echo e(old('gender', $enquiry->gender ?? '') == 'male' ? 'selected' : ''); ?>>Male</option>
            <option value="female" <?php echo e(old('gender', $enquiry->gender ?? '') == 'female' ? 'selected' : ''); ?>>Female
            </option>
        </select>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="course_id">Course</label>
        <select name="course_id" id="course_id" class="form-control">
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>"
                <?php echo e(old('course_id', $enquiry->course_id ?? '') == $course->id ? 'selected' : ''); ?>>
                <?php echo e($course->title); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
    <div class="row g-3">
        <div class="col-md-6">
            <label for="preferred_time">Preferred Time</label>
            <input type="time" name="Prefered_time" class="form-control" value="<?php echo e(old('spreferred_time', $time->preferred_time ?? '')); ?>"
        required>
        </div>
    </div>
</div><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/enquiries/_form.blade.php ENDPATH**/ ?>