<!-- resources/views/courses/edit.blade.php -->


<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Edit Course</h3>
        </div>
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('courses.update', $course->id)); ?>" method="POST"
                            enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" class="form-control"
                                    value="<?php echo e(old('title', $course->title ?? '')); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="category_id">Category</label>
                                <select name="category_id" class="form-control" required>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($category->id); ?>"
                                        <?php echo e($course->category_id == $category->id ? 'selected' : ''); ?>>
                                        <?php echo e($category->name); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="form-control">
                                <?php if($course->image): ?>
                                <img src="<?php echo e(asset('storage/' . $course->image)); ?>" alt="<?php echo e($course->title); ?>"
                                    width="100">
                                <?php endif; ?>
                            </div>

                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <input type="text" name="duration" class="form-control"
                                    value="<?php echo e(old('duration', $course->duration ?? '')); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" name="type" class="form-control"
                                    value="<?php echo e(old('type', $course->type ?? '')); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="fee">Fee</label>
                                <input type="number" name="fee" class="form-control"
                                    value="<?php echo e(old('fee', $course->fee ?? '')); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="status">Status</label>
                                <select name="status" class="form-control" required>
                                    <option value="1" <?php echo e($course->status == 1 ? 'selected' : ''); ?>>Active</option>
                                    <option value="0" <?php echo e($course->status == 0 ? 'selected' : ''); ?>>Inactive</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="skill_level">Skill Level</label>
                                <input type="text" name="skill_level" class="form-control"
                                    value="<?php echo e(old('skill_level', $course->skill_level ?? '')); ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control"
                                    required><?php echo e(old('description', $course->description ?? '')); ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="outcome">Outcome</label>
                                <textarea name="outcome" class="form-control"
                                    required><?php echo e(old('outcome', $course->outcome ?? '')); ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/courses/edit.blade.php ENDPATH**/ ?>