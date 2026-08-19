<!-- resources/views/classes/_form.blade.php -->
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" class="form-control" value="{{ old('name', $class->name ?? '') }}" required>
</div>

<div class="form-group">
    <label for="course_id">Course</label>
    <select name="course_id" class="form-control" required>
        @foreach($courses as $course)
        <option value="{{ $course->id }}" {{ isset($class) && $class->course_id == $course->id ? 'selected' : '' }}>
            {{ $course->title }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="teacher_id">Teacher</label>
    <select name="teacher_id" class="form-control" required>
        @foreach($teachers as $teacher)
        <option value="{{ $teacher->id }}" {{ isset($class) && $class->teacher_id == $teacher->id ? 'selected' : '' }}>
            {{ $teacher->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="shift_id">Shift</label>
    <select name="shift_id" class="form-control" required>
        @foreach($shifts as $shift)
        <option value="{{ $shift->id }}" {{ isset($class) && $class->shift_id == $shift->id ? 'selected' : '' }}>
            {{ $shift->name }}
        </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="batch_id">Batch</label>
    <select name="batch_id" class="form-control" required>
        @foreach($batches as $batch)
        <option value="{{ $batch->id }}" {{ isset($class) && $class->batch_id == $batch->id ? 'selected' : '' }}>
            {{ $batch->title }}
        </option>
        @endforeach
    </select>
</div>