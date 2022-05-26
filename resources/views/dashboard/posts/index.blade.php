@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>CRUD Produk</h1>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
        <a href="/dashboard/produk/create" class="btn btn-primary mb-3">Create New Post</a>
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Price</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($items as $i)
                    <tr>
                        <td>{{ $i->id }}</td>
                        <td>{{ $i->title }}</td>
                        <td>{{ $i->harga }}</td>
                        <td><a href="/dashboard/produk/{{ $i->id }}" class="badge bg-info"><span
                                    data-feather="eye"></span></a>
                            <a href="" class="badge bg-warning"><span data-feather="edit"></span></a>
                            <a href="" class="badge bg-danger"><span data-feather="trash"></span></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
