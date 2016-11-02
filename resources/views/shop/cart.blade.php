@extends('shop.base')

@section('content')

        <!-- WRAPPER -->
<div class="wrapper">
    {{ csrf_field() }}
            <!-- HEADER -->
    <header id="header" class="header-transparent header-dark header-navigation-light">
        <div id="header-wrap">
            <div class="container">
                <!--LOGO-->
                <div id="logo">
                    <a href="/" class="logo">
                        <img src="/images/K-it-solutions_001_png_002.png" alt="Polo Logo ">
                    </a>
                </div>
                <!--END: LOGO-->
                <!--MOBILE MENU -->
                <div class="nav-main-menu-responsive">
                    <button class="lines-button x" type="button" data-toggle="collapse"
                            data-target=".main-menu-collapse">
                        <span class="lines"></span>
                    </button>
                </div>
                <!--END: MOBILE MENU -->
                <!--SHOPPING CART -->
                <div id="shopping-cart">
                    <span class="shopping-cart-items"></span>
                    <a href="/cart"><i
                                class="fa fa-shopping-cart"></i><sup>{{count(\Lutforrahman\Nujhatcart\Facades\Cart::contents())}}</sup></a>
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


    <!-- PAGE TITLE -->
    <section id="page-title" class="page-title-center page-title-animate page-title-parallax text-light"
             style="background-image: url(/images/parallax/page-title-parallax.jpg)">
        <div class="background-overlay"></div>
        <div class="container">
            <div class="page-title col-md-8">
                <h1 class="text-uppercase text-medium">Shopping Cart</h1>
            </div>
        </div>
    </section>
    <!-- END: PAGE TITLE -->

    @if(count($items))
            <!-- SHOP CART -->
    <section id="shop-cart">
        <div class="container">
            <div class="shop-cart">
                <div class="table table-condensed table-striped table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th class="cart-product-remove"></th>
                            <th class="cart-product-thumbnail">Product</th>
                            <th class="cart-product-name">Description</th>
                            <th class="cart-product-price">Unit Price</th>
                            <th class="cart-product-quantity">Quantity</th>
                            <th class="cart-product-subtotal">Total</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $total = 0;?>
                        @foreach($items as $item)
                            <tr>
                                <td class="cart-product-remove">
                                    <a href="#"><i class="fa fa-close"></i></a>
                                </td>

                                <td class="cart-product-thumbnail">
                                    <a href="#">
                                        <img src="{{$item->image}}" alt="{{$item->name}}">
                                    </a>
                                    <div class="cart-product-thumbnail-name">{{$item->name}}</div>
                                </td>
                                <td class="cart-product-description">
                                    <input type="hidden" id="item_id" value="{{$item->itemid}}">
                                    <p>
                                        {!! $item->description !!}
                                    </p>
                                </td>

                                <td class="cart-product-price">
                                    <span class="amount" id="amount-{{$item->id}}"
                                          data-amount="{{$item->price}}">{{env('CURENCY') . $item->price}}</span>
                                </td>

                                <td class="cart-product-quantity">
                                    <div class="quantity">
                                        <input type="button" class="minus" value="-" data-id="{{$item->id}}">
                                        <input type="text" class="qty" value="{{$item->quantity}}" name="quantity"
                                               id="quantity-{{$item->id}}">
                                        <input type="button" class="plus" value="+" data-id="{{$item->id}}">
                                    </div>
                                </td>

                                <td class="cart-product-subtotal">
                                    <span class="amount">{{env('CURENCY')}}
                                        <div class="total-{{$item->id}}">{{$item->quantity * $item->price}}</div></span>
                                </td>
                            </tr>
                            <?php $total += $item->quantity * $item->price;?>
                            <input type="hidden" id="total" value="{{$total}}">
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
                    <hr class="space">
                    <div class="col-md-12 p-r-10 ">
                        <div class="table-responsive">
                            <h4>Cart Subtotal</h4>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="cart-product-name">
                                        <strong>Cart Subtotal</strong>
                                    </td>
                                    <td class="cart-product-name text-right">
                                        <span class="amount">{{$total}}</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-name">
                                        <strong>Shipping</strong>
                                    </td>
                                    <td class="cart-product-name  text-right">
                                        <span class="amount">Free Shipping</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart-product-name">
                                        <strong>Payable Amount</strong>
                                    </td>
                                    <td class="cart-product-name text-right">
                                        <span class="amount color lead">
                                            <strong class="cartTotal" data-value="{{$total}}">INR{{$total}}</strong>
                                        </span>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        @if(!Auth::check())
                            <button class="button color button-3d rounded icon-left float-right" id="login"><span>Proceed to Checkout</span>
                            </button>
                        @else
                            <a href="/checkout" class="button color button-3d rounded icon-left float-right"><span>Proceed to Checkout</span></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END: SHOP CART -->
    @else
        <section id="shop-cart">
            <div class="container text-center">
                <h2>No items in your cart.</h2>
            </div>
        </section>
        @endif

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
                                    <li><a href="#" title="">Development </a></li>
                                    <li><a href="#" title="">Branding </a></li>
                                    <li><a href="#" title="">Marketing </a></li>
                                    <li><a href="#" title="">Branding </a></li>
                                    <li><a href="#" title="">Strategy solutions</a></li>
                                    <li><a href="#" title="">Copywriting </a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="widget clearfix widget-categories">
                                <h4 class="widget-title">Blog categories</h4>
                                <ul class="list list-arrow-icons">
                                    <li><a href="#">Themeforest</a></li>
                                    <li><a href="#">Web Design</a></li>
                                    <li><a href="#">Wordpress</a></li>
                                    <li><a href="#">HTML &amp; CSS</a></li>
                                    <li><a href="#">Illustration</a></li>
                                    <li><a href="#">Template</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="widget clearfix widget-contact-us-form">
                                <h4 class="widget-title">Have a questions?</h4>

                                <form id="widget-contact-form-footer" action="/include/contact-form-footer.php"
                                      role="form" method="post" class="form-transparent-fields">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" aria-required="true" name="widget-contact-form-name"
                                                       class="form-control required name" placeholder="Name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" aria-required="true"
                                                       name="widget-contact-form-email"
                                                       class="form-control required email" placeholder="Email">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <textarea type="text" name="widget-contact-form-message" rows="5"
                                                          class="form-control required"
                                                          placeholder="Message"></textarea>
                                            </div>
                                            <input type="text" class="hidden" id="widget-contact-form-antispam"
                                                   name="widget-contact-form-antispam" value=""/>
                                            <button type="submit" class="button small right black no-margin"><i
                                                        class="fa fa-paper-plane"></i>&nbsp;Send message
                                            </button>
                                        </div>
                                    </div>
                                </form>
                                <script type="text/javascript">

                                    jQuery("#widget-contact-form-footer").validate({

                                        submitHandler: function (form) {

                                            jQuery(form).ajaxSubmit({
                                                success: function (text) {
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
                        <div class="copyright-text col-md-6"> &copy; 2016 POLO - Best HTML5 Template Ever. All Rights
                            Reserved. <a target="_blank" href="http://www.inspiro-media.com">INSPIRO</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <img src="/images/card-images.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END: FOOTER -->


        @include('partials.login')

        @include('partials.register')

        @include('partials.notification')


</div>
<!-- END: WRAPPER -->
@endsection