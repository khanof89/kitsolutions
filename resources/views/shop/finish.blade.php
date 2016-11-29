@extends('shop.base')

@section('content')

        <!-- HEADER -->
    <header id="header" class="header-transparent">
        <div id="header-wrap">
            <div class="container">

                <!--LOGO-->
                <div id="logo">
                    <a href="index.html" class="logo" data-dark-logo="images/logo-dark.png">
                        <img src="images/logo.png" alt="Polo Logo">
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
                    <a href="shop-cart.html"><i class="fa fa-shopping-cart"></i></a>
                </div>
                <!--END: SHOPPING CART -->

                <!--TOP SEARCH -->
                <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                    <form action="search-results-page.html" method="get">
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


    <!-- PAGE TITLE -->
    <section id="page-title" class="page-title-parallax page-title-center text-dark" style="background-image:url(images/parallax/page-title-parallax.jpg);">
        <div class="container">
            <div class="page-title col-md-8">
                <h1>Order Completed</h1>
                <span>Congratulations! Your order is completed!</span>
            </div>
            <div class="breadcrumb col-md-4">
                <ul>
                    <li><a href="#"><i class="fa fa-home"></i></a>
                    </li>
                    <li><a href="#">Home</a>
                    </li>
                    <li><a href="#">Shop</a>
                    </li>
                    <li class="active"><a href="#">Order Completed</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- END: PAGE TITLE -->

    <!-- SHOP CHECKOUT COMPLETED -->
    <section id="shop-checkout-completed">
        <div class="container">
            <div class="p-t-10 m-b-20 text-center">
                <div class="text-center">
                    <h3>Congratulations! Your order is completed!</h3>
                    <p>Your order is number #123456. You can
                        <a href="" class="text-underline">
                            <mark>view your order</mark>
                        </a> on your account page, when you are logged in.</p>
                </div>
                <a href="#" class="button color button-3d rounded icon-left m-r-10"><span>Go to login page</span></a><a class="button color button-3d rounded icon-left" href="#"><span>Return To Shop</span></a>
            </div>
        </div>
    </section>
    <!-- END: SHOP CHECKOUT COMPLETED -->

    <!-- DELIVERY INFO -->
    <section class="background-grey p-t-40 p-b-0">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-gift"></i></a>
                        </div>
                        <h3>Free shipping on orders $60+</h3>
                        <p>Order more than 60$ and you will get free shippining Worldwide. More info.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-plane"></i></a>
                        </div>
                        <h3>Worldwide delivery</h3>
                        <p>We deliver to the following countries: USA, Canada, Europe, Australia</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon-box effect small clean">
                        <div class="icon">
                            <a href="#"><i class="fa fa-history"></i></a>
                        </div>
                        <h3>60 days money back guranty!</h3>
                        <p>Not happy with our product, feel free to return it, we will refund 100% your money!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: DELIVERY INFO -->

    <!-- FOOTER -->
    <footer class="background-dark text-grey" id="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title">Our Services</h4>
                            <ul class="list list-arrow-icons">
                                <li> <a href="#" title="">Development </a> </li>
                                <li> <a href="#" title="">Branding </a> </li>
                                <li> <a href="#" title="">Marketing </a> </li>
                                <li> <a href="#" title="">Branding </a> </li>
                                <li> <a href="#" title="">Strategy solutions</a> </li>
                                <li> <a href="#" title="">Copywriting </a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="widget clearfix widget-categories">
                            <h4 class="widget-title">Blog categories</h4>
                            <ul class="list list-arrow-icons">
                                <li> <a href="#">Themeforest</a> </li>
                                <li> <a href="#">Web Design</a> </li>
                                <li> <a href="#">Wordpress</a> </li>
                                <li> <a href="#">HTML &amp; CSS</a> </li>
                                <li> <a href="#">Illustration</a> </li>
                                <li> <a href="#">Template</a> </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="widget clearfix widget-contact-us-form">
                            <h4 class="widget-title">Have a questions?</h4>
                            <form id="widget-contact-form-footer" action="include/contact-form-footer.php" role="form" method="post" class="form-transparent-fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" aria-required="true" name="widget-contact-form-name" class="form-control required name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" aria-required="true" name="widget-contact-form-email" class="form-control required email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea type="text" name="widget-contact-form-message" rows="5" class="form-control required" placeholder="Message"></textarea>
                                        </div>
                                        <input type="text" class="hidden" id="widget-contact-form-antispam" name="widget-contact-form-antispam" value="" />
                                        <button type="submit" class="button small right black no-margin"><i class="fa fa-paper-plane"></i>&nbsp;Send message</button>
                                    </div>
                                </div>
                            </form>
                            <script type="text/javascript">

                                jQuery("#widget-contact-form-footer").validate({

                                    submitHandler: function(form) {

                                        jQuery(form).ajaxSubmit({
                                            success: function(text) {
                                                if (text.response == 'success') {
                                                    $.notify({
                                                        message: "We have <strong>successfully</strong> received your Message and will get Back to you as soon as possible."
                                                    }, {
                                                        type: 'success'
                                                    });
                                                    $(form)[0].reset();
                                                } else {
                                                    $.notify({
                                                        message: text.message
                                                    }, {
                                                        type: 'danger'
                                                    });
                                                }
                                            }
                                        });
                                    }
                                });

                            </script>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="copyright-content">
            <div class="container">
                <div class="row">
                    <div class="copyright-text col-md-6"> &copy; 2016 POLO - Best HTML5 Template Ever. All Rights Reserved. <a target="_blank" href="http://www.inspiro-media.com">INSPIRO</a>
                    </div>
                    <div class="col-md-6 text-right">
                        <img src="images/card-images.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END: FOOTER -->



</div>
<!-- END: WRAPPER -->
@endsection