<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="row">
            <!-- 40% Width for Student Details -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo e($student->name); ?></h4>
                        <p><?php echo e($student->course->title); ?></p>
                        <p><strong>Admission No.:</strong> <?php echo e($student->admission_number); ?></p>
                        <p><strong>Batch:</strong> <?php echo e($student->batch->title); ?></p>
                        <p><strong>Gender:</strong> <?php echo e(ucfirst($student->gender)); ?></p>
                    </div>
                </div>
            </div>

            <!-- 60% Width for Tabs (About, Faculty, Fees) -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <!-- Nav Tabs -->
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" id="about-tab" data-bs-toggle="tab" href="#about" role="tab"
                                    aria-controls="about" aria-selected="true">About</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="faculty-tab" data-bs-toggle="tab" href="#faculty" role="tab"
                                    aria-controls="faculty" aria-selected="false">Faculty</a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" id="fees-tab" data-bs-toggle="tab" href="#fees" role="tab"
                                    aria-controls="fees" aria-selected="false">Fees</a>
                            </li>
                        </ul>
                        <!-- Tab Content -->
                        <div class="tab-content" id="myTabContent">
                            <!-- About Tab -->
                            <div class="tab-pane fade show active" id="about" role="tabpanel"
                                aria-labelledby="about-tab">
                                <div class="card">
                                    <div class="card-body">
                                        <h4>Full Name: <?php echo e($student->name); ?></h4>
                                        <p><strong>Mobile:</strong> <?php echo e($student->mobile); ?></p>
                                        <p><strong>Email:</strong> <?php echo e($student->email); ?></p>
                                        <p><?php echo e($student->about); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="faculty" role="tabpanel" aria-labelledby="faculty-tab">
                            <h4>Faculty</h4>
                            <p><?php echo e($student->faculty); ?></p>
                        </div>


                        <div class="tab-pane fade" id="fees" role="tabpanel" aria-labelledby="fees-tab">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">Fee Details</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-hover" style="width: 100%;">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Course</th>
                                                    <th scope="col">Batch</th>
                                                    <th scope="col">Total Fees</th>
                                                    <th scope="col">Payment Id</th>
                                                    <th scope="col">Date</th>
                                                    <th scope="col">Paid</th>
                                                    <th scope="col">Disc.</th>
                                                    <th scope="col">Due</th>
                                                    <th scope="col">Return</th>
                                                    <th scope="col">Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><?php echo e($student->course->title ?? 'N/A'); ?></td>
                                                    <td><?php echo e($student->batch->title ?? 'N/A'); ?></td>
                                                    <td><?php echo e($student->course_fee); ?></td>
                                                    <td><?php echo e($student->payment_id ?? 'N/A'); ?></td>
                                                    <td><?php echo e($student->payment_date ?? 'N/A'); ?></td>
                                                    <td><?php echo e($student->paid_fee); ?></td>
                                                    <td><?php echo e($student->discount ?? 'N/A'); ?></td>
                                                    <td><?php echo e($student->remaining_fee); ?></td>
                                                    <td><?php echo e($student->return ?? 'N/A'); ?></td>
                                                    <td>
                                                        <a href="<?php echo e(route('fees.addpayment', $student->id)); ?>">
                                                            <i class="fas fa-dollar-sign"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fas fa-pencil-alt"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <!-- Add more rows as needed -->
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/students/s_profile.blade.php ENDPATH**/ ?>