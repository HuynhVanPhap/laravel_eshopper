<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/jqvmap/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/dist/css/adminlte.min.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/summernote/summernote-bs4.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('admin/theme/dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
        </div>

        {{-- Main header Component --}}
        @include('admin.components.default.main-header')
        {{-- Main header Component --}}

        {{-- Sidebar Component --}}
        @include('admin.components.default.sidebar')
        {{-- Sidebar Component --}}


        <div class="content-wrapper">

            @yield('content')

        </div>

        @include('admin.components.default.footer')

    </div>


    <script src="{{ asset('admin/theme/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)

    </script>

    <script src="{{ asset('admin/theme/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/sparklines/sparkline.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/daterangepicker/daterangepicker.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('admin/theme/dist/js/adminlte.js?v=3.2.0') }}"></script>

    <script src="{{ asset('admin/theme/dist/js/demo.js') }}"></script>

    <script src="{{ asset('admin/theme/dist/js/pages/dashboard.js') }}"></script>
</body>

</html>
