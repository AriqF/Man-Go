@extends('layouts.admin.master')
 @section('title','Education view')
 @section('content')
 <div class="container">
<div class="row">
<div class="col-md-12"><br>
<h2 style="color:rgb(134, 188, 66);"><center>{{$data->title}}</center></h2><hr>
<span style="text-align: justify;">{!!$data->description!!}</span>
</div>
</div>
</div><br>
@endsection