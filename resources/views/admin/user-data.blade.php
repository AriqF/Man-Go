@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Data Pengguna')
    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
        <h2 class="mb-0 subheader">Data Pengguna</h2> 
        <div class="separator"></div>
        <table class="table table-striped table-dark text-center" id="table-user">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>Julia</td>
                <td>Tya</td>
                <td>JTya</td>
                <td>Jtya@mailer.com</td>
                <td>User</td>
                <td><a href="#" class="user-detail">Detail</a></td>
              </tr>

            </tbody>
          </table>
    </div>
@endsection