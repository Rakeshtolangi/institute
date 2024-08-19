<!-- resources/views/backend/expenses/_form.blade.php -->
<div class="row g-3">
    <div class="col-md-6">
        <label for="expense_date">Expense Date</label>
        <input type="date" name="expense_date" id="expense_date" class="form-control" value="{{ old('expense_date', $expense->expense_date ?? '') }}" required>
    </div>

    <div class="col-md-6">
        <label for="title">Title</label>
        <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $expense->title ?? '') }}" required>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="category">Category</label>
        <select name="category" id="category" class="form-control" required>
            @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ (old('category') ?? $expense->category ?? '') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-6">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control" value="{{ old('amount', $expense->amount ?? '') }}" required>
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-6">
        <label for="file">File</label>
        <input type="file" name="file" id="file" class="form-control">
        @if(isset($expense) && $expense->file)
        <a href="{{ asset('storage/' . $expense->file) }}" class="mt-2 d-block">Download file</a>
        @endif
    </div>
</div>

<div class="row g-3 mt-3">
    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description" class="form-control" rows="4">{{ old('description', $expense->description ?? '') }}</textarea>
    </div>
</div>
