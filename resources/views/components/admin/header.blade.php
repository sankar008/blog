<html lang="en">
    <head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Admin Dashboard</title>
		<!--favicon -->
		<link rel="icon" href="{{asset('/front_style/favicon.ico')}}" type="image/x-icon">

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/css/icons.css') }}">
		<!--Style css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/css/style.css') }}">
		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">



		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/toggle-menu/sidemenu.css') }}">

		<!-- Horizontal-menu Css -->
		<link href="{{ asset('/front_style/assets/plugins/horizontal-menu/dropdown-effects/fade-down.css') }}" rel="stylesheet">
		<link href="{{ asset('/front_style/assets/plugins/horizontal-menu/webslidemenu.css') }}" rel="stylesheet">
		<style type="text/css">/* Chart.js */
			@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
		</style>

		<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;box-sizing: content-box;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}
 		</style>
	<!--Jquery.min js-->
	<!-- <script src="{{asset('/front_style/assets/js/jquery.min.js')}}"></script> -->
	</head>

    <body class="app sidebar-mini"><div class="horizontalMenucontainer">
	
		<!--Header Style -->
		<div class="wave -three"></div>
		
		<!--loader -->
		<div id="spinner" style="display: none;"></div>

        <!--app open-->
		<div id="app" class="page">
			<div class="main-wrapper">

			    <!--nav open-->
				<nav class="navbar navbar-expand-lg main-navbar">
					<!-- <h5>Company Name</h5> -->
					<a class="header-brand" href="">
						<img src="{{ asset(Session::get('com_logo')) }}" class="header-brand-img" alt="Splite-Admin  logo">
					</a>
					<form class="form-inline mr-auto">
						<ul class="navbar-nav mr-2">
							<li><a href="#" data-toggle="sidebar" class="nav-link nav-link toggle"><i class="fa fa-reorder"></i></a></li>
							<li><a href="#" data-toggle="search" class="nav-link nav-link d-md-none navsearch"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-element mr-3">
							<input class="form-control" type="search" placeholder="Search" aria-label="Search">
							<span class="Search-icon"><i class="fa fa-search"></i></span>
						</div>
					</form>
					<ul class="navbar-nav navbar-right">
					    <li class="dropdown dropdown-list-toggle d-none d-lg-block "><a href="#" data-toggle="dropdown" class="nav-link  nav-link-lg "><i class=" fa fa-flag-o "></i></a>
							<div class="dropdown-menu dropdown-menu-lg  dropdown-menu-right">
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="{{ asset('/front_style/assets/img/flags/french_flag.jpg') }}" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>French</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="{{ asset('/front_style/assets/img/flags/germany_flag.jpg') }}" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Germany</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="{{ asset('/front_style/assets/img/flags/italy_flag.jpg') }}" alt="flag-img" class=" flag-sm  mr-3 align-self-center">
									<div>
										<strong>Italy</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="{{ asset('/front_style/assets/img/flags/russia_flag.jpg') }}" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Russia</strong>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex align-items-center">
									<img src="{{ asset('/front_style/assets/img/flags/spain_flag.jpg') }}" alt="flag-img" class=" flag-sm mr-3 align-self-center">
									<div>
										<strong>Spain</strong>
									</div>
								</a>
							</div>
						</li>
						

						<li class="dropdown dropdown-list-toggle d-none d-lg-block">
							<a href="#" class="nav-link nav-link-lg full-screen-link">
								<i class="fa fa-expand " id="fullscreen-button3"></i>
							</a>
						</li>
						<li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg d-flex">
								<span class="mr-3 mt-2 d-none d-lg-block ">
									<span class="text-white">Hello,<span class="ml-1">{{ Session::get('name')}}</span></span>
								</span>
							 <span><img src="{{ asset(Session::get('image')) }}" alt="profile-user" class="rounded-circle w-32 mr-2"></span> 
							</a>
							<div class="dropdown-menu dropdown-menu-right">
								<div class=" dropdown-header noti-title text-center border-bottom pb-3">
									<h5 class="text-capitalize text-dark mb-1">Admin Dashboard</h5>
									<small class="text-overflow m-0"> Web-Designer</small>
								</div>
								<a class="dropdown-item" href="{{ URL::to('admin/profile') }}"><i class="mdi mdi-account-outline mr-2"></i> <span>My profile</span></a>
								<div class="dropdown-divider"></div><a class="dropdown-item" href="{{ URL::to('admin/logout') }}"><i class="mdi  mdi-logout-variant mr-2"></i> <span>Logout</span></a>
							</div>
						</li>
					</ul>
				</nav>
				<!--nav closed-->

                <!--aside open-->
				
				<!--aside closed open-->

				<!--app-content open-->
				 <!-- <div class="app-content">
					<section class="section"> -->

                        <!--page-header open-->
						<!-- <div class="page-header">
							<h4 class="page-title">Headers</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">UI Elements</a></li>
								<li class="breadcrumb-item active" aria-current="page">Headers</li>
							</ol>
						</div> -->
						<!--page-header closed-->

                        <!--row open-->

						<!--row closed-->
					<!-- </section>
				</div> -->
				<!--app-content closed-->

