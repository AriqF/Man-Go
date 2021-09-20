@extends('layouts.user.profile-layout')
@section('main-content')
                {{-- content --}}
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <label class="form-label" for="name">Username</label>
                        <input id="name" type="text" class="form-control" name="name" placeholder="{{Auth::user()->name}}">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="first_name">Nama Depan</label>
                                <input id="first_name" type="text" class="form-control" name="first_name" placeholder="{{Auth::user()->first_name}}" readonly>
                            </div>
                            <div class="col-6">
                                <label class="form-label" for="last_name">Nama Belakang</label>
                                <input id="last_name" type="text" class="form-control" name="last_name" placeholder="{{Auth::user()->last_name}}" readonly>
                            </div>
                        </div>            
                        <label class="form-label" for="email">Alamat Email</label>
                        <input id="email" type="text" class="form-control" name="email" placeholder="{{Auth::user()->email}}" readonly>     
                        <label for="imageUpload">Ubah Foto Profil</label>
                        <input required name="profilePict" type="file"  class="form-control-file mb-2 file-input" id="imageUpload" style="cursor: pointer;">                      
                        <div class="d-grid">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" href="#" class="btn-save">Simpan</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection