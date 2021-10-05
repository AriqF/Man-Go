@extends('layouts.user.profile-layout')
@section('main-content')
@section('title', 'ManGo - Ubah Password')
                {{-- content --}}
                <div class="col-xl-8 col-md-12">
                    <div class="box-container">
                        <label class="form-label" for="old_password">Kata Sandi Lama</label>
                        <input id="old_password" type="password" class="form-control" name="old_password" placeholder="Konfirmasi Bahwa Itu Benar Anda">
                        <label class="form-label" for="new_password">Kata Sandi Baru</label>
                        <input id="new_password" type="password" class="form-control" name="new_password" placeholder="Masukkan Kata Sandi Baru">   
                        <label class="form-label" for="password_conf">Kata Sandi Baru</label>
                        <input id="password_conf" type="password" class="form-control" name="password_conf" placeholder="Masukkan Ulang Kata Sandi Baru">  
                        <div class="d-grid">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" href="#" class="btnr btn-save">Simpan</button>
                                </div>
                            </div>
                        </div>
                        <hr style="margin-bottom: 18px">
                        <div class="text-center">
                            <h3>Lupa Sandi Lama Kamu?</h3>
                            <p>Jangan Khawatir, kamu hanya perlu menekan tombol dibawah dan kami 
                                akan mengirimkan tautan untuk merubah sandi kamu melalui alamat email 
                                yang telah kamu daftarkan
                            </p>
                        </div>
                        <div class="d-grid">
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit" href="#" class="btnr btn-send">Kirim</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection