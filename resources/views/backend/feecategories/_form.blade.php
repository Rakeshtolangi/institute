<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Fee Category Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $feeCategory->title ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4" required>{{ old('description', $feeCategory->description ?? '') }}</textarea>
    </div>
</div>

