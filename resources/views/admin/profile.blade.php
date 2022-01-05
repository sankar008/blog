< x-admin.header />
< x-admin.nav />
<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">Update Profile
            <span style="color:red" id="errmsg">{{ Session::get('errmsg') }}</span>
            <span style="color:green" id="successmsg">{{ Session::get('successmsg') }}</span>
            </h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xl-4">
                <div class="card">
                    <div class="card-body box">
                        <div class="img">
                            <img src="{{ asset($data ->image) }}" alt="">
                        </div>
                        <h2 style="color:black;">{{ $data -> name }}<br><span>{{ $data-> email }}</span>&nbsp;<span>{{ $data -> mobile_no }}</span>
                        </h2>
                        <p class="mb-3">{!! Str::limit($data->address, 80, ' ...') !!}</p>
                      
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="card">

                    <div class="card-body">
                        <div class="row d-flex">
                            <div class="col-lg-6 col-md-12">
                                <h4>Personal Details</h4>
                                <span style="color:green"></span>
                                <span style="color:red"></span>
                            </div>
                            <div class="col-lg-6 col-md-12 follower">
                                <div class="float-right d-none d-lg-block">

                                    <a href="#" data-toggle="modal" data-target="#exampleModal"
                                        class="btn btn-success mt-1"><i class="fe fe-edit followbtn ml-1"></i> Edit
                                        Profile</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p><b>Full Name :</b> <span class="pull-right">{{ $data->name }}</span></p>
                                <p><b>Mobile No :</b><span class="pull-right">{{ $data ->mobile_no }}</span></p>
                                <p><b>Email ID :</b> <span class="pull-right">{{ $data ->email }}</span></p>
                                <p><b>Address :</b> <span class="pull-right">{{ $data -> address}}</span></p>
                                <p><b>Status :</b> <span class="pull-right">{!! ($data -> is_active ==
                                        1)?'<span class="badge badge-success mt-1 mb-1">Active</span>':'<span
                                            class="badge badge-danger mt-1 mb-1">Inactive' !!}</span></span>
                                </p>

                            </div>
                        </div>

                    
                    </div>
                </div> 
            </div> 
        </div>
    </div>
</div>
<!-- Edit Profile  Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Personal Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                <span id="errmsg" style="color:red"></span>
                <form enctype="multipart/form-data" action="{{ URL::to('admin/update-profile')}}" method="post"
                    onsubmit="return valid();">
                    @csrf
                    <input type="hidden" name="update_id" id="update_id" value="{{ $data -> id }}" />
                    <input type="hidden" name="redirect_to" id="redirect_to" value="{{ $data -> id }}" />
                    <input type="hidden" name="submit_for" id="submit_for" value="author" />
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Full Name<span style="color:red"> *</span></label>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Full Name"
                                    value="{{ $data -> name }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email ID</label>
                                <input type="text" name="email" id="email" class="form-control"
                                    placeholder="Email ID" value="{{ $data -> email }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mobile No</label>
                                <input type="text" name="mobile_no" id="mobile_no" class="form-control"
                                    placeholder="Mobile No" value="{{ $data -> mobile_no }}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select name="is_active" id="is_active" class="form-control">
                                    <option value="">Select</option>
                                    <option value="1" {{ $data -> is_active == 1?'Selected':'' }}>Active
                                    </option>
                                    <option value="0" {{ $data ->is_active == 0?'Selected':'' }}>Inactive
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Address</label>
                                <textarea class="form-control" name="address" id="address" rows="5"
                                    cols="40">{{ $data -> address}}</textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Profile Picture</label>
                                <input type="file" name="image" id="image" class="form-control"
                                    placeholder="Image upload" value="{{ $data -> image }}" />
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>



< x-admin.footer />

<script>
    function valid(){
       if($("#name").val() == '') {
           $("#errmsg").html("Full name must be required");
           $("#errmsg").addClass('text-danger');
           $("#name").focus();
           return false;
       }else if ($("#mobile_no").val() == '') {
            $("#errmsg").html("Contact no must be required!");
            $("#errmsg").addClass('text-danger');
            $("#mobile_no").focus();
            return false;
        } else if ($("#email").val() == '') {
            $("#errmsg").html("Email ID must be required!");
            $("#errmsg").addClass('text-danger');
            $("#email_id").focus();
            return false;
        } else if ($("#address").val() == '') {
            $("#errmsg").html("Address must be required!");
            $("#errmsg").addClass('text-danger');
            $("#address").focus();
            return false;
        }else if ($("#is_active").val() == '') {
            $("#errmsg").html("Profile Status must be required!");
            $("#errmsg").addClass('text-danger');
            $("#address").focus();
            return false;
        }
    }

</script>