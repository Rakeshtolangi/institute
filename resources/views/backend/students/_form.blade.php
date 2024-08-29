<div class="row g-3">
    <div class="form-group col-md-6 mb-2">
        <label for="admission_number">Admission No.</label>
        <input type="text" name="admission_number" id="admission_number" class="form-control" value="{{ old('admission_number', $admission_number ?? '') }}" readonly>
    </div>
    <div class="col-md-6 mb-2">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="father_name">Father's Name</label>
        <input type="text" name="father_name" id="father_name" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for="dob">Date of Birth</label>
        <input type="date" name="dob" id="dob" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for=" mobile">Mobile Number</label>
        <input type="text" name="mobile" id="mobile" class="form-control" value="">
    </div>

    <div class="col-md-6 mb-2">
        <label for="gender">Gender</label>
        <select name="gender" id="gender" class="form-control">
            <option value="male"> Male</option>
            <option value="female">>Female
            </option>
        </select>
    </div>

    <!-- image section -->
    <div class="col-md-6">
        <label for="image">Image</label>
        <input type="file" name="image" id="image" class="form-control">
    </div>

    <!-- docx upload section -->
    <div class="col-md-6">
        <label for="documents">Documents</label>
        <input type="file" name="doc_file" id="documents" class="form-control">
    </div>

    <div class="col-md-6 mb-2">
        <label for="course_id">Course</label>
        <select name="course_id" id="course_id" class="form-control">
        <option value="">Choose..</option>

        @foreach ($courses as $course)
        <option value="{{ $course->id }}">
            {{ $course->title }}
        </option>
        @endforeach 
        
        </select>
    </div>
    <div class="col-md-6 mb-2">
        <label for="batch_id">Batch</label>
        <select name="batch_id" id="batch_id" class="form-control">
            <option value="">Choose..</option>
          @foreach ($batches as $batch)
        <option value="{{ $batch->id }}">
            {{ $batch->title }}
        </option>
        @endforeach 
        </select>
    </div>
    
    <div class="col-md-6 mb-2">
        <label for="course_fee">Course Fee</label>
        <input type="number" name="course_fee" id="course_fee" class="form-control" value="">
    </div>


    <div class="col-md-6 mb-2">
        <label for="student_fee">Student Fee</label>
        <input type="number" name="student_fee" id="student_fee" class="form-control" value="">
    </div>
</div>