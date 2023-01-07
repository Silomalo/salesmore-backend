<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../cms/img/logo.png">
        <title>Truecode developers | Home</title>

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="../frontStyling/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>

        <!-- Theme Styles -->
        <link href="../frontStyling/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/css/global/global.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/pop.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../frontStyling/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="../frontStyling/img/apple-touch-icon.png">
        @livewireStyles
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>
        <div class="containerMain" id="blur">
        <!--========== HEADER V2 ==========-->
        <header class="navbar-fixed-top s-header-v2 js__header-sticky">
            <!-- Navbar -->
            <nav class="s-header-v2__navbar">
                <div class="container g-display-table--lg">
                    <!-- Navbar Row -->
                    <div class="s-header-v2__navbar-row">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="s-header-v2__navbar-col">
                            <button type="button" class="collapsed s-header-v2__toggle" data-toggle="collapse" data-target="#nav-collapse" aria-expanded="false">
                                <span class="s-header-v2__toggle-icon-bar"></span>
                            </button>
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col-width--180">
                            <!-- Logo -->
                        @foreach($header as $header)
                            <div class="s-header-v2__logo">
                                <a href="/" class="s-header-v2__logo-link">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--default" src="{{ URL::asset($header->logo)}}" alt=" Logo" style="max-width: 100px;">
                                    <img class="s-header-v2__logo-img s-header-v2__logo-img--shrink" src="{{ URL::asset($header->logo)}}" alt=" Logo" style="max-width: 100px;">
                                </a>
                            </div>
                        @endforeach
                            <!-- End Logo -->
                        </div>

                        <div class="s-header-v2__navbar-col s-header-v2__navbar-col--right">
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse s-header-v2__navbar-collapse" id="nav-collapse">
                                <ul class="s-header-v2__nav">
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link -is-active">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/About" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Projects" class="s-header-v2__nav-link">Projects</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Team" class="s-header-v2__nav-link">Team</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Contacts" class="s-header-v2__nav-link s-header-v2__nav-link--dark">Contacts</a></li>
                                </ul>
                            </div>
                            <!-- End Nav Menu -->
                        </div>
                    </div>
                    <!-- End Navbar Row -->
                </div>
            </nav>
            <!-- End Navbar -->
        </header>
        <!--========== END HEADER V2 ==========-->

        <!--========== SWIPER SLIDER ==========-->
        <div class="s-swiper js__swiper-slider">

            <!-- Swiper Wrapper -->
            <div class="swiper-wrapper">
            @foreach ($slider as $slider)
                <div class="s-promo-block-v4 g-fullheight--xs g-bg-position--center swiper-slide" style="background: url({{ URL::asset($slider->image)}});">
                    <div class="container g-text-right--xs g-ver-center--xs">
                        <div class="row" style="background-color: rgba(242, 118, 73,0.5);border-radius:10px;">
                            <div class="col-md-7 col-md-offset-5" style="padding: 7px; " >
                                <div class="g-margin-b-50--xs">
                                    <h2 class="g-font-size-32--xs g-font-size-45--sm g-font-size-55--md g-color--white">{{ $slider->title}}</h2>
                                    <p class="g-font-size-18--xs g-font-size-22--sm g-color--white-opacity">{{ $slider->description}}</p>
                                </div>
                                <a href="/About" class="text-uppercase s-btn s-btn--md s-btn--white-brd g-radius--50 g-padding-x-50--xs">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
            <!-- End Swiper Wrapper -->

            <!-- Pagination -->
            <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--bc s-swiper__pagination-v1--white js__swiper-pagination"></div>
        </div>
        <!--========== END SWIPER SLIDER ==========-->

          <!-- Clients -->
          <div class="g-container--md g-padding-y-80--xs g-padding-y-100--sm">
            <!-- Swiper Clients -->
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs" style="text-align: center;">Our clients</p>
            <div class="s-swiper js__swiper-clients">
                <div class="swiper-wrapper">
                @foreach ($client as $client)
                    <div class="swiper-slide">
                        <div class="wow fadeIn" data-wow-duration=".3" data-wow-delay=".1s">
                            <a href="{{ $client->link}}"><img class="s-clients-v1" src="{{ URL::asset($client->image)}}" alt="Clients Logo"></a>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <!-- End Swiper Clients -->
        </div>

        <!-- About -->
        @foreach ($abt as $header)
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                <div class="col-sm-4 col-xs-6 g-hor-centered-row__col">
                    <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                        <img class="img-responsive" src="{{ $header->image}}" alt="Image">
                    </div>
                </div>
                <div class="col-sm-1"></div>
                <div class="col-sm-8 g-hor-centered-row__col mytable">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">About truecode</p>
                    <p class="g-font-size-18--sm">{!! $header->about !!}</p>
                </div>
            </div>
        </div>
        @endforeach
        <br><br>
        <!-- End About -->


         <!-- Features -->
         <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs" style="text-align: center;">Our Services</p>
            <div class="row g-margin-b-60--xs g-margin-b-70--md">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".1s">
                                <i class="g-font-size-28--xs g-color--primary ti-pencil-alt"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Planning and Development</h3>
                            <p class="g-margin-b-0--xs">Using customers' requirements, we undertake a detailed design and planning of the expected final product. We guide you towards achieving your expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".2s">
                                <i class="g-font-size-28--xs g-color--primary ti-world"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Web Development</h3>
                            <p class="g-margin-b-0--xs">We create secure, custom web appliactions featured with API intergration to allow connectivity between your business and the community(clients). </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".3s">
                                <i class="g-font-size-28--xs g-color--primary ti-mobile"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">App Design and Development</h3>
                            <p class="g-margin-b-0--xs">We create cross-platform, secure and interactive mobile applications that meet our customers ideal expectations</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-shopping-cart"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">E-commerce</h3>
                            <p class="g-margin-b-0--xs">Advanced real time e-commerce systems that can handle high traffic with easy interactivity among its components. They are secure and handle financial transactions e.g: Mpesa and Paypal.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-desktop"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Desktop Application</h3>
                            <p class="g-margin-b-0--xs">We develop cross-platform desktop applications that can be networked. E.g Hospital, supermarket, financial, Warehouse and Schools management systems </p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".6s">
                                <i class="g-font-size-28--xs g-color--primary ti-stats-up"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Data  Analysis</h3>
                            <p class="g-margin-b-0--xs">We make value of your business data by obtaining information to expand your activities, through generating informed decision making models.</p>
                        </div>
                    </div>
                </div>
            </div>
            <br> <br>
            <div class="row">
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".4s">
                                <i class="g-font-size-28--xs g-color--primary ti-panel"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Embended Technology</h3>
                            <p class="g-margin-b-0--xs">We created embended devices to automate your Industrial activities. They are made based o your specifications and business type.</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 g-margin-b-60--xs g-margin-b-0--md">
                    <div class="clearfix">
                        <div class="g-media g-width-30--xs">
                            <div class="wow fadeInDown" data-wow-duration=".3" data-wow-delay=".5s">
                                <i class="g-font-size-28--xs g-color--primary ti-paint-roller"></i>
                            </div>
                        </div>
                        <div class="g-media__body g-padding-x-20--xs">
                            <h3 class="g-font-size-18--xs">Maintenance and Support</h3>
                            <p class="g-margin-b-0--xs">Technical maintaince and consistent support for all our products.This include security updates.</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- End Features -->
                <!-- Process -->
                <div class="g-bg-color--primary-ltr">
                    <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                        <div class="g-text-center--xs g-margin-b-100--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Process</p>
                            <h2 class="g-font-size-32--xs g-font-size-36--md g-color--white">How it Works</h2>
                        </div>
                        <ul class="list-inline row g-margin-b-100--xs">
                            <!-- Process -->
                            <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="center-block g-text-center--xs">
                                    <div class="g-margin-b-30--xs">
                                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">01</span>
                                    </div>
                                    <div class="g-padding-x-20--xs">
                                        <h3 class="g-font-size-18--xs g-color--white">Consult</h3>
                                        <p class="g-color--white-opacity">Our team meets with the client and brainstrom on the proposed project.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Process -->

                            <!-- Process -->
                            <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--md">
                                <div class="center-block g-text-center--xs">
                                    <div class="g-margin-b-30--xs">
                                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">02</span>
                                    </div>
                                    <div class="g-padding-x-20--xs">
                                        <h3 class="g-font-size-18--xs g-color--white">Create</h3>
                                        <p class="g-color--white-opacity">The objectives discussed are used as the basis of development.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Process -->

                            <!-- Process -->
                            <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1 g-margin-b-60--xs g-margin-b-0--sm">
                                <div class="center-block g-text-center--xs">
                                    <div class="g-margin-b-30--xs">
                                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">03</span>
                                    </div>
                                    <div class="g-padding-x-20--xs">
                                        <h3 class="g-font-size-18--xs g-color--white">Develop</h3>
                                        <p class="g-color--white-opacity">Actual coding occurs and the operations tested</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Process -->

                            <!-- Process -->
                            <li class="col-sm-3 col-xs-6 g-full-width--xs s-process-v1">
                                <div class="center-block g-text-center--xs">
                                    <div class="g-margin-b-30--xs">
                                        <span class="g-display-inline-block--xs g-width-100--xs g-height-100--xs g-font-size-38--xs g-color--primary g-bg-color--white g-box-shadow__dark-lightest-v4 g-padding-x-20--xs g-padding-y-20--xs g-radius--circle">04</span>
                                    </div>
                                    <div class="g-padding-x-20--xs">
                                        <h3 class="g-font-size-18--xs g-color--white">Release</h3>
                                        <p class="g-color--white-opacity">The project is presented to the client and user training performed.</p>
                                    </div>
                                </div>
                            </li>
                            <!-- End Process -->
                        </ul>

                        <div class="g-text-center--xs">
                            <a href="/Contacts" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs">Contact Us</a>
                        </div>
                    </div>
                </div>
                <!-- End Process -->

          <!-- Testimonials -->
          <div class="g-padding-y-80--xs g-padding-y-125--sm">
            <div class="container g-text-center--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-50--xs">Feedback</p>
                <div class="s-swiper js__swiper-testimonials">
                    <!-- Swiper Wrapper -->
                    <div class="swiper-wrapper g-margin-b-50--xs">
                    @foreach ($fb as $fb)
                        <div class="swiper-slide g-padding-x-130--sm g-padding-x-150--lg">
                            <div class="g-padding-x-20--xs g-padding-x-50--lg">
                                <img class="g-width-70--xs g-height-70--xs g-hor-border-4__solid--white g-box-shadow__primary-v1 g-radius--circle g-margin-b-30--xs" src="{{ URL::asset($fb->image)}}" onerror="this.style.display='none'" alt="Image">
                                <div class="g-margin-b-40--xs">
                                    <p class="g-font-size-22--xs g-font-size-28--sm g-font-family--playfair g-color--heading"><i style="font-size:18px;">"{{ $fb->text}} "</i></p>
                                </div>
                                <div class="center-block g-hor-divider__solid--heading-light g-width-100--xs g-margin-b-30--xs"></div>
                                <h4 class="g-font-size-15--xs g-font-size-18--sm g-font-weight--400 g-font-family--primary g-color--primary g-margin-b-5--xs">{{ $fb->name}} / {{$fb->institution}}</h4>
                            </div>
                        </div>
                    @endforeach
                    </div>

                    <!-- End Swipper Wrapper -->

                    <!-- Arrows -->
                    <div class="g-font-size-22--xs g-color--heading js__swiper-fraction"></div>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--right s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-right js__swiper-btn--next"></a>
                    <a href="javascript:void(0);" class="g-display-none--xs g-display-inline-block--sm s-swiper__arrow-v1--left s-icon s-icon--md s-icon--primary-brd g-radius--circle ti-angle-left js__swiper-btn--prev"></a>
                    <!-- End Arrows -->
                    <div class="g-text-center--xs">
                        <a href="#" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-70--xs" style="background-color:#F27649;color:white;" onclick="poppy()">Give Feedback </a>
                    </div>
                </div>
            </div>
        </div>
          <!-- End Testimonials -->







                </div>
            </div>
        </div>
        <!-- End Form -->
        <!--========== END PAGE CONTENT ==========-->



        <!--========== FOOTER ==========-->
        @foreach($logo as $logo)
        <footer class="g-bg-color--dark">
            <div class="g-hor-divider__dashed--white-opacity-lightest">
                <div class="container g-padding-y-80--xs">
                    <div class="row">
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><h3 class="g-font-size-18--xs g-color--white">Phone</h3></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="tel:0796976802"> {{$logo->phone}}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-20--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><h3 class="g-font-size-18--xs g-color--white">Email</h3></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#"> {{$logo->email}}</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-2 g-margin-b-40--xs g-margin-b-0--md">
                            <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-0--xs">
                                <li><h3 class="g-font-size-18--xs g-color--white">Location</h3></li>
                                <li><a class="g-font-size-15--xs g-color--white-opacity" href="#"> {{$logo->location}}  </a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 col-md-offset-2 col-sm-5 col-sm-offset-1 s-footer__logo g-padding-y-50--xs g-padding-y-0--md">
                            <h3 class="g-font-size-18--xs g-color--white">Working Hours</h3>
                            <p class="g-color--white-opacity"> 24/7/365 Hours</p>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    <div class="col-xs-6">
                        <a href="/">
                            <img class="g-width-100--xs g-height-auto--xs" src="{{ URL::asset($logo->logo)}}" alt="Logo">
                        </a>
                    </div>
                    @endforeach
                    <div class="col-xs-6 g-text-right--xs">
                        <p class="g-font-size-14--xs g-margin-b-0--xs g-color--white-opacity-light"><a href="#">TrueCode</a> Powered by: Truecode Developers</p>
                    </div>
                </div>
            </div>
            <!-- End Copyright -->
        </footer>

    </div>
            <div id="popup">
                <a href="#" onclick="poppy()" class="close">+</a>
                <!-- Feedback Form -->
                    <div class="g-position--relative"">
                        <div class="g-container--md g-padding-y-30--xs g-padding-y-35--sm">
                            <div class="g-text-center--xs g-margin-b-20--xs">
                                <h2 class="g-font-size-18--xs g-font-size-26--md g-color--white">Give Your View(Feedback) About Our Service</h2>
                            </div>
                            <form class="center-block g-width-600--sm g-width-650--md" action="/storeFeedback" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="g-margin-b-10--xs">
                                    <input type="file" id="myimage" name="image"  class="hidden">
                                    <label for="myimage" class="form-control s-form-v3__input">Add Your Image(Optional)</label>
                                </div>
                                <div class="row g-row-col-5 g-margin-b-10--xs">
                                    <div class="col-sm-6 ">
                                        <input type="text" name="name" class="form-control s-form-v3__input" placeholder="Name">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="from" class="form-control s-form-v3__input" placeholder="Institution">
                                    </div>
                                </div>
                                <div class="g-margin-b-10--xs">
                                    <textarea name="message" class="form-control s-form-v3__input" rows="4" placeholder="Your Feedback" required></textarea>
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--white-bg g-radius--50 g-padding-x-60--xs g-margin-b-10--xs">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
              </div>
              <script type="text/javascript" src="../frontStyling/pop.js"></script>
        <!--========== END FOOTER ==========-->
        <!-- Back To Top -->
        <a href="javascript:void(0);" class="s-back-to-top js__back-to-top"></a>
        @include('sweetalert::alert')
        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="../frontStyling/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/masonry/jquery.masonry.pkgd.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/masonry/imagesloaded.pkgd.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.equal-height.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="../frontStyling/js/global.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/swiper.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/masonry.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/equal-height.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/parallax.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->
        @livewireScripts

    </body>
    <!-- End Body -->
</html>
