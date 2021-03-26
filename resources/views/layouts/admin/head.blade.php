<!doctype html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        {{-- <link href="assets/libs/metrojs/release/MetroJs.Full/MetroJs.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="{{asset('css/MetroJs.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        {{-- <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" /> --}}
        <link href="{{asset('css/bootstrap.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- Icons Css -->
        {{-- <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" /> --}}
        <link href="{{asset('css/icons.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <!-- App Css-->
        {{-- <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" /> --}}
        <link href="{{asset('css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        @yield('page-specific-styles')

    </head>
