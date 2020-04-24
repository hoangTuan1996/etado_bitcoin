<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="Volgh –  Bootstrap 4 Responsive Application Admin panel Theme Ui Kit & Premium Dashboard Design Modern Flat HTML Template">
    <meta name="author" content="Spruko Technologies Private Limited">
    <meta name="keywords"
          content="analytics dashboard, bootstrap 4 web app admin template, bootstrap admin panel, bootstrap admin template, bootstrap dashboard, bootstrap panel, Application dashboard design, dashboard design template, dashboard jquery clean html, dashboard template theme, dashboard responsive ui, html admin backend template ui kit, html flat dashboard template, it admin dashboard ui, premium modern html template">
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('assets/images/brand/favicon.ico')}}"/>
    <!-- TITLE -->
    <title>@yield('title')</title>
    <!-- BOOTSTRAP CSS -->
    <link href="{{ URL::asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <!-- STYLE CSS -->
    <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css-dark/dark-style.css')}}" rel="stylesheet"/>
    <link href="{{ URL::asset('assets/css/skin-modes.css')}}" rel="stylesheet"/>
    <!-- SIDE-MENU CSS -->
    <link href="{{ URL::asset('assets/plugins/sidemenu/sidemenu.css')}}" rel="stylesheet">
    <!--C3.JS CHARTS PLUGIN -->
    <link href="{{ URL::asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet"/>
    @yield('css')
 <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{ URL::asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet"/>
    <!--- FONT-ICONS CSS -->
    <link href="{{ URL::asset('assets/css/icons.css')}}" rel="stylesheet"/>

    <!-- SIDEBAR CSS -->
    <link href="{{ URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">

    <!-- COLOR SKIN CSS -->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ URL::asset('assets/colors/color1.css')}}"/>
</head>

<body class="login-img">
@yield('content')
@include('admin.partials.footer-scripts')
</body>
</html>
