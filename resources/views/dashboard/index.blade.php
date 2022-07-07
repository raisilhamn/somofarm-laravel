@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Dashboard</h1>
        {{-- <h4>Selamat datang {{ Auth::user()->name }}</h1> --}}
    </div>
    <h4 class="mb-3">Selamat datang {{ Auth::user()->name }}</h1>

        <div class="table-responsive col-lg-8">
            <table class="table table-striped table-sm">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Deskripsi Singkat</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $i)
                        <tr>
                            <td>{{ $i->id }}</td>
                            <td>{{ $i->title }}</td>
                            <td>{{ $i->ex }}</td>
                            <td>{{ $i->harga }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
