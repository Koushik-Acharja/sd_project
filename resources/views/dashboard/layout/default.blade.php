<!DOCTYPE html>
<html lang="en">
  <head>
    @include('dashboard.include.dashboard-link')
  </head>

  <body id="page-top">

    <div class="header">
        @include('dashboard.include.dashboard-header')
    </div>
    <!-- /# header -->
    <div class="menu">
        @include('dashboard.include.dashboard-nav')
    </div>
    

    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">
          @yield('content')
        </div>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    @include('dashboard.include.dashboard-script')
  </body>

</html>
