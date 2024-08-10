<!-- resources/views/backend/courses/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Course Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $course->title ?? '') }}"
            required>
    </div>

    <div class="col-md-6">
        <label for="category_id">Category</label>
        <select name="category_id" id="category_id" class="form-control" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ (old('category_id') ?? $course->category_id ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="duration">Duration</label>
        <input type="text" name="duration" id="duration" class="form-control"
            value="{{ old('duration', $course->duration ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="type">Type</label>
        <input type="text" name="type" id="type" class="form-control" value="{{ old('type', $course->type ?? '') }}"
            required>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="fee">Fee</label>
        <input type="number" name="fee" id="fee" class="form-control" value="{{ old('fee', $course->fee ?? '') }}"
            required>
    </div>

    <div class="col-md-6">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            <option value="1" {{ (old('status') ?? $course->status ?? '') == 1 ? 'selected' : '' }}>Active</option>
            <option value="0" {{ (old('status') ?? $course->status ?? '') == 0 ? 'selected' : '' }}>Inactive</option>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="skill_level">Skill Level</label>
        <input type="text" name="skill_level" id="skill_level" class="form-control"
            value="{{ old('skill_level', $course->skill_level ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
        @if(isset($course) && $course->image)
        <img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="mt-2" width="100">
        @endif
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4"
            required>{{ old('description', $course->description ?? '') }}</textarea>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-12">
        <label for="outcome">Outcome</label>
        <textarea name="outcome" id="outcome" class="form-control" rows="4"
            required>{{ old('outcome', $course->outcome ?? '') }}</textarea>
    </div>
</div>