<x-admin.header />
<x-admin.nav />
<div class="wave -three"></div>
<div class="app-content">
				<section class="section">


                        <!--page-header open-->
						<div class="page-header">
							<h4 class="page-title">Add Blog</h4>
							<ol class="breadcrumb">
								<li class="breadcrumb-item"><a href="#" class="text-light-color">Add</a></li>
								<li class="breadcrumb-item active" aria-current="page">Add Blog Details</li>
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
										<h4>Add Blog Details</h4>
										<span id="errmsg" style="color:red"></span>
									</div>
								<div class="card-body">
									<form class="form-horizontal"  action="{{ url('/admin/blog-add') }}" method='POST' onsubmit=" return valid(); " enctype="multipart/form-data" >
                                        @csrf
                                    <div style="color:red">{{ Session::get('errmsg') }}</div>
                                    <div style="color:green">{{ Session::get('successmsg') }}</div>

                                    <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Category<span style="color:red"> *</span></label>
                                        <select type="text" name="category_id" id="category_id" class="form-control" onchange="getSubCategory()" >
                                            <option value="">Select A Category</option>
                                            @foreach($category as $item)
                                               <option value="{{ $item ->id }}" {{ $item->id == old('category_id')?"selected":''}}>{{ $item ->name }}</option>
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
                                        <label>Sub Category<span style="color:red"> *</span></label>
                                        <select type="text" name="subcategory_id" id="subcategory_id" class="form-control" >
                                            <option value="">Select A Subcategory</option>
                                                    
                                        </select>
                                        @if($errors -> has('subcategory_id'))
                                            <span class="text-danger">{{ $errors -> first('subcategory_id') }}</span>
                                        @endif  
                                    </div>
                                </div>
                            </div>



                                    <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Blog Title<span style="color:red"> *</span></label>
                                        <input type="text" name="title" id="title" class="form-control" placeholder="Blog Title" value = "{{ old('title') }}" />
                                        @if($errors -> has('title'))
                                            <span class="text-danger">{{ $errors -> first('title') }}</span>
                                        @endif        
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Short Description<span style="color:red"> *</span></label>
                                        <textarea id="short_description" name="short_description"  class="form-control" rows ="3" placeholder="Short Description..">{{ old('short_description') }}</textarea>
                                        @if($errors -> has('short_description'))
                                            <span class="text-danger">{{ $errors -> first('short_description') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Description<span style="color:red"> *</span></label>
                                        <textarea id="description" name="description" class="form-control" rows ='5'placeholder="Description..">{{ old('description') }}</textarea>
                                        @if($errors -> has('description'))
                                            <span class="text-danger">{{ $errors -> first('description') }}</span>
                                        @endif  
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Image<span style="color:red"> *</span></label>
                                        <input type="file" name="image[]" id="image" class="form-control" multiple />
                                        @if($errors -> has('image'))
                                            <span class="text-danger">{{ $errors -> first('image') }}
                                        @endif  
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
    </div>
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
                $("#errmsg").html("Please Enter A Subcategory");
                
                return false;   
            }else if ($("#title").val() == '') {
                $("#errmsg").html("Please Enter A Title");
                
                return false;     
            }else if ($("#short_description").val() == '') {
                $("#errmsg").html("Please Enter Short Description");
                
                return false;
            } else if ($("#description").val() == '') {
                $("#errmsg").html("Please Enter Description");
               
                return false;
            } else if ($("#image").val() == '') {
                $("#errmsg").html("Please Upload A Image");
                
                return false;
            }
        }
</script>

<x-admin.footer />

