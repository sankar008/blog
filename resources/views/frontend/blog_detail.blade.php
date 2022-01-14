<x-frontend.header title="Blog Site | Blog Detail" /> 
 
 <div class="binduz-er-breadcrumb-area">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-12">
                    <div class="binduz-er-breadcrumb-box">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!--====== BINDUZ HEADER PART ENDS ======-->

    <!--====== BINDUZ AUTHOR USER PART START ======-->
    
        <div class="binduz-er-blog-bg-area">
            <?php foreach(explode('|', $blog -> image) as $image) { ?>
                <img src="{{ asset($image)  }}" alt="">
            <?php } ?>
        </div>
    
    <section class="binduz-er-author-item-area binduz-er-author-item-layout-1 pb-20">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-9">
                    <div class="binduz-er-author-item mb-40">
                        <div class="binduz-er-content">
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-categories">
                                    <a href="#">{{ $blog -> category == ''?"-":$blog -> category ->name }}</a>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i>{{ $blog -> created_at }}</span>
                                </div>
                            </div>
                            <h3 class="binduz-er-title">{{ $blog -> title }}</h3>
                            <div class="binduz-er-meta-author">
                                <div class="binduz-er-author">
                                    <?php foreach(explode('|', $blog -> image) as $image) { ?>
                                        <img src="{{ asset($image)  }}" alt="">
                                    <?php } ?>    
                                    <span>By <span>Rosalina D.</span></span>
                                </div>
                                <div class="binduz-er-meta-list">
                                    <ul>
                                        <li><i class="fal fa-eye"></i> 5k</li>
                                        <li><i class="fal fa-heart"></i> 5k</li>
                                        <li><i class="fal fa-comments"></i> 5k</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class=" col-lg-2">
                                <div class="binduz-er-blog-social-share">
                                    <div class="binduz-er-item mb-10">
                                        <a href="#">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>40</span>
                                            <p>Share</p>
                                        </a>
                                    </div>
                                    <div class="binduz-er-item mb-10">
                                        <a href="#">
                                            <i class="fab fa-twitter"></i>
                                            <span>05</span>
                                            <p>Tweet</p>
                                        </a>
                                    </div>
                                    <div class="binduz-er-item mb-10">
                                        <a href="#">
                                            <i class="fab fa-youtube"></i>
                                            <span>100k</span>
                                            <p>Subscriber</p>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-lg-10">
                                <div class="binduz-er-blog-details-box">
                                    <div class="binduz-er-text">
                                        <p>{{ $blog -> description }}</p>
                                        
                                    </div>

                                    
                                    
                                    <div class="row align-items-center pt-60">
                                        <div class=" col-lg-5">
                                            <div class="binduz-er-blog-details-thumb mr-30">
                                                <?php foreach(explode('|', $blog -> image) as $image) { ?>
                                                    <img src="{{ asset($image)  }}" alt="">
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <div class=" col-lg-7">
                                            <div class="binduz-er-blog-details-thumb-text text pt-20 pb-20">
                                                <p>{{ $blog -> short_description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" col-lg-3">
                    <div class="binduz-er-populer-news-sidebar">

                        <div class="binduz-er-populer-news-sidebar-post pt-60">
                            <div class="binduz-er-popular-news-title">
                                <ul class="nav nav-pills mb-3" id="pills-tab-2" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Most Popular</a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Most Recent</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="pills-tabContent-2">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-1.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Why creating inclusive classrooms matters</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-2.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Celebrating Asian Pacific American art and</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-3.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">From overcoming burnout to finding new</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-4.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <div class="binduz-er-sidebar-latest-post-box">
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-1.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Why creating inclusive classrooms matters</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-2.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Celebrating Asian Pacific American art and</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-3.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">From overcoming burnout to finding new</a></h4>
                                            </div>
                                        </div>
                                        <div class="binduz-er-sidebar-latest-post-item">
                                            <div class="binduz-er-thumb">
                                                <img src="{{ asset('/front_style_frontend/assets/images/latest-post-4.jpg') }}" alt="latest">
                                            </div>
                                            <div class="binduz-er-content">
                                                <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                                <h4 class="binduz-er-title"><a href="#">Sparks of inspiration to the new trend 2021</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="binduz-er-populer-news-social binduz-er-author-page-social mt-40">
                            <div class="binduz-er-popular-news-title">
                                <h3 class="binduz-er-title">Social Connects</h3>
                            </div>
                            <div class="binduz-er-social-list">
                                <div class="binduz-er-list">
                                    <a href="#">
                                        <span><i class="fab fa-facebook-f"></i> <span>15000</span> Likes</span>
                                        <span>Like</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-twitter"></i> <span>15000</span> Likes</span>
                                        <span>Tweet</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-behance"></i> <span>5k+</span> Follower</span>
                                        <span>Follow</span>
                                    </a>
                                    <a href="#">
                                        <span><i class="fab fa-youtube"></i> <span>15000</span> Subscribe</span>
                                        <span>Subscribe</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

<x-frontend.footer />     

    <!--====== BINDUZ AUTHOR USER PART ENDS ======-->