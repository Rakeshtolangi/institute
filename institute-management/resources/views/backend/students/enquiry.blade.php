<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="">
    </div>

    <div class="col-md-6">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control" value="">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="">
    </div>

    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="">
    </div>

    <div class="col-md-6">
        <label for="preferred_time">Preferred Time</label>
        <input type="time" name="preferred_time" id="preferred_time" class="form-control" value="">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="course_id">Select Course</label>
        <select name="course_id" id="course_id" class="form-control">
            <!-- @foreach ($courses as $course)
            <option value="{{ $course->id }}"
                {{ (old('course_id') ?? $student->course_id ?? '') == $course->id ? 'selected' : '' }}>
                {{ $course->name }}
            </option>
            @endforeach -->
            <option value="1">Course 1</option>
            <option value="2">Course 2</option>
        </select>
    </div>
</div>

<div class="row g-3">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>