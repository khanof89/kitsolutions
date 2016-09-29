<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>


    <link rel="shortcut icon" href="/images/favicon.png">
    <title>POLO | The Multi-Purpose HTML5 Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/vendor/fontawesome/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="/vendor/animateit/animate.min.css" rel="stylesheet">

    <!-- Vendor css -->
    <link href="/vendor/owlcarousel/owl.carousel.css" rel="stylesheet">
    <link href="/vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Template base -->
    <link href="/css/theme-base.css" rel="stylesheet">

    <!-- Template elements -->
    <link href="/css/theme-elements.css" rel="stylesheet">


    <!-- Responsive classes -->
    <link href="/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <!-- Template color -->
    <link href="/css/color-variations/blue.css" rel="stylesheet" type="text/css" media="screen" title="blue">

    <!-- LOAD GOOGLE FONTS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,800,700,600%7CRaleway:100,300,600,700,800"
          rel="stylesheet" type="text/css"/>

    <!-- CSS CUSTOM STYLE -->
    <link rel="stylesheet" type="text/css" href="/css/custom.css" media="screen"/>

    <!--VENDOR SCRIPT-->
    <script src="/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="/vendor/plugins-compressed.js"></script>

</head>

<body class="wide">
<!-- WRAPPER -->
<div class="wrapper">

    <!-- HEADER -->
    <header id="header" class="header-transparent">
        <div id="header-wrap">
            <div class="container">

                <!--LOGO-->
                <div id="logo">
                    <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
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
                    <a href="/shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <!--END: SHOPPING CART -->

                <!--TOP SEARCH -->
                <div id="top-search"><a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>

                    <form action="/search-results-page.html" method="get">
                        <input type="text" name="q" class="form-control" value=""
                               placeholder="Start typing & press  &quot;Enter&quot;">
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


    @yield('content')

    @include('footer')
<!-- END: WRAPPER -->

<!-- GO TOP BUTTON -->
<a class="gototop gototop-button" href="#"><i class="fa fa-chevron-up"></i></a>

<!-- Theme Base, Components and Settings -->
<script src="/js/theme-functions.js"></script>

<!-- Custom js file -->
<script src="/js/custom.js"></script>


</body>
</html>