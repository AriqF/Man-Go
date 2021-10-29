@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create')
    <div class="page-content p-5" id="content">
      <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
      <h2 class="mb-0 subheader">Buat User Baru</h2>
      <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form method="POST" action="{{ route('admin.store') }}">
              {{-- @method("put") --}}
              @csrf
              <label class="form-label" for="name">Username</label>
              <input id="name" type="text" class="form-control" name="name" placeholder="Masukkan Username">
              @error('name')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
              <div class="row">
                  <div class="col-6">
                      <label class="form-label" for="first_name">Nama Depan</label>
                      <input id="first_name" type="text" class="form-control" name="first_name" placeholder="Masukkan Nama Depan">
                  </div>
                  <div class="col-6">
                      <label class="form-label" for="last_name">Nama Belakang</label>
                      <input id="last_name" type="text" class="form-control" name="last_name" placeholder="Masukkan Nama Belakang">
                  </div>
              </div>
              <label class="form-label" for="email">Alamat Email</label>
              <input id="email" type="text" class="form-control" name="email" placeholder="Masukkan Alamat Email">
              <div class="row">
                <div class="col-6">
                    <label class="form-label" for="password">Kata Sandi</label>
                    <input id="password" type="password" class="form-control" name="password" placeholder="Masukkan Kata Sandi">
                </div>
                <div class="col-6">
                    <label class="form-label" for="password-confirm">Konfirmasi Kata Sandi</label>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Masukkan Konfirmasi Kata Sandi">
                </div>
            </div>
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

    {{-- REQUIRE SCRIPT --}}
    {{-- @include('sweetalert::alert') --}}
@endsection
