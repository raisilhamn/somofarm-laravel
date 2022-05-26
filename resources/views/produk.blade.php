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

        @include('partials.searchbar_produk')


        <div class="album py-5 bg-light">
            <div class="container">
                <h2 class="fw mb-5 text-center">Produk Pilihan</h1>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural lead-in to additional content. This content is a little bit longer. This
                                        is a wider card with supporting text below as a natural lead-in to additional
                                        content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>



        <div class="album py-5 px-4">
            <div class="container">
                <h2 class="fw-light mb-5 text-center">Produk Terbaru</h1>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        <div class="col">
                            <div class="card shadow-sm">
                                <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail"
                                    preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <title>Placeholder</title>
                                    <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%"
                                        fill="#eceeef" dy=".3em">Thumbnail</text>
                                </svg>

                                <div class="card-body">
                                    <p class="card-text">This is a wider card with supporting text below as a
                                        natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                            <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                        </div>
                                        <small class="text-muted">9 mins</small>
                                    </div>
                                </div>
                            </div>
                        </div>

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
