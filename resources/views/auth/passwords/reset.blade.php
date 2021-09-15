@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <img class="img-fluid align-items-center" src="{{ asset('img/reset.png') }}">
        </div>

        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row auth-head">
                        <div class="col-8">
                            <h3>Atur ulang password</h3>
                            <p></p>
                        </div>
                      </div>
                    <form method="POST" action="{{ route('password.update') }}" class="form-auth">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-floating mb-3">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@mail.com" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
                            <button class="btn-auth" href="{{ __('Reset Password') }}" type="submit">Atur Ulang</button>
                        </div>
                    </form>
                </div>

            </div>

        </div>

    </div>
</div>
@endsection
