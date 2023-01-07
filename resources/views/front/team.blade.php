<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- Begin Head -->
    <head>
        <!-- Basic -->
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/png" href="../cms/img/logo.png">
        <title>TrueCode | Our Team</title>
        <meta name="keywords" content="." />
        <meta name="description" content="TrueCode - .">

        <!-- Web Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i|Montserrat:400,700" rel="stylesheet">

        <!-- Vendor Styles -->
        <link href="../frontStyling/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/css/animate.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/themify/themify.css" rel="stylesheet" type="text/css"/>
        <link href="../frontStyling/vendor/scrollbar/scrollbar.min.css" rel="stylesheet" type="text/css"/>

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
                                    <li class="s-header-v2__nav-item"><a href="/" class="s-header-v2__nav-link">Home</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/About" class="s-header-v2__nav-link">About</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Projects" class="s-header-v2__nav-link">Projects</a></li>
                                    <li class="s-header-v2__nav-item"><a href="/Team" class="s-header-v2__nav-link -is-active">Team</a></li>
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
            <div class="g-bg-position--center js__parallax-window" style="background: url({{ URL::asset($intro->teamimage)}}) 50% 0 no-repeat fixed;">
        @endforeach
            <div class="g-container--md g-text-center--xs g-padding-y-150--xs">
                <h1 class="g-font-size-40--xs g-font-size-50--sm g-font-size-60--md g-color--white g-letter-spacing--1">Our Team</h1>
            </div>
        </div>
        <!--========== END PROMO BLOCK ==========-->

        <!--========== PAGE CONTENT ==========-->
        <!-- Speakers -->
        <div class="container g-padding-y-80--xs g-padding-y-125--sm">
            <div class="row g-overflow--hidden">
            @foreach ($staff as $staff)
                <div class="col-xs-6 g-full-width--xs g-margin-b-30--xs g-margin-b-0--lg">
                    <!-- Speaker -->
                    <div class="center-block g-box-shadow__dark-lightest-v1 g-width-100-percent--xs g-width-400--lg">
                        <img class="img-responsive g-width-100-percent--xs" src="{{$staff->image}}" alt="Image">
                        <div class="g-position--overlay g-padding-x-30--xs g-padding-y-30--xs g-margin-t-o-60--xs">
                            <div class="g-bg-color--primary g-padding-x-15--xs g-padding-y-10--xs g-margin-b-20--xs">
                                <h4 class="g-font-size-22--xs g-font-size-26--sm g-color--white g-margin-b-0--xs">{{$staff->name}}</h4>
                            </div>
                            <p class="g-font-weight--700">{{$staff->role}}</p>
                            <p>{{$staff->quote}}</p>
                        </div>
                    </div>
                    <!-- End Speaker -->
                </div>
            @endforeach
            </div>
        </div>
        <!-- End Speakers -->




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

        <!-- General Components and Settings -->
        <script type="text/javascript" src="../frontStyling/js/global.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/header-sticky.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/scrollbar.min.js"></script>
        <script type="text/javascript" src="../frontStyling/js/components/wow.min.js"></script>
        <!--========== END JAVASCRIPTS ==========-->

    </body>
    <!-- End Body -->
</html>
