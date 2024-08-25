<div class="form-group">
    <label for="receipt_no">Receipt No.</label>
    <input type="text" name="receipt_no" id="receipt_no" class="form-control" value="{{ old('receipt_no', $receipt_no ?? '') }}" readonly>
</div>

<div class="form-group">
    <label for="fee_date">Fee Date</label>
    <input type="date" name="fee_date" id="fee_date" class="form-control" value="{{ old('fee_date', $fee->fee_date ?? '') }}" required>
</div>

<div class="form-group">
    <label for="batch_id">Batch</label>
    <select name="batch_id" id="batch_id" class="form-control" required>
        <option value="">-- Select Batch --</option>
        @foreach($batches as $batch)
            <option value="{{ $batch->id }}" {{ old('batch_id', $fee->batch_id ?? '') == $batch->id ? 'selected' : '' }}>
                {{ $batch->title }}
            </option>
        @endforeach
    </select>
</div>

<div class="form-group">
    <label for="due_fee">Due Fee</label>
    <input type="number" name="due_fee" id="due_fee" class="form-control" value="{{ old('due_fee', $fee->due_fee ?? 0) }}" required>
</div>

<div class="form-group">
    <label for="amount">Amount</label>
    <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount', $fee->amount ?? 0) }}" required>
</div>

<div class="form-group">
    <label for="remarks">Remarks</label>
    <textarea name="remarks" id="remarks" class="form-control">{{ old('remarks', $fee->remarks ?? '') }}</textarea>
</div>
