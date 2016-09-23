@extends('base')

@section('content')


    <!-- WRAPPER -->
    <div class="wrapper">

        <!-- HEADER -->
        <header id="header" class="header-fullwidth">
            <div id="header-wrap">
                <div class="container">

                    <!--LOGO-->
                    <div id="logo">
                        <a href="#" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="/images/logo.png" alt="Polo Logo">
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
                        <span class="shopping-cart-items">8</span>
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

                    <div class="navbar-collapse collapse main-menu-collapse navigation-wrap">
                        <div class="container">
                            <nav id="mainMenu" class="main-menu mega-menu">
                                <ul class="main-menu nav nav-pills">
                                    @foreach($menus as $menu)
                                        <li @if(count($menu->submenus)) class="dropdown" @endif>
                                            <a href="{{$menu->url}}">
                                                @if($menu->name == 'Home')
                                                    <i class="fa fa-home"></i>@endif
                                                {{$menu->name}}
                                                @if(count($menu->submenus))
                                                    <i class="fa fa-angle-down"></i>
                                                @endif
                                            </a>
                                            @if(count($menu->submenus))
                                                <ul class="dropdown-menu">
                                                    @foreach($menu->submenus as $submenu)
                                                        <li><a href="{{$submenu->url}}">{{$submenu->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->

        <!-- SLIDER -->
        <section class="no-padding">

            <div id="slider-carousel" class="boxed-slider">

                @foreach($sliders as $slider)
                    @if(count($slider->location))

                <div style="background-image:url({{$slider->location}});" class="owl-bg-img">
                    <div class="background-overlay-one"></div>
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
        <section class="p-b-0">
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
        </section>
        <!-- END: WELCOME -->

        <!-- WHAT WE DO -->
        <section class="background-grey">
            <div class="container">
                <div class="heading text-left">
                    <h2>WHAT WE DO</h2>
                    <span class="lead">We provide high quality software development services on a broad range of hardware and software platforms. All our solutions are based on the new concepts in IT industry such as dynamic reports and integration with mobile applications. This allow us to build wide range of customers across the world.</span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="0">
                            <h4>Networking Solutions</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="200">
                            <h4>Computer AMC</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="400">
                            <h4>Completely Leasing and Renting</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="600">
                            <h4>ABC</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="800">
                            <h4>ABC</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="text-box" data-animation="fadeInUp" data-animation-delay="1000">
                            <h4>ABC</h4>
                            <p>Lorem ipsum dolor sit amet, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam.</p>
                        </div>
                    </div>


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
                    <div class="col-md-3">

                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-code"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="50" data-to="12416" data-from="600" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>LINES OF CODE</p>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-coffee"></i></div>
                            <div class="counter"> <span data-speed="4500" data-refresh-interval="23" data-to="365" data-from="100" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>CUPS OF COFFEE</p>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-rocket"></i></div>
                            <div class="counter"> <span data-speed="3000" data-refresh-interval="12" data-to="114" data-from="50" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>FINISHED PROJECTS</p>
                        </div>
                    </div>

                    <div class="col-md-3">

                        <div class="text-center">
                            <div class="icon"><i class="fa fa-3x fa-smile-o"></i></div>
                            <div class="counter"> <span data-speed="4550" data-refresh-interval="50" data-to="14825" data-from="48" data-seperator="true"></span> </div>
                            <div class="seperator seperator-small"></div>
                            <p>SATISFIED CLIENTS</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END: COUNTERS -->

        <!-- BLOG -->
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
                        <div class="post-item" data-animation="fadeInUp" data-animation-delay="0">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/thumb/4.jpg">
                                </a>
                            </div>
                            <div class="post-content-details">
                                <div class="post-title">
                                    <h3><a href="#">Image post example</a></h3>
                                </div>
                                <div class="post-info">
                                    <span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
                                    <span class="post-category">in <a href="#">Productivity</a></span>
                                </div>
                                <div class="post-description">
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.</p>

                                    <div class="post-info">
                                        <a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="post-date-day">19</span>
                                    <span class="post-date-month">January</span>
                                    <span class="post-date-year">2015</span>
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
                                        <span class="post-comments-number">324</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog slider post-->
                        <div class="post-item" data-animation="fadeInUp" data-animation-delay="200">

                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/thumb/5.jpg">
                                </a>
                            </div>

                            <div class="post-content-details">
                                <div class="post-title">
                                    <h3><a href="#">Slider post demo</a></h3>
                                </div>
                                <div class="post-info">
                                    <span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
                                    <span class="post-category">in <a href="#">Productivity</a></span>
                                </div>
                                <div class="post-description">
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.

                                    </p>

                                    <div class="post-info">
                                        <a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="post-date-day">16</span>
                                    <span class="post-date-month">January</span>
                                    <span class="post-date-year">2015</span>
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
                                        <span class="post-comments-number">324</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- Blog image post-->
                        <div class="post-item" data-animation="fadeInUp" data-animation-delay="400">
                            <div class="post-image">
                                <a href="#">
                                    <img alt="" src="images/blog/thumb/6.jpg">
                                </a>
                            </div>
                            <div class="post-content-details">
                                <div class="post-title">
                                    <h3><a href="#">Image post example</a></h3>
                                </div>
                                <div class="post-info">
                                    <span class="post-autor">Post by: <a href="#">Alea Grande</a></span>
                                    <span class="post-category">in <a href="#">Productivity</a></span>
                                </div>
                                <div class="post-description">
                                    <p>Curabitur pulvinar euismod ante, ac sagittis ante posuere ac. Vivamus luctus commodo dolor porta feugiat. Fusce at velit id ligula pharetra laoreet. Ut nec metus a mi ullamcorper hendrerit.

                                    </p>

                                    <div class="post-info">
                                        <a class="read-more" href="blog-post.html">read more <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>

                            <div class="post-meta">
                                <div class="post-date">
                                    <span class="post-date-day">14</span>
                                    <span class="post-date-month">February</span>
                                    <span class="post-date-year">2015</span>
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
                                        <span class="post-comments-number">324</span>
                                    </a>
                                </div>
                            </div>
                        </div>



                    </div>
                    <!-- END: Blog post-->
                </div>
            </div>
        </section>
        <!-- END: BLOG -->

        <!-- CLIENTS -->
        <section class="p-t-60">
            <div class="container">
                <div class="heading heading-center">
                    <h2>CLIENTS</h2>
                    <span class="lead">As an integrated IT services providing firm, we serve a diverse list of clients and industries. Our Customer centric approach is reflected in its clientele that includes top notch organizations across the globe.</span>
                </div>
                <div class="carousel clients-carousel" data-carousel-col="6" data-carousel-col-xs="2">
                    <div>
                        <a href="#"><img alt="" src="images/clients/1.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/2.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/3.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/4.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/5.png"> </a>
                    </div>
                    <div>
                        <a href="#"><img alt="" src="images/clients/6.png"> </a>
                    </div>
                </div>
            </div>

        </section>
        <!-- END: CLIENTS -->

    @include('footer')

        @endsection()