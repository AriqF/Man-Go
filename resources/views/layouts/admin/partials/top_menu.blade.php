<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
<meta content="utf-8" http-equiv="encoding">
<link rel="icon"  href="{{asset('admin/assets/images/logo_icon.png')}}">
<meta charset="utf-8" />
<title>@yield('title')</title>

<meta name="description" content="Common form elements and layouts" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
@yield('style')
<!-- bootstrap & fontawesome -->
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/bootstrap.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/font-awesome/4.5.0/css/font-awesome.min.css')}}" />
<link rel="stylesheet" type="text/css" href="{{URL::asset('dist/summernote.css')}}">
<!-- page specific plugin styles -->
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/jquery-ui.custom.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/chosen.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/bootstrap-datepicker3.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/bootstrap-timepicker.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/daterangepicker.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/bootstrap-datetimepicker.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/bootstrap-colorpicker.min.css')}}" />

<!-- text fonts -->
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/fonts.googleapis.com.css')}}" />

<!-- ace styles -->
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/ace.min.css')}}" class="ace-main-stylesheet" id="main-ace-style" />

<link rel="stylesheet" href="{{URL::asset('admin/assets/css/ace-skins.min.css')}}" />
<link rel="stylesheet" href="{{URL::asset('admin/assets/css/ace-rtl.min.css')}}" />
 
	
<!-- inline styles related to this page ajax-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<!-- ace settings handler -->
<script src="{{URL::asset('admin/assets/js/ace-extra.min.js')}}"></script>



<style type="text/css">
	.middle{
		color: red;
		font-weight: bold;
	}
</style>
 
</head>

<body class="no-skin">
<div id="navbar" class="navbar navbar-default          ace-save-state">
<div class="navbar-container ace-save-state" id="navbar-container">
<button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
<span class="sr-only">Toggle sidebar</span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>

<span class="icon-bar"></span>
</button>

<div class="navbar-header pull-left">
<a href="/" class="navbar-brand">
<small>
<i class="fa fa-leaf"></i>
DM Admin
</small>
</a>
</div>

<div class="navbar-buttons navbar-header pull-right" role="navigation">
<ul class="nav ace-nav">
 


@if(Sentinel::check())
@if(Sentinel::getUser()->roles()->first()->slug =='admin' OR Sentinel::getUser()->roles()->first()->slug =='subadmin' OR Sentinel::getUser()->roles()->first()->slug =='manager')
    <li><a href="/newuser"><span class="glyphicon glyphicon-log-out"></span>Create New User</a></li>
@endif
      <li><a href="/logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
      <li><a href="/password"><span class="glyphicon glyphicon-log-out"></span> Change Password</a></li>
     @else
      <li><a href="/register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="/login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      @endif
</ul>
</div>
</div><!-- /.navbar-container -->
</div>

