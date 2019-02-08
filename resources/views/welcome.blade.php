
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta information -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"><!-- Mobile Specific Metas -->
    
    <!-- Title -->
    <title>Event Planning</title>
    
    <!-- favicon icon -->
    <link rel="shortcut icon" href="images/Favicon.ico">
    
    <!-- CSS Stylesheet -->
    <link href="css/bootstrap.css" rel="stylesheet"><!-- bootstrap css -->
    <link href="css/owl.carousel.css" rel="stylesheet"><!-- carousel Slider -->
    <link href="css/styles.css" rel="stylesheet" /><!-- font css --> 
    <link href="css/datepicker.css" rel="stylesheet" /><!-- Date picker css -->
    <link href="css/loader.css" rel="stylesheet"><!-- Loader Box css -->
    <link href="css/docs.css" rel="stylesheet"><!--  template structure css -->
    
    <!-- Used Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Domine:400,700%7COpen+Sans:300,300i,400,400i,600,600i,700,700i%7CRoboto:400,500" rel="stylesheet"> 
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

</head>
    
<body>
    <div class="page">
        <!--
        <div id="loader-wrapper">
            <div id="loader"><img src="images/loader.gif" alt=""></div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    -->
        <header id="header">
            <!--
            <div class="quck-link">
                <div class="container">
                    -->
                    <!--
                    <div class="mail"><a href="MailTo:info@eventplanning.com"><span class="icon icon-envelope"></span>info@eventplanning.com</a></div>
                    <div class="right-link">
                        <ul>
                            <li><a href="register.html"><span class="icon icon-multi-user"></span>Become a Vendor</a></li>
                            <li><a href="#"><span class="icon icon-invite-friend"></span>Invite Friends</a></li>
                            <li class="registration"><a href="javascript:;" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
                            <li><a href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
                        </ul>
                    </div>

                </div>    
            </div>
         -->
            <nav id="nav-main">

                <div class="container">
                    <div class="navbar navbar-inverse">
                        <div class="navbar-header">
                            <a href="index.html" class="navbar-brand"><img src="images/logo.png" alt=""></a>
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                                <span class="icon1-barMenu"></span>
                            </button>
                            
                        </div>
                        <div class="navbar-collapse collapse">
                            <ul class="nav navbar-nav">
                                <li class="single-col active">
                                    <a href="{{ URL::to('/') }}">Home</a>
                                </li>
                                <li><a href="aboutUs.html">About Us</a></li>
                                <li>
                                    <a href="services.html">Services <span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="services.html">Caterers</a></li>
                                        <li><a href="services.html">Mehndi</a></li>
                                        <li><a href="services.html">Decor &amp; Florists</a></li>
                                        <li><a href="services.html">Cakes</a></li>
                                        <li><a href="services.html">Wedding Planner</a></li>
                                        <li><a href="services.html">Gifts and Flowers</a></li>
                                        <li><a href="services.html">Make-up and Hair</a></li>
                                        <li><a href="services.html">Entertainment</a></li>
                                        <li><a href="services.html">Photographers/ Videographers</a></li>
                                        <li><a href="services.html">DJ</a></li>
                                        <li><a href="services.html">Wedding Cards</a></li>
                                    </ul>
                                </li>
                                <li class="single-col">
                                    <a href="#">Pages <span class="icon icon-arrow-down"></span></a>
                                    <ul>
                                        <li><a href="search-result.html">listing Page</a></li>
                                        <li><a href="search_detail.html">Details Page</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a href="blog_details.html">Blog Details</a></li>
                                        <li><a href="news-details.html">News Details</a></li>
                                        <li>
                                            <a href="booking_step1.html">Booking Step <span class="icon icon-arrow-right"></span></a>
                                            <ul>
                                                <li><a href="booking_step1.html">Booking Step1</a></li>
                                                <li><a href="booking_step2.html">Booking Step2</a></li>
                                                <li><a href="booking_step3.html">Booking Step3</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="career.html">Career</a></li>
                                        <li><a href="mapView.html">Map View</a></li>
                                        <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                        <li>
                                            <a href="account_profile.html">My Account <span class="icon icon-arrow-right"></span></a>
                                            <ul>
                                                <li><a href="account_profile.html">Profile</a></li>
                                                <li><a href="account_booking.html">Orders</a></li>
                                                <li><a href="account_password.html">Change Password</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="team.html">Team</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="page-404.html">404 page</a></li>
                                    </ul>
                                </li>
                            <!--
                                <li><a href="{{ URL::to('login') }}">Login </a></li>
                                <li><a href="{{ URL::to('signup') }}">Register </a></li>
                            -->
                @if(!session('userid'))
                                <li><a href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a></li>
                                <li><a href="javascript:;" data-toggle="modal" data-target="#registrationModal">Registration</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                @else
                                <li><a href="{{ URL::to('eventlog') }}">Make An Event</a></li>
                                <li><a href="contact.html">Contact us</a></li>
                                <li><a href="{{  URL::to('logout') }}">Logout</a></li>
                @endif
                            </ul>
                <!--
                            <div class="search-box">
                                <div class="search-icon"><span class="icon icon-search"></span></div>
                                <div class="search-view">
                                    <div class="input-box">
                                        <form>
                                            <input type="text" placeholder="Search here">
                                            <input type="submit" value="" >
                                        </form>
                                    </div>
                                </div>
                            </div>
                -->
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <div class="modal modal-vcenter fade" id="loginModal" tabindex="-1" role="dialog">
            <div class="modal-dialog login-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
                    <div class="left-img"><img src="images/login-leftImg.png" alt=""></div>
                    <div class="right-info">
                        <h1>Login</h1>
                        <div class="sosal-midiyaLogin">
                            <div class="facebook-link">
                                <a href="#"><span class="icon icon-facebook"></span>Sign in with Facebook</a>
                            </div>
                            <div class="google-link">
                                <a href="#"><span class="icon icon-google-plus"></span>Sign in with Google+</a>
                            </div>
                        </div>
                        <div class="or-text"><span>OR</span></div>
                        <form action="{{ URL::to('loginStore') }}" method="post">
                            {{ csrf_field() }}
                        <div class="input-form">
                            <div class="input-box">
                                <div class="icon icon-user"></div>
                                <input name="email" type="text" placeholder="Email ID">
                            </div>
                            <div class="input-box">
                                <div class="icon icon-lock"></div>
                                <input name="password" type="password" placeholder="Password">
                            </div>
                        <!--
                            <div class="check-slide">
                                <div class="check">
                                    <label class="label_check" for="checkbox-02"><input type="checkbox" name="sample-checkbox-01" id="checkbox-02" value="1" checked="">Remember me</label>
                                    
                                </div>
                                <a href="#">Forgot password ?</a>
                            </div>
                            <a href="javascript:;" data-toggle="modal" data-target="#loginModal">Login</a>
                            <a href="javascript:;" data-toggle="modal" data-target="#registrationModal">Registration</a>
                        -->
                            <div class="submit-slide">
                                <input type="submit" value="Login" class="btn">
                            </div>       
                        </div>
                        </form>
                        <div class="signUp-link">Haven’t signed up yet? <a href="javascript:void(0);">Sign Up</a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal modal-vcenter fade" id="registrationModal" tabindex="-1" role="dialog">
            <div class="modal-dialog registration-popup" role="document">
                <div class="modal-content">
                    <div class="close-icon" aria-label="Close" data-dismiss="modal" ><img src="images/close-icon.png" alt=""></div>
                    <h1>New Member Registration</h1>
                    <div class="registration-form">
                        <div class="info">
                            <h2>Why to sign up</h2>
                            <ul>
                                <li>Exclusive discounts for all bookings</li>
                                <li>Full access all discounted prices</li>
                                <li>Dedicated wed-ordinator for your event</li>
                                <li>Custom event planner for your event</li>
                            </ul>
                        </div>
                        <div class="form-filde">
                        <form action="{{ URL::to('signupStore') }}" method="post">
                            {{ csrf_field() }}
                            <div class="input-box">
                                <input name="name" type="text" placeholder="Username" oninvalid="this.setCustomValidity('Please Enter Your Name')"
 oninput="setCustomValidity('')" required>
                            </div>
                            <div class="input-box">
                                <input name="email" type="email" placeholder="Email ID" oninvalid="this.setCustomValidity('Please Enter valid email')"
 oninput="setCustomValidity('')" required>
                            </div>
                            <div class="input-box">
                                <input name="address" type="text" placeholder="Address" oninvalid="this.setCustomValidity('Please Enter Your Current Address')"
 oninput="setCustomValidity('')" required>
                            </div>
                            <div class="input-box">
                                <input id="ssn" type="tel" name="phone" placeholder="Phone : XXX-XXX-XXXX" pattern="^\d{3}-\d{3}-\d{4}$" maxlength="12" oninvalid="this.setCustomValidity('Please Enter Phone Number In This Pattern : XXX-XXX-XXXX')"
 oninput="setCustomValidity('')" required>
                            </div>
                            <div class="input-box">
                                <input name="password" type="password" placeholder="Password" required>
                            </div>
                            <div class="input-box">
                                <input name="confirmpassword" type="password" placeholder="Confirm Password" oninvalid="this.setCustomValidity('Please Re-Enter The Same Password')"
 oninput="setCustomValidity('')" required>
                            </div>
                        <!--
                            <div class="captcha-box">
                                <input type="text" placeholder="Enter Captcha">
                                <div class="captcha-img"><img src="images/capcha-img.png" alt=""></div>
                            </div>
                            <div class="note">Can’t Read ?<a href="#">Refresh</a></div>
                            <div class="check-slide">
                                <label class="label_check" for="checkbox-03"><input type="checkbox" name="sample-checkbox-01" id="checkbox-03" value="1" checked="">By signing up, I agree to EventPlanning terms of services</label>
                            </div>
                        -->
                            <div class="submit-slide">
                                <input type="submit" value="Register" class="btn">
                            </div>
                        </div>
                    </form>
                    </div>
                </div>    
            </div>
        </div>
        
        <section class="banner">
            <div class="carousel" id="mainBnner">
                <div class="item"><img src="images/banner-img/slider-img.jpg" alt=""></div>
                <div class="item"><img src="images/banner-img/slider-img2.jpg" alt=""></div>
                <div class="item"><img src="images/banner-img/slider-img3.jpg" alt=""></div>
            </div>
            <div class="banner-nav">
                <div class="prev"><span class="icon icon-arrow-left"></span></div>
                <div class="next"><span class="icon icon-arrow-right"></span></div>
            </div>
            <div class="banner-text">
                <div class="container">
                    <div class="search-title">
                        <h1> Every Event Should be  <span>Perfect</span></h1>
                    </div>
