@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Konfirmasi password</h3>
            <p>Harap konfirmasi password anda sebelum melanjutkan..</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">            
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div style="margin-bottom: 10px;">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Lupa Password?') }}
                        </a>
                    @endif
                </div>

                <div class="d-grid">
                    <button class="btn-auth" href="{{ __('Confirm Password') }}" type="submit">Konfirmasi</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
