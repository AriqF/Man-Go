
<div class="main-container ace-save-state" id="main-container">
<script type="text/javascript">
try{ace.settings.loadState('main-container')}catch(e){}
</script>

<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
<script type="text/javascript">
try{ace.settings.loadState('sidebar')}catch(e){}
</script>

<div class="sidebar-shortcuts" id="sidebar-shortcuts">
<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
<button class="btn btn-success">
<i class="ace-icon fa fa-signal"></i>
</button>

<button class="btn btn-info">
<i class="ace-icon fa fa-pencil"></i>
</button>

<button class="btn btn-warning">
<i class="ace-icon fa fa-users"></i>
</button>

<button class="btn btn-danger">
<i class="ace-icon fa fa-cogs"></i>
</button>
</div>

<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
<span class="btn btn-success"></span>

<span class="btn btn-info"></span>

<span class="btn btn-warning"></span>

<span class="btn btn-danger"></span>
</div>
</div><!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
<li class="">
<a href="/infra">
<i class="menu-icon fa fa-tachometer"></i>
<span class="menu-text"> Dashboard </span>
</a>

<b class="arrow"></b>

</li>
@if(Sentinel::getUser()->roles()->first()->slug =='admin' OR Sentinel::getUser()->roles()->first()->slug =='subadmin' OR Sentinel::getUser()->roles()->first()->slug =='manager')

		<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Slider
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class=""> 
		<a href="/sliders/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Slider
		</a>

		<b class="arrow"></b>
		</li>

		<li class="">
		<a href="/sliders">
		<i class="menu-icon fa fa-caret-right"></i>
		View Silder
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Category Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="{{url('/categories/create')}}">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Category
		</a>

		<b class="arrow"></b>
		</li>

		<li class="">
		<a href="{{url('/categories')}}">
		<i class="menu-icon fa fa-caret-right"></i>
		View Categories
		</a>

		<b class="arrow"></b>
		</li>
   

</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Catelog Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="{{url('/catelogs/create')}}">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Catelog
		</a>

		<b class="arrow"></b>
		</li>

		<li class="">
		<a href="{{url('/catelogs')}}">
		<i class="menu-icon fa fa-caret-right"></i>
		View Catelog
		</a>

		<b class="arrow"></b>
		</li>
   

</ul>
</li>

		<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Book Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		<li class="">
		<a href="/books/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Book
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/books">
		<i class="menu-icon fa fa-caret-right"></i>
		View book
		</a>

		<b class="arrow"></b>
		</li>
		 

</ul>
</li>
 -->
<li><a href="/exmResults"><i class="menu-icon fa fa-desktop"></i> Exam Result 	<b class="arrow fa fa-angle-right"></b></a> </li>

<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Quiz Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		<li class="">
		<a href="/quizes/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Quiz
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/quizes">
		<i class="menu-icon fa fa-caret-right"></i>
		View Quiz
		</a>

		<b class="arrow"></b>
		</li>
		 

</ul>
</li>

<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Question Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		<li class="">
		<a href="/questions/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Qustion
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/questions">
		<i class="menu-icon fa fa-caret-right"></i>
		View Question
		</a>

		<b class="arrow"></b>
		</li>
		 

</ul>
</li>

		<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Faculty Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		<li class="">
		<a href="/faculties/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Faculty
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/faculties">
		<i class="menu-icon fa fa-caret-right"></i>
		View Faculty
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/facultie/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Faculty
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>

		<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Faculty Members
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="/fmembers/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Faculty Members
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/fmembers">
		<i class="menu-icon fa fa-caret-right"></i>
		View Faculty Members
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/fmember/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Faculty Members
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Office Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="/offices/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Office
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/offices">
		<i class="menu-icon fa fa-caret-right"></i>
		View Office
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/office/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Office
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>

<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Staff Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="/staffs/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Staff
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/staffs">
		<i class="menu-icon fa fa-caret-right"></i>
		View Staff
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/staff/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Staff
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>

<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Course Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="/courses/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Course
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/courses">
		<i class="menu-icon fa fa-caret-right"></i>
		View Course
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/course/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Course
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>
 -->
<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Message Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">
		
		 

		<li class="">
		<a href="/messages/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Message
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/messages">
		<i class="menu-icon fa fa-caret-right"></i>
		View Message
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/message/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Message
		</a>

		<b class="arrow"></b>
		</li>


</ul>
</li>

