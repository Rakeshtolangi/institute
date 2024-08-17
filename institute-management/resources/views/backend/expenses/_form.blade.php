<div class="row g-3">
    <div class="col-md-6">
        <label for="expense_date">Expense Date</label>
        <input type="date" name="expense_date" id="expense_date" class="form-control"
            value="{{ old('expense_date', $expense->expense_date ?? '') }}">
    </div>

    <div class="col-md-6">
        <label for="title">Expense Title</label>
        <input type="text" name="title" id="title" class="form-control"
            value="{{ old('title', $expense->title ?? '') }}">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-6">
        <label for="category">Expense Category</label>
        <input type="text" name="category" id="category" class="form-control"
            value="{{ old('category', $expense->category ?? '') }}">
    </div>

    <div class="col-md-6">
        <label for="amount">Amount</label>
        <input type="number" name="amount" id="amount" class="form-control"
            value="{{ old('amount', $expense->amount ?? '') }}">
    </div>
</div>

<div class="row g-3">
    <div class="col-md-12">
        <label for="description">Description</label>
        <textarea name="description" id="description"
            class="form-control">{{ old('description', $expense->description ?? '') }}</textarea>
    </div>
</div>