@extends('layouts.admin.adminLayout')
@section('main-content')
@section('title', 'ManGo - Dashboard Admin')
  <div class="page-content p-5" id="content">
    <button id="sidebarCollapse" type="button" class=" navbar-toggler btn btn-dark bg-dark rounded-pill shadow-sm px-4 py-3 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <h2 class="display-4">Welcome {{Auth::user()->name}}</h2>
    <h4 class="subheader mb-0">Dashboard</h4> 
    <div class="separator"></div>
    <div class="row">
      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card card-aqua shadow h-100 py-2">
              <div class="card-body">
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Data I</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Data Value</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-database fa-2x"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card card-purple shadow h-100 py-2">
              <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Data II</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Data Value</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-database fa-2x"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card card-pink shadow h-100 py-2">
              <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Data III</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Data Value</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-database fa-2x"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>

      <div class="col-xl-3 col-md-6 mb-4">
          <div class="card card-red shadow h-100 py-2">
              <div class="card-body" >
                  <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Data IV</div>
                        <div class="h5 mb-0 font-weight-bold text-gray-800">Data Value</div>
                      </div>
                      <div class="col-auto">
                        <i class="fas fa-database fa-2x"></i>
                      </div>
                  </div>
              </div>
          </div>
      </div>
    </div>



  </div>
  
@endsection
 
