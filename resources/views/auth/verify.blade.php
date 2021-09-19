@extends('layouts.app')

@section('content')
<div class="auth-container container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <img class="img-fluid align-items-center w-75" src="{{ asset('img/mail.png') }}">
            <h3>Verifikasi Email</h3>
            <hr>
            @if (session('resent'))
                <div class="alert alert-success" role="alert">
                    {{ __('A fresh verification link has been sent to your email address.') }}
                </div>
            @endif 

            <p>Sebelum melanjutkan, harap periksa email Anda untuk link verifikasi </p>
            <p>Jika anda tidak menerima email kami, </p> 
            <form method="POST" action="{{ route('password.confirm') }}">
                @csrf
                <div class="d-grid">
                    <button class="btn btn-link p-0 m-0 align-baseline" href="{{ __('click here to request another') }}" type="submit">Kirim ulang email</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
