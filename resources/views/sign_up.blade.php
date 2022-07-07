<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/sign-in/"> --}}
    <link rel="stylesheet" href="{{ asset('/css/signin.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">

    <!-- Custom styles for this template -->
</head>


<body class="text-center">
    @include('partials.navbar_home')
    <main class="form-signin w-100 m-auto" style="padding-top: 10%; padding-buttom: 10%">



        <form action="/register" method="POST">
            @csrf
            <img class="mb-4" src="image/somotrans.png" alt="" width="200" height="150">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                    placeholder="name@example.com" name="email">
                <label for="floatingInput">Email address</label>
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-floating @error('name') is-invalid @enderror">
                <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}">
                <label for="Name">Name</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="form-floating @error('password') is-invalid @enderror">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                <label for="floatingPassword">Password</label>
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>

            <a href="">
                <button class="w-100 btn btn-lg btn-success" type="submit"
                    style="background-color: #287343">Daftar</button>
            </a>



            <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>
