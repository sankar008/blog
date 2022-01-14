<x-admin.header />
<x-admin.nav />

<div class="wave -three"></div>
<div class="app-content">
				<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit About Us </h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit About Us</li>
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
									<form class="form-horizontal"  action="{{ url('admin/company/about-us/update') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                        <div>
                                            <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
                                        </div>    
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Company Name<span style="color:red"> *</span></label>
                                                    <input type="text" name="name" id="name" class="form-control" placeholder="User Name" value="{{ $aboutus -> name }}" />
                                                    @if($errors -> has('name'))
                                                        <span class="text-danger">{{ $errors -> first('name') }}</span>
                                                    @endif    
                                                    <input type="hidden" name="id" id="id" class="form-control"  value="{{ $aboutus -> id }}" />
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Tittle<span style="color:red"> *</span></label>
                                                    <input type="text" name="tittle" id="tittle" class="form-control" value="{{ $aboutus -> tittle }}"
                                                        placeholder="Tittle" />
                                                    @if($errors -> has('tittle')) 
                                                        <span class="text-danger">{{ $errors -> first('tittle') }}</span>
                                                    @endif       
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Details<span style="color:red"> *</span></label>
                                                    <textarea name="details" id="details" class="form-control" rows = "5">{{ $aboutus -> details }}</textarea>
                                                    @if($errors -> has('details'))
                                                        <span class="text-danger">{{ $errors -> first('details') }}</span>
                                                    @endif    

                                                </div>
                                            </div>
                            

                                        </div>
                               
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <label>Company Logo<span style="color:red"> *</span></label>
                                                    <div>
                                                    <input type="file" name="aboutus_image" id="aboutus_image" class="form-control" />
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
            } else if ($("#tittle").val() == '') {
                $("#errmsg").html("Please Enter A Title");
                
                return false;
            }else if ($("#details").val() == '') {
                $("#errmsg").html("Please Enter Details");
                
                return false;
            }
        }

    
  
</script>


<x-admin.footer />
