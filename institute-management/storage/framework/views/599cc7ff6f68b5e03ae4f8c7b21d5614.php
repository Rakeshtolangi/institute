

<?php $__env->startSection('content'); ?>
    <div class="container">

        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Manage Certificates</h3>
                <div class="float-right">
                    <a href="" class="btn btn-primary">Generate</a>

                </div>

            </div>
            <?php if($message = Session::get('success')): ?>
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            <?php endif; ?>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Student Lists</h4>
                        </div>
                        <form action="<?php echo e(route('certificates.generateMultiple')); ?>" method="POST" id="certificate-form">
                            <?php echo csrf_field(); ?>

                            <div class="form-group">
                                <label for="certificate_template">Select Certificate Template</label>
                                <select name="certificate_template" id="certificate_template" class="form-control" required>
                                    <?php $__currentLoopData = $templates; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $template): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($template->id); ?>"><?php echo e($template->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>

                            <div class="card-body">
                                <div class="table-responsive">

                                    <table id="student-datatables"
                                        class="datatables display table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th><input type="checkbox" id="select-all"></th>

                                                <th>S.N.</th>
                                                <th>Image</th>
                                                <th>Admission No.</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile no.</th>
                                                <th>Course</th>
                                                <th>Batch</th>
                                                <th>Status</th>

                                                <th class="no-sorting">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $__empty_1 = true; $__currentLoopData = $studentsWithStatus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                                <tr>
                                                    <td><input type="checkbox" name="student_ids[]"
                                                            value="<?php echo e($item['student']->id); ?>"></td>
                                                    <td><?php echo e($key + 1); ?></td>
                                                    <td><img src="<?php echo e(asset($item['student']->image)); ?>" alt=""
                                                            width="50" height="50"></td>
                                                    <td><?php echo e($item['student']->admission_number); ?></td>
                                                    <td><?php echo e($item['student']->name); ?></td>
                                                    <td><?php echo e($item['student']->email); ?></td>
                                                    <td><?php echo e($item['student']->mobile); ?></td>
                                                    <td><?php echo e($item['course_name']); ?></td>
                                                    <td><?php echo e($item['batch_name']); ?></td>
                                                    <td>
                                                        <?php if($item['is_completed']): ?>
                                                            <span class="badge badge-success">Completed</span>
                                                        <?php else: ?>
                                                            <span class="badge badge-warning">Running</span>
                                                        <?php endif; ?>
                                                    </td>
                                                    <td>
                                                        <div class="btn-group dropstart">
                                                            <button type="button" class="btn  dropdown-toggle"
                                                                data-bs-toggle="dropdown" aria-haspopup="false"
                                                                aria-expanded="false">
                                                                <i class="fa fa-ellipsis-v"></i> </button>
                                                            <ul class="dropdown-menu" role="menu" style="">
                                                                <li>
                                                                    <a href="<?php echo e(route('certificates.generate', $item['student']->id)); ?>"
                                                                        class="dropdown-item">Generate</a>

                                                                </li>
                                                            </ul>
                                                        </div>

                                                    </td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                                <tr>
                                                    <td colspan="3" class="text-center">No students found.</td>
                                                </tr>
                                            <?php endif; ?>
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                            <!-- Submit Button to Generate Certificates -->
                            <div class="form-group mt-3">
                                <button type="submit" class="btn btn-primary">Generate Certificates</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
    integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.getElementById('select-all').addEventListener('change', function() {
            const checkboxes = document.querySelectorAll('input[name="student_ids[]"]');
            checkboxes.forEach(checkbox => {
                checkbox.checked = this.checked;
            });
        });
    });
</script>

<?php echo $__env->make('layouts.backend', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/certificates/student_certificate.blade.php ENDPATH**/ ?>