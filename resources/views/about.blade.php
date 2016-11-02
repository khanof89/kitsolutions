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
    <section class="parallax text-light fullscreen fullscreen" style="background-image: url('/homepages/corporate-v6/images/23.jpg');">
        <div class="background-overlay"></div>
        <div class="container container-fullscreen">
            <div class="text-middle text-center text-light">
                <h1 class="text-uppercase text-large" data-animation="fadeInDown" data-animation-delay="100">WE ARE KAKRAULIA IT SOLUTION!</h1>
                <p class="lead" data-animation="fadeInDown" data-animation-delay="300">Know About Us</p>
            </div>

        </div>
    </section>
    <!-- END: SECTION FULLSCREEN -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="heading heading text-left">
                        <h2>THE COMPANY</h2>

                    </div>
                </div>
                @foreach($abouts as $about)
                {!! $about->content !!}
               @endforeach
            </div>
        </div>
    </section>


    <section class="box-fancy section-fullwidth text-light p-b-0">
        <div class="row">
            <?php $i=1;?>
            @foreach($menus as $menu)
                <div style="background-color:{{getColor($i)}}" class="col-md-4">
                    <h1 class="text-large text-uppercase">{{$i}}</h1>
                    <h3>{{$menu->heading}}</h3>
                    <span>{!! $menu->description !!}</span>
                </div>
                <?php $i++; ?>
            @endforeach
        </div>
    </section>

    @include('footer')

@endsection()