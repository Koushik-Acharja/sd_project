@extends('dashboard.layout.default')
@section('content')
@if(session('success'))
    <div class="alert alert-success" style="margin-top: 20px">
      {{ session('success') }}
    </div>
@endif
    <!-- content area -->
    <div class="content-body">
        <div class="container">
            <!-- <div class="row"> -->
                

                <!-- <div class="col-xl-12"> -->
                    

                    <!-- Modal -->
                    <div class="event-modal event-profile">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">

                                <div class="row">
                                    @if($info)
                                    <div class="col-xl-12">
                                        <div class="modal-right">
                                            <div class="media personal-profile">
                                                <img class="m-r-30 img-fluid" src="dashboard/images/ppl.png" alt="placeholder image">
                                                <div class="media-body">
                                                    <h3 class="mt-0">{{ $info->name }}</h3>
                                                    <p class="denger"><i class="fa fa-map-marker"></i>{{ $info->address }}</p>
                                                    <p class="denger">{{ $info->email }}</p>
                                                    <p>Phone : {{ $info->phone }}</p>
                                                </div>
                                                <button class="btn btn-secondary" onclick="location.href='{{ url('edit-profile') }}'">EDIT</button>
                                            </div>

                                            <div class="modal-about-area">
                                                <h3>ABOUT</h3>
                                                <p>{{ $info->about }}</p>
<!--
                                                <i class="fa fa-facebook"></i>
                                                <i class="fa fa-twitter"></i>
                                                <i class="fa fa-instagram"></i>
-->
                                            </div>
<!--
                                            <div class="modal-tags">
                                                <h3>INTEREST</h3>
                                                <button class="btn btn-outline-secondary btn-rounded">FOOD</button>
                                                <button class="btn btn-outline-secondary btn-rounded">MUSIC</button>
                                                <button class="btn btn-outline-secondary btn-rounded">TECHNOLOGY</button>
                                                <button class="btn btn-outline-secondary btn-rounded">AWARDS</button>
                                            </div>

                                            <div class="modal-footer-area">
                                                <div class="row justify-content-between">
                                                    <div class="col-auto">
                                                        <P>
                                                            <i class="fa fa-check-circle"></i>ACTIVITY</P>
                                                    </div>
                                                    <div class="col-auto">
                                                        <a href="#">
                                                            <i class="fa fa-exclamation-triangle"></i>
                                                        </a>
                                                        <a href="#">
                                                            <i class="fa fa-trash"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
-->
                                        </div>
                                    </div>
                                    @endif
                                    <!--
                                    <div class="col-xl-4 p-l-0">
                                        <div class="modal-left">
                                            <!- Nav tabs ->

                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#home">EVENT ATTENDED</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#profile">EVENT CREATED</a>
                                                </li>

                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="home" role="tabpanel">
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt2.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt3.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt4.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt5.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="tab-pane fade" id="profile">
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt4.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt3.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <img class="m-r-15 img-fluid" src="dashboard/images/modl-ryt2.jpg" alt="placeholder image">
                                                        <div class="media-body">
                                                            <h3 class="mt-0">Anamika</h3>
                                                            <p>
                                                                <i class="fa fa-map-marker"></i>Location</p>
                                                            <span>22 June 2018</span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>




                                    </div>
                                -->
                                </div>

                            </div>
                        </div>
                    </div>
                <!-- </div> -->

                
            <!-- </div> -->

        </div>
    </div>
    <!-- #content area -->
@stop