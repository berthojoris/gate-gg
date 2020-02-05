<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>GATE UI Admin Dashboard</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="{{ asset('template/images/favicon.ico') }}">
    <!--Chartist Chart CSS -->
    <link rel="stylesheet" href="{{ asset('template/plugins/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        @include('shared.menu_header')
        <!-- Top Bar End -->
        <!-- ========== Left Sidebar Start ========== -->
        @include('shared.menu_left')
        <!-- Left Sidebar End -->
        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        @include('shared.content')
        <!-- ============================================================== -->
        <!-- End Right content here -->
        <!-- ============================================================== -->
    </div>
    <!-- END wrapper -->
    <!-- jQuery  -->
    <script src="{{ asset('template/js/jquery.min.js') }}"></script>
    <script src="{{ asset('template/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('template/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('template/js/waves.min.js') }}"></script>
    <script src="{{ asset('template/js/app.js') }}"></script>
    <!--Chartist Chart-->
    <script src="{{ asset('template/plugins/chartist/js/chartist.min.js') }}"></script>
    <script src="{{ asset('template/plugins/chartist/js/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- peity JS -->
    <script src="{{ asset('template/plugins/peity-chart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('template/pages/dashboard.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('template/js/app.js') }}"></script>
</body>
</html>
