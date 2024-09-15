<div class="col-md-7">
    <div class="student-details" style="border:1px solid #ced4da; border-radius:5px; padding:10px;">


    <h2>Teacher Details</h2>
    <h5>Name: {{$userDetails->name}}</h5>
    <h5>Email: {{$userDetails->email}}</h5>
    <h5>Phone No.: {{$userDetails->teacher->phone}}</h5>
    <h5>gender: {{$userDetails->teacher->gender}}</h5>

    </div>
    <div class="student-details mt-2" style="border:1px solid #ced4da; border-radius:5px; padding:10px;">


        <h2>Course Enrolled</h2>
        <table class="table table-border">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th>Name</th>
                    <th>Collected Amt.</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($courses as $key=>$course)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$course->title}}</td>
                        <td>{{$totalAmount}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        </div>
</div>

<div class="col-md-5">
    <div class="row">
<div class="form-group col-md-12">
    <label for="receipt_no">Receipt No.</label>
    <input type="text" name="receipt_no" id="receipt_no" class="form-control" value="{{$reciept_no}}" readonly>
</div>

<div class="form-group col-md-6">
    <label for="date">Date</label>
    <input type="date" name="date" id="date" class="form-control" value="" required>
</div>
<div class="form-group col-md-6">
    <label for="type">Type</label>

    <select name="type" id="type" class="form-control">
        <option value="">Choose...</option>
        <option value="percentage">Percentage</option>
        <option value="flat">Flat</option>
    </select>

</div>

<div class="form-group col-md-12">
    <label for="course_id">Course</label>
    <select name="course_id" id="" class="form-control">
        @foreach ($courses as $item)
            <option value="{{$course->id}}">{{$course->title}}</option>
        @endforeach
    </select>
</div>






<div class="form-group col-md-12">
    <label for="amount">Amount or %</label>
    <input type="number" name="amount" id="amount" class="form-control" value="" required>
</div>

<div class="form-group col-md-12">
    <label for="remarks">Remarks</label>
    <textarea name="remarks" id="remarks" class="form-control"></textarea>
</div>
</div>
</div>