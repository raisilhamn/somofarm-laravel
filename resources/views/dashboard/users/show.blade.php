@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>{{ $items->name }}</h2>
    </div>

    <a href="/dashboard/user/" class="btn btn-primary"><span data-feather="arrow-left"></span><span>Back to all</span></a>
    <a href="/dashboard/user/{{ $items->id }}/edit" class="btn btn-warning"><span
            data-feather="edit"></span></span><span>Edit</span></a>

    <a href="/dashboard/user/" class="btn btn-danger"><span data-feather="trash"></span><span>Delete</span></a>

    <p class="pt-3 pb-2 mb-3">
        nama : {{ $items->name }}
    </p>

    <p class="pt-3 pb-2 mb-3">
        Email : {{ $items->email }}
    </p> 

    <p class="pt-3 pb-2 mb-3">
        Password (encrypted) : {{ $items->password }}
    </p> 

@endsection
