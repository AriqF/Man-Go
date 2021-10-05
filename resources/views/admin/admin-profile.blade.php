@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Profil')
    <div class="page-content p-5" id="content">
      <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
      <h2 class="mb-0 subheader">Ubah Data Profil</h2> 
      <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form action="{{ route('user.update') }}" method="POST" enctype="multipart/form-data">
              @method("put")
              @csrf
              <label class="form-label" for="name">Username</label>
              <input id="name" type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Masukkan Username baru">
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
              <input name="image" type="file"  class="form-control-file mb-2 file-input" id="image" style="cursor: pointer;">
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
@endsection
