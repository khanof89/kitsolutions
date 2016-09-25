@extends('shop.base')

@section('content')


        <!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax page-title-center text-dark"
         style="background-image:url(images/parallax/page-title-parallax.jpg);">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>Shop fullwidth</h1>
            <span>Shop fullwidth version</span>
        </div>
        <div class="breadcrumb col-md-4">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Shop</a>
                </li>
                <li class="active"><a href="#">Shop fullwidth</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END: PAGE TITLE -->

<!-- SHOP PRODUCTS -->
<section>
    <div class="container-fluid">
        <div class="row m-b-20">
            <div class="col-md-6 p-t-10 m-b-20">
                <h3 class="m-b-20">A Monochromatic Spring ’15</h3>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus, sit, exercitationem,
                    consequuntur, assumenda iusto eos commodi alias.</p>
            </div>
            <div class="col-md-3">
                <div class="order-select">
                    <h6>Sort by</h6>

                    <p>Showing 1&ndash;12 of 25 results</p>

                    <form method="get">
                        <select>
                            <option value="order" selected="selected">Default sorting</option>
                            <option value="popularity">Sort by popularity</option>
                            <option value="rating">Sort by average rating</option>
                            <option value="date">Sort by newness</option>
                            <option value="price">Sort by price: low to high</option>
                            <option value="price-desc">Sort by price: high to low</option>
                        </select>
                    </form>
                </div>
            </div>
            <div class="col-md-3">
                <div class="order-select">
                    <h6>Sort by Price</h6>

                    <p>From 0 - 190$</p>

                    <form method="get">
                        <select>
                            <option value="" selected="selected">0$ - 50$</option>
                            <option value="">51$ - 90$</option>
                            <option value="">91$ - 120$</option>
                            <option value="">121$ - 200$</option>
                        </select>
                    </form>
                </div>
            </div>


        </div>

        <!--Product list-->
        <div class="shop">
            <div class="row">
                @foreach($products as $product)
                <div class="col-md-2">
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img alt="Shop product image!" src="{{$product->location}}">
                            </a>
                            <a href="#"><img alt="Shop product image!" src="{{$product->location}}">
                            </a>

							<span class="product-wishlist">
                                <a href="#"><i class="fa fa-heart"></i></a>
                            </span>

                            <div class="product-overlay">
                                <a href="include/ajax/example-shop-product.html" data-lightbox-type="ajax">Quick
                                    View</a>
                            </div>
                        </div>

                        <div class="product-description">
                            <div class="product-category">Women</div>
                            <div class="product-title">
                                <h3><a href="#">Bolt Sweatshirt</a></h3>
                            </div>
                            <div class="product-price">
                                <ins>$15.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                            <div class="product-reviews"><a href="#">6 customer reviews</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <nav class="text-center">
                <div class="pagination-wrap">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>

                            </a>
                        </li>
                        <li><a href="#">1</a>
                        </li>
                        <li><a href="#">2</a>
                        </li>
                        <li class="active"><a href="#">3</a>
                        </li>
                        <li><a href="#">4</a>
                        </li>
                        <li><a href="#">5</a>
                        </li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCTS -->


<!-- DELIVERY INFO -->
<section class="background-grey p-t-40 p-b-0">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-gift"></i></a>
                    </div>
                    <h3>Free shipping on orders INR 1500+</h3>

                    <p>Order more than INr 1500 and you will get free shipping in India. More info.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-plane"></i></a>
                    </div>
                    <h3>All India delivery</h3>

                    <p>We deliver the products to whole India</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="icon-box effect small clean">
                    <div class="icon">
                        <a href="#"><i class="fa fa-history"></i></a>
                    </div>
                    <h3>15 days money back guaranty!</h3>

                    <p>Not happy with our product, feel free to return it, we will refund 100% of your money!</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END: DELIVERY INFO -->
@endsection