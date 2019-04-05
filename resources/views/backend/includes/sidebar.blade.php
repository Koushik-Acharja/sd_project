<ul class="sidebar navbar-nav">
  <li class="nav-item active">
    <a class="nav-link" href="{{ URL::to('welcome') }}">
      <i class="fas fa-home"></i>
      <span>Home</span>
    </a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ URL::to('admin') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Service</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('all-services') }}">All Services</a>
      <a class="dropdown-item" href="{{ URL::to('event-overview') }}">All Event Overview</a>
      <a class="dropdown-item" href="{{ URL::to('event-overview-add') }}">Add Event Overview</a>
      <!--
      <a class="dropdown-item" href="{{ URL::to('event-history') }}">Event History</a>
    -->
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Slide</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('slide-all') }}">All Slide</a>
      <a class="dropdown-item" href="{{ URL::to('slide-add') }}">Add Slide</a>
      <!--
      <a class="dropdown-item" href="{{ URL::to('event-history') }}">Event History</a>
    -->
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Event</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('event-new-request') }}"">Event New Request</a>
      <a class="dropdown-item" href="{{ URL::to('event-in-progress') }}"">Event In Progress</a>
      <a class="dropdown-item" href="{{ URL::to('event-history') }}">Event History</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Access</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('alladmin') }}"">All Admin</a>
      <a class="dropdown-item" href="{{ URL::to('alladmin-add') }}"">Add Admin</a>
      <a class="dropdown-item" href="{{ URL::to('alluser') }}">All User</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Rules</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('rules') }}"">All Rules</a>
      <a class="dropdown-item" href="{{ URL::to('rule-add') }}">Add Rules</a>
    </div>
  </li>

  <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="postsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <i class="fas fa-fw fa-folder"></i>
      <span>Create Event Form</span>
    </a>
    <div class="dropdown-menu" aria-labelledby="postsDropdown">
      <a class="dropdown-item" href="{{ URL::to('requirements') }}"">Requirements</a>
      <a class="dropdown-item" href="{{ URL::to('eventtype') }}">Event Types</a>
      <a class="dropdown-item" href="{{ URL::to('eventguestmenu') }}">Event Guests Plan</a>
    </div>
  </li>

</ul>