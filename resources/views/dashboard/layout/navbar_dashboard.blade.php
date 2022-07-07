<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
                    <i data-feather="home"></i>
                    Dashboard
                </a>
            </li>
            @cannot('admin')
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/order*') ? 'active' : '' }}" aria-current="page"
                        href="/dashboard/order">
                        <i data-feather="shopping-cart"></i>
                        Order
                    </a>
                </li>
            @endcannot

        </ul>

        @can('admin')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                <span>Admin</span>
            </h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/produk*') ? 'active' : '' }}" href="/dashboard/produk">
                        <span data-feather="shopping-bag" class="align-text-bottom"></span>
                        Crud Produk
                    </a>
                </li>
            </ul>

            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('dashboard/user*') ? 'active' : '' }}" href="/dashboard/user">
                        <span data-feather="user" class="align-text-bottom"></span>
                        Crud User
                    </a>
                </li>
            </ul>
        @endcan



    </div>
</nav>
