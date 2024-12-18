<header class="navbar navbar-expand-md navbar-light border-bottom border-darknavbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ Auth::user() ? route('home') : route('home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          </ul>
            <!-- Right Side Of Navbar -->

            @if(auth()->user()->role == "worker")
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('home'), ' active') }}"
                     href="{{ route('home') }}">
                      Invoices
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('user_worker.photo'), ' active') }}"
                     href="{{ route('user_worker.photo') }}">
                      Photos
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('user_worker.viewProfile'), ' active') }}"
                     href="{{ route('user_worker.viewProfile') }}">
                      Profile
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"
                     href="{{ route('logout') }}">
                      Logout
                  </a>
                </li>
            </ul>
            @endif
            @if(auth()->user()->role == "admin")
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('home'), ' active') }}"
                     href="{{ route('home') }}">
                      Invoices
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('home'), ' active') }}"
                     href="{{ route('home') }}">
                      Personnel
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('home'), ' active') }}"
                     href="{{ route('home') }}">
                      Reports
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link{{ return_if(on_page('home'), ' active') }}"
                     href="{{ route('home') }}">
                      Programs
                  </a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="false" aria-expanded="false">
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Invoices</a>
                    <a class="dropdown-item" href="#">Personnel</a>
                    <a class="dropdown-item" href="#">Reports</a>
                    <a class="dropdown-item" href="#">Programs</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Logout</a>
                  </div>
                </li>
                <li class="nav-item">
                  <a class="nav-link"
                     href="{{ route('logout') }}">
                      Logout
                  </a>
                </li>
            </ul>
            @endif
        </div>
    </div>
</header>
