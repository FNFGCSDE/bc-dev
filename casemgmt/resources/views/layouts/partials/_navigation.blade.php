<header class="navbar navbar-expand-md navbar-light border-bottom border-darknavbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ Auth::user() ? route('search.basic.index') : route('home') }}">
            {{ config('app.name') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @auth
                    <li class="nav-item">
                      <a class="nav-link{{ return_if(on_page('search.basic.index'), ' active') }}"
                         href="{{ route('search.basic.index') }}">
                          Screening
                      </a>
                    </li>
                    <div class="container-fluid">
                        <button type="button" id="sidebarCollapse" class="btn btn-info">
                            <i class="fas fa-align-left"></i>
                            <span>Toggle Sidebar</span>
                        </button>
                    </div>
                    <!-- <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('cases.index'), ' active') }}"
                           href="{{ route('cases.index') }}">
                            Cases
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('clients.index') }}">
                            Clients
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link"
                           href="{{ route('cases.index') }}">
                            Messages
                        </a>
                    </li> -->
                @endauth
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('plans.index'), ' active') }}"
                           href="{{ route('product') }}">
                            Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('plans.index'), ' active') }}"
                           href="{{ route('pages.features') }}">
                            Features
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('account.subscription.index'), ' active') }}"
                           href="{{ route('account.subscription.index') }}">
                            Pricing
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('plans.index'), ' active') }}"
                           href="{{ route('about') }}">
                            About
                        </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link{{ return_if(on_page('login'), ' active') }}" href="{{ route('login') }}">
                        |
                      </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('login'), ' active') }}" href="{{ route('login') }}">
                            Login
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('register'), ' active') }}"
                           href="{{ route('register') }}">
                            Sign Up
                        </a>
                    </li>
                @else
                    My Dashboard
                    <li class="nav-item">
                        <a class="nav-link{{ return_if(on_page('dashboard.index'), ' active') }}"
                           href="{{ route('dashboard.index') }}">
                            My Dashboard
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('account.index') }}" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            My Profile <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <!-- Impersonating -->
                            @impersonating
                            <a class="dropdown-item" href="#"
                               onclick="event.preventDefault(); document.getElementById('impersonate-form').submit();">
                                Stop Impersonating
                            </a>
                            <form id="impersonate-form" action="{{ route('admin.users.impersonate.destroy') }}"
                                  method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            @endimpersonating

                            <!-- Admin Panel Link -->
                            @role('admin')
                            <a class="dropdown-item" href="{{ route('admin.dashboard') }}">
                                Admin Panel
                            </a>
                            @endrole

                            <!-- User Account Link -->
                            <a class="dropdown-item" href="{{ route('account.index') }}">
                                My Account
                            </a>

                            <!-- Developer Link
                            <a class="dropdown-item" href="{{ route('developer.index') }}">
                                Developer Panel
                            </a>
                            <div class="dropdown-divider"></div>-->

                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            @include('layouts.partials.forms._logout')
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>
