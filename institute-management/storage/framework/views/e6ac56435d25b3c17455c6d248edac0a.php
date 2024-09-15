<div class="col-md-5">
    <div class="student-details" style="border:1px solid #ced4da; border-radius:5px; padding:10px;">


    <h2>Student Details</h2>
    <h5>Admission No.: <?php echo e($student->name); ?></h5>
    <h5>Name: <?php echo e($student->name); ?></h5>
    <h5>Course: <?php echo e($student->course->title); ?></h5>
    <h5>Batch: <?php echo e($student->batch->title); ?></h5>
    <h5>Shift: <?php echo e($student->name); ?></h5>
    </div>
</div>
<div class="col-md-7">
<div class="form-group col-md-12">
    <label for="receipt_no">Receipt No.</label>
    <input type="text" name="receipt_no" id="receipt_no" class="form-control" value="<?php echo e(old('receipt_no', $reciept_no ?? '')); ?>" readonly>
</div>

<div class="form-group col-md-12">
    <label for="fee_date">Fee Date</label>
    <input type="date" name="fee_date" id="fee_date" class="form-control" value="<?php echo e(old('fee_date', $fee_date ?? '')); ?>" required>
</div>





<div class="form-group col-md-12">
    <label for="due_fee">Due Fee</label>
    <?php
    // Determine the appropriate value to display based on whether the student has made a payment
    if ($fee && ($fee->student_id ?? '') == "") {
        // Student has not paid any amount, show the total student fee
        $due_amount = $student->student_fee;
    } elseif ($fee) {
        // Student has made a payment, show the remaining due amount
        $due_amount = $fee->due_fee; 
    } else {
        // No fee record exists, default to showing the total student fee
        $due_amount = $student->student_fee;
    }
?>

<!-- Display the due amount in the input field -->
<input type="number" name="due_fee" id="due_fee" class="form-control" value="<?php echo e($due_amount); ?>" required readonly>

</div>

<div class="form-group col-md-12">
    <label for="amount">Amount</label>
    <input type="number" name="amount" id="amount" class="form-control" value="" required>
</div>

<div class="form-group col-md-12">
    <label for="remarks">Remarks</label>
    <textarea name="remarks" id="remarks" class="form-control"><?php echo e(old('remarks', $remarks ?? '')); ?></textarea>
</div>

</div><?php /**PATH C:\laragon\www\institute-management\resources\views/backend/fees/_form.blade.php ENDPATH**/ ?>