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
        <section class="parallax text-light fullscreen fullscreen" style="background-image: url('/homepages/corporate-v6/images/3.jpg');">
            <div class="background-overlay"></div>
            <div class="container container-fullscreen">
                <div class="text-middle text-center text-light">
                    <h1 class="text-uppercase text-large" data-animation="fadeInDown" data-animation-delay="100">Our Clients</h1>
                    <p class="lead" data-animation="fadeInDown" data-animation-delay="300">
                        @foreach($contents as $content)
                            <span class="lead">{{$content->content}} </span>
                        @endforeach</p>
                </div>

            </div>
        </section>
        <!-- END: SECTION FULLSCREEN -->



   {{-- <!-- PAGE TITLE -->
    <section id="page-title" class="page-title-parallax page-title-center text-dark" style="background-image:url(/homepages/corporate-v6/images/3.jpg);">
        <div class="background-overlay"></div>
        <div class="container">
            <div class="page-title col-md-8">
                <h1>Our Clients</h1>
                @foreach($contents as $content)
                    <span class="lead">{{$content->content}} </span>
                @endforeach
            </div>
        </div>
    </section>
    <!-- END: PAGE TITLE -->--}}


    <section>
        <div class="container">
            <div class="heading heading-center">
                @foreach($contents as $content)
                <span class="lead">{{$content->content}} </span>
                    @endforeach
            </div>

            <ul class="grid grid-4-columns">
                @foreach($clients as $client)
                <li>
                    <a data-content="{{$client->description}}" title="" data-placement="top" data-toggle="popover" data-container="body" data-original-title="{{$client->name}}" data-trigger="hover">
                        <img src="{{$client->location}}" alt=""></a>
                </li>
                @endforeach
            </ul>

        </div>
    </section>

    @include('footer')

@endsection()