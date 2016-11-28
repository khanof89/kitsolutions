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
        <h1 class="title">See Product Details</h1>
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
                        Products
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
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <td>Id</td>
                                <td>Name</td>
                                <td>Price</td>
                                <td>Description</td>
                                <td>Image</td>
                                <td>Quantity</td>
                                <td>Action</td>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i=1;?>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->location }}</td>
                                    <td>{{ $product->quantity }}</td>
                                    <td class="bold"> <a href="/admin/edit-product/{{$product->id}}">EDIT</a> ||  <a href="/admin/delete-product/{{$product->id}}">DELETE</a></td>
                                </tr>
                                @endforeach
                            {!! $products->render() !!}
                            </tbody>
                        </table>
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