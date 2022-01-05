<x-admin.header />
<x-admin.nav />

<div class="app-content">
					<section class="section">

                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Change Your Password</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Change</a></li>
								<li class="breadcrumb-item active" aria-current="page">User Password</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						
						<!--row closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12 ">
								<div class="card">
									<div class="card-header">
										<h4>Password Change</h4>
                                        <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
                                        <span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
									</div>
									<div class="card-body">
										<form  method="POST" Action="{{ url('/admin/change-password') }}" class="form-horizontal" onsubmit="return valid();">
                                        @csrf
											<div class="">
												<div class="form-group">
													<label for="exampleInputEmail1">Enter Your Old Password</label>
													<input type="password" class="form-control" id="old_pwd" name="old_pwd" placeholder="Enter Your Old Password">
                                                    @if($errors -> has('old_pwd'))
                                                        <span class="text-danger">{{ $errors -> first('old_pwd') }}</span>
                                                    @endif    
												</div>
												<div class="form-group">
													<label for="exampleInputPassword1">New Password</label>
													<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                                                    @if($errors -> has('pwd'))
                                                        <span class="text-danger">{{ $errors -> first('pwd') }}</span>
                                                    @endif 
												</div>
                                                <div class="form-group">
													<label for="exampleInputPassword1">Confirm Password</label>
													<input type="password" class="form-control" id="confirm_pwd" name="confirm_pwd" placeholder="re-type Your New Password">
                                                    @if($errors -> has('confirm_pwd'))
                                                        <span class="text-danger">{{ $errors -> first('confirm_pwd') }}</span>
                                                    @endif 
												</div>
												
											</div>
											<button type="submit" class="btn btn-primary mt-1 mb-0">Submit</button>
										</form>
									</div>
								</div>
							</div>
							
						</div>

					</section>
				</div>

                <script>
    function valid() {
            if ($("#old_pwd").val() == '') {
                $("#errmsg").html("Please Enter Your Old Password");
                
                return false;
            }else if ($("#pwd").val() == '') {
                $("#errmsg").html("Please Enter Your New Password");
               
                return false;
            }else if ($("#confirm_pwd").val() == '') {
                $("#errmsg").html("Please Re-type your Password");
                
                return false;
            }
        }
</script>

<x-admin.footer />