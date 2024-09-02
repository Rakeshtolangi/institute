<!-- resources/views/backend/courses/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Course Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title', $course->title ?? '')); ?>"
            required>
    </div>

    <div class="col-md-6">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($category->id); ?>"
                <?php echo e((old('category_id') ?? $course->category_id ?? '') == $category->id ? 'selected' : ''); ?>>
                <?php echo e($category->name); ?>

            </option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="duration">Duration</label>
        <input type="number" name="duration" id="duration" class="form-control"
            value="<?php echo e(old('duration', $course->duration ?? '')); ?>" required>
    </div>

    <div class="col-md-6">
        <label for="type">Type</label>
        <select name="type" id="type" class="form-control" required>
            <option value="days">
                Days
            </option>
            <option value="months">
                Months
            </option>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="fee">Fee</label>
        <input type="number" name="fee" id="fee" class="form-control" value="<?php echo e(old('fee', $course->fee ?? '')); ?>"
            required>
    </div>

    <div class="col-md-6">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1" <?php echo e((old('status') ?? $course->status ?? '') == 1 ? 'selected' : ''); ?>>Active</option>
            <option value="0" <?php echo e((old('status') ?? $course->status ?? '') == 0 ? 'selected' : ''); ?>>Inactive</option>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="skill_level">Skill Level</label>
        <input type="text" name="skill_level" id="skill_level" class="form-control"
            value="<?php echo e(old('skill_level', $course->skill_level ?? '')); ?>" required>
    </div>

    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        <?php if(isset($course) && $course->image): ?>
        <img src="<?php echo e(asset('storage/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>" class="mt-2" width="100">
        <?php endif; ?>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"
            required><?php echo e(old('description', $course->description ?? '')); ?></textarea>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-12">
        <label for="outcome">Outcome</label>
        <textarea name="outcome" id="outcome" class="form-control" rows="4"
            required><?php echo e(old('outcome', $course->outcome ?? '')); ?></textarea>
    </div>
</div><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/courses/_form.blade.php ENDPATH**/ ?>