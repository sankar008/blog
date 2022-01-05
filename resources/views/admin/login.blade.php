<html lang="en"><head>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Webart Technology - Admin Login</title>

		<!--Favicon -->
		<link rel="icon" href="favicon.ico" type="image/x-icon">

		<!--Bootstrap.min css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
		
		<!--Style css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/css/style.css') }}">

		<!--Icons css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/css/icons.css') }}">

		<!--mCustomScrollbar css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}">

		<!--Sidemenu css-->
		<link rel="stylesheet" href="{{ asset('/front_style/assets/plugins/toggle-menu/sidemenu.css') }}">

	</head>

	<body class="bg-primary">

	    <!--app open-->
		<div id="app" class="page">
			<section class="section ">
                <div class="container">
					<div class="">

						<!--single-page open-->
						<div class="single-page">
							<div class="">
								<div class="wrapper wrapper2">
									<form id="login" action="{{ URL::to('admin/login') }}" method="post" onsubmit="return valid();"  class="card-body" tabindex="500">
                                    @csrf
										<h3 class="text-dark">Login</h3>
                                        <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
										<span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
                                        <!-- <span style="color:red" id="errmsg"></span> -->
										<div class="mail">
											<input type="email" class="form-control" id="email" name="email" placeholder="Enter email" autocomplete="off" value="{{ old('email') }}">
					
											
											@if($errors -> has('email'))
												<span class="text-danger">{{ $errors -> first('email') }}</span>
											@endif	

										</div>
										<div class="passwd">
											<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password"  value="{{ old('pwd') }}">
											@if($errors -> has('pwd'))
												<span class="text-danger">{{ $errors -> first('pwd') }}</span>
											@endif	
										</div>
										<p class="mb-3 text-right"><a href="{{ URL::to('admin/forgot-password') }}">Forgot Password</a></p>
										<div class="submit">
											<input type="submit" class="btn btn-primary btn-block" value="Login" >
										</div>
										<div class="signup mb-0">
											<p class="text-dark mb-0">Don't have account?<a href="register.html" class="text-primary ml-1">Sign UP</a></p>
										</div>
									</form>
									
								</div>
							</div>
						</div>
						<!--single-page closed-->

					</div>
				</div>
			</section>
		</div>
		<!--app closed-->

		<!--Jquery.min js-->
		<script src="{{ asset('/front_style/assets/js/jquery.min.js') }}"></script>

		<!--popper js-->
		<script src="{{ asset('/front_style/assets/js/popper.js') }}"></script>

		<!--Bootstrap.min js-->
		<script src="{{ asset('/front_style/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		
		<!--Tooltip js-->
		<script src="{{ asset('/front_style/assets/js/tooltip.js') }}"></script>

		<!-- Jquery star rating-->
		<script src="{{ asset('/front_style/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Jquery.nicescroll.min js-->
		<script src="{{ asset('/front_style/assets/plugins/nicescroll/jquery.nicescroll.min.js') }}"></script>

		<!--Scroll-up-bar.min js-->
		<script src="{{ asset('/front_style/assets/plugins/scroll-up-bar/dist/scroll-up-bar.min.js') }}"></script>

		<script src="{{ asset('/front_style/assets/js/moment.min.js') }}"></script>

		<!--mCustomScrollbar js-->
		<script src="{{ asset('/front_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!--Sidemenu js-->
		<script src="{{ asset('/front_style/assets/plugins/toggle-menu/sidemenu.js') }}"></script>

		<!--Showmore js-->
		<script src="{{ asset('/front_style/assets/js/jquery.showmore.js') }}"></script>

		<!--Scripts js-->
		<script src="{{ asset('/front_style/assets/js/scripts.js') }}"></script>
        <script>
            function valid() {
            if ($("#email").val() == '') {
                $("#errmsg").html("Please enter a valid Email ID!!");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#pwd").val() == '') {
                $("#errmsg").html("Please enter your password!!");
                //$("#pwd").css("border-color", "red");
                return false;
            }
        }
        </script>
	
</body></html>