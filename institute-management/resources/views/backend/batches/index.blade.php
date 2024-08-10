@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Batches</h3>
            <div class="float-right">
                <a href="{{ route('batches.create') }}" class="btn btn-primary">Create Batch</a>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Batch List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="batches-datatables" class="datatables display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Description</th>
                                        <th class="no-sorting">Actions</th> <!-- Added Actions column -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($batches as $key => $batch)
                                    <tr>
                                        <td>{{ $key  + 1 }}</td>
                                        <td>{{ $batch->title }}</td>
                                        <td>{{ $batch->start_date }}</td>
                                        <td>{{ $batch->end_date }}</td>
                                        <td>{{ $batch->description }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('batches.show', $batch->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('batches.edit', $batch->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('batches.destroy', $batch->id) }}"
                                                            method="POST" style="display:inline;">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="dropdown-item">Delete</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#batches-datatables').DataTable({
        "order": [
            [0, 'asc']
        ],
        // Additional DataTables options can be added here
    });
});
</script>
@endpush