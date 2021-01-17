<nav class="main-header navbar navbar-expand navbar-white navbar-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
  </ul>

  <form class="form-inline ml-3">
    <div class="input-group input-group-sm">
      <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
      <div class="input-group-append">
        <button class="btn btn-navbar" type="submit">
        <i class="fas fa-search"></i>
        </button>
      </div>
    </div>
  </form>

  <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
          @if(Auth::check())
          <a class="nav-link" data-toggle="dropdown" href="#">
            {{request()->user()->nama}}
          @else
            <a href="{{url('login')}}">Silahkan Login</a>
          @endif
      <img src="#" alt="">
      </a>
      <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <i class="fas fa-user"></i>
              Profile
            </div>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <div class="media">
              <i class="fas fa-cog"></i>
              Settings
            </div>
          </a>
          <div class="dropdown-divider"><i class="fas fa-sign-out-alt"></i>Log Out</div>
          <a href="{{url('logout')}}" class="dropdown-item dropdown-footer"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </div>
    </li>
  </ul>
</nav>