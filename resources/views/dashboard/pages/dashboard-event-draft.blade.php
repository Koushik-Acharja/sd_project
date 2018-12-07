<!doctype html>
<html class="no-js" lang="">

<head>
    @include('dashboard-link')
</head>
<body>
    <div class="header">
        @include('dashboard-header')
    </div>
    <!-- /# header -->
    <div class="menu">
        @include('dashboard-nav')
    </div>
    <!-- /# menu -->
    <div class="page-title">
        @include('dashboard-element')
    </div>
    <!-- /# element -->

    <div class="content-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First</th>
                          <th scope="col">Last</th>
                          <th scope="col">Handle</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Mark</td>
                          <td>Otto</td>
                          <td>@mdo</td>
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Jacob</td>
                          <td>Thornton</td>
                          <td>@fat</td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td colspan="2">Larry the Bird</td>
                          <td>@twitter</td>
                        </tr>
                      </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    @include('dashboard-create-an-event')




    <!-- Common JS -->
    <script src="dashboard/js/common.min.js"></script>
    <script src="dashboard/js/scripts.js"></script>


    <script src="dashboard/js/circle-progress.min.js"></script>

    <!-- Morris Chart -->
    <script src="dashboard/js/chartist.min.js"></script>
    <script src="dashboard/js/chartist-plugin-tooltip.min.js"></script>
    <script src="dashboard/js/dashboard.js"></script>

</body>

</html>