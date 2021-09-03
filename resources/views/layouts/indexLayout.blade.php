<!--navbar here-->
<nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #343090; font-family: 'Maven Pro', sans-serif;">
    <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif; font-size: 1.5em">ManGo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">

        <div class="form-inline my-2 my-lg-0">
            @if (Route::has('login'))
                @auth
                    <a class="userLinks" href="{{ url('/dashboard') }}" type="submit">#username</a>
                @else
                        <a class="btn-login" type="submit" href="{{ route('login') }}">Login</a>
                    @if (Route::has('register'))
                        <a class="btn-register" type="submit" href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            @endif

        </div>
    </div>
</nav>
@yield('mainContent')
</body>

</html>