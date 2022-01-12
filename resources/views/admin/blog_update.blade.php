<x-admin.header />
<x-admin.nav />
<div class="wave -three"></div>
<div class="app-content">
				<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Edit Blog</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Edit</a></li>
								<li class="breadcrumb-item active" aria-current="page">Edit Blog Details</li>
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
										<h4>Edit Blog Details</h4>
										<span id="errmsg" style="color:red"></span>
									</div>
								<div class="card-body">
									<form class="form-horizontal"  action="{{ url('/admin/blog-update') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                    <div style="color:red">{{ Session::get('errmsg') }}</div>
                                    <div style="color:green">{{ Session::get('successmsg') }}</div>


                                    <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Category<span style="color:red"> *</span></label>
                                                    <select type="text" name="category_id" id="category_id" class="form-control" onchange="getSubCategory()" >
                                                        <option value=" ">Select A Category</option>
                                                        @foreach($category as $item)
                                                        <option value="{{ $item ->id }}"{{ $item ->id == $blog->category_id?"selected":"" }} >{{ $item ->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('category_id'))
                                                        <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                                    @endif
                                                </div>
                                             </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Sub Category<span style="color:red"> *</span></label>
                                                    <select type="text" name="subcategory_id" id="subcategory_id" class="form-control"  >
                                                        <option value=" ">Select A Subcategory</option>
                                                        @foreach($subcategory as $item)
                                                        <option value="{{ $item ->id }}" {{ $item ->id == $blog->subcategory_id?"selected":"" }}  >{{ $item->name }}</option>
                                                        @endforeach
                                                    </select>
                                                    @if ($errors->has('subcategory_id'))
                                                        <span class="text-danger">{{ $errors->first('subcategory_id') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Blog Title<span style="color:red"> *</span></label>
                                                    <input type="text" name="title" id="title" class="form-control" placeholder="Blog Title" value= "{{ $blog->title }}" />
                                                    @if($errors -> has('title'))
                                                        <span class = "text-danger">{{ $errors -> first('title') }}
                                                    @endif        
                                                    <input type="hidden" name="id" id="id" class="form-control" placeholder="Blog Title" value="{{ $blog->id }}" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Short Description<span style="color:red"> *</span></label>
                                                    <textarea id="short_description" name="short_description"  class="form-control" rows ="3" placeholder="Short Description..">{{ $blog->short_description }}</textarea>
                                                    @if($errors -> has('short_description'))
                                                        <span class = "text-danger">{{ $errors -> first('short_description') }}
                                                    @endif 
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Description<span style="color:red"> *</span></label>
                                                    <textarea id="description" name="description" class="form-control" rows ='5'placeholder="Description..">{{ $blog->description }}</textarea>
                                                    @if($errors -> has('description'))
                                                        <span class = "text-danger">{{ $errors -> first('description') }}
                                                    @endif
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12 col-xs-6">
                                                <div class="form-group">
                                                    <label>Images (Multiple)<span style="color:red"> *</span></label>
                                                    <input type="file" name="image[]" id="image" class="form-control" value="{{ $blog->image  }}" multiple/>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 col-xs-6">
                                                <div class="form-group">
                                                    <input type="Submit" class="btn btn-primary" 
                                                        value="Update" />
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


function getSubCategory(){
                var data =$('#category_id').val();
                $.ajax({
                    type: "GET",
                    url: "/admin/blog/getSubCategory",
                    data: {
                        category_id: data
                    },
                    success: function(response) {
                    $("#subcategory_id").html(response);
                        
                    }
                });
            } 





   function valid() {
             if ($("#category_id").val() == '') {
                $("#errmsg").html("Please Enter A Category");
                
                return false;
            }else if ($("#subcategory_id").val() == '') {
                $("#errmsg").html("Please Enter A Sub Category Name");
               
                return false;
            }else if ($("#title").val() == '') {
                $("#errmsg").html("Please Enter A Blog Title");
                
                return false;
            }else if ($("#short_description").val() == '') {
                $("#errmsg").html("Please Enter Short Description");
                
                return false;
            } else if ($("#description").val() == '') {
                $("#errmsg").html("Please Enter Description");
                
                return false;
            }
        }
</script>

<x-admin.footer />

