<div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $student->name ?? '') }}">
</div>

<div class="form-group">
    <label for="father_name">Father's Name</label>
    <input type="text" name="father_name" id="father_name" class="form-control"
        value="{{ old('father_name', $student->father_name ?? '') }}">
</div>

<div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob', $student->dob ?? '') }}">
</div>

<div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $student->email ?? '') }}">
</div>

<div class="form-group">
    <label for="mobile">Mobile Number</label>
    <input type="text" name="mobile" id="mobile" class="form-control"
        value="{{ old('mobile', $student->mobile ?? '') }}">
</div>

<div class="form-group">
    <label for="gender">Gender</label>
    <select name="gender" id="gender" class="form-control">
        <option value="male" {{ (old('gender') ?? $student->gender ?? '') == 'male' ? 'selected' : '' }}>Male</option>
        <option value="female" {{ (old('gender') ?? $student->gender ?? '') == 'female' ? 'selected' : '' }}>Female
        </option>
    </select>
</div>

<div class="form-group">
    <label for="course_id">Course</label>
    <select name="course_id" id="course_id" class="form-control">
        <!-- @foreach ($courses as $course)
        <option value="{{ $course->id }}"
            {{ (old('course_id') ?? $student->course_id ?? '') == $course->id ? 'selected' : '' }}>
            {{ $course->name }}
        </option>
        @endforeach -->
        <option value="1">
            1
        </option>
    </select>
</div>

<!-- <div class="form-group">
    <label for="batch_id">Batch</label>
</div> -->

<div class="form-group">
    <label for="course_fee">Course Fee</label>
    <input type="number" name="course_fee" id="course_fee" class="form-control"
        value="{{ old('course_fee', $student->course_fee ?? '') }}">
</div>

<div class="form-group">
    <label for="student_fee">Student Fee</label>
    <input type="number" name="student_fee" id="student_fee" class="form-control"
        value="{{ old('student_fee', $student->student_fee ?? '') }}">
</div>

<button type="submit" class="btn btn-primary">Submit</button>