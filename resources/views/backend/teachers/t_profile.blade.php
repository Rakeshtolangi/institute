@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <!-- 40% Width for Teacher Details -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $teacher->name }}</h4>
                        <!-- <img src="{{asset($teacher->image)}}" alt="" srcset="" height="70px"
                                                width="70px"> -->
                        <img class="rounded-circle" alt="avatar1" src="{{asset($teacher->image)}}" srcset=""
                            height="150px" width="150px" />

                        <p><strong>Email:</strong> {{ $teacher->email }}</p>
                        <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
                        <p><strong>Gender:</strong> {{ ucfirst($teacher->gender) }}</p>
                        <p><strong>Date of Birth:</strong> {{ $teacher->dob }}</p>
                        <p><strong>Course:</strong> {{ $teacher->course->title }}</p>
                        <p><strong>Qualification:</strong> {{ $teacher->qualification }}</p>
                        <p><strong>Experience:</strong> {{ $teacher->experience }} years</p>
                        <p><strong>Date of Join:</strong> {{ $teacher->date_of_join }}</p>
                        <img src="{{ asset('storage/' . $teacher->image) }}" alt="Teacher Image" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- 60% Width for Tabs (About, Contact) -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="teacherTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                    aria-controls="about" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab"
                                    aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content" id="teacherTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <h4>About</h4>
                                <p>{{ $teacher->description ?? 'No additional information available.' }}</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h4>Contact</h4>
                                <p><strong>Email:</strong> {{ $teacher->email }}</p>
                                <p><strong>Phone:</strong> {{ $teacher->phone }}</p>
                                <p><strong>Address:</strong> {{ $teacher->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection