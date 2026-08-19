@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Shifts</h3>
            <div class="float-right">
                <a href="{{ route('shifts.create') }}" class="btn btn-primary">Create Shift</a>
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
                        <h4 class="card-title">Shift List</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="shifts-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Start Time</th>
                                        <th>End Time</th>
                                        <th class="no-sorting">Actions</th> <!-- Updated to use dropdown for actions -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($shifts as $key => $shift)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $shift->name }}</td>
                                        <td>{{ \Carbon\Carbon::parse($shift->start_time)->format('h:i A') }}</td>
                                        <td>{{ \Carbon\Carbon::parse($shift->end_time)->format('h:i A') }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('shifts.show', $shift->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('shifts.edit', $shift->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('shifts.destroy', $shift->id) }}"
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
    $('#shifts-datatables').DataTable({
        "order": [
            [0, 'asc']
        ],
        // Additional DataTables options can be added here
    });
});
</script>
@endpush