<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Scroll Notice
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/mnotices/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Scrol Notice
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/mnotices">
		<i class="menu-icon fa fa-caret-right"></i>
		View Scroll Notice
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li> -->
<!-- 
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Notice Section
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/notices/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Notice
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/notices">
		<i class="menu-icon fa fa-caret-right"></i>
		View Notice
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Why Education
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/educations/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Education
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/educations">
		<i class="menu-icon fa fa-caret-right"></i>
		View Education
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Event Section
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/events/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Event
		</a>

		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/events">
		<i class="menu-icon fa fa-caret-right"></i>
		View Event
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/event/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted Event
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	News Section
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/newses/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add News
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/newses">
		<i class="menu-icon fa fa-caret-right"></i>
		View News
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/news/deleted">
		<i class="menu-icon fa fa-caret-right"></i>
		Deleted News
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li> -->
<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Patner Section
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/patners/create">
		<i class="menu-icon fa fa-caret-right"></i>
		Add Patner
		</a>
		<b class="arrow"></b>
		</li>
		
		<li class="">
		<a href="/patners">
		<i class="menu-icon fa fa-caret-right"></i>
		View Patner
		</a>
		<b class="arrow"></b>
		</li>
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		User Section
		</span>

		<b class="arrow fa fa-angle-down"></b>
		</a>

		<ul class="submenu">

		<li class="">
		<a href="/user">
		<i class="menu-icon fa fa-caret-right"></i>
	   User list
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/password-reset">
		<i class="menu-icon fa fa-caret-right"></i>
	   Password Reset
		</a>

		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/contacts">
		<i class="menu-icon fa fa-caret-right"></i>
	   Contact list
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Contact Address
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/contactaddresses/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add 	Contact Address
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/contactaddresses">
		<i class="menu-icon fa fa-caret-right"></i>
	   View Contact Address
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li> -->
<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Course Fee
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/feeses/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add 	Course Fee
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/feeses">
		<i class="menu-icon fa fa-caret-right"></i>
	   View Course Fee
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Upcomming Notice
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/upnotices/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add up Notice
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/upnotices">
		<i class="menu-icon fa fa-caret-right"></i>
	   View Up Notice
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Service Notice
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/services/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add Service
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/services">
		<i class="menu-icon fa fa-caret-right"></i>
	   View Service
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li> -->
<!-- <li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
	Footer
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/footers/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add footer
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/footers">
		<i class="menu-icon fa fa-caret-right"></i>
	   View footer
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Footer One
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/footerones/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add footer 1
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/footerones">
		<i class="menu-icon fa fa-caret-right"></i>
	   View footer 1
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Footer Two
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/footertwos/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add footer 2
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/footertwos">
		<i class="menu-icon fa fa-caret-right"></i>
	   View footer 2
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Footer Three
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/footerthrees/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add footer 3
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/footerthrees">
		<i class="menu-icon fa fa-caret-right"></i>
	   View footer 3
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="#" class="dropdown-toggle">
		<i class="menu-icon fa fa-desktop"></i>
		<span class="menu-text">
		Footer Four
		</span>
		<b class="arrow fa fa-angle-down"></b>
		</a>
		<ul class="submenu">
		<li class="">
		<a href="/footerfours/create">
		<i class="menu-icon fa fa-caret-right"></i>
	   Add footer 4
		</a>
		<b class="arrow"></b>
		</li>
		<li class="">
		<a href="/footerfours">
		<i class="menu-icon fa fa-caret-right"></i>
	   View footer 4
		</a>
		<b class="arrow"></b>
		</li>
 
</ul>
</li>
<li class="">
		<a href="/subscribers">
		<i class="menu-icon fa fa-caret-right"></i>
	   View Subscriber
		</a>
		<b class="arrow"></b>
		</li> -->
		@endif
</ul><!-- /.nav-list -->

<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>

<div class="main-content">
<div class="main-content-inner">
<div class="breadcrumbs ace-save-state" id="breadcrumbs">
<ul class="breadcrumb">
<li>
<i class="ace-icon fa fa-home home-icon"></i>
<a href="/">Home</a>
</li>
</ul><!-- /.breadcrumb -->

<div class="nav-search" id="nav-search">
<form class="form-search">
<span class="input-icon">
<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
<i class="ace-icon fa fa-search nav-search-icon"></i>
</span>
</form>
</div><!-- /.nav-search -->
</div>
