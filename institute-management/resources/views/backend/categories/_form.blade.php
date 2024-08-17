<!-- resources/views/backend/categories/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Category Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $category->name ?? '') }}">
    </div>

    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description"
            class="form-control">{{ old('description', $category->description ?? '') }}</textarea>
    </div>
</div>