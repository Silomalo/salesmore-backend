<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../cms/img/logo.png">
        <title>Truecode | About</title>
        <meta name="keywords" content="TrueCode Theme" />
        <meta name="description" content="Truecode - TrueCode ">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="../frontStyling/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/swiper/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

        <!-- . Styles -->
        <link href="../frontStyling/css/style.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/css/global/global.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="../frontStyling/img/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="../frontStyling/img/apple-touch-icon.png">
    </head>
    <!-- End Head -->

    <!-- Body -->
    <body>

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
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/About" class="s-header-v2__nav-link -is-active">About</a></li>
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
        <!--========== END


        <!--========== PROMO BLOCK ==========-->
        @foreach($intro as $intro)
        <div class="g-bg-position--center js__parallax-window" style="background: url({{ URL::asset($intro->aboutimage)}}) 50% 0 no-repeat fixed;">
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--white-opacity g-letter-spacing--2 g-margin-b-25--xs">Your IT Solution Provider</p>
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">About Us</h1>
            </div>
        </div>
        @endforeach
        <!--========== END PROMO BLOCK ==========-->
          <!-- Tab -->
          <div class="container g-margin-t-o-100--xs g-margin-b-125--xs">
            <div class="row g-row-col--0">
                <div class="col-sm-6">
                    <!-- Filter -->
                    <div class="g-bg-position--center g-padding-x-30--xs g-padding-x-40--sm g-padding-y-30--xs g-padding-y-40--sm js__tab-eqaul-height-v1" style="background: #F27649 no-repeat;">
                        <div class="g-hor-border-1__solid--primary g-padding-x-40--xs g-padding-x-50--sm g-padding-y-100--xs g-padding-y-120--sm js__filters-tabs">
                            <p>(Click on Attribute to view)</p>
                            <div data-filter=".-is-active" class="s-tab__filter-v1 g-font-family--playfair cbp-filter-item-active cbp-filter-item">

                                 Mission
                            </div>
                            <hr>
                            <div data-filter=".service" class="s-tab__filter-v1 g-font-family--playfair cbp-filter-item">

                                Vision
                            </div>
                            <hr>
                            <div data-filter=".pages" class="s-tab__filter-v1 g-font-family--playfair cbp-filter-item">

                                Goal
                            </div>
                            <hr>
                        </div>
                    </div>
                </div>
                <!-- End Filter -->

                <!-- Grid -->
                <div class="col-sm-6">
                    <div class="g-bg-color--white g-box-shadow__dark-lightest-v2 g-padding-x-30--xs g-padding-x-60--sm g-padding-y-60--xs g-padding-y-80--sm js__tab-eqaul-height-v1">
                        <div class="cbp js__grid-tabs">
                            <div class="s-tab__grid-v1-item cbp-item -is-active">
                                <div class="g-margin-b-20--xs">
                                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Mission</p>
                                    <h2 class="g-font-size-32--xs g-font-family--playfair">"To make it easy for you to acquire software solutions."</h2>
                                </div>
                                <p>Our primary goal is to make custom softwares which are affordable,secure, user-friendly and reliable. </p>
                            </div>
                            <div class="s-tab__grid-v1-item cbp-item service">
                                <div class="g-margin-b-20--xs">
                                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Vision</p>
                                    <h2 class="g-font-size-32--xs g-font-family--playfair">"Create an informed cummunity by providing business tools."</h2>
                                </div>
                                <p>Our aim is to transform our cummunity into a digital community that enjoys the usage of technology. This will ease their daily tasks and increase productivity.</p>
                            </div>
                            <div class="s-tab__grid-v1-item cbp-item pages">
                                <div class="g-margin-b-20--xs">
                                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Goal</p>
                                    <h2 class="g-font-size-32--xs g-font-family--playfair">"Invest in production of top quality softwares."</h2>
                                </div>
                                <p>We aim at producing top quality softwares solutions by using latest technology. This will be possible through our advanced team. we are trying to keep up with rapid advancement of technology.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Grid -->
                </div>
            </div>
        </div>
        <!-- End Tab -->
            <!-- Services -->
            <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                    <div class="col-md-12 g-margin-b-10--xs g-margin-b-0--lg g-margin-t-10--lg g-margin-l-20--lg">
                        <div class="g-margin-b-30--xs">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-15--xs">Our Services</p>
                            <h2 class="g-font-size-32--xs g-font-size-36--sm">Areas we Specialize In;</h2>
                            <p>We have a diversed team, this enables us to specialize in many technological areas. The driving force has been increased with feedback from our clients and their requests. We offer services from custom development of softwares, updating already existing software solutions to cater your increased needs and also offering managerial services. </p>
                        </div>
                        <div class="row">
                            <ul class="list-unstyled col-xs-6 g-full-width--xs g-ul-li-tb-5--xs g-margin-b-20--xs g-margin-b-0--sm">
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Planning and Development</li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Web Development</li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>App Design and Development </li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>E-Commerce</li>
                            </ul>
                            <ul class="list-unstyled col-xs-6 g-full-width--xs g-ul-li-tb-5--xs g-margin-b-20--xs g-margin-b-0--sm">
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Desktop Application</li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Data Analysis</li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Embended Technology</li>
                                <li><i class="g-font-size-12--xs g-color--primary g-margin-r-10--xs ti-check"></i>Maintenance and Support</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Services -->

                <!-- About -->
                @foreach ($abts as $abts)
                <div class="container g-padding-y-80--xs g-padding-y-125--sm">
                    <div class="row g-hor-centered-row--md g-row-col--5 g-margin-b-60--xs g-margin-b-100--md">
                        <div class="col-sm-3 col-xs-6 g-hor-centered-row__col">
                            <div class="wow fadeInLeft" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="{{ URL::asset($abts->imageone)}}" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-8 g-hor-centered-row__col">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Software World</p>

                            <p class="g-font-size-18--sm">{{ $abts->textone}}</p>
                        </div>
                    </div>

                    <div class="row g-hor-centered-row--md g-row-col--5">
                        <div class="col-sm-4 col-xs-6 col-sm-push-6 g-hor-centered-row__col g-margin-b-60--xs g-margin-b-0--md">
                            <div class="wow fadeInRight" data-wow-duration=".3" data-wow-delay=".1s">
                                <img class="img-responsive" src="{{ URL::asset($abts->imagetwo)}}" alt="Image">
                            </div>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-6 col-sm-pull-7 g-hor-centered-row__col g-text-left--xs g-text-right--md">
                            <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Embedded Technology</p>
                            <p class="g-font-size-18--sm">{{ $abts->texttwo}}.</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- End About -->
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

        <!--========== JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) ==========-->
        <!-- Vendor -->
        <script type="text/javascript" src="../frontStyling/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.migrate.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.smooth-scroll.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.back-to-top.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/scrollbar/jquery.scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.parallax.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.wow.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/counterup.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.equal-height.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="../frontStyling/js/global.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/wow.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/swiper.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/counter.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/parallax.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/tab.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/equal-height.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
