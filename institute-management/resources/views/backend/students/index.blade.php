@extends('layouts.backend')
<style>
.file-uploader {
    background-color: #dbefe9;
    border-radius: 3px;
    color: #242424;
}

.file-uploader__message-area {
    font-size: 18px;
    padding: 1em;
    text-align: left;
    color: #377a65;
}

.file-list {
    background-color: #fff;
    font-size: 16px;
}

.file-list__name {
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}

.file-list li {
    height: 50px;
    line-height: 50px;
    margin-left: 0.5em;
    border: none;
    overflow: hidden;
}

.removal-button {
    width: 20%;
    border: none;
    background-color: #d65d38;
    color: white;
}

.removal-button::before {
    content: "X";
}

.removal-button:focus {
    outline: 0;
}

.file-chooser {
    padding: 1em;
    transition: background-color 1s, height 1s;
}

.file-chooser p {
    font-size: 18px;
    padding-top: 1em;
}

.file-uploader {
    max-width: 400px;
    height: auto;
    margin: 2em auto;
}

.file-uploader * {
    display: block;
}

.file-uploader input[type="submit"] {
    margin-top: 2em;
    float: right;
}

.file-list {
    margin: 0 auto;
    max-width: 90%;
}

.file-list__name {
    max-width: 70%;
    float: left;
}

.removal-button {
    display: inline-block;
    height: 100%;
    float: right;
}

.file-chooser {
    width: 90%;
    margin: 0.5em auto;
}

.file-chooser__input {
    margin: 0 auto;
}

.file-uploader__submit-button {
    width: 100%;
    border: none;
    font-size: 1.5em;
    padding: 1em;
    background-color: #0d6efd;
    color: white;
}

.file-uploader__submit-button:hover {
    background-color: #0249b1;
}

.file-list li:after,
.file-uploader:after {
    content: "";
    display: table;
    clear: both;
}

.hidden {
    display: none;
}

.hidden input {
    display: none;
}

.error {
    background-color: #d65d38;
    color: white;
}

*,
*::before,
*::after {
    box-sizing: border-box;
}

ul,
li {
    margin: 0;
    padding: 0;
}
</style>
@section('content')
<div class="container">

    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Manage Students</h3>
            <div class="float-right">
                <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>

            </div>

        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Student Lists</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table id="student-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Image</th>
                                        <th>Admission number</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Mobile no.</th>
                                        <th>Course</th>
                                        <th>Batch</th>
                                        <th>Gender</th>
                                        <th>Course Fee</th>
                                        <th>Student Fee</th>
                                        <th class="no-sorting">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $key => $student)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td><img src="{{asset($student->image)}}" alt="" width="70" height="70"></td>
                                        <td>{{ $student->admission_number }}</td>
                                        <td>
                                            <a href="{{ route('students.show', $student->id) }}">
                                                {{ $student->name }}
                                            </a>
                                        </td>
                                        <td>{{ $student->email }}</td>
                                        <td>{{ $student->mobile }}</td>
                                        <td>{{ $student->course->title }}</td>
                                        <td>{{ $student->batch->title }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->course_fee }}</td>
                                        <td>{{ $student->student_fee }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn  dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i> </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('students.show', $student->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('students.edit', $student->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <a href="" data-bs-toggle="modal"
                                                            data-bs-target="#uploadDocuments" id="{{$student->id}}"
                                                            class="dropdown-item uploadDocuments">Upload Documents</a>
                                                        <form action="{{ route('students.destroy', $student->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="
                                                                dropdown-item">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>

                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- upload student documents -->
<!-- Modal -->
<div class="modal fade" id="uploadDocuments" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Upload Documents</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('students.uploadDocuments', $student->id) }}" method="POST"  enctype="multipart/form-data">

                @csrf
                <div class="modal-body">
                    <form method="post" class="file-uploader" action="" enctype="multipart/form-data">
                        <div class="file-uploader__message-area">
                            <p>Only Support PDF Files.</p>
                        </div>
                        <div class="file-chooser">
                            <input class="file-chooser__input" type="file" name="files[]" multiple>
                        </div>
                        <input type="text" name="student_id" id="" value="" class="studentId">
                        <input class="file-uploader__submit-button" type="submit" value="Submit">
                    </form>
                </div>


        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
$(document).ready(function(e)  {
    $(document).on('click', '.uploadDocuments', function(e) {
      var id = $(this).attr('id');
     $('.studentId').val(id);
});
})
</script>