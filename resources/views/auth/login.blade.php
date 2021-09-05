@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <img class="img-fluid align-items-center" src="{{ asset('img/login.png') }}">
        </div> 
        
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row auth-head">
                        <div class="col align-self-start text-left">
                            <h3>Masuk</h3>
                        </div>
                        <div class="col align-self-end text-right">
                            <p class="auth-choc">atau <a href="{{ route('register') }}">Buat Akun</a></p>
                        </div>
                      </div>
                    <form method="POST" action="{{ route('login') }}" class="form-auth">
                        @csrf
                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@mail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" name="password" required autocomplete="current-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div style="margin-bottom: 10px;">
                            <div class="custom-control custom-checkbox" style="margin-top: 12px;">                                 
                                <input type="checkbox" class="custom-control-input" id="rememMe" style="cursor:pointer" name="remember" { old('remember') ? 'checked' : '' }}>
                                <label class="custom-control-label" for="rememMe" id="keeptxt">Ingat Saya</label>
                            </div>
                        </div>
                        <div style="margin-bottom: 10px;">
                            @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Lupa Password?') }}
                                </a>
                            @endif
                        </div>
                        
                        <div class="d-grid">
                            <button class="btn-auth" href="{{ __('Login') }}" type="submit">Masuk</button>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>

    </div>
</div>
@endsection
