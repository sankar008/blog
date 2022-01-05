<x-admin.header />
<x-admin.nav />

<div class="wave -three"></div>
<div class="app-content">
				<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit Company </h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Company Details</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						
						<!--row closed-->

                        <!--row open-->
				    <div class="row justify-content-center " >
						
					    <div class="col-12">
						    <div class="card" style="style">
									<div class="card-header">
										<h4>Edit Company Details</h4>
										<span id="errmsg" style="color:red"></span>
									</div>
								<div class="card-body">
									<form class="form-horizontal"  action="{{ url('/admin/company/update') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                        <div>
                                            <span style="color:red" id="errmsg">{{ Session :: get('errmsg') }}</span>
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Company Name<span style="color:red"> *</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="User Name" value="{{ $company -> name }}" />
                                                    @if($errors -> has('name'))
                                                        <span class="text-danger">{{ $errors -> first('name') }}
                                                    @endif        
                                                    <input type="hidden" name="id" id="id" class="form-control" placeholder="User Name" value="{{ $company -> id }}" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Email<span style="color:red"> *</span></label>
                                                    <input type="email" name="email" id="email" class="form-control" value="{{ $company -> email }}"
                                                        placeholder="Email" />
                                                    @if($errors -> has('email'))    
                                                        <span class="text-danger">{{ $errors -> first('email') }}</span>
                                                    @endif    
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Mobile No<span style="color:red"> *</span></label>
                                                    <input type="number" name="mobile_no" id="mobile_no" class="form-control" value="{{ $company -> mobile_no }}" />
                                                    @if($errors -> has('mobile_no'))
                                                        <span class="text-danger">{{ $errors -> first('mobile_no') }}
                                                    @endif        
                                                </div>
                                            </div>
                            

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Address<span style="color:red"> *</span></label>
                                                    <input type="text" name="address" id="address" class="form-control" value="{{ $company -> address }}" />
                                                    @if($errors -> has('address'))
                                                        <span class="text-danger">{{ $errors -> first('address') }}</span>
                                                    @endif    
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Facebook Link<span style="color:red"> *</span></label>
                                                    <input type="text" name="facebook_link" id="facebook_link" class="form-control" value="{{ $company -> facebook_link }}" />
                                                    @if($errors ->has('facebook_link'))
                                                        <span class="text-danger">{{ $errors -> first('facebook_link') }}
                                                    @endif        
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Twitter Link<span style="color:red"> *</span></label>
                                                    <input type="text" name="twitter_link" id="twitter_link" class="form-control" value="{{ $company -> twitter_link }}" />
                                                    @if($errors -> has('twitter_link'))
                                                        <span class="text-danger">{{ $errors -> first('twitter_link') }}
                                                    @endif        
                                                </div>
                                            </div>
                    
                    

                                            <!-- <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label >Status<span style="color:red"> *</span></label>
                                                    <select type="number" name="is_active" id="is_active" class="form-control" >
                                                    <option value="1" {{ $company -> is_active == 1?'Selected':'' }}>Active</option>
                                                    <option value="0" {{ $company -> is_active == 0?'Selected':'' }}>Deactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                     -->
                                        </div>
                               
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Company Logo<span style="color:red"> *</span></label>
                                                    <div>
                                                    <input type="file" name="image" id="image" class="form-control" />
                                                    </div> 
                                                </div>
                                            </div>
                                    </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <input type="Submit" class="btn btn-primary" 
                                                        value="Save" />
                                                </div>
                                            </div>
                                        </div>
									</form>
								</div>
							</div>
						</div>
					</div>
					
				</section>
			</div>


<script>



    function valid() {
            if ($("#name").val() == '') {
                $("#errmsg").html("Please Enter Company Name");
                
                return false;
            } else if ($("#email").val() == '') {
                $("#errmsg").html("Please Enter A valid Email Id");
                
                return false;
            }else if ($("#mobile_no").val() == '') {
                $("#errmsg").html("Please Enter A valid Mobile Number");
                
                return false;
            }else if ($("#address").val() == '') {
                $("#errmsg").html("Please Enter Address");
                
                return false;
            }else if ($("#facebook_link").val() == '') {
                $("#errmsg").html("Please Enter Facebook Link");
                
                return false;  
            }else if ($("#twitter_link").val() == '') {
                $("#errmsg").html("Please Enter Twitter Link");
                
                return false;      
            }
        }

    
  
</script>


<x-admin.footer />
