<x-admin.header />
<x-admin.nav />
<div class="wave -three"></div>
<div class="app-content">
					<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit Categary</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Customer Details</li>
							</ol>
						</div>
						<!--page-header closed-->

                        <!--row open-->
						
						<!--row closed-->

                        <!--row open-->
						<div class="row justify-content-center" >
						
							<div class="col-12">
								<div class="card" style="style">
									<div class="card-header">
										<h4>Edit Categary Details</h4>
					
									</div>
									<div class="card-body">
									<span id="errmsg" style="color:red"></span>
										<form class="form-horizontal"  action="{{ url('/admin/category-update') }}" method='POST' onsubmit="return valid();" >
                                        @csrf
											<div class="form-group row">
												<label for="inputName" class="col-md-3 col-form-label">Category Name</label>
												<div class="col-md-9">
													<input type="text" class="form-control" id="name" name="name" placeholder="Category Name" value="{{ $category['name'] }}">
													@if($errors -> has('name'))
                                            			<span class="text-danger">{{ $errors ->first('name') }}
                                        			@endif 
													<input type="hidden" name="id" value="{{ $category['id'] }}" >
												</div>
											</div>
											<div class="form-group mb-0 mt-2 row justify-content-end">
												<div class="col-md-9">
													<button type="submit" class="btn btn-info">Update</button>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<!--row closed-->

                        <!--row open-->
						<div class="row">
							<div class="col-12 ">
								
							</div>
						</div>
						<!--row close-->

                        <!--row open-->
						
						<!--row close-->

                        <!--row open-->
						<div class="row">
							<div class="col-lg-12">
								
							</div>
						</div>
						<!--row close-->

					</section>
				</div>

<x-admin.footer />

<script>
    function valid() {
            if ($("#name").val() == '') {
                $("#errmsg").html("Please Enter A Categary");
                
                return false;
            }
        }
</script>
