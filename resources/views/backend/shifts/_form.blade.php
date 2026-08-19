<!-- resources/views/shifts/_form.blade.php -->
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $shift->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="start_time">Start Time</label>
    <input type="time" name="start_time" class="form-control" value="{{ old('start_time', $shift->start_time ?? '') }}"
        required>
</div>

<div class="form-group">
    <label for="end_time">End Time</label>
    <input type="time" name="end_time" class="form-control" value="{{ old('end_time', $shift->end_time ?? '') }}"
        required>
</div>