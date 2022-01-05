<x-admin.header />
<x-admin.nav />

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">Sub-Category List</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Sub-Category List</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Sub-Category List
                            <a href="javascript:void(0)" data-toggle="modal" data-target="#addmodel"
                                class="btn btn-primary m-b-5 m-t-5 pull-right"><i class="fa fa-plus"
                                    aria-hidden="true"></i></a>
                        </h4>
                    </div>
                    <div class="card-body">
                        

                        <div style="color:green; padding-left:50px ">{{ Session::get('successmsg') }}</div>
                        <div style="color:red; padding-left:50px ">{{ Session::get('errmsg') }}</div>
                        <table id="customers2" class="table datatable">
                            <thead>
                                <tr>
                                    <th width="5%">ID</th>
                                    <th width="5%">Category</th>
                                    <th width="15%">Sub-Category</th>                                
                                    <th width="20%">Status</th>
                                    <th width="5%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($sub_category as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item -> category == ''?'':$item -> category -> name  }}</span></td>
                                    <td style="color: black;">{{ $item -> name }}</span></td>
                                    <td> <span
                                            class="badge {{ $item -> is_active?'badge-success':'badge-danger' }} m-b-5">{{ $item -> is_active?'Active':'Inactive' }}</span>
                                    </td>

                                    <td style="color: black;"><a
                                            href="{{ URL('/admin/subcategory/upate/'.$item -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a> | <a
                                            href="{{ URL('/admin/subcategory/delete/'.$item -> id) }}"
                                            onclick="return confirm('Do you really want to delete this data?')"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--row closed-->
    </div>
</div>
<div class="modal fade" id="addmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterLabel">Add Category</h5>
                <button type="button" class="close"  data-dismiss="modal" aria-label="Close"><span
                        aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <span id="errmsg" style="color : red;"></span>
                        <form  method="POST" Action="{{ url('/admin/subcategory-add') }}" class="form-horizontal" onsubmit="return valid();" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Category<span style="color:red"> *</span></label>
                                        <select type="text" name="category_id" id="category_id" class="form-control" >
                                            <option value="">Select A Category</option>
                                            @foreach($category as $item)
                                               <option value="{{ $item ->id }}" >{{ $item ->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 col-xs-6">
                                    <div class="form-group">
                                        <label>Sub-Category Name<span style="color:red"> *</span></label>
                                        <input type="text" name="name" id="name" class="form-control"
                                            placeholder="Subcategory Name" />
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




<x-admin.footer />

<script>
 function valid() {
            if ($("#category_id").val() == '') {
                $("#errmsg").html("Please Enter A Category");
                
                return false;
            }else if ($("#name").val() == '') {
                $("#errmsg").html("Please Enter A Sub Category");
               
                return false;
            } 
        }

</script>