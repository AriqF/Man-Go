  <!-- Vertical navbar -->
  <div class="vertical-nav" id="sidebar">
    <div class="py-4 px-3 mb-4">
      <div class="media d-flex align-items-center">
        <img loading="lazy" src="{{asset('img/man.png')}}" alt="..." width="80" height="80" class="mr-3 rounded-circle img-thumbnail shadow-sm">
        <div class="media-body">
          <h4 class="m-0">{{Auth::user()->name}}</h4>
          <p class="font-weight-normal text-muted mb-0">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
        </div>
      </div>
    </div>

    <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0 nav-divider">Dashboard</p>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
          <a href="{{url('/adminHome')}}" class="nav-link">
            <i class="fa fa-th-large"></i> Dashboard
          </a>
      </li>
      <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="fas fa-users"></i> Pengguna
          </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fas fa-file-signature"></i> Data Soal
        </a>
    </li>
    <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="fa fa-bar-chart"></i> Data Rating
        </a>
    </li>
    </ul>

    <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0 nav-divider">Personal</p>

    <ul class="nav flex-column mb-0">
      <li class="nav-item">
        <a class="nav-link dropdown-toggle" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
          <i class="fas fa-user-cog "></i> Profil
        </a>
        <div class="collapse" id="collapseExample">
          <ul class="nav flex-column ">
            <li class="nav-item dropdown-collapse">
              <a class="nav-link" aria-current="page" href="{{url('/admin-profile')}}">Data Profil</a>
            </li>
            <li class="nav-item dropdown-collapse">
              <a class="nav-link " href="{{url('change-admin-password')}}">Ubah Kata Sandi</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a href="{{ url('/logout') }}" class="nav-link">
          <i class="fas fa-sign-out-alt"></i> Keluar
        </a>
      </li>
    </ul>
  </div>
  <!-- End vertical navbar -->