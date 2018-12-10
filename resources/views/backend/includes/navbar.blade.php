<nav class="navbar navbar-expand navbar-dark bg-dark static-top">

  <button class="btn btn-link  text-white order-1 order-sm-0" id="sidebarToggle" href="#">
    <i class="fas fa-bars"></i>
  </button>

  <a class="navbar-brand mr-1" href="{{ URL::to('admin') }}">Event Admin</a>
  
  <ul class="navbar-nav ml-auto mr-0 ">
    <li class="nav-item dropdown no-arrow">
      <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-user-circle fa-fw"></i>
      </a>
      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="{{ URL::to('/logout') }}">Logout</a>
      </div>
    </li>
  </ul>

</nav>