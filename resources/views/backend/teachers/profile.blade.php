@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <!-- 40% Width for Student Details -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4>{{ $student->name }}</h4>
                        <p><strong>Admission Number:</strong> {{ $student->admission_number }}</p>
                        <p><strong>Email:</strong> {{ $student->email }}</p>
                        <p><strong>Phone:</strong> {{ $student->phone }}</p>
                        <p><strong>Gender:</strong> {{ ucfirst($student->gender) }}</p>
                        <p><strong>Date of Birth:</strong> {{ $student->dob }}</p>
                        <p><strong>Course:</strong> {{ $student->course->title }}</p>
                        <p><strong>Batch:</strong> {{ $student->batch->title }}</p>
                        <img src="{{ asset('storage/' . $student->image) }}" alt="Student Image" class="img-fluid">
                    </div>
                </div>
            </div>

            <!-- 60% Width for Tabs (About, Fees, Contact) -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="studentTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="fees-tab" data-bs-toggle="tab" href="#fees" role="tab" aria-controls="fees" aria-selected="false">Fees</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content" id="studentTabContent">
                            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="about-tab">
                                <h4>About</h4>
                                <p>{{ $student->about }}</p>
                            </div>
                            <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                                <h4>Fees</h4>
                                <p><strong>Total Fee:</strong> {{ $student->course_fee }}</p>
                                <p><strong>Paid Fee:</strong> {{ $student->paid_fee }}</p>
                                <p><strong>Remaining Fee:</strong> {{ $student->remaining_fee }}</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h4>Contact</h4>
                                <p><strong>Email:</strong> {{ $student->email }}</p>
                                <p><strong>Phone:</strong> {{ $student->phone }}</p>
                                <p><strong>Address:</strong> {{ $student->address }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
