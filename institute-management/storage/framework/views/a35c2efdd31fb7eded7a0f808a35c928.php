<!-- resources/views/backend/teachers/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="<?php echo e(old('name')); ?>">
    </div>

    <div class="col-md-6">
        <label for="father_name">Father Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control" value="<?php echo e(old('father_name')); ?>">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="<?php echo e(old('email')); ?>">
    </div>

    <div class="col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="phone">Mobile Number</label>
        <input type="text" name="phone" id="phone" class="form-control" value="<?php echo e(old('phone')); ?>">
    </div>

    <div class="col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male" <?php echo e(old('gender') == 'male' ? 'selected' : ''); ?>>Male</option>
            <option value="female" <?php echo e(old('gender') == 'female' ? 'selected' : ''); ?>>Female</option>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="<?php echo e(old('dob')); ?>">
    </div>

    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="<?php echo e(old('address')); ?>">
    </div>
    <div class="col-md-6">
        <label for="designation">Designation</label>
        <select name="designation_id" id="designation" class="form-control">
            <option value="">Choose..</option>
            <?php $__currentLoopData = $designations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $designation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($designation->id); ?>" <?php echo e(old('designation_id') == $designation->id ? 'selected' : ''); ?>>
                <?php echo e($designation->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="course">Course</label>
        <select name="course_id" id="course" class="form-control">
            <option value="">Choose..</option>
            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>" <?php echo e(old('course_id') == $course->id ? 'selected' : ''); ?>>
                <?php echo e($course->title); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

    <div class="col-md-6">
        <label for="batch_id">Batch</label>
        <select name="batch_id" id="batch_id" class="form-control" required>
            <option value="">Choose..</option>
            <?php $__currentLoopData = $batches; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $batch): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($batch->id); ?>">
                <?php echo e($batch->title); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>

</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" class="form-control"
            value="<?php echo e(old('qualification')); ?>">
    </div>

    <div class="col-md-6">
        <label for="experience">Experience in Years</label>
        <input type="text" name="experience" id="experience" class="form-control" value="<?php echo e(old('experience')); ?>">
    </div>

    <div class="col-md-6">
        <label for="date_of_join">Date of Join</label>
        <input type="date" name="date_of_join" id="date_of_join" class="form-control"
            value="<?php echo e(old('date_of_join', date('Y-m-d'))); ?>">
    </div>

    <!-- docx upload section -->
    <div class="col-md-6">
        <label for="documents">Documents</label>
        <input type="file" name="doc_file" id="documents" class="form-control" accept="pdf">
    </div>
</div><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/teachers/_form.blade.php ENDPATH**/ ?>