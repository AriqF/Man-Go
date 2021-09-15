@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h3>Lupa password anda?</h3>
            <p>Masukkan email anda untuk mengatur ulang password anda. Anda mungkin perlu memeriksa folder spam atau membuka blokir mango@mail.com</p>
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="form-floating mb-3">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="example@mail.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="d-grid">
                    <button class="btn-auth" href="{{ __('Send Password Reset Link') }}" type="submit">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
