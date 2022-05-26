@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2>{{ $produk->title }}</h2>
    </div>

    <a href="/dashboard/produk/" class="btn btn-primary"><span data-feather="arrow-left"></span><span>Back to all</span></a>
    <a href="/dashboard/produk/{{ $produk->id }}/edit" class="btn btn-warning"><span
            data-feather="edit"></span></span><span>Edit</span></a>

    <a href="/dashboard/produk/" class="btn btn-danger"><span data-feather="trash"></span><span>Delete</span></a>

    <div class="pt-3">
        @if ($produk->image)
            <img src="{{ asset('storage/' . $produk->image) }}" alt="" style="max-height:100px; width: auto;">
        @else
            {{ 'ngga ada gambar' }}
        @endif

    </div>
    <p class="pt-3 pb-2 mb-3">
        {{ $produk->body }}
    </p>
@endsection
