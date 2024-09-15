<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="page-inner">
        <div class="row">
            <!-- 40% Width for Teacher Details -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h4><?php echo e($teacher->name); ?></h4>
                        <!-- <img src="<?php echo e(asset($teacher->image)); ?>" alt="" srcset="" height="70px"
                                                width="70px"> -->
                        <img class="rounded-circle" alt="avatar1" src="<?php echo e(asset($teacher->image)); ?>" srcset=""
                            height="150px" width="150px" />

                        <p><strong>Email:</strong> <?php echo e($teacher->email); ?></p>
                        <p><strong>Phone:</strong> <?php echo e($teacher->phone); ?></p>
                        <p><strong>Gender:</strong> <?php echo e(ucfirst($teacher->gender)); ?></p>
                        <p><strong>Date of Birth:</strong> <?php echo e($teacher->dob); ?></p>
                        <p><strong>Course:</strong> <?php echo e($teacher->course->title); ?></p>
                        <p><strong>Qualification:</strong> <?php echo e($teacher->qualification); ?></p>
                        <p><strong>Experience:</strong> <?php echo e($teacher->experience); ?> years</p>
                        <p><strong>Date of Join:</strong> <?php echo e($teacher->date_of_join); ?></p>
                        <img src="<?php echo e(asset('storage/' . $teacher->image)); ?>" alt="Teacher Image" class="img-fluid">
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
                                <p><?php echo e($teacher->description ?? 'No additional information available.'); ?></p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h4>Contact</h4>
                                <p><strong>Email:</strong> <?php echo e($teacher->email); ?></p>
                                <p><strong>Phone:</strong> <?php echo e($teacher->phone); ?></p>
                                <p><strong>Address:</strong> <?php echo e($teacher->address); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/teachers/t_profile.blade.php ENDPATH**/ ?>