<!--
                    <div class="banner-search">
                        <div class="input-box">
                            <div class="icon icon-grid-view"></div>
                            <input type="text" placeholder="Event Type">
                        </div>
                        <div class="input-box location">
                            <div class="icon icon-location-1"></div>
                            <input type="text" placeholder="Event Location">
                        </div>
                        <div class="input-box date">
                            <div class="icon icon-calander-month"></div>
                            <input type="text" placeholder="Select Date" id="datepicker2">
                        </div>
                        <div class="submit-slide">
                            <input type="submit" value="Search Now" class="btn">
                        </div>
                        <p>Create the Perfect Event</p> 
                    </div>
-->
                </div>
            </div>
        </section>
        <section class="service-type">
            <div class="container">
                <div class="heading">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <div class="text">
                        <h2>Our Services</h2>
                    </div>
                    <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="service-catagari">
                    <ul>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-caterers"></span>
                                <span class="text">Caterers</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-flower-pot"></span>
                                <span class="text">Decor & Florists</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-calander"></span>
                                <span class="text">Event Planner</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-beauty"></span>
                                <span class="text">Make-up and Hair</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-wedding-card"></span>
                                <span class="text">Wedding Cards</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-mehandi"></span>
                                <span class="text">Mehandi</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-cake"></span>
                                <span class="text">Cakes</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-music"></span>
                                <span class="text">DJ</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-camera"></span>
                                <span class="text">Photographers &amp; Videographers</span>
                            </a>
                        </li>
                        <li>
                            <a href="services.html">
                                <span class="icon icon-glass"></span>
                                <span class="text">Entertainment</span>
                            </a>
                        </li>
                    </ul>
            
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container">
                <div class="home-event">
                    <div class="heading">
                        <div class="icon"><em class="icon icon-heading-icon"></em></div>
                        <div class="text">
                            <h2>Events Overview</h2>
                        </div>
                        <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                    </div>
                    <div class="row">
                        <div class="event-slider">
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img1.jpg" alt="">
                                            <span class="capsan">
                                                <span>Event Planner</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Event Planner</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img2.jpg" alt="">
                                            <span class="capsan">
                                                <span>Corporate Events</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Corporate Events</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img3.jpg" alt="">
                                            <span class="capsan">
                                                <span>Birthday Party</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Birthday Party</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img1.jpg" alt="">
                                            <span class="capsan">
                                                <span>Event Planner</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Event Planner</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img2.jpg" alt="">
                                            <span class="capsan">
                                                <span>Corporate Events</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Corporate Events</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="event-box">
                                    <div class="img">
                                        <a href="#">
                                            <img src="images/event-img/event-img3.jpg" alt="">
                                            <span class="capsan">
                                                <span>Birthday Party</span>
                                            </span>
                                        </a>
                                    </div>
                                    <div class="name">Birthday Party</div>
                                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s ype specimen book. It has survived not only five centuries,</p>
                                    <a href="#">Readmore</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--
        <section class="friends-block">
            <div class="container">
                <div class="sub-title">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <h2>Client Say’s</h2>
                    <div class="img"><img src="images/heading-blackBgimg.png" alt=""></div>
                </div>
                <div id="friend_slider" class="carousel">
                    <div class="item">
                        <div class="friends-info">
                            <div class="friend-img">
                                <div class="img"><img src="images/user-img/friend-img.png" alt=""></div>
                                <div class="img-fream"><img src="images/img-fream.png" alt=""></div>
                                <div class="name">John Doe</div>
                            </div>
                            <div class="text">
                                <p><img src="images/starting-point.png" alt="" class="start-img">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem   Ipsum has been the industry's standard dummy text ever since the 1500s, an unknown printer took a galley of type and scrambled it  type specimen book.  <img src="images/ending-point.png" alt="" class="end-img"></p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="friends-info">
                            <div class="friend-img">
                                <div class="img"><img src="images/user-img/friend-img.png" alt=""></div>
                                <div class="img-fream"><img src="images/img-fream.png" alt=""></div>
                                <div class="name">John Doe</div>
                            </div>
                            <div class="text">
                                <p><img src="images/starting-point.png" alt="" class="start-img">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem   Ipsum has been the industry's standard dummy text ever since the 1500s, an unknown printer took a galley of type and scrambled it  type specimen book.  <img src="images/ending-point.png" alt="" class="end-img"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="story-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-sm-8">
                        <div class="success-story">
                            <h2>Success Story <a href="#"><span class="icon icon-eye"></span>View All</a></h2>
                            <div class="story-slide">
                                <div class="img"><img src="images/user-img/story-img1.png" alt=""></div>
                                <div class="text">
                                    <p>We have 20 years experience planning and organizing beautiful weddings and events. We have built up excellent relationships with the most professional suppliers on the coast to help with your every desire. From a small intimate gathering to a more luxurious wedding day we can help you make your Dream Wedding a reality. </p>
                                    <div class="name">- Larry Cook</div>
                                </div>
                            </div>
                            <div class="story-slide">
                                <div class="img"><img src="images/user-img/story-img2.png" alt=""></div>
                                <div class="text">
                                    <p>We have 20 years experience planning and organizing beautiful weddings and events. We have built up excellent relationships with the most professional suppliers on the coast to help with your every desire. From a small intimate gathering to a more luxurious wedding day we can help you make your Dream Wedding a reality.</p>
                                    <div class="name">- Stacy Benjamin</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <div class="share-story">
                            <h2>Share Your Story</h2>
                            <form class="has-validation-callback">
                                <div class="input-box">
                                    <input type="text" placeholder="Name" data-validation="required" data-validation-error-msg="Name cannot be blank.">
                                </div>
                                <div class="input-box">
                                    <input type="text" placeholder="Email" data-validation="email" data-validation-error-msg="Incorrect e-mail address">
                                </div>
                                <div class="FileUpload">
                                    <input type="file" size="24" id="BrowserHidden" onchange="getElementById('FileField').value = getElementById('BrowserHidden').value;" class="BrowserHidden"/>
                                    <div class="BrowserVisible"><input type="text" id="FileField" class="FileField" placeholder="Your Photo" /></div>
                                </div>
                                <div class="input-box">
                                    <textarea placeholder="Your Story"  data-validation="required" data-validation-error-msg="Story cannot be blank."></textarea>
                                </div>
                                <div class="submit-slide">
                                    <input type="submit" value="Share Your Story" class="btn">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
