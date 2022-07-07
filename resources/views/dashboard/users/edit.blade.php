@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Edit User "{{ $items->name }}"</h1>
    </div>
    <div class="col-lg-8">

        {{-- All form inputs should have a name. --}}
        <form method="post" action="/dashboard/produk/{{ $items->id }}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="string" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus value="{{ old('name', $items->name) }}">

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- <label for="Tanggal lahir" class="form-label">Tanggal lahir</label>
            <div class="input-group date mb-3" id="datepicker">
                <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text" />
            </div> --}}
            {{-- <div class="mb-3">
                <label for="Judul Produk" class="form-label">Berat badan</label>
                <input type="text" class="form-control" id="bulan" name="judul">
            </div> --}}

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email"
                    value="{{ old('email', $items->email) }}">

                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>


            {{-- <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <textarea class="form-control @error('password') is-invalid @enderror" id="password" rows="5"
                    name="password">{{ $items->password }}</textarea>

                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}


            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>

    </div>
@endsection
