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

        <!-- SECTION FULLSCREEN -->
        <section class="parallax text-light fullscreen fullscreen" style="background-image: url('/homepages/corporate-v6/images/31.jpg');">
            <div class="background-overlay"></div>
            <div class="container container-fullscreen">
                <div class="text-middle text-center text-light">
                    <h1 class="text-uppercase text-large" data-animation="fadeInDown" data-animation-delay="100">Our Awesome Team</h1>
                    {{--<p class="lead" data-animation="fadeInDown" data-animation-delay="300">What We Do</p>--}}
                </div>

            </div>
        </section>
        <!-- END: SECTION FULLSCREEN -->

    <section>
        <div class="container">
            <div class="heading heading-center">
                <h2>OUR Team</h2>
                @foreach($contents as $content)
                <span>
                    {{$content->content}}
                </span>
                    @endforeach
            </div>

            <div class="row">

                @foreach($members as $member)
                    <div class="col-md-3">
                        <div class="image-box">
                            <img src="{{$member->photo}}" alt="">
                        </div>
                        <div class="image-box-description ">
                            <h4>{{$member->name}}</h4>
                            <p class="subtitle">{{$member->designation}}<br/><br /></p>
                            <hr class="line">
                            <div>{{$member->snippet}}<br /><br /><br /></div>
                            <div class="social-icons social-icons-border m-t-10">
                                <ul>
                                    @if($member->facebook)
                                        <li class="social-facebook"><a href="{{$member->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    @endif
                                    @if($member->twitter)
                                        <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                    @endif
                                    @if($member->linkedin)
                                        <li class="social-linkedin"><a href="{{$member->linkedin}}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>

    @include('footer')

@endsection()