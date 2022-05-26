@extends('dashboard.layout.main')

@section('container_main')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1>Buat Produk baru</h1>
    </div>
    <div class="col-lg-8">

        {{-- All form inputs should have a name. --}}
        <form method="post" action="/dashboard/produk">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="string" class="form-control" id="title" name="title">
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
                <label for="ex" class="form-label">Deskripsi singkat</label>
                <input type="text" class="form-control" id="ex" name="ex">
            </div>


            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi Lengkap</label>
                <textarea class="form-control" id="body" rows="3" name="body"></textarea>
            </div>


            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="text" class="form-control" id="harga" name="harga">
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

            <div class="mb-3">
                <label for="image" class="form-label">Masukkan foto</label>
                <input class="form-control" type="file" id="image" name="gambar">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
@endsection
