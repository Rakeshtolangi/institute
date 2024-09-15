<div class="col-md-7">
    <div class="student-details" style="border:1px solid #ced4da; border-radius:5px; padding:10px;">


    <h2>Teacher Details</h2>
    <h5>Name: <?php echo e($userDetails->name); ?></h5>
    <h5>Email: <?php echo e($userDetails->email); ?></h5>
    <h5>Phone No.: <?php echo e($userDetails->teacher->phone); ?></h5>
    <h5>gender: <?php echo e($userDetails->teacher->gender); ?></h5>

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
                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($key+1); ?></td>
                        <td><?php echo e($course->title); ?></td>
                        <td><?php echo e($totalAmount); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
</div>

<div class="col-md-5">
    <div class="row">
<div class="form-group col-md-12">
    <label for="receipt_no">Receipt No.</label>
    <input type="text" name="receipt_no" id="receipt_no" class="form-control" value="<?php echo e($reciept_no); ?>" readonly>
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
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($course->id); ?>"><?php echo e($course->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
</div><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/payrolls/_form.blade.php ENDPATH**/ ?>