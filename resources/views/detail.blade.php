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
    {{-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"> --}}
</head>

<style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }

    .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
    }

    .bi {
        vertical-align: -.125em;
        fill: currentColor;
    }

    .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
    }

    .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
    }

    .icon-list li::before {
        display: block;
        flex-shrink: 0;
        width: 1.5em;
        height: 1.5em;
        margin-right: .5rem;
        content: "";
        background: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23212529' viewBox='0 0 16 16'%3E%3Cpath d='M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z'/%3E%3C/svg%3E") no-repeat center center / 100% auto;
    }


</style>


<body>

    @include('partials.navbar_home')

    <main>
        <div class="container py-5 px-4">
            <h1>{{ $item->title }}</h1>
            <h1>Rp {{ $item->harga }}</h1>




            @if ($item->image)
                <img src="{{ asset('storage/' . $item->image) }}" class="py-5" alt="" style="max-height:500px; max-width: auto;">
            @else
                {{ 'ngga ada gambar' }}
            @endif

            <h3 class="fs-5 col-md-8">{{ $item->ex }}</h3>

            <div class="row">
                <div class="col">
                    <hr>
                </div>
            
            </div>

            <p class="fs-5 col-md-15">{{ $item->body }}</p>

            <a name="" id="" class="btn btn-success" href="/produk" role="button">Kembali ke katalog</a>
        </div>


    </main>

</body>
@include('partials.footer')

</html>
