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
        <label for=" mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="">
    </div>

    <div class="col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male"> Male</option>
            <option value="female">Female
            </option>
        </select>
    </div>
</div>




<div class="row g-3">
    <div class="col-md-6">
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
            <option value="2">
                2
            </option>
        </select>
    </div>

    <!-- <div class="form-group">
        <label for="batch_id">Batch</label>
    </div> -->

    <div class="col-md-6">
        <label for="course_fee">Course Fee</label>
        <input type="number" name="course_fee" id="course_fee" class="form-control" value="">
    </div>

</div>

<div class="row g-3">
    <div class="col-md-5">
        <label for="student_fee">Student Fee</label>
        <input type="number" name="student_fee" id="student_fee" class="form-control" value="">
    </div>
</div>