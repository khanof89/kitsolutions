<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title>themelock.com - Kode - Premium Bootstrap Admin Template</title>

    <!-- ========== Css Files ========== -->
    <link href="/administrator/css/root.css" rel="stylesheet">


</head>
<body>
<!-- Start Page Loading -->
<div class="loading"><img src="#" alt="loading-img"></div>
<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
@include('admin.layout.menu')

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title">Edit Product Details</h1>
    </div>
    <!-- End Page Header -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-padding">


        <!-- Start Row -->
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">

                    <div class="panel-title">
                        Textboxes
                        <ul class="panel-tools">
                            <li><a class="icon minimise-tool"><i class="fa fa-minus"></i></a></li>
                            <li><a class="icon expand-tool"><i class="fa fa-expand"></i></a></li>
                        </ul>
                    </div>

                    <div class="panel-body">
                        @if(Session::has('flash_message'))
                            <div class="alert alert-success">
                                {{Session::get('flash_message')}}
                            </div>
                        @endif
                        {!! Form::open( ['class' => 'form-horizontal']) !!}

                        <div class="form-group">
                            <label for="input002" class="col-sm-2 control-label form-label">Product Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-radius" id="input002" name="name" value="@if($products){{$products->name}}@endif" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="input001" class="col-sm-2 control-label form-label">Price</label>
                            <div class="col-sm-10">
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-rupee"></i></div>
                                    <input type="text" class="form-control form-control-radius" id="exampleInputAmount" name="price" value="@if($products){{$products->price}}@endif" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control form-control-radius" rows="3" id="textarea1" name="description" required> @if($products){{$products->description}}@endif </textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputFile" class="col-sm-2 control-label form-label">
                                Image
                            </label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control form-control-radius" name="location" id="exampleInputFile" value="@if($products){{$products->location}}@endif" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="col-sm-2 control-label" class="col-sm-2 control-label form-label">
                                Quantity
                            </label>
                            <div class="col-sm-10">
                                <input type="number" class="form-control form-control-radius" name="quantity" id="formGroupExampleInput2" value="@if($products){{$products->quantity}}@endif" required/>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="col-sm-2 control-label" class="col-sm-2 control-label form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="selectpicker form-control" name="category[]" multiple>
                                    <?php $i=0;?>
                                    @foreach($categories as $category)
                                        @if($products->categories[$i]->category_id == $category['id'])
                                            <option value="{{$category['id']}}" selected>{{$category->name}}</option>
                                        @endif
                                        <option value="{{$category['id']}}">{{$category['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="col-sm-2 control-label" class="col-sm-2 control-label form-label">Color</label>
                            <div class="col-sm-10">
                                <select class="selectpicker form-control" name="color[]" multiple>
                                    @foreach($products->colors as $color)
                                    <option value="Black" {{($color->color == 'Black') ? 'selected' : ''}}>Black</option>
                                    <option value="White" {{($color->color == 'White') ? 'selected' : ''}}>White</option>
                                    <option value="Blue" {{($color->color == 'Blue') ? 'selected' : '' }}>Blue</option>
                                    <option value="Grey" {{($color->color == 'Grey') ? 'selected' : '' }}>Grey</option>
                                    <option value="Green" {{($color->color == 'Green') ? 'selected' : '' }}>Green</option>
                                    <option value="Red" {{($color->color == 'Red') ? 'selected' : '' }}>Red</option>
                                    <option value="Pink" {{($color->color == 'Pink') ? 'selected' : '' }}>Pink</option>
                                    <option value="Yellow" {{($color->color == 'Yellow') ? 'selected' : '' }}>Yellow</option>
                                    <option value="Brown" {{($color->color == 'Brown') ? 'selected' : '' }}>Brown</option>
                                    <option value="Metallic" {{($color->color == 'Metallic') ? 'selected' : '' }}>Metallic</option>
                                     @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="col-sm-2 control-label" class="col-sm-2 control-label form-label">Size</label>
                            <div class="col-sm-10">
                                <select class="selectpicker form-control" name="size[]" multiple>
                                    @foreach($products->sizes as $size)

                                    <option value="XXS" {{($size->size == 'XXS') ? 'selected' : ''}}>XXS</option>
                                    <option value="XS" {{($size->size == 'XS') ? 'selected' : ''}}>XS</option>
                                    <option value="S" {{($size->size == 'S') ? 'selected' : ''}}>S</option>
                                    <option value="M" {{($size->size == 'M') ? 'selected' : ''}}>M</option>
                                    <option value="L" {{($size->size == 'L') ? 'selected' : ''}}>L</option>
                                    <option value="XL" {{($size->size == 'XL') ? 'selected' : ''}}>XL</option>
                                    <option value="XXL" {{($size->size == 'XXL') ? 'selected' : ''}}>XXL</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label">Tag</label>
                            <div class="col-sm-10">

                                    <textarea class="form-control form-control-radius" rows="3" id="textarea2" name="tag">@foreach($tags as $tag)@if($tag){{$tag->name}}@endif @endforeach</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label form-label"></label>
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-default">Submit</button>
                            </div>
                        </div>

                        {{--<div class="form-group">
                            <label for="exampleInputAmount2" class="col-sm-2 control-label form-label">Another With Icons</label>
                            <div class="col-sm-10">
                                <label class="sr-only" for="exampleInputAmount2">Login</label>
                                <div class="input-group">
                                    <div class="input-group-addon"><i class="fa fa-user"></i></div>
                                    <input type="text" class="form-control" id="exampleInputAmount2" placeholder="Username">
                                </div>
                            </div>
                        </div>--}}
                        {!! Form::close() !!}

                    </div>

                </div>
            </div>

        </div>

        <!-- End Row -->

        <!-- Start Footer -->
        <div class="row footer">
            <div class="col-md-6 text-left">
                Copyright © 2016 <a href="http://kitsolution.co.in/" target="_blank">KIT Solution</a> All rights reserved.
            </div>
        </div>
        <!-- End Footer -->

    </div>
</div>
<!-- End Content -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

<!-- ================================================
jQuery Library
================================================ -->
<script type="text/javascript" src="/administrator/js/jquery.min.js"></script>

<!-- ================================================
Bootstrap Core JavaScript File
================================================ -->
<script src="/administrator/js/bootstrap/bootstrap.min.js"></script>

<!-- ================================================
Plugin.js - Some Specific JS codes for Plugin Settings
================================================ -->
<script type="text/javascript" src="/administrator/js/plugins.js"></script>

<!-- ================================================
Bootstrap Select
================================================ -->
<script type="text/javascript" src="/administrator/js/bootstrap-select/bootstrap-select.js"></script>

<!-- ================================================
Bootstrap Toggle
================================================ -->
<script type="text/javascript" src="/administrator/js/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- ================================================
Bootstrap WYSIHTML5
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/administrator/js/bootstrap-wysihtml5/wysihtml5-0.3.0.min.js"></script>
<!-- bootstrap file -->
<script type="text/javascript" src="/administrator/js/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>

<!-- ================================================
Summernote
================================================ -->
<script type="text/javascript" src="/administrator/js/summernote/summernote.min.js"></script>

<!-- ================================================
Flot Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/administrator/js/flot-chart/flot-chart.js"></script>
<!-- time.js -->
<script type="text/javascript" src="/administrator/js/flot-chart/flot-chart-time.js"></script>
<!-- stack.js -->
<script type="text/javascript" src="/administrator/js/flot-chart/flot-chart-stack.js"></script>
<!-- pie.js -->
<script type="text/javascript" src="/administrator/js/flot-chart/flot-chart-pie.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/administrator/js/flot-chart/flot-chart-plugin.js"></script>

<!-- ================================================
Chartist
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/administrator/js/chartist/chartist.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/administrator/js/chartist/chartist-plugin.js"></script>

<!-- ================================================
Easy Pie Chart
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/administrator/js/easypiechart/easypiechart.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/administrator/js/easypiechart/easypiechart-plugin.js"></script>

<!-- ================================================
Sparkline
================================================ -->
<!-- main file -->
<script type="text/javascript" src="/administrator/js/sparkline/sparkline.js"></script>
<!-- demo codes -->
<script type="text/javascript" src="/administrator/js/sparkline/sparkline-plugin.js"></script>

<!-- ================================================
Rickshaw
================================================ -->
<!-- d3 -->
<script src="/administrator/js/rickshaw/d3.v3.js"></script>
<!-- main file -->
<script src="/administrator/js/rickshaw/rickshaw.js"></script>
<!-- demo codes -->
<script src="/administrator/js/rickshaw/rickshaw-plugin.js"></script>

<!-- ================================================
Data Tables
================================================ -->
<script src="/administrator/js/datatables/datatables.min.js"></script>

<!-- ================================================
Sweet Alert
================================================ -->
<script src="/administrator/js/sweet-alert/sweet-alert.min.js"></script>

<!-- ================================================
Kode Alert
================================================ -->
<script src="/administrator/js/kode-alert/main.js"></script>

<!-- ================================================
Gmaps
================================================ -->
<!-- google maps api -->
<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
<!-- main file -->
<script src="/administrator/js/gmaps/gmaps.js"></script>
<!-- demo codes -->
<script src="/administrator/js/gmaps/gmaps-plugin.js"></script>

<!-- ================================================
jQuery UI
================================================ -->
<script type="text/javascript" src="/administrator/js/jquery-ui/jquery-ui.min.js"></script>

<!-- ================================================
Moment.js
================================================ -->
<script type="text/javascript" src="/administrator/js/moment/moment.min.js"></script>

<!-- ================================================
Full Calendar
================================================ -->
<script type="text/javascript" src="/administrator/js/full-calendar/fullcalendar.js"></script>

<!-- ================================================
Bootstrap Date Range Picker
================================================ -->
<script type="text/javascript" src="/administrator/js/date-range-picker/daterangepicker.js"></script>

<!-- ================================================
Below codes are only for index widgets
================================================ -->

</body>
</html>