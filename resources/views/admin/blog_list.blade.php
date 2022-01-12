<x-admin.header />
<x-admin.nav />

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">Blog List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Blog List</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Blog List
                            <a href="{{ URL('/admin/blog-add') }}" 
                                class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <!-- @foreach($errors -> all() as $errvalue)
                        <span style="color:red">{{ $errvalue }}</span>
                        @endforeach -->

                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="15%">Category</th>  
                                    <th width="15%">Sub Category</th>
                                    <th width="15%">Blog Tittle</th> 
                                    
                                    <th width="15%">Short Description</th>
                                    <th width="15%">Description</th>  
                                    <th width="15%">Image</th>                            
                                    <th width="20%">Status</th>
                                    <th width="5%">Action</th>
                                </tr>
                                <tbody>
                                @foreach($blog as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item -> category == ''?"-":$item -> category ->name }}</span></td>
                                    <td style="color: black;">{{ $item -> subcategory == ''?"-":$item -> subcategory -> name }}</span></td>
                                    <td style="color: black;">{{ $item -> title }}</span></td>
                                    <td style="color: black;">{{ $item -> short_description }}</span></td>
                                    
                                    <td style="color: black;">{{ $item -> description }}</span></td>
                                    <td style="color: black;"><div class="img">
                                        <?php foreach (explode('|', $item->image) as $image) { ?>
                                        <img src="{{ asset($image) }}" alt="" height="60px" weidth="40px">
                                        <?php } ?>
                                    </div></span></td>
                                    <td> <span
                                            class="badge {{ $item -> is_active?'badge-success':'badge-danger' }} m-b-5">{{ $item -> is_active?'Active':'Inactive' }}</span>
                                    </td>

                                    <td style="color: black;"><a
                                            href="{{ URL('/admin/blog-update/'.$item -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a> | <a
                                            href="{{ URL('/admin/blog-delete/'.$item -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </thead>
                            <tbody>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    </div>
</div>


<script>

    /* function getSubCategary(){
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
    } */



   function valid() {
            if ($("#title").val() == '') {
                $("#errmsg").html("Please Enter A Title");
                //$("#email").css("border-color", "red");
                return false;
            }else if ($("#short_description").val() == '') {
                $("#errmsg").html("Please Enter Short Description");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#description").val() == '') {
                $("#errmsg").html("Please Enter Description");
                //$("#email").css("border-color", "red");
                return false;
            } else if ($("#image").val() == '') {
                $("#errmsg").html("Please Upload A Image");
                //$("#email").css("border-color", "red");
                return false;
            }
        }
</script>
<x-admin.footer />