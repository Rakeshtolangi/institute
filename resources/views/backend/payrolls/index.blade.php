@extends('layouts.backend')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Add Payroll</h3>
             

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
                            <h4 class="card-title">Payroll Details</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('payrolls.index') }}" method="get">

                                <div class="row g-3">
                                    <!-- Select Designations -->
                                    <div class="col-md-6">
                                        <label for="role_id">Select Role</label>
                                        <select name="role_id" id="role_id" class="form-control" required>
                                            <option value="">-- Select Role --</option>
                                            @foreach ($roles as $role)
                                                @if ($role->id != 18)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>

                                                @endif
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- Select Month -->
                                    {{-- <div class="col-md-3">
                                        <label for="month">Select Month</label>
                                        <select name="month" id="month" class="form-control" required>
                                            <option value="">-- Select Month --</option>
                                            @foreach (range(1, 12) as $month)
                                                <option value="{{ $month }}">
                                                    {{ DateTime::createFromFormat('!m', $month)->format('F') }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}

                                    <!-- Select Year -->
                                    {{-- <div class="col-md-3">
                                        <label for="year">Select Year</label>
                                        <select name="year" id="year" class="form-control" required>
                                            <option value="">-- Select Year --</option>
                                            @foreach (range(date('Y') - 10, date('Y')) as $year)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endforeach
                                        </select>
                                    </div> --}}
                                    <div class="col-md-6 mt-4">
                                        <button type="submit" class="mt-3 btn btn-primary" style="float: right">Generate Payroll</button>
                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">User Lists</h4>
                        </div>
                        <div class="card-body">

                            <dv class="table-responsive">

                                <table class="table table-borderd">
                                    <thead>
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Name</th>
                                            <th>Email</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($users as $key => $user)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $user->name }}</td>

                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    <div class="btn-group dropstart">
                                                        <button type="button" class="btn dropdown-toggle"
                                                            data-bs-toggle="dropdown" aria-haspopup="false"
                                                            aria-expanded="false">
                                                            <i class="fa fa-ellipsis-v"></i> </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li>

                                                                <a href="{{ route('payrolls.create',['id' => $user->id]) }}"
                                                                    class="dropdown-item">Add Payment</a>

                                                                <a href="{{ route('payrolls.list',['userId' => $user->id]) }}" class="dropdown-item">view Payment</a>

                                                                <form action="{{ route('payrolls.destroy', $user->id) }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit"
                                                                        class="dropdown-item">Delete</button>
                                                                </form>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </dv>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
