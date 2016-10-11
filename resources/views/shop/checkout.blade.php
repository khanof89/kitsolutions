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
                <h1 class="text-uppercase text-medium">Checkout</h1>
            </div>
        </div>
    </section>
    <!-- END: PAGE TITLE -->

    <!-- SHOP CHECKOUT -->
    <section id="shop-checkout">
        <div class="container">
            <div class="shop-cart">
                <form method="post" class="sep-top-md">
                    <div class="row">
                        <div class="col-md-6 no-padding">
                            <div class="col-md-12">
                                <h4 class="upper">Billing & Shipping Address</h4>
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="sr-only">Name</label>
                                <input type="text" class="form-control input-lg" placeholder="Name" name="name" value="{{Auth::user()->name}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="sr-only">Company Name</label>
                                <input type="text" class="form-control input-lg" placeholder="Company Name(Optional)" value="{{(Auth::user()->profile) ? Auth::user()->profile->company : ''}}" name="company">
                            </div>
                            <div class="col-md-12 form-group">
                                <label class="sr-only">Address</label>
                                <input type="text" class="form-control input-lg" placeholder="Address" value="{{(Auth::user()->profile) ? Auth::user()->profile->address : ''}}" name="address">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">House/Flat no.</label>
                                <input type="text" class="form-control input-lg"
                                       placeholder="House/Flat no." value="{{(Auth::user()->profile) ? Auth::user()->profile->house_no : ''}}" name="house_no">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">Town / City</label>
                                <input type="text" class="form-control input-lg" placeholder="Town" value="{{(Auth::user()->profile) ? Auth::user()->profile->city : ''}}" name="city">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">State</label>
                                <input type="text" class="form-control input-lg" placeholder="State" value="{{(Auth::user()->profile) ? Auth::user()->profile->state : ''}}" name="state">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">Postcode / Zip</label>
                                <input type="text" class="form-control input-lg" placeholder="Postcode" value="{{(Auth::user()->profile) ? Auth::user()->profile->zip_code : ''}}" name="zip_code">
                            </div>
                            <div class="col-md-6 form-group">
                                <label class="sr-only">Phone</label>
                                <input type="text" class="form-control input-lg" placeholder="Phone" value="{{(Auth::user()->profile) ? Auth::user()->profile->phone : ''}}" name="phone">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h4 class="upper"><a href="#collapseFour" data-toggle="collapse" class="collapsed"
                                                 aria-expanded="false"> Ship to a different address <i
                                            class="fa fa-arrow-circle-o-down"></i></a></h4>

                            <div class="col-md-12 no-padding">
                                <div style="height: 0px;" aria-expanded="false" id="collapseFour"
                                     class="panel-collapse row collapse">
                                    <div class="panel-body">
                                        <p>If you have shopped with us before, please enter your details in the boxes
                                            below. If you are a new customer please proceed to the Billing &amp;
                                            Shipping section.</p>

                                        <div class="sep-top-xs">
                                            <div class="row">
                                                <div class="col-md-12 form-group">
                                                    <label class="sr-only">Country</label>
                                                    <select class="fullwidth">
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="PW">Belau</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia</option>
                                                        <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="VG">British Virgin Islands</option>
                                                        <option value="BN">Brunei</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo (Brazzaville)</option>
                                                        <option value="CD">Congo (Kinshasa)</option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">CuraÇao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="CI">Ivory Coast</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Laos</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao S.A.R., China</option>
                                                        <option value="MK">Macedonia</option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia</option>
                                                        <option value="MD">Moldova</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="AN">Netherlands Antilles</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="KP">North Korea</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PS">Palestinian Territory</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="IE">Republic of Ireland</option>
                                                        <option value="RE">Reunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russia</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="ST">São Tomé and Príncipe</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena</option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="SX">Saint Martin (Dutch part)</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia/Sandwich Islands</option>
                                                        <option value="KR">South Korea</option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syria</option>
                                                        <option value="TW">Taiwan</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option selected="selected" value="GB">United Kingdom (UK)
                                                        </option>
                                                        <option value="US">United States (US)</option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VA">Vatican</option>
                                                        <option value="VE">Venezuela</option>
                                                        <option value="VN">Vietnam</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="WS">Western Samoa</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">First Name</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="First Name" value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">Last Name</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Last Name" value="">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label class="sr-only">Company Name</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Company Name" value="">
                                                </div>
                                                <div class="col-md-12 form-group">
                                                    <label class="sr-only">Address</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Address" value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">Apartment, suite, unit etc.</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Apartment, suite, unit etc." value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">Town / City</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Town / City" value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">State / County</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="State / County" value="">
                                                </div>
                                                <div class="col-md-6 form-group">
                                                    <label class="sr-only">Postcode / Zip</label>
                                                    <input type="text" class="form-control input-lg"
                                                           placeholder="Postcode / Zip" value="">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 no-padding">
                                <textarea class="form-control input-lg"
                                          placeholder="Notes about your order, e.g. special notes for delivery"
                                          rows="7"></textarea>
                            </div>
                        </div>
                    </div>


                </form>

                <div class="seperator"><i class="fa fa-credit-card"></i>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <h4 class="upper">Your Order</h4>

                        <div class="table table-condensed table-striped table-responsive table table-bordered table-responsive">
                            <table class="table m-b-0">
                                <thead>
                                <tr>
                                    <th class="cart-product-thumbnail">Product</th>
                                    <th class="cart-product-name">Description</th>
                                    <th class="cart-product-subtotal">Total</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($items as $item)
                                <tr>
                                    <td class="cart-product-thumbnail">
                                        <div class="cart-product-thumbnail-name">{{$item->name}}</div>
                                    </td>
                                    <td class="cart-product-description">
                                        <p><span>{{$item->name}}</span>
                                            <span>Size: {{$item->options->size}}</span>
                                            <span>Color: {{$item->options->color}}</span>
                                            <span>Quantity: {{$item->quantity}}</span>
                                        </p>
                                    </td>
                                    <td class="cart-product-subtotal">
                                        <span class="amount">{{$item->price * $item->quantity}}</span>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <h4>Order Total</h4>
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td class="cart-product-name">
                                        <strong>Order Subtotal</strong>
                                    </td>

                                    <td class="cart-product-name text-right">
                                        <span class="amount">{{$subTotal}}</span>
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
                                        <strong>Total</strong>
                                    </td>

                                    <td class="cart-product-name text-right">
                                        <span class="amount color lead"><strong>{{$subTotal}}</strong></span>
                                    </td>
                                </tr>
                                </tbody>

                            </table>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <h4 class="upper">Payment Method</h4>

                        <table class="payment-method table table-bordered table-condensed table-responsive">
                            <tbody>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="online"><b class="dark">Credit/Debit Cards / Net Banking</b>
                                            <br>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="offline"><b class="dark">Cash on Delivery</b>
                                        </label>
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a class="button color button-3d rounded icon-left float-right" href="#"><span id="pay_button">Proceed to Pay</span></a>
                    </div>

                </div>


            </div>
        </div>
    </section>
    <!-- END: SHOP CHECKOUT -->

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

                            <form id="widget-contact-form-footer" action="include/contact-form-footer.php" role="form"
                                  method="post" class="form-transparent-fields">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" aria-required="true" name="widget-contact-form-name"
                                                   class="form-control required name" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" aria-required="true" name="widget-contact-form-email"
                                                   class="form-control required email" placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <textarea type="text" name="widget-contact-form-message" rows="5"
                                                      class="form-control required" placeholder="Message"></textarea>
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


</div>
<!-- END: WRAPPER -->
@endsection()
