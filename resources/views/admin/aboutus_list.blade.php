<x-admin.header />
<x-admin.nav />

<div class="app-content">
    <div class="section">
        <!--page-header open-->
        <div class="page-header">
            <h4 class="page-title">About Us</h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" class="text-light-color">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
        </div>
        <!--page-header closed-->
        <!--row open-->
        <div class="row">
            <div class="col-lg-12 col-xl-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h4>About Us</h4>
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
                                    <th width="15%">Name</th> 
                                    <th width="15%">Tittle</th>
                                    <th width="15%">Details</th>
                                    <th width="15%">Image</th>                               
                                    <th width="5%">Action</th>
                                </tr>
                                <tbody>
                                @foreach($aboutUs as $item)
                                <tr>
                                    <td style="color: black;">{{ $loop -> index + 1 }}</td>
                                    <td style="color: black;">{{ $item -> name }}</span></td>
                                    <td style="color: black;">{{ $item -> tittle }}</span></td>
                                    <td style="color: black;">{{ $item -> details }}</span></td>
                                    <td style="color: black;"><div class="img">
                                        <img src="{{ asset($item -> aboutus_image) }}" alt="" height="60px" weidth="40px">
                                    </div></span></td>

                                    <td style="color: black;"><a
                                            href="{{ URL('/admin/company/about-us/update/'.$item -> id) }}"><i
                                                class="fa fa-pencil-square" aria-hidden="true"></i></a> 
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





<x-admin.footer />