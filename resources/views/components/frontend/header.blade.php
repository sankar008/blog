<!doctype html>
<html lang="en">

<head>

    <!--====== Required meta tags ======-->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--====== Title ======-->
    <title>{{ $title }}</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="{{ asset('/front_style_frontend/assets/images/favicon.ico') }}" type="image/png">

    <!--====== Bootstrap css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/bootstrap.min.css') }}">

    <!--====== Fontawesome css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/font-awesome.min.css') }}">

    <!--====== nice select css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/nice-select.css') }}">

    <!--====== Magnific Popup css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/magnific-popup.css') }}">

    <!--====== Slick css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/slick.css') }}">

    <!--====== Default css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/default.css') }}">

    <!--====== Style css ======-->
    <link rel="stylesheet" href="{{ asset('/front_style_frontend/assets/css/style.css') }}">


</head>

<body class="gray-bg bg-2">

    <!--====== OFFCANVAS MENU PART START ======-->

    <div class="binduz-er-news-off_canvars_overlay"></div>
    <div class="binduz-er-news-offcanvas_menu">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="binduz-er-news-offcanvas_menu_wrapper">
                        <div class="binduz-er-news-canvas_close">
                            <a href="javascript:void(0)"><i class="fal fa-times"></i></a>
                        </div>
                        <div class="binduz-er-news-header-social">
                            <ul class="text-center">
                                <li><a href="#">facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Skype</a></li>
                            </ul>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="binduz-er-news-offcanvas_main_menu">
                                <li class="binduz-er-news-menu-item-has-children binduz-er-news-active">
                                    <a href="#">Home</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        <li><a href="index.html">Home 1</a></li>
                                        <li><a href="index-2.html">Home 2</a></li>
                                        <li><a href="index-3.html">Home 3</a></li>
                                        <li><a href="index-4.html">Home 4</a></li>
                                        <li><a href="index-5.html">Home 5</a></li>
                                        <li><a href="index-6.html">Home 6</a></li>
                                        <li><a href="index-7.html">Home 7</a></li>
                                        <li><a href="index-8.html">Home 8</a></li>
                                        <li><a href="index-9.html">Home 9</a></li>
                                        <li><a href="index-10.html">Home 10</a></li>
                                        <li><a href="index-11.html">Home 11</a></li>
                                        <li><a href="index-12.html">Home 12</a></li>
                                    </ul>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="archived.html">Archived </a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="author.html">Author</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="#"> Pages</a>
                                    <ul class="binduz-er-news-sub-menu">
                                        <li><a href="blog-details-1.html">Blog Details 1</a></li>
                                        <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                    </ul>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="about-us.html"> About</a>
                                </li>
                                <li class="binduz-er-news-menu-item-has-children">
                                    <a href="contact.html"> Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="binduz-er-news-offcanvas_footer">
                           <div class="binduz-er-news-logo text-center mb-30 mt-30">
                               <a href="index.html">
                                   <img src="{{ asset('/front_style_frontend/assets/images/logo.png') }}" alt="">
                               </a>
                           </div>
                            <p>I’m Michal Škvarenina, a multi-disciplinary designer currently working at Wild and as a freelance designer.</p>
                            <ul>
                                <li><i class="fas fa-phone"></i> +212 34 45 45 98</li>
                                <li><i class="fas fa-home"></i> Angle Bd Abdelmoumen & rue soumaya, Résidence</li>
                                <li><i class="fas fa-envelope"></i> hello@example.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== OFFCANVAS MENU PART ENDS ======-->
    
    <!--====== SEARCH PART START ======-->

    <div class="binduz-er-news-search-box">
        <div class="binduz-er-news-search-header">
            <div class=" container mt-60">
                <div class="row">
                    <div class=" col-6">
                        <img src="{{ asset('/front_style_frontend/assets/images/logo-4.png') }}" alt=""> <!-- search title -->
                    </div>
                    <div class=" col-6">
                        <div class="binduz-er-news-search-close float-end">
                            <button class="binduz-er-news-search-close-btn">Close <span></span><span></span></button>
                        </div> <!-- search close -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search header -->
        <div class="binduz-er-news-search-body">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-news-search-form">
                            <form action="#">
                                <input type="text" placeholder="Search for Products">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- search body -->
    </div>

    <!--====== SEARCH PART ENDS ======-->

    <!--====== BINDUZ TOP HEADER PART START ======-->

    <div class="binduz-er-top-header-area-4 bg_cover d-none d-lg-block">
        <div class=" container">
            <div class="row align-items-center">
                <div class=" col-lg-6 col-md-7">
                    <div class="binduz-er-top-header-lang">
                        <div class="binduz-er-select-item">
                            <select id="cars">
                                <option value="volvo" selected>English</option>
                                <option value="saab">Bangla</option>
                                <option value="vw">Urdhu</option>
                                <option value="audi">Hindi</option>
                            </select>
                        </div>
                    </div>
                    <div class="binduz-er-top-header-weather">
                        <ul>
                            <li><a href="#"><i class="fal fa-cloud"></i> 22°F</a></li>
                            <li><a href="#"><i class="fal fa-cloud"></i> 22°F</a></li>
                        </ul>
                    </div>
                </div>
                <div class=" col-lg-6 col-md-5">
                    <div class="binduz-er-topbar-headline float-end">
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was viral after finish his workout.</a></p>
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was viral after finish his workout.</a></p>
                        <p><span><i class="fas fa-bolt"></i> Trending News:</span> <a href="#">Miranda halim was viral after finish his workout.</a>.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--====== BINDUZ TOP HEADER PART ENDS ======-->

    <!--====== BINDUZ HEADER PART START ======-->

    <header class="binduz-er-header-area binduz-er-header-area-4">
        <div class="binduz-er-header-nav">
            <div class=" container">
                <div class="row">
                    <div class=" col-lg-12">
                        <div class="binduz-er-header-meddle-bar binduz-er-page d-flex justify-content-between">
                            <div class="binduz-er-logo">
                                <a href="#"><img src="{{ asset('/front_style_frontend/assets/images/logo-6.png') }}" alt=""></a>
                            </div>
                            <div class="navigation">
                                <nav class="navbar navbar-expand-lg">
                                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                        <ul class="navbar-nav mr-auto">
                                            <li class="nav-item active">
                                                <a class="nav-link" href="index.html">Home <i class="fa fa-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="index.html">Home 1</a></li>
                                                    <li><a href="index-2.html">Home 2</a></li>
                                                    <li><a href="index-3.html">Home 3</a></li>
                                                    <li><a href="index-4.html">Home 4</a></li>
                                                    <li><a href="index-5.html">Home 5</a></li>
                                                    <li><a href="index-6.html">Home 6</a></li>
                                                    <li><a href="index-7.html">Home 7</a></li>
                                                    <li><a href="index-8.html">Home 8</a></li>
                                                    <li><a href="index-9.html">Home 9</a></li>
                                                    <li><a href="index-10.html">Home 10</a></li>
                                                    <li><a href="index-11.html">Home 11</a></li>
                                                    <li><a href="index-12.html">Home 12</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="archived.html">Archived </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="author.html">Author</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">Pages<i class="fa fa-angle-down"></i></a>
                                                <ul class="sub-menu">
                                                    <li><a href="blog-details-1.html">Blog Details 1</a></li>
                                                    <li><a href="blog-details-2.html">Blog Details 2</a></li>
                                                </ul>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="about-us.html">About</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="contact.html">Contact</a>
                                            </li>
                                        </ul>
                                    </div> <!-- navbar collapse -->
                                    <div class="binduz-er-navbar-btn d-flex align-items-center">
                                        <div class="binduz-er-search-btn d-none d-sm-block">
                                            <a class="binduz-er-news-search-open" href="#"><i class="far fa-search"></i></a>
                                        </div>
                                        <span class="binduz-er-toggle-btn binduz-er-news-canvas_open d-block d-lg-none">
                                            <i class="fal fa-bars"></i>
                                        </span>
                                    </div>
                                </nav>
                            </div> <!-- navigation -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>