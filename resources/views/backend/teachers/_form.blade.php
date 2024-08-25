<!-- resources/views/backend/teachers/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
    </div>

    <div class="col-md-6">
        <label for="father_name">Father Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control" value="{{ old('father_name') }}">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
    </div>

    <div class="col-md-6">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="form-control">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="phone">Mobile Number</label>
        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}">
    </div>

    <div class="col-md-6">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
            <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="{{ old('dob') }}">
    </div>

    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="address">Address</label>
        <input type="text" name="address" id="address" class="form-control" value="{{ old('address') }}">
    </div>
    <div class="col-md-6">
        <label for="designation">Designation</label>
        <select name="designation_id" id="designation" class="form-control">
            <option value="">Choose..</option>
            @foreach($designations as $designation)
            <option value="{{ $designation->id }}" {{ old('designation_id') == $designation->id ? 'selected' : '' }}>
                {{ $designation->name }}
            </option>
            @endforeach
        </select>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="course">Course</label>
        <select name="course_id" id="course" class="form-control">
            <option value="">Choose..</option>
            @foreach($courses as $course)
            <option value="{{ $course->id }}" {{ old('course_id') == $course->id ? 'selected' : '' }}>
                {{ $course->title }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="batch_id">Batch</label>
        <select name="batch_id" id="batch_id" class="form-control" required>
            <option value="">Choose..</option>
            @foreach ($batches as $batch)
            <option value="{{ $batch->id }}">
                {{ $batch->title }}
            </option>
            @endforeach
        </select>
    </div>

</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="qualification">Qualification</label>
        <input type="text" name="qualification" id="qualification" class="form-control"
            value="{{ old('qualification') }}">
    </div>

    <div class="col-md-6">
        <label for="experience">Experience in Years</label>
        <input type="text" name="experience" id="experience" class="form-control" value="{{ old('experience') }}">
    </div>

    <div class="col-md-6">
        <label for="date_of_join">Date of Join</label>
        <input type="date" name="date_of_join" id="date_of_join" class="form-control"
            value="{{ old('date_of_join', date('Y-m-d')) }}">
    </div>
</div>