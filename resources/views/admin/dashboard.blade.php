<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
    <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
    <title> KIT Solution </title>

    <!-- ========== Css Files ========== -->
    <link href="/administrator/css/root.css" rel="stylesheet">


</head>
<body>
<!-- Start Page Loading -->
<div class="loading"><img src="/administrator/img/loading.gif" alt="loading-img"></div>

<!-- End Page Loading -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
@include('admin.layout.menu')

<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START CONTENT -->
<div class="content">

    <!-- Start Page Header -->
    <div class="page-header">
        <h1 class="title"> Dashboard </h1>
        <ol class="breadcrumb">
            <li class="active">This is a quick overview of some features</li>
        </ol>
    </div>
    <!-- End Page Header -->


    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START CONTAINER -->
    <div class="container-widget">



        <!-- Start Third Row -->
        <div class="row">

            <!-- Start TwitterBox -->
            <div class="col-md-12 col-lg-6">
                <div class="widget socialbox" style="background:#02A8F3; height:205px;">

                    <p class="text large text-center font-title">
                        NUMBER OF PRODUCTS <br /><br />
                        <i class="fa fa-star-o"></i>&nbsp;{{$count}}
                    </p>
                </div>
            </div>
            <!-- End TwitterBox -->

            <!-- Start FacebookBox -->
            <div class="col-md-12 col-lg-6">
                <div class="widget socialbox" style="background:#51b7a3; height:205px;">

                    <p class="text large text-center font-title">
                        NUMBER OF ORDERS <br /><br />
                        <i class="fa fa-star-o"></i>&nbsp;{{\App\Models\Order::count()}}
                    </p>

                </div>
            </div>
            <!-- End FacebookBox -->



        </div>
        <!-- End Third Row -->
        <div class="row">

            <div class="col-md-12 col-lg-6">
                <div class="widget socialbox" style="background:#9B175E; height:205px;">

                    <p class="text large text-center font-title">
                        NUMBER OF USERS <br /><br />
                        <i class="fa fa-user"></i>&nbsp;{{\App\User::count()}}
                    </p>

                </div>
            </div>
            <!-- Start FacebookBox -->
            {{--<div class="col-md-12 col-lg-6">
                <div class="widget socialbox" style="background:#428bdd; height:205px;">

                    <p class="text large text-center font-title">
                        NUMBER OF SOMETHING<br /><br />
                        <i class="fa fa-star-o"></i>&nbsp;2.192
                    </p>

                </div>
            </div>--}}
            <!-- End FacebookBox -->

        </div>




        <!-- Start Fifth Row -->
        <div class="row">

            <!-- Start Teammates -->
            <div class="col-md-12 col-lg-3">

            </div>
            <!-- End Teammates -->
        </div>
    </div>
    <!-- END CONTAINER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- Start Footer -->
    <div class="row footer">
        <div class="col-md-6 text-left">
            Copyright © 2016 <a href="http://kitsolution.co.in/" target="_blank">KIT SOlution</a> All rights reserved.
        </div>
    </div>
    <!-- End Footer -->


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