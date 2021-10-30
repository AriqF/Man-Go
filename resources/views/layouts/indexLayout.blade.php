<!--navbar here-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #da5e0b; font-family: 'Poppins', sans-serif;">
    <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif; font-size: 1.5em">ManGo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aksi I</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aksi II</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Aksi III</a>
            </li>      
        </ul>
        <ul class="navbar-nav ml-auto">
            @if (Route::has('login'))
            @auth
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/home') }}" type="submit">{{Auth::user()->name}}</a>
                </li> --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                        {{Auth::user()->name}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>
                    <a class="dropdown-item" href="{{url('/logout')}}">Keluar</a>
                    </div>
                </li>
            @else
                    <li class="nav-item">
                        <a class="nav-link"  type="submit" href="{{ route('login') }}">Login</a>
                    </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link"  type="submit" href="{{ route('register') }}">Register</a>
                    </li>
                @endif
            @endauth
        @endif
        </ul>

    </div>
</nav>
@yield('mainContent')
@extends('layouts.footer') 
    {{-- anime js --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
</body>
</html>