
<!--navbar here-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #343090; font-family: 'Maven Pro', sans-serif;">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}" type="submit">#username</a>
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
</body>

</html>