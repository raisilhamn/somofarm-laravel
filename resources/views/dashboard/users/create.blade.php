@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Buat User baru</h1>
    </div>
    <div class="col-lg-8">

        {{-- All form inputs should have a name. --}}
        <form method="post" action="/dashboard/produk" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Nama</label>
                <input type="string" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    required autofocus value="{{ old('title') }}">

                @error('title')
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
                <label for="ex" class="form-label">Email</label>
                <input type="text" class="form-control @error('ex') is-invalid @enderror" id="ex" name="ex"
                    value="{{ old('ex') }}">

                @error('ex')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div>

            {{-- <div class="mb-3">
                <label for="ex" class="form-label">Password</label>
                <input type="password" class="form-control @error('ex') is-invalid @enderror" id="ex" name="ex"
                    value="{{ old('ex') }}">

                @error('ex')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror

            </div> --}}



            {{-- <div>
                <label for="category" class="form-label"></label>
                <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Pilih kategori</option>
                    <option value="1">Sapi</option>
                    <option value="2">Domba</option>
                    <option value="3">Kelinci</option>
                </select>
            </div> --}}

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
