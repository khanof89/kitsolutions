@extends('base')

@section('content')
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HEADER -->
        <header id="header" class="header-fullwidth header-transparent  header-dark header-navigation-light">
            <div id="header-wrap">
                <div class="container">
                    <!--LOGO-->
                    <div id="logo">
                        <a href="#" class="logo" data-dark-logo="/images/K-it-solutions_001_png_002.png">
                            <img src="/images/K-it-solutions_001_png_002.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--END: LOGO-->

                    <!--MOBILE MENU -->
                    <div class="nav-main-menu-responsive">
                        <button class="lines-button x">
                            <span class="lines"></span>
                        </button>
                    </div>
                    <!--END: MOBILE MENU -->

                    <!--SHOPPING CART -->
                    <div id="shopping-cart">
                        <span class="shopping-cart-items"></span>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <!--END: SHOPPING CART -->

                    <!--TOP SEARCH -->
                    <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                        <form action="#" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--END: TOP SEARCH -->

                    <!--NAVIGATION-->
                    @include('menu')

                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->

        <!-- SLIDER -->
        <section id="slider" class="no-padding">
            <div id="slider-carousel" class="boxed-slider">
                @foreach($sliders as $slider)
                    @if(count($slider->location))
                        <div style="background-image:url({{$slider->location}});" class="owl-bg-img">
                            <div class="background-overlay"></div>
                    <div class="container-fullscreen">
                        <div class="text-middle">
                            <div class="container">
                                <div class="text-center text-light slider-content">
                                    @foreach($slider->slidertext as $text)
                                        @if(count($text->text))
                                    {!! $text->text !!}
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                        @endif

                    @endforeach
            </div>
        </section>
        <!-- END: SLIDER -->


        <!-- WELCOME -->
        {{--<section class="p-b-0">
            <div class="container">
                <div class="heading heading-center m-b-40" data-animation="fadeInUp">
                    <h2>WELCOME TO THE WORLD OF POLO</h2>
                    <span class="lead">Create amam ipsum dolor sit amet, consectetur adipiscing elit.</span>
                </div>
                <div class="row" data-animation="fadeInUp">
                    <div class="col-md-12">
                        <img class="img-responsive" src="/images/other/responsive-1.jpg" alt="Welcome to POLO">
                    </div>
                </div>
            </div>
        </section>--}}
        <!-- END: WELCOME -->

        <!-- WHAT WE DO -->
        <section class="background-grey">
            <div class="container">
                <div class="heading text-left">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">We provide high quality software development services on a broad range of hardware and software platforms. All our solutions are based on the new concepts in IT industry such as dynamic reports and integration with mobile applications. This allow us to build wide range of customers across the world.</span>
                </div>
                <div class="row">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="0">
                            <h4>{{$service->heading}}</h4>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END WHAT WE DO -->

        <!-- SERVICES -->
        <section>
            <div class="container">
                <div class="heading heading-center">
                    <h2>SERVICES</h2>
                    <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                </div>

                <div class="row">
                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="0">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-plug"></i></a>
                            </div>
                            <h3>Powerful template</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="200">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Flexible Layouts</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="400">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-cloud"></i></a>
                            </div>
                            <h3>Retina Ready</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="600">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-lightbulb-o"></i></a>
                            </div>
                            <h3>Fast processing</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="800">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-trophy"></i></a>
                            </div>
                            <h3>Unlimited Colors</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-animation="fadeInUp" data-animation-delay="1000">
                        <div class="icon-box effect medium border small">
                            <div class="icon">
                                <a href="#"><i class="fa fa-thumbs-o-up"></i></a>
                            </div>
                            <h3>Premium Sliders</h3>
                            <p>Lorem ipsum dolor sit amet, consecte adipiscing elit. Suspendisse condimentum porttitor cursumus.</p>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- END: SERVICES -->

        <!-- COUNTERS -->
        <section class="parallax text-light p-t-150 p-b-150 background-overlay" style="background-image: url(/images/parallax/12.jpg);" data-stellar-background-ratio="0.6">
            <div class="container">
                <div class="row">
                    @foreach($statistics as $statistic)
                    <div class="col-md-3">
                        <div class="text-center">
                            <div class="icon"><i class="{{$statistic->icon}}"></i></div>
                            <div class="counter">
                                <span data-speed="3000" data-refresh-interval="50" data-to="{{$statistic->count}}" data-from="600" data-seperator="true"></span>
                            </div>
                            <div class="seperator seperator-small"></div>
                            <p>{{$statistic->name}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- END: COUNTERS -->

        {{--<!-- BLOG -->
        <section class="content background-grey">
            <div class="container">

                <div class="heading heading text-left">
                    <h2>OUR BLOG</h2>
                    <span class="lead">As an integrated IT services providing firm, we serve a diverse list of clients and industries. Our Customer centric approach is reflected in its clientele that includes top notch organizations across the globe. KIT has also built a global presence by establishing an international network of partners and affiliates. </span>
                </div>
            </div>

            <div id="blog">
                <div class="container">
                    <!-- Blog post-->
                    <div class="post-content  post-block post-modern post-3-columns post-light-background">
                        <!-- Blog image post-->
                        @foreach($blogs as $blog)
                        <div class="post-item" data-animation="fadeInUp" data-animation-delay="0">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="{{$blog->image_location}}">
                                </a>
                            </div>
                            <div class="post-content-details">
                                <div class="post-title">
                                    <h3><a href="#">{{$blog->title}}</a></h3>
                                </div>
                                <div class="post-description">
                                    <p>{{substr($blog->body, 0, 190)}}</p>

                                    <div class="post-info">
                                        <a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="post-date-day">{{getDateForBlog($blog->created_at, 0)}}</span>
                                    <span class="post-date-month">{{getDateForBlog($blog->created_at, 1)}}</span>
                                    <span class="post-date-year">{{getDateForBlog($blog->created_at, 2)}}</span>
                                </div>

                                <div class="post-comments">
                                    <a href="#">
                                        <i class="fa fa-comments-o"></i>
                                        <span class="post-comments-number">324</span>
                                    </a>
                                </div>
                                <div class="post-comments">
                                    <a href="#">
                                        <i class="fa fa-share-alt"></i>
                                        <span class="post-comments-number">{{$blog->share}}</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <!-- END: Blog post-->
                </div>
            </div>
        </section>
        <!-- END: BLOG -->--}}

        <!-- CLIENTS -->
        <section class="p-t-60">
            <div class="container">
                <div class="heading heading-center">
                    <h2>CLIENTS</h2>
                    <span class="lead">As an integrated IT services providing firm, we serve a diverse list of clients and industries. Our Customer centric approach is reflected in its clientele that includes top notch organizations across the globe.</span>
                </div>
                <div class="carousel clients-carousel" data-carousel-col="6" data-carousel-col-xs="2">
                    @foreach($clients as $client)
                    <div>
                        <a href="#"><img alt="" src="/images/clients/1.png"> </a>
                    </div>
                    @endforeach
                </div>
            </div>

        </section>
        </div>
        <!-- END: CLIENTS -->

    @include('footer')

        @endsection()