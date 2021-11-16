@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Create Quiz')
    <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>
    <h2 class="mb-0 subheader">Add Question</h2>
    <div class="separator"></div>
        <table class="table table-striped table-dark text-center" id="datatables">
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Quiz Name</th>
                    <th>Question</th>
                    <th>Right Answer</th>
                    <th>View</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($questions as $key=>$qus)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$qus->quizes->quiz_name}}</td>
                        <td>{{$qus->question}}</td>
                        <td>{{$qus->answer}}</td>
                        <td>View</td>
                        <td><a href="/questions/{{$qus->id}}/edit">Edit</a></td>
                        <td>
                        </td>
                    </tr>
                @endforeach
            </tbody>  
        </table>
    </div>


    {{-- REQUIRE SCRIPT --}}
    @include('sweetalert::alert')

@endsection