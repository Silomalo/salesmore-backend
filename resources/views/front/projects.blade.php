<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../cms/img/logo.png">
        <title>TrueCode | Project</title>
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
        <link href="../frontStyling/vendor/cubeportfolio/css/cubeportfolio.min.css" rel="stylesheet" type="text/css"/>

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
                            @foreach($logo as $header)
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
                                    <li class="s-header-v2__nav-item"><a href="/About" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Projects" class="s-header-v2__nav-link -is-active">Projects</a></li>
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

            <!-- Counter -->
            @foreach ($intro as $head)
            <div class="js__parallax-window" style="background: url({{ URL::asset($head->projectimage)}}) 50% 0 no-repeat fixed;">
            @endforeach
                <div class="container g-padding-y-125--xs">
                    <div class="row">
                        <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                            <div class="g-text-center--xs">
                                <div class="g-margin-b-10--xs">
                                    <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">1</figure>
                                    <span class="g-font-size-40--xs g-color--white">k</span>
                                </div>
                                <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                <h4 class="g-font-size-18--xs g-color--white">Feedbacks</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--lg">
                            <div class="g-text-center--xs">
                                <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">15</figure>
                                <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                <h4 class="g-font-size-18--xs g-color--white">In Progress</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 g-full-width--xs g-margin-b-70--xs g-margin-b-0--sm">
                            <div class="g-text-center--xs">
                                <figure class="g-display-block--xs g-font-size-70--xs g-color--white g-margin-b-10--xs js__counter">25</figure>
                                <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                <h4 class="g-font-size-18--xs g-color--white">Completed</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-xs-6 g-full-width--xs">
                            <div class="g-text-center--xs">
                                <div class="g-margin-b-10--xs">
                                    <figure class="g-display-inline-block--xs g-font-size-70--xs g-color--white js__counter">40</figure>
                                    <span class="g-font-size-40--xs g-color--white">x</span>
                                </div>
                                <div class="center-block g-hor-divider__solid--white g-width-40--xs g-margin-b-25--xs"></div>
                                <h4 class="g-font-size-18--xs g-color--white">Total Projects</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Counter -->

                <!-- FA Questions Text -->
                <div id="js__scroll-to-section" class="g-container--md g-padding-y-80--xs g-padding-y-125--sm">
                    <h2 class="g-font-size-32--xs g-font-size-36--md g-text-center--xs g-margin-b-80--xs">Facts</h2>
                    <div class="row g-margin-b-50--xs">
                        <div class="col-sm-12 g-margin-b-30--xs g-margin-b-0--sm">
                            <p>When creating projects, they can be in three states: Planning, Developing or Deployment. In planning, our team helps the customer to analyze the problem at hand and propose a workable solution.
                                In development, actual code is written for the proposed solution. Testing and debugging is also done in this stage.In deployment stage,the solution created is presented to the customer with all its documentations.
                                After deployment we offer continous support to all our products via maintenace, updates and customer care.
                            </p>
                        </div>
                    </div>
                </div>
                <!-- End FA Questions Text -->
                <!-- News -->
                <div class="container-fluid g-padding-y-80--xs g-padding-y-125--sm">
                    <div class="g-text-center--xs g-margin-b-80--xs">
                        <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Done Projects</p>
                    </div>

                    <!-- Swiper -->
                    <div class="s-swiper js__swiper-news">
                        <!-- Wrapper -->
                        <div class="swiper-wrapper g-margin-b-60--xs">
                    @foreach ($project as $project)
                            <article class="s-promo-block-v6 g-bg-position--center swiper-slide" style="background: url('{{URL::asset($project->image)}}');">
                                <div class="g-text-center--xs g-padding-x-15--xs g-padding-x-30--lg g-padding-y-50--xs g-margin-t-120--xs">
                                    <div class="g-margin-b-25--xs">
                                        <h3 class="g-font-size-16--xs g-color--white g-margin-b-5--xs">{{$project->title}}</h3>
                                        <p class="g-color--white">{{$project->description}}</p>
                                    </div>
                                </div>
                            </article>
                    @endforeach
                        </div>
                        <!-- End Wrapper -->

                        <!-- Pagination -->
                        <div class="s-swiper__pagination-v1 s-swiper__pagination-v1--dark g-text-center--xs js__swiper-pagination"></div>
                    </div>
                    <!-- End Swiper -->
                </div>
                <!-- End News -->

        <!-- Plan -->
        <div class="g-bg-color--sky-light">
            <div class="container g-padding-y-80--xs g-padding-y-125--xsm">
                <div class="g-text-center--xs g-margin-b-80--xs">
                    <p class="text-uppercase g-font-size-14--xs g-font-weight--700 g-color--primary g-letter-spacing--2 g-margin-b-25--xs">Plan</p>
                    <h2 class="g-font-size-32--xs g-font-size-36--md">Finding your Plan</h2>
                </div>

                <div class="row g-row-col--5">
                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-cloud"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Website </h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> E-commerce</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> SEO</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Documented</li>
                                </ul>
                                <div class="g-margin-b-40--xs">
                                    <span class="s-plan-v1__price-mark">Kshs.</span>
                                    <span class="s-plan-v1__price-tag">30,000</span>
                                </div>
                                <a href="/Contacts" type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-4 g-margin-b-10--xs g-margin-b-0--lg">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".2s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-mobile"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Mobile Apps</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Progressiove web apps</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Cross-platform apps</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> API enabled apps</li>
                                </ul>
                                <div class="g-margin-b-40--xs">
                                    <span class="s-plan-v1__price-mark">Kshs.</span>
                                    <span class="s-plan-v1__price-tag">40,000</span>
                                </div>
                                <a href="/Contacts" type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->

                    <!-- Plan -->
                    <div class="col-md-4">
                        <div class="wow fadeInUp" data-wow-duration=".3" data-wow-delay=".3s">
                            <div class="s-plan-v1 g-text-center--xs g-bg-color--white g-padding-y-100--xs">
                                <i class="g-display-block--xs g-font-size-40--xs g-color--primary g-margin-b-30--xs ti-desktop"></i>
                                <h3 class="g-font-size-18--xs g-color--primary g-margin-b-30--xs">Desktop Applications</h3>
                                <ul class="list-unstyled g-ul-li-tb-5--xs g-margin-b-40--xs">
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Fully responsive</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Network enabled</li>
                                    <li><i class="g-font-size-13--xs g-color--primary g-margin-r-10--xs ti-check"></i> Modern UI</li>
                                </ul>
                                <div class="g-margin-b-40--xs">
                                    <span class="s-plan-v1__price-mark">Kshs.</span>
                                    <span class="s-plan-v1__price-tag">60,000</span>
                                </div>
                                <button type="button" class="text-uppercase s-btn s-btn--sm s-btn--primary-bg g-radius--50 g-padding-x-50--xs">Request</button>
                            </div>
                        </div>
                    </div>
                    <!-- End Plan -->
                </div>
            </div>
        </div>
        <!-- End Plan -->
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
        <script type="text/javascript" src="../frontStyling/vendor/vidbg.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/waypoint.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/counterup.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/swiper/swiper.jquery.min.js"></script>
        <script type="text/javascript" src="../frontStyling/vendor/jquery.wow.min.js"></script>

        <!-- General Components and Settings -->
        <script type="text/javascript" src="../frontStyling/js/global.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/portfolio-4-col-slider.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/counter.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/swiper.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
