 <!--aside open-->
 <aside class="app-sidebar">
					<div class="app-sidebar__user">
						<div class="dropdown user-pro-body text-center">
							<div class="nav-link pl-1 pr-1 leading-none ">
								<img src="{{ asset(Session::get('image')) }}" alt="user-img" class="avatar-xl rounded-circle mb-1 mCS_img_loaded">
								<span class="pulse bg-success" aria-hidden="true"></span>
							</div>
							<div class="user-info">
								<h6 class=" mb-1 text-dark">{{ Session::get('name')}}</h6>
								<span class="text-muted app-sidebar__user-name text-sm">Admin</span>
							</div>
						</div>
					</div>
					<ul class="side-menu">
						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/dashboard') }}"><i class="side-menu__icon fa fa-laptop"></i><span class="side-menu__label">Dashboard</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
								<!-- <li><a class="slide-item" href="index.html"><span>Sales Dashboard </span></a></li> -->
							</ul>
						</li>

						<!-- <li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/user') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">User</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li> -->

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/category-list') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Category</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/subcategory-list') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Sub Category</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/blog-list') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Blog</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>


						<!--<li class="slide is-expanded">
                            <a class="side-menu__item" data-toggle="slide" href="#"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Master
                                    Menu</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                                <li>
                                    <a class="side-menu__item" href="{{ URL::to('admin/user-privilege') }}"><span class="side-menu__label">User Privilege</span></a>
                                </li>
                            </ul>
                        </li> -->

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/company') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">Company</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/company/about-us') }}"><i class="side-menu__icon fa fa-cube"></i><span class="side-menu__label">About Us</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>

						<li class="slide">
							<a class="side-menu__item"  href="{{ URL::to('admin/change-password') }}"><i class="side-menu__icon fa fa-cogs"></i><span class="side-menu__label">Change Password</span><span class="badge badge-orange nav-badge"></span></a>
							<ul class="slide-menu">
							</ul>
						</li>
						
					</ul>
				
 </aside>
				<!--aside closed open-->``34`