-->
        <section class="news-view">
            <div class="container">
                <div class="heading">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <div class="text">
                        <h2>Latest News</h2>
                    </div>
                    <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="news-box">
                            <div class="row">
                                <div class="col-sm-6"><img src="images/news-img/news-img1.png" alt=""></div>
                                <div class="col-sm-6">
                                    <div class="text">
                                        <div class="news-title">
                                            <h3>Post with Image Here</h3>
                                            <span>Rashed kabir on 24 Feb, 2014</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a href="#" class="btn">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="news-box style2">
                                    <div class="text">
                                        <div class="news-title">
                                            <h3>Post with Image Here</h3>
                                            <span>Rashed kabir on 24 Feb, 2014</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a href="#" class="btn">Read More</a>
                                    </div>
                                </div>      
                            </div>
                            <div class="col-sm-6">
                                <div class="news-box style2">
                                    <div class="text">
                                        <div class="news-title">
                                            <h3>Post with Image Here</h3>
                                            <span>Rashed kabir on 24 Feb, 2014</span>
                                        </div>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                        <a href="#" class="btn">Read More</a>
                                    </div>
                                </div>      
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="news-box style3">
                            <img src="images/news-img/news-img2.png" alt="">
                            <div class="text">
                                <div class="news-title">
                                    <h3>Post with Image Here</h3>
                                    <span>Rashed kabir on 24 Feb, 2014</span>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <a href="#" class="btn">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!--
        <section class="event-sponsor">
            <div class="container">
                <div class="heading">
                    <div class="icon"><em class="icon icon-heading-icon"></em></div>
                    <div class="text">
                        <h2>Clients </h2>
                    </div>
                    <div class="info-text">It has survived not only five centuries, but also the leap into electronic typesetting,</div>
                </div>
                <div class="sponsor-slider">
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo1.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo2.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo3.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo4.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo1.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo2.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo3.png" alt=""></a></div>
                    <div class="item"><a href="#"><img src="images/sponsor-logo/sponsor-logo4.png" alt=""></a></div>
                </div>
            </div>
        </section>
