<!-- resources/views/backend/expenseCategories/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Category Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $expenseCategory->title ?? '') }}" required>
    </div>

    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control">{{ old('description', $expenseCategory->description ?? '') }}</textarea>
    </div>
</div>
