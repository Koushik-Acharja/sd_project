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

    <!-- content area -->
    <div class="content-body">
        <div class="container">
            <div class="row">

                <div class="col-xl-9">
                    <div class="setting-personal">

                        <div class="list-group">

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label" for="val-username">NAME</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" id="val-username" name="val-username" placeholder="John Doe">
                                    </div>
                                </div>

                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">EMAIL</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-email" placeholder="Johndoe@gmail,com">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">PASSWORD</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-email" placeholder="Enter new password">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">ABOUT</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-email" placeholder="Describe your self here...">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">LANGUAGE</label>
                                    <div class="col-lg-3">
                                        <select id="inputState" class="form-control">
                                            <option selected="selected">English</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">LOCATION</label>
                                    <div class="col-lg-6">
                                        <div class="input-group">
                                            <input type="text" class="form-control b-r-0" value="Search location">
                                            <span class="input-group-append">
                                                <span class="input-group-text">
                                                    <i class="fa fa-crosshairs"></i>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 text-center">
                                        <button class="btn btn-secondary">EDIT</button>
                                    </div>
                                </div>
                            </div>
                            <div class="list-group-item">
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label">WEBSITE</label>
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" name="val-email" placeholder="www.yoursite.com">
                                    </div>
                                </div>
                            </div>

                            <div class="list-group-item text-center">
                                <button class="btn btn-secondary">SAVE ADDRESS</button>
                            </div>

                        </div>


                    </div>
                </div>

                <div class="col-xl-3">

                    <div class="event-sideber">
                        <h4>INTEREST</h4>
                        <div class="event-sideber-search setting">
                            <form action="#" method="post">
                                <input type="text" class="form-control" placeholder="Search Location">
                                <i class="fa fa-search"></i>
                            </form>
                        </div>
                        <div class="sideber-meta">
                            <button class="btn btn-outline-secondary">FOOD</button>
                            <button class="btn btn-outline-secondary">AWARDS</button>
                            <button class="btn btn-outline-secondary">SCIENCE</button>
                            <button class="btn btn-outline-secondary">TECHNOLOGY</button>
                        </div>


                        <h4>ADD SOCIAL ACCOUNT</h4>
                        <div class="row form-material m-b-30">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Http://">
                            </div>
                        </div>
                        <button class="btn btn-secondary">ADD</button>

                        <div class="sideber-social">
                            <h4 class=" m-t-30">ADDED -</h4>
                            <i class="fa fa-facebook"></i>
                            <i class="fa fa-twitter"></i>
                            <i class="fa fa-instagram"></i>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </div>
    <!-- #content area -->

    @include('dashboard-create-an-event')
    @include('dashboard-script')

</body>

</html>