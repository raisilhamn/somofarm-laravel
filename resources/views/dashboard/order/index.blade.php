@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>CRUD Order</h1>
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
        <a href="/dashboard/order/create" class="btn btn-primary mb-3">Create New Order</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">Pesanan</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Penawaran</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($order as $o)
                    <tr>
                        <td>{{ $o->nama }}</td>
                        <td>{{ $o->jumlah }}</td>
                        <td>{{ $o->penawaran }}</td>
                        <td><a href="/dashboard/order/{{ $o->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="/dashboard/order/{{ $o->id }}/edit" class="badge bg-warning"><span
                                    data-feather="edit"></span></a>

                            <form action="/dashboard/order/{{ $o->id }}" method="POST" class="d-inline">
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
