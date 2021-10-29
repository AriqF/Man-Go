@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create')
<script language="javascript" type="text/javascript">
    function removeSpaces(string) {
     return string.split(' ').join('');
    }
    </script>
    <div class="page-content p-5" id="content">
      <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
      <h2 class="mb-0 subheader">Edit User</h2>
      <div class="separator"></div>
        <div class="box-container border-0 shadow">
            <form method="POST" action="{{ route('admin.update', $user->id) }}">
              @csrf
              @method("put")
              <label class="form-label" for="name">Username</label>
              <input onblur="this.value=removeSpaces(this.value);" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') ?? $user->name }}" placeholder="Masukkan Username">
              <div class="row">
                  <div class="col-6">
                      <label class="form-label" for="first_name">Nama Depan</label>
                      <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') ?? $user->first_name }}" placeholder="Masukkan Nama Depan">
                  </div>
                  <div class="col-6">
                      <label class="form-label" for="last_name">Nama Belakang</label>
                      <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') ?? $user->last_name }}" placeholder="Masukkan Nama Belakang">
                  </div>
              </div>
              <label class="form-label" for="email">Alamat Email</label>
              <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') ?? $user->email }}" placeholder="Masukkan Alamat Email">
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
