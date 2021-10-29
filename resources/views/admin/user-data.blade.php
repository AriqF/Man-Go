@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Data Pengguna')

    <div class="page-content p-5" id="content">
        <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
        <h2 class="mb-0 subheader">Data Pengguna</h2>
        <div class="separator"></div>
        @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif
        @if(session('danger'))
        <div class="alert alert-danger" role="alert">
            {{ session('danger') }}
        </div>
        @endif
        <a href="{{ route('admin.create') }}" class="user-detail btn btn-success mb-2"><i class="fas fa-user-plus"></i> Add New User</a>
        <table class="table table-striped table-dark text-center" id="table-user">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Depan</th>
                <th scope="col">Nama Belakang</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Role</th>
                <th scope="col">Ubah</th>
                <th scope="col">Hapus</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $user->id }}</th>
                    <td>{{ $user->first_name }}</td>
                    <td>{{ $user->last_name }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->is_admin }}</td>
                    <td><a href="{{ route('admin.edit', $user->id) }}" class="user-detail btn btn-primary mb-2">Ubah</a></td>
                    <form method="POST" action="{{ route('admin.destroy', $user) }}">
                        @csrf
                        @method('delete')
                        <td><input type="submit" value="Hapus" class="user-detail btn btn-danger mb-2"/></td>
                    </form>
                </tr>
            @endforeach
            </tbody>
          </table>
    </div>
@endsection
