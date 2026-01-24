<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="keyword" content="" />
    <meta name="author" content="flexilecode" />
    <title>@yield('title')</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/favicon.png') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/vendors.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/vendors/css/daterangepicker.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/assets/css/theme.min.css') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/jquery-jvectormap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/select2-theme.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/css/jquery.time-to.min.css') }}">

</head>

<body>

    @include('dashboard.admin.layouts.components.sidebar')

    @include('dashboard.admin.layouts.components.header')

    @yield('content')

    <script src="{{ asset('admin/assets/vendors/js/vendors.min.js') }}"></script>

    <script src="{{ asset('admin/assets/vendors/js/daterangepicker.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/circle-progress.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendors/js/jquery.time-to.min.js') }}"></script>

    <script src="{{ asset('admin/assets/js/common-init.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/dashboard-init.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/analytics-init.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme-customizer-init.min.js') }}"></script>


</body>