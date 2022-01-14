<x-frontend.header title="Blog Site | Home"/>

<section class="binduz-er-latest-news-area pt-60">
        <div class=" container">
            <div class="row">
                <div class=" col-lg-8">
                    <div class="binduz-er-top-news-title">
                        <h3 class="binduz-er-title">Latest News</h3>
                    </div>
                    @foreach($blog as $item)
                        <div class="binduz-er-latest-news-item">
                            <?php $slug = Str::slug($item -> title, '-'); ?>
                            
                            <div class="binduz-er-thumb">
                                <?php foreach(explode('|', $item -> image) as $image) { ?>
                                    <img src="{{ asset($image) }}" alt="">
                                <?php } ?>    
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-categories">
                                    <a href="#">{{ $item -> category == ''?"-": $item -> category -> name }}</a>
                                </div>
                                <h5 class="binduz-er-title"><a href="{{ URL::to('/blog-detail/'.$slug) }}">{{ $item -> title }}</a></h5>
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-author">
                                        <span>By <span>Miranda H. Halim</span></span>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i> {{ $item -> created_at }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach    
                    <!-- <div class="binduz-er-latest-news-item">
                        <div class="binduz-er-thumb">
                            <img src="{{ asset('/front_style_frontend/assets/images/latest-news-thumb-2.jpg') }}" alt="">
                        </div>
                        <div class="binduz-er-content">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <h5 class="binduz-er-title"><a href="#">Organizing the world’s information: where does it all come from? the world’s information: where does it</a></h5>
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-author">
                                    <span>By <span>Miranda H. Halim</span></span>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-latest-news-item">
                        <div class="binduz-er-thumb">
                            <img src="{{ asset('/front_style_frontend/assets/images/latest-news-thumb-3.jpg') }}" alt="">
                        </div>
                        <div class="binduz-er-content">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <h5 class="binduz-er-title"><a href="#">New Cook County Circuit Court clerk want to leave her predecessor’s era behind, in on updating the nation’s secondt.</a></h5>
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-author">
                                    <span>By <span>Miranda H. Halim</span></span>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="binduz-er-latest-news-item">
                        <div class="binduz-er-thumb">
                            <img src="{{ asset('/front_style_frontend/assets/images/latest-news-thumb-4.jpg') }}" alt="">
                        </div>
                        <div class="binduz-er-content">
                            <div class="binduz-er-meta-categories">
                                <a href="#">Technology</a>
                            </div>
                            <h5 class="binduz-er-title"><a href="#">The new conversational Search experience we’re thankful for The new conversational Search experience we’re thankful for</a></h5>
                            <div class="binduz-er-meta-item">
                                <div class="binduz-er-meta-author">
                                    <span>By <span>Miranda H. Halim</span></span>
                                </div>
                                <div class="binduz-er-meta-date">
                                    <span><i class="fal fa-calendar-alt"></i> 24th February 2020</span>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class=" col-lg-4">
                    <div class="binduz-er-top-news-title">
                        <h3 class="binduz-er-title">Video Post</h3>
                    </div>
                    <div class="binduz-er-video-post">
                        <div class="binduz-er-latest-news-item">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/front_style_frontend/assets/images/latest-news-thumb-4.jpg') }}" alt="">
                                <div class="binduz-er-play">
                                    <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                    </div>
                                </div>
                                <h5 class="binduz-er-title"><a href="#">Spruce up your Business Profile for holiday shoppers</a></h5>
                            </div>
                        </div>
                        <div class="binduz-er-latest-news-item">
                            <div class="binduz-er-thumb">
                                <img src="{{ asset('/front_style_frontend/assets/images/video-post-thumb.jpg') }}" alt="">
                                <div class="binduz-er-play">
                                    <a class="binduz-er-video-popup" href="#"><i class="fas fa-play"></i></a>
                                </div>
                            </div>
                            <div class="binduz-er-content">
                                <div class="binduz-er-meta-item">
                                    <div class="binduz-er-meta-categories">
                                        <a href="#">Technology</a>
                                    </div>
                                    <div class="binduz-er-meta-date">
                                        <span><i class="fal fa-calendar-alt"></i>24th February 2020</span>
                                    </div>
                                </div>
                                <h5 class="binduz-er-title"><a href="#">The new conversational Search experience we’re thankful for</a></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--====== BINDUZ LATEST NEWS PART ENDS ======-->

    
    
<x-frontend.footer />
    <!--====== BINDUZ NEWSLETTER PART ENDS ======-->