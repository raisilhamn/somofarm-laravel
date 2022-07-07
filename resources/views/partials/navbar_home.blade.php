<nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img src="{{ asset('image/somofarmputih.png') }}" alt="" width="75" height="40">
        </a>


        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}" href="/produk">Katalog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Berita</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About Us</a>
                </li>
            </ul>
            <form class="d-flex">
                <a href="/cart">
                    <button class="btn btn-outline-light me-2" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-cart" viewBox="0 0 16 16">
                            <path
                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                        </svg>
                    </button>
                </a>

                @auth
                    <div class="dropdown">
                        <button class="btn btn-outline-light me-2 dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            welcome back, {{ auth()->user()->name }}
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                            <li><a class="dropdown-item" href="/dashboard">Dashboard Juga</a></li>
                        </ul>
                    </div>
                @else
                    <a href="/login">
                        <button type="button" class="btn btn-outline-light me-2">Login</button>
                    </a>
                @endauth

                @guest
                    <a href="/register">
                        <button type="button" class="btn btn-light me-2">Sign Up</button>
                    </a>
                @endguest

            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</nav>
