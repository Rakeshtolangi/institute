<!-- resources/views/backend/expenseCategories/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Category Title</label>
        <input type="text" name="title" id="title" class="form-control" value="<?php echo e(old('title', $expenseCategory->title ?? '')); ?>" required>
    </div>

    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control"><?php echo e(old('description', $expenseCategory->description ?? '')); ?></textarea>
    </div>
</div>
<?php /**PATH C:\laragon\www\institute-management\resources\views/backend/expenseCategories/_form.blade.php ENDPATH**/ ?>