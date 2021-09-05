@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <img class="img-fluid align-items-center" src="{{ asset('img/login.png') }}">
        </div> 
        
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row auth-head">
                        <div class="col align-self-start text-left">
                            <h4>Daftar</h4>
                        </div>
                        <div class="col align-self-end text-right">
                            <p class="auth-choc">atau <a href="{{ route('login') }}">Sudah punya akun</a></p>
                        </div>
                      </div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-floating mb-3">
                            <div class="row">
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input id="fname" type="text" class="form-control @error('lname') is-invalid @enderror" name="fname" placeholder="nama depan" value="{{ old('fname') }}" required autocomplete="fname" autofocus>            
                                    @error('fname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                                    <input id="lname" type="text" class="form-control @error('lname') is-invalid @enderror" name="lname" placeholder="nama belakang" value="{{ old('lname') }}" required autocomplete="name" autofocus>            
                                    @error('lname')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@mail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>            
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password"  name="password" required autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-floating mb-3">
                            <input id="password-confirm" type="password" class="form-control"  placeholder="konfirmasi password"  name="password_confirmation" required autocomplete="new-password"/>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        
                        <div class="d-grid">
                            <button class="btn-auth" href="{{ __('Register') }}" type="submit">Daftar</button>
                        </div>
                    </form>
                </div>
                
            </div>
            
        </div>

    </div>
</div>
@endsection
