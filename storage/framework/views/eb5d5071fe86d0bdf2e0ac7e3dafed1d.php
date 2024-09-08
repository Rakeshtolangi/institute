<!-- resources/views/batches/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" value="<?php echo e(old('title', $batch->title ?? '')); ?>"
                required>

        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" class="form-control"
                value="<?php echo e(old('start_date', $batch->start_date ?? '')); ?>" required>
        </div>

    </div>


    <div class="col-md-6">
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control"
                value="<?php echo e(old('end_date', $batch->end_date ?? '')); ?>" required>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"><?php echo e(old('description', $batch->description ?? '')); ?></textarea>
        </div>
    </div>

</div><?php /**PATH C:\xampp\htdocs\institute\institute-management\resources\views/backend/batches/_form.blade.php ENDPATH**/ ?>