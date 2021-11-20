@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Data Pengguna')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

<div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button"
        class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i
            class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Data Rating</h2>
    <div class="separator"></div>
    <table class="table table-striped table-dark text-center" id="table-user">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Username</th>
                <th scope="col">Email</th>
                <th scope="col">Komentar</th>
                <th scope="col">Rating</th>
                <th scope="col">Status</th>
            </tr>
        </thead>
        <tbody class="body-table">
            @foreach ($ratings as $rating)
            <tr>
                <th scope="row">{{ $rating['id'] }}</th>
                    <td>{{ $rating['user_id'] }}</td>
                    <td>{{ $rating['user']['name'] }}</td>
                    <td>{{ $rating['user']['email'] }}</td>
                    <td>{{ $rating['comments'] }}</td>
                    <td>{{ $rating['rating'] }}</td>
                    <td>
                        @if($rating['status']==1)
                            <a href="javascipt:void(0)" class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}">
                                <i class="fa fa-toggle-on" aria-hidden="true" status="Active"></i>
                            </a>
                            @else
                            <a href="javascipt:void(0)" class="updateRatingStatus" id="rating-{{ $rating['id'] }}" rating_id="{{ $rating['id'] }}">
                                <i class="fa fa-toggle-off" aria-hidden="true" status="Inactive"></i>
                            </a>
                        @endif
                    </td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="{{asset('js/user.js')}}"></script>
</div>

@endsection
