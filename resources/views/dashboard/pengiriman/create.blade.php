@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Buat Status baru</h1>
    </div>
    <div class="col-lg-8">

        {{-- All form inputs should have a name. --}}
        <form method="post" action="/dashboard/pengiriman" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="string" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    required autofocus>

                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">status</label>
                <select class="form-select" aria-label="status" @error('status') is-invalid @enderror" id="status"
                name="status">
                    <option selected>Pilih Status</option>
                    <option value="on hold">on hold</option>
                    <option value="delivered">delivered</option>
                    <option value="on the way">on the way</option>
                </select>


                @error('status')
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


            {{-- <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <textarea class="form-control id="password" rows="5"
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div> --}}

            <div class="mb-3">
                <label for="tracking" class="form-label">tracking</label>
                <input type="string" class="form-control @error('tracking') is-invalid @enderror" id="tracking" name="tracking"
                    required autofocus>

                @error('tracking')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="tgl" class="form-label">Perkiraan tiba</label>
                <input type="date" class="form-control @error('tgl') is-invalid @enderror" id="tgl" name="tgl"
                    required autofocus>

                @error('tgl')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


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