-->
        <footer id="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
<!--
                        <div class="col-lg-3 col-sm-6 col-md-3">
                            <h5>Latest Updates</h5>
                            <div class="update-slide">
                                <div class="img"><img src="images/event-img/update-img1.png" alt=""></div>
                                <div class="text">
                                    <p>Lorem ipsum is a dummy text full  service industrial design.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="update-slide">
                                <div class="img"><img src="images/event-img/update-img2.png" alt=""></div>
                                <div class="text">
                                    <p>Integrated Design Systems is a  full-service industrial design.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                            <div class="update-slide">
                                <div class="img"><img src="images/event-img/update-img3.png" alt=""></div>
                                <div class="text">
                                    <p>when an unknown printer took a galley of type and specimen book.</p>
                                    <a href="#">Read More</a>
                                </div>
                            </div>
                        </div>
-->
                        <div style="width: 33%;" class="col-lg-3 col-sm-6 col-md-3 text-center">
                            <div class="footer-link">
                                <h5>Company</h5>
                                <ul>
                                    <li><a href="aboutUs.html">About Us</a></li>
                                    <li><a href="privacy_policy.html">Privacy Policy</a></li>
                                    <li><a href="career.html">Careers</a></li>
                                    <li><a href="blog.html">Blogs</a></li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div style="width: 33%;" class="col-lg-3 col-sm-6 col-md-3">
                            <div class="footer-contact">
                                <h5>Contact us</h5>
                                <div class="contact-slide">
                                    <div class="icon icon-location-1"></div>
                                    <p>74 West Main Street, Oyster Bay, Berlin, 10963 - Germany </p>
                                </div>
                                <div class="contact-slide">
                                    <div class="icon icon-phone"></div>
                                    <p>516-482-2181 ext 101</p>
                                </div>
                               
                                <div class="contact-slide">
                                    <div class="icon icon-message"></div>
                                    <a href="MailTo:info@eventplanning.com">info@eventplanning.com</a>
                                </div>
                            </div>
                        </div>
                        <div style="width: 33%;" class="col-lg-3 col-sm-6 col-md-3">
                            <div class="contact-form">
                                <h5>Connect with us</h5>
                                <p>We'll keep you informed and updated Sign up for our email newsletters </p>
                                <div class="input-row">
                                    <div class="input-box">
                                        <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="input-box">
                                        <input type="text" placeholder="Last Name">
                                    </div>
                                </div>
                                <div class="input-row email">
                                    <div class="input-box">
                                        <input type="text" placeholder="Email Address">
                                    </div>
                                    <div class="submit-box">
                                        <input type="submit" value="Submit">
                                    </div>
                                </div>
<!--
                                <div class="sosal-midiya">
                                    <ul>
                                        <li><a href="#"><span class="icon icon-facebook"></span></a></li>
                                        <li><a href="#"><span class="icon icon-twitter"></span></a></li>
                                        <li><a href="#"><span class="icon icon-linkedin"></span></a></li>
                                        <li><a href="#"><span class="icon icon-skype"></span></a></li>
                                        <li><a href="#"><span class="icon icon-google-plus"></span></a></li>
                                        <li><a href="#"><span class="icon icon-play"></span></a></li>
                                    </ul>
                                </div>
-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <!--
            <div class="footer-bottom">
                <div class="container">
                    <p>Copyright &copy; <span></span> - EventPlanning  | All Rights Reserved</p>
                </div>
            </div>
        -->
        </footer>
    </div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    
    <script type="text/javascript" src="js/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.selectbox-0.2.js"></script>
    <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="js/placeholder.js"></script>
    <script type="text/javascript" src="js/coustem.js"></script>

    <script>
        $(":input").inputmask();

        $("#ssn").inputmask({"mask": "(999) 999-9999"});
    </script>
</body>
</html>

