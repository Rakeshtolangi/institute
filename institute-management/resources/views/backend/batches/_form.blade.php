<!-- resources/views/batches/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" value="{{ old('title', $batch->title ?? '') }}" required>
    </div>

    <div class="form-group">
        <label for="start_date">Start Date</label>
        <input type="date" name="start_date" class="form-control"
            value="{{ old('start_date', $batch->start_date ?? '') }}" required>
    </div>

</div>

<div class="row g-3">
    <div class="col-md-6">
        <div class="form-group">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" class="form-control"
                value="{{ old('end_date', $batch->end_date ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" class="form-control"
                required>{{ old('description', $batch->description ?? '') }}</textarea>
        </div>
    </div>