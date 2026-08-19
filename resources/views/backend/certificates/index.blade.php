@extends('layouts.backend')

@section('content')
    <div class="container">

        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Certificate Templates</h3>
                <div class="float-right">
                    <a href="{{ route('certificates.create') }}" class="btn btn-primary">Add Template</a>

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
                            <h4 class="card-title">Template Lists</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="student-datatables" class="datatables display table table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($templates as $template)
                                            <tr>
                                                <td>{{ $template->name }}</td>



                                                <td>
                                                    <div class="btn-group dropstart">
                                                        <button type="button" class="btn  dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="false"
                                                            aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i> </button>
                                                        <ul class="dropdown-menu" role="menu" style="">
                                                            <li>

                                                                <a href="{{ route('certificates.edit', $template->id) }}"
                                                                    class="dropdown-item">Edit</a>
                                                                <form
                                                                    action="{{ route('certificates.destroy', $template->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="
                                                                    dropdown-item">Delete</button>
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
