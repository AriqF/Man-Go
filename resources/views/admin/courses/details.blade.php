@extends('layouts.admin.master')
@section('title','course')
@section('content')

<div class="container">
<div class="row">
<div class="col-md-12">
<h2 style="color:rgb(134, 188, 66);"><center>{{$data->course_title}}</center></h2><hr>
{!!$data->course_description!!}
</div>
</div>
</div>
@endsection