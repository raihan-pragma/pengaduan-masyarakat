  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
        <nav id="navbar" class="navbar">
            <ul>
                <li><a href="/"><img src="assets/img/logo2.png" height="50px"></a></li>
            </ul>
            <ul>
                {{-- <h1><a href="#hero"><span>Pemaso</span></a></h1> --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                <li><a class="nav-link scrollto" href="#about">Tentang Kami</a></li>
                <li><a class="nav-link scrollto" href="#pengaduan">Pengaduan</a></li>
                @if (auth()->user('User'))
                <li><a class="nav-link scrollto" href="/pengaduan">Daftar Pengaduan</a></li>
                @endif

                @if (Route::has('login'))
                @auth
                    <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @else
                <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @endauth
                @endif
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->