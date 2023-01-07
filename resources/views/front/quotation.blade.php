<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../cms/img/logo.png">
        <title>TrueCode | Our Contact</title>
        <meta name="keywords" content="." />
        <meta name="description" content="TrueCode - .">

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

        <!-- Favicon -->
        <link rel="shortcut icon" href="../frontStyling/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="../frontStyling/img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

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
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link ">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/About" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Projects" class="s-header-v2__nav-link">Projects</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Team" class="s-header-v2__nav-link">Team</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Contacts" class="s-header-v2__nav-link s-header-v2__nav-link--dark -is-active">Contacts</a></li>
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
        <!--========== END

        <!--========== PROMO BLOCK ==========-->
        @foreach($intro as $intro)
            <div class="g-bg-position--center js__parallax-window" style="background: url({{ URL::asset($intro->contactsimage)}}) 50% 0 no-repeat fixed;">
        @endforeach
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Get quotation</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->




        <!-- Form -->
        <div id="js__scroll-to-appointment" class="g-bg-color--sky-light g-padding-y-80--xs g-padding-y-125--sm" style="min-height: 100vh;">
             <!-- Container Fluid-->
        <div class="container-fluid" id="container-wrapper" style="text-align: center">
            <div class="col-md-12">
            @if(session()->has('success'))
            <div class="alert alert-success">{{session('success')}}</div>
            @elseif(session()->has('error'))
            <div class="alert alert-danger">{{session('error')}}</div>
            @endif
        </div>
        </div>
            <div class="container g-bg-color--white g-box-shadow__dark-lightest-v3" style="margin-top:2%;" >
                <div class="row" >
                    <!-- Form -->
                    <div class="col-md-8 js__form-eqaul-height-v1" >
                        <div class="g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--primary g-margin-b-50--xs">Get Quotation</h2>
                            <form action="/storeQuote" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-12 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" name="name" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Full Name">
                                    </div>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" name="service" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Service">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="location" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Your location">
                                    </div>
                                </div>
                                <div class="row g-margin-b-30--xs g-margin-b-50--md">
                                    <div class="col-sm-6 g-margin-b-30--xs g-margin-b-0--md">
                                        <input type="text" name="phone" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Phone Number">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" name="email" class="form-control s-form-v4__input g-padding-l-0--xs" placeholder="Email">
                                    </div>
                                </div>
                                <div class="g-margin-b-50--xs">
                                    <textarea class="form-control s-form-v4__input g-padding-l-0--xs" name="quote" rows="5" placeholder="Your Message/request"></textarea>
                                </div>
                                <div class="g-text-center--xs">
                                    <button type="submit" class="text-uppercase s-btn s-btn--md s-btn--primary-bg g-radius--50 g-padding-x-70--xs g-margin-b-20--xs">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->

                    <!-- Contacts -->
                    <div class="col-md-4 g-bg-color--primary-ltr js__form-eqaul-height-v1">
                        <div class="g-overflow--hidden g-padding-x-40--xs g-padding-y-50--xs">
                            <h2 class="g-font-size-24--xs g-color--white g-margin-b-50--xs">Contact Us</h2>
                            <ul class="list-unstyled g-margin-b-70--xs">
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-location-pin"></i>
                                    </div>
                                    <div class="g-media__body">
                                        Truecode<br> Kisii University| kenya
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-headphone-alt"></i>
                                    </div>
                                    <div class="g-media__body">
                                        + 254 713915129
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-email"></i>
                                    </div>
                                    <div class="g-media__body">
                                        truecode@gmail.com
                                    </div>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-github"></i>
                                    </div>
                                    <div class="g-media__body">
                                        Github-Account
                                    </div>
                                </li>
                                </li>
                                <li class="clearfix g-color--white g-margin-b-40--xs">
                                    <div class="g-media g-width-40--xs g-margin-t-5--xs">
                                        <i class="g-font-size-20--xs g-color--white-opacity-light ti-themify-favicon-alt"></i>
                                    </div>
                                    <div class="g-media__body">
                                        WhatsApp
                                    </div>
                                </li>
                            </ul>
                            <ul class="list-inline g-ul-li-lr-15--xs">
                                <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-facebook"></i></a></li>
                                <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-twitter"></i></a></li>
                                <li><a href="#"><i class="g-font-size-20--xs g-color--white-opacity ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Contacts -->
                </div>
            </div>
        </div>
        <!-- End Form -->

         <!--========== FOOTER ==========-->
         <footer class="g-bg-color--dark">
            <!-- Copyright -->
            <div class="container g-padding-y-50--xs">
                <div class="row">
                    @foreach ($logo as $logo)
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

    </body>
    <!-- End Body -->
</html>
