@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>CRUD User</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
            {{ session('success') }}
        </div>
    @endif



    @if (session()->has('danger'))
        <div class="alert alert-danger col-lg-8" role="alert">
            {{ session('danger') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/user/create" class="btn btn-primary mb-3">Create New User</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password(b5)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($items as $i)
                    <tr>
                        <td>{{ $i->name }}</td>
                        <td>{{ $i->email }}</td>
                        <td>{{ $i->password }}</td>
                        <td><a href="/dashboard/user/{{ $i->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/user/{{ $i->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>

                            <form action="/dashboard/user/{{ $i->id }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure ?')"><span
                                        data-feather="trash"></span> </button>

                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
