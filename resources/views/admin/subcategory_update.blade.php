<x-admin.header />
<x-admin.nav />
<div class="wave -three"></div>
<div class="app-content">
					<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit Sub-Categary</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit SubCategary Details</li>
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
										<h4>Edit Sub-Categary Details</h4>
										<span id="errmsg" style="color:red"></span>
									</div>
									<div class="card-body">
										<form class="form-horizontal"  action="{{ url('admin/subcategory-update') }}" method='post' onsubmit=" return valid(); " >
                                        @csrf
                                        <div style="color:red">{{ Session::get('errmsg') }}</div>
                                        <div style="color:green">{{ Session::get('successmsg') }}</div>
                                        <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Category<span style="color:red"> *</span></label>
                                        <select name="category_id" id="category_id" class="form-control"  >
                                            <option value="">Select A Category</option>
                                            @foreach($category as $cat)
                                               <option value="{{ $cat ->id }}" {{ $cat ->id == $subcategory->category_id?"selected":"" }}>{{ $cat ->name }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors -> has('category_id'))
                                            <span class="text-danger">{{ $errors -> first('category_id') }}</span>
                                        @endif    
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Sub-Categary Name<span style="color:red"> *</span></label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ $subcategory->name }}" />
                                        @if($errors -> has('name'))
                                            <span class="text-danger">{{ $errors -> first('name') }}</span>
                                        @endif    
                                        <input type="hidden" name="id" id="id" class="form-control" value="{{ $subcategory->id }}" />
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
						<!--row closed-->

                       
						
					

					</section>
				</div>

<x-admin.footer />

<script>
 function valid() {
            if ($("#categary_id").val() == '') {
                $("#errmsg").html("Please Enter A Categary");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#name").val() == '') {
                $("#errmsg").html("Please Enter A Sub Categary Name");
                //$("#email").css("border-color", "red");
                return false;
            } 
        }

</script>