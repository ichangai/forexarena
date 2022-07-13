@extends('frontend.layouts.master')         

@section('content')
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs img4">
                <div class="container">
                    <div class="breadcrumbs-inner">
                        <h1 class="page-title">
                            Nairobi Forex Expo Event 2021  
                            <span class="watermark">Blog Single</span>
                        </h1>                       
                    </div>
                </div>
            </div>
            <!-- Breadcrumbs End -->

            <!-- Blog Section Start -->
            <div class="rs-inner-blog pt-120 md-pt-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="blog-details">
                                        <div class="bs-img mb-35">
                                            <a href="#"><img src="{{ asset('frontend/assets/images/forex/forex_event.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="blog-full">
                                            <ul class="single-post-meta">
                                                <li>
                                                    <span class="p-date"><i class="fa fa-calendar-check-o"></i> July 21, 2022 </span>
                                                </li> 
                                                <li>
                                                    <span class="p-date"> <i class="fa fa-user-o"></i> admin </span>
                                                </li> 
                                                <li class="Post-cate">
                                                    <div class="tag-line">
                                                        <i class="fa fa-book"></i>
                                                        <a href="#">Strategy</a>
                                                    </div>
                                                </li>
                                                <li class="post-comment"> <i class="fa fa-comments-o"></i> 1</li>
                                            </ul>
                                            <p>
                                                We denounce with righteous indige nation and dislike men who are so beguiled and demo realized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue cannot foresee. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled data structures manages data in technology.
                                            </p>
                                            <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                              
                                            <h3 class="comment-title">3 comments on "Nairobi Forex Expo"</h3>
                                            <div class="comment-body">
                                                <div class="comment-author">
                                                    <img src="assets/images/avatar.png" alt="images">
                                                </div>
                                                <div class="comment-text">
                                                    <a href="#">Rswpdemo</a><br>
                                                    <a class="timedate" href="#"><time datetime="2021-05-26T08:43:43+00:00">May 26, 2021 at 8:43 am</time></a>
                                                    <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</p>
                                                    <div class="reply-btn">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <h3 class="comment-title">Leave a Reply</h3>
                                            <p>Your email address will not be published. Required fields are marked *</p>

                                            <div class="comment-note">
                                                <div id="form-messages"></div>
                                                <form id="contact-form" method="post" action="">
                                                    <fieldset>
                                                        <div class="row">
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="name" name="name" placeholder="Name*" required="">
                                                            </div> 
                                                            <div class="col-lg-6 mb-35 col-md-6 col-sm-6">
                                                                <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail*" required="">
                                                            </div>
                                                            <div class="col-lg-12 mb-30">
                                                                <textarea class="from-control" id="message" name="message" placeholder="Your message Here" required=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group mb-0">
                                                            <div class="post-btn">
                                                                <input class="submit-post" type="submit" value="Post Comment">
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pl-35 md-pl-15">
                            <div class="widget-area">
                                <div class="search-widget mb-50">
                                    <div class="search-wrap">
                                        <input type="search" placeholder="Searching..." name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                                    </div>
                                </div>
                                <div class="recent-posts mb-50">
                                    <div class="widget-title">
                                        <h3 class="title">Recent Events</h3>
                                    </div>
                                    <div class="recent-post-widget no-border">
                                        <div class="post-img">
                                            <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/forex/forex_event.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="blog-details.html">Nairobi Forex Expo 2021</a>
                                            <span class="date-post"> <i class="fa fa-calendar"></i> Octobor 26,2021  </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="blog-details.html"><img img src="{{ asset('frontend/assets/images/forex/forex_event.jpg') }}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="blog-details.html">Kisumu Forex Expo 2021</a>
                                            <span class="date-post"> <i class="fa fa-calendar"></i> Octobor 26,2021  </span>
                                        </div>
                                    </div>
                                    <div class="recent-post-widget">
                                        <div class="post-img">
                                            <a href="blog-details.html"><img src="{{ asset('frontend/assets/images/forex/forex.webp') }}" alt=""></a>
                                        </div>
                                        <div class="post-desc">
                                            <a href="blog-details.html">Mombasa Forex Expo 2021</a>
                                            <span class="date-post"> <i class="fa fa-calendar"></i> Octobor 26,2021 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Newsletter section start -->
                <div class="rs-newsletter style1 pt-120 mb--110">
                    <div class="container">
                        <div class="newsletter-wrap">
                            <div class="row y-middle">
                                <div class="col-lg-6">
                                    <div class="content-wrap">
                                        <div class="icon-img">
                                            <img src="assets/images/mail.png" alt="images">
                                        </div>
                                        <h3 class="newsletter-title">
                                            Newsletter Subscribe
                                        </h3>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <form class="newsletter-form">
                                        <input type="email" name="email" placeholder="Your email address" required="">
                                        <em class="paper-plane"><input type="submit" value="Subscribe"></em>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Newsletter section end -->
            </div>
            <!-- Blog Section End --> 
            
@endsection