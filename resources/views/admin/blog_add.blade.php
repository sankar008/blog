<x-admin.header />
<x-admin.nav />


<<div class="modal fade" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">ADD BLOG</h5>
                <button type="button" class="close" onclick="" data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <span style="color :red;" id="errmsg">{{ Session::get('errmsg') }}</span>
                        <!-- <span style="color :green;" id="successmsg">{{ Session::get('successmsg') }}</span> -->
                        <form id="form"   class="form-horizontal" onsubmit="return valid();" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Category<span style="color:red"> *</span></label>
                                        <select type="text" name="category_id" id="category_id" class="form-control" onchange="getSubCategory()" >
                                            <option value="">Select A Category</option>
                                           
                                               <option value=""></option>
                                          
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Sub Category<span style="color:red"> *</span></label>
                                        <select type="text" name="subcategory_id" id="subcategory_id" class="form-control" >
                                            <option value="">Select A Subcategory</option>
                                               <option value="" ></option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Blog Tittle<span style="color:red"> *</span></label>
                                        <input type="text" name="tittle" id="tittle" class="form-control" placeholder="categary Name" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Description<span style="color:red"> *</span></label>
                                        <input type="text" name="description" id="description" class="form-control"placeholder="categary Name" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Image<span style="color:red"> *</span></label>
                                        <input type="file" name="image" id="image" class="form-control" />
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
            var data =$('#categary_id').val();
            $.ajax({
            type: "GET",
            url: "/admin/blog/getSubCategary",
            data: {
                categary_id: data
            },
            success: function(response) {
               $("#subcategary_id").html(response);
                
            }
        });
    }



   function valid() {
            if ($("#categary_id").val() == '') {
                $("#errmsg").html("Please Enter A Categary");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#subcategary_id").val() == '') {
                $("#errmsg").html("Please Enter A Sub Categary Name");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#tittle").val() == '') {
                $("#errmsg").html("Please Enter A Tittle");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#description").val() == '') {
                $("#errmsg").html("Please Enter A Descriptuon");
                //$("#email").css("border-color", "red");
                return false;
            } 
            else if ($("#image").val() == '') {
                $("#errmsg").html("Please Upload a Picture");
                //$("#email").css("border-color", "red");
                return false;
            }
    }
</script>
<x-admin.footer />    