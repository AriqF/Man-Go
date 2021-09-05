@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body" style="color: #000">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Anda Adalah {{Auth::user()->name}}
                </div>
                
                {{-- Tombol Logout --}}
                <div class="card-body">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
