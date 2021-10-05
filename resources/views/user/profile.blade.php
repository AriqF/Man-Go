@extends('layouts.user.profile-layout')
@section('main-content')

@section('title', 'ManGo - Profil')
                {{-- content --}}
                <div class="col-xl-8 col-md-12">
                    @if (session()->has('message'))
                        <div class="text-green-600 mb-4">{{ session()->get('message') }}</div>

                    @endif
                    <div class="box-container">
                        <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
                            @method("put")
                            @csrf
                            <label class="form-label" for="name">Username</label>
                            <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{Auth::user()->name}}" placeholder="Masukkan Username baru">
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row">
                                <div class="col-6">
                                    <label class="form-label" for="first_name">Nama Depan</label>
                                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" readonly>
                                </div>
                                <div class="col-6">
                                    <label class="form-label" for="last_name">Nama Belakang</label>
                                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" readonly>
                                </div>
                            </div>
                            <label class="form-label" for="email">Alamat Email</label>
                            <input id="email" type="text" class="form-control" name="email" value="{{Auth::user()->email}}" readonly>
                            <label for="image">Ubah Foto Profil</label>
                            <input name="image" type="file"  class="form-control-file mb-2 file-input  @error('image') is-invalid @enderror" id="image" style="cursor: pointer;">
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="d-grid">
                                <div class="row">
                                    <div class="col-md-12 text-center">
                                        <button type="submit" href="#" class="btnr btn-save">Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{-- REQUIRE SCRIPT --}}
        @include('sweetalert::alert')
@endsection
section

