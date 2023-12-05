<header>
    <div class="container-fluid bg-dark text-white">
        <div class="row">
            <div class="col-3 text-center">
                <h4 class="mt-4">Gaemepass</h4>
            </div>
            <div class="col">
                <nav class="navbar-expand ">
                    <ul class="navbar-nav justify-content-center">
                        </li>
                        <li class="link nav-item m-3">
                            <a href class="nav-link"><b>Home</b></a>
                        </li>
                        <li class="link nav-item m-3">
                            <a href="{{ route('user.section') }}" class="nav-link"><b>Shop</b></a>
                        </li>
                        <li class="link nav-item m-3">
                            <a href class="nav-link"><b>Offer</b></a>
                        </li>
                        <li class="link nav-item m-3">
                            <a href class="nav-link"><b>Offer</b></a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-3 text-center mt-4">
                @auth('client')
                    <button class="btn btn-info"><a href="{{ route('user.profile') }}" class="nav-link"><b class="text-white">{{ Auth('client')->user()->username }}</b></a></button>
                    <button class="btn btn-danger text-white">
                      <b class="text-white"><a href="{{route('user.logout')}}" class="nav-link">Logout</a></b>
                    </button>
                @else
                    <button type="button" class="btn btn-info">
                        <a href="{{ route('user.login') }}" class="nav-link">Login</a>
                    </button>
                @endauth
            </div>
        </div>
    </div>
</header>
