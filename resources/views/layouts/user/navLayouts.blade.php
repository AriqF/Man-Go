<nav class="navbar navbar-expand-lg fixed-top py-3 navbar-dark" id="mainNav">
    <div class="container">
        <a class="navbar-brand" style="font-family: 'Poppins', sans-serif; font-size: 1.5em" href="#page-top">ManGo</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link {{ (request()->is('home')) ? 'active' : '' }}" href="{{ url('/home') }}">Belajar</a></li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('stats')) ? 'active' : '' }}" href="{{ url('/stats') }}">Statistik</a></li>
                <li class="nav-item"><a class="nav-link {{ (request()->is('profile') || request()->is('change-password')) ? 'active' : '' }}" href="{{ url('/profile') }}">Profil</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}">Keluar</a></li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                         @endif
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Profil</a>
                        <a class="dropdown-item" href="{{ url('/logout') }}">Keluar</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>