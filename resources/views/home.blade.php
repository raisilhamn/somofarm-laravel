<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <title>Home - Somo Farm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- CSS Style --}}
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
</head>

<body>

    @include('partials.navbar_home')

    <main>

        @include('partials.seachbar_home')

        <div class="album py-5 px-4 bg-light">

            <div class="container">
                <h2 class="fw mb-5 text-center">Produk Pilihan</h1>
                    @auth
                        <form method="post" action="/logout" class="fw mb-5 text-center">
                            @csrf
                            <button type="submit" class="btn btn-success me-2" name="logout"> Logout</button>
                        </form>
                    @endauth
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($items as $item)
                            <div class="col">
                                <div class="card shadow-sm">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                            style="max-height:auto; max-width: auto;">
                                    @else
                                        {{ 'ngga ada gambar' }}
                                    @endif
                                    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>{{ $item->title }}</title>
                                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">{{ $item->title }}</text>
                                    </svg> --}}

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <h5 class="card-title">Rp {{ $item->harga }}</h5>
                                        {{-- <p class="card-text">{{ Str::limit($item-> body, 100) }}</p> --}}

                                        <p class="card-text">{{ $item->ex }}</p>

                                        <div class="d-flex justify-content-between align-items-center">

                                            <div class="btn-toolbar" aria-label="Basic example">
                                                <form action="/produk/id/{{ $item->id }}" method="post"
                                                    class="">
                                                    @csrf
                                                    <button type="submit" class="btn btn-success">lihat</button>
                                                </form>
                                                <a href="#" class="btn btn-primary mx-2">Beli</a>

                                            </div>
                                            <small
                                                class="text-muted">{{ $item->created_at->diffForHumans() }}</small>
                                        </div>
                                        @can('admin')
                                        <form action="/dashboard/produk/{{ $item->id }}/edit" method="get"
                                            class="mt-3">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-secondary">Edit</button>
                                        </form>
                                        @endcan
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>



        <div class="album py-5 px-4">
            <div class="container">
                <h2 class="fw mb-5 text-center">Promo terbaru</h1>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        @foreach ($items as $item)
                            <div class="col">
                                <div class="card shadow-sm">
                                    @if ($item->image)
                                        <img src="{{ asset('storage/' . $item->image) }}" alt=""
                                            style="max-height:auto; max-width: auto;">
                                    @else
                                        {{ 'ngga ada gambar' }}
                                    @endif
                                    {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                        xmlns="http://www.w3.org/2000/svg" role="img"
                                        aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice"
                                        focusable="false">
                                        <title>{{ $item->title }}</title>
                                        <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                            fill="#eceeef" dy=".3em">{{ $item->title }}</text>
                                    </svg> --}}

                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->title }}</h5>
                                        <p class="card-text">{{ $item->ex }}</p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">View</button>
                                                <button type="button"
                                                    class="btn btn-sm btn-outline-secondary">Edit</button>
                                            </div>
                                            <small class="text-muted">9 mins</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
            </div>
        </div>


        <div class="album py-5 bg-light">
            <div class="container px-4 py-5" id="hanging-icons">
                <h2 class="pb-2 border-bottom">Kenapa Belanja di Somo Farm ?</h2>
                <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Kualitas Terjaga</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with
                                another
                                sentence and probably just keep going until we run out of words.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Ramah lingkungan</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with
                                another
                                sentence and probably just keep going until we run out of words.</p>
                        </div>
                    </div>
                    <div class="col d-flex align-items-start">
                        <div>
                            <h2>Harga Murah</h2>
                            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with
                                another
                                sentence and probably just keep going until we run out of words.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </main>

</body>
@include('partials.footer')

</html>
