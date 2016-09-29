@extends('shop.base')

@section('content')

        <!-- PAGE TITLE -->
<section id="page-title" class="page-title-parallax page-title-center text-dark" style="background-image:url(/images/parallax/page-title-parallax.jpg);">
    <div class="container">
        <div class="page-title col-md-8">
            <h1>PRODUCT</h1>
            <span>Product details</span>
        </div>
        <div class="breadcrumb col-md-4">
            <ul>
                <li><a href="#"><i class="fa fa-home"></i></a>
                </li>
                <li><a href="#">Home</a>
                </li>
                <li><a href="#">Shop</a>
                </li>
                <li class="active"><a href="#">Checkout</a>
                </li>
            </ul>
        </div>
    </div>
</section>
<!-- END: PAGE TITLE -->

<!-- SHOP PRODUCT PAGE -->
<section id="product-page" class="product-page p-b-0">
    <div class="container">
        <div class="product">
            <div class="row">
                <div class="col-md-5">
                    <div class="product-image">
                        <div class="carousel" data-carousel-col="1" data-lightbox-type="gallery">
                            <a href="{{$product->location}}" title="Shop product image!"><img alt="Shop product image!" src="{{$product->location}}">
                            </a>
                            @foreach($product->images as $image)
                            <a href="{{$image->location}}" title="Shop product image!"><img alt="Shop product image!" src="{{$image->location}}"></a>
                                @endforeach
                        </div>
                    </div>
                </div>


                <div class="col-md-7">
                    <div class="product-description">
                        <div class="product-category">{{$product->categories[0]->category->name}}</div>
                        <div class="product-title">
                            <h3><a href="#">{{$product->name}}</a></h3>
                        </div>
                        <div class="product-price"><ins>{{env('CURRENCY').$product->price}}</ins>
                        </div>
                        <div class="product-rate">
                            @for($i=1;$i<=$rating; $i++)
                            <i class="fa fa-star"></i>
                            @endfor
                        </div>
                        <div class="product-reviews"><a href="#">{{count($product->reviews)}} customer reviews</a>
                        </div>

                        <div class="seperator m-b-10"></div>
                        <p>{{$product->description}}</p>
                        <div class="product-meta">
                            <p>Tags:
                                @foreach($product->tags as $tag)
                                    <a href="/tag/{{$tag->name}}">{{$tag->name}}</a>,
                                    @endforeach
                            </p>
                        </div>
                        <div class="seperator m-t-20 m-b-10"></div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Select the size</h6>
                            <ul class="product-size">
                                @foreach($product->sizes as $size)
                                <li>
                                    <label>
                                        <input type="radio" checked="checked" value="{{$size->id}}" name="product-size"><span>{{$size->size}}</span>
                                    </label>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <h6>Select the color</h6>
                            <label class="sr-only">Color</label>
                            <select style="padding:10px">
                                <option value="">Select color…</option>
                                @foreach($product->colors as $color)
                                <option value="{{$color->id}}">{{$color->color}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <h6>Select quantity</h6>
                        <label class="sr-only">Color</label>
                        <select style="padding:10px">
                            <option value="">Select Quantity</option>
                            @for($i=1;$i<=$product->quantity;$i++)
                                <option value="{{$i}}">{{$i}}</option>
                            @endfor
                        </select>
                    </div>
                    <br />
                    <div class="m-t-20">
                        <button type="button" class="btn btn-primary btn-lg"><i class="fa fa-shopping-cart"></i> Add to cart</button>
                    </div>

                </div>


            </div>
            <div class="row m-t-40">
                <div class="col-md-6">
                @if(count($product->reviews))
                    <h4>Reviews ({{count($product->reviews)}})</h4>
                    <div id="comments" class="comments">
                        @foreach($product->reviews as $review)
                        <div class="comment">
                            <a href="#" class="pull-left">
                                <img alt="" src="/images/team/1.jpg" class="avatar">
                            </a>
                            <div class="media-body">
                                <div class="product-rate">
                                    @for($i=1;$i<=$review->rating; $i++)
                                    <i class="fa fa-star"></i>
                                    @endfor
                                </div>
                                <h4 class="media-heading">Alea Grande</h4>
                                <p>{{$review->description}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    @else
                    <h2>No Reviews yet</h2>
                    @endif
                </div>

                <div class="col-md-6">
                    <h4> Additional Information</h4>
                    <div class="accordion toggle fancy radius clean">
                        <div class="ac-item ac-active">
                            <h5 class="ac-title"><i class="fa fa-rocket"></i>Suscipit laboriosam</h5>
                            <div class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title"><i class="fa fa-heart"></i>Aliquam voluptatem</h5>
                            <div style="display: none;" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                        <div class="ac-item">
                            <h5 class="ac-title"><i class="fa fa-shopping-cart"></i>Labore et dolore</h5>
                            <div style="display: none;" class="ac-content">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- END: SHOP PRODUCT PAGE -->

<!-- SHOP WIDGET PRODUTCS -->
<section class="p-t-0">
    <div class="container">
        @if(count($product->related))
        <div class="heading-fancy heading-line text-center">
            <h4>Related Products you may be interested!</h4>
        </div>
        <div class="row">
            @foreach (array_chunk($relatedProducts, 3, true) as $suggestions)
            <div class="col-md-4">
                <div class="widget-shop">
                @foreach($suggestions as $suggestion)
                    <div class="product">
                        <div class="product-image">
                            <a href="#"><img src="/images/shop/products/10.jpg" alt="Shop product image!">
                            </a>
                        </div>
                        <div class="product-description">
                            <div class="product-category">Women</div>
                            <div class="product-title">
                                <h3><a href="#">Bolt Sweatshirt</a></h3>
                            </div>
                            <div class="product-price"><del>$30.00</del><ins>$15.00</ins>
                            </div>
                            <div class="product-rate">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                    @endforeach
            </div>
            </div>
            @endforeach
        </div>
        @else
            <div class="heading-fancy heading-line text-center">
                <h4>Product suggestions not available at the moment</h4>
            </div>
        @endif
    </div>
</section>
<!-- END: SHOP WIDGET PRODUTCS -->


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
@endsection