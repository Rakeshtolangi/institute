@extends('layouts.backend')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Student Enquiries</h3>
            <div class="float-right">
                <a href="{{ route('enquiries.create') }}" class="btn btn-primary">Add Enquiry</a>
            </div>

            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">List of Enquiries</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="enquiries-datatables" class="display table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Name</th>
                                        <th>Father's Name</th>
                                        <th>Date of Birth</th>
                                        <th>Email</th>
                                        <th>Mobile</th>
                                        <th>Preferred Time</th>
                                        <th>Course</th>
                                        <th class="no-sorting">Actions</th> <!-- Added Actions column -->
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($enquiries as $key => $enquiry)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $enquiry->name }}</td>
                                        <td>{{ $enquiry->father_name }}</td>
                                        <td>{{ $enquiry->dob }}</td>
                                        <td>{{ $enquiry->email }}</td>
                                        <td>{{ $enquiry->mobile }}</td>
                                        <td>
                                            {{ \Carbon\Carbon::parse($enquiry->preferred_time)->format('h:i A') }}
                                        </td>
                                        <td>{{ $enquiry->course->name ?? "" }}</td>
                                        <td>
                                            <div class="btn-group dropstart">
                                                <button type="button" class="btn dropdown-toggle"
                                                    data-bs-toggle="dropdown" aria-haspopup="false"
                                                    aria-expanded="false">
                                                    <i class="fa fa-ellipsis-v"></i>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" style="">
                                                    <li>
                                                        <a href="{{ route('enquiries.show', $enquiry->id) }}"
                                                            class="dropdown-item">View</a>
                                                        <a href="{{ route('enquiries.edit', $enquiry->id) }}"
                                                            class="dropdown-item">Edit</a>
                                                        <form action="{{ route('enquiries.destroy', $enquiry->id) }}"
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
    $('#enquiries-datatables').DataTable({
        // DataTables options can be added here
        "order": [
            [0, 'asc']
        ]
    });
});
</script>
@endpush