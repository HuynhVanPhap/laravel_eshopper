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

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/jqvmap/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/bs-stepper/css/bs-stepper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/dropzone/min/dropzone.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/dist/css/adminlte.min.css?v=3.2.0') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/summernote/summernote-bs4.min.css') }}">

    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('admin/theme/plugins/toastr/toastr.min.css') }}">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img
                class="animation__shake"
                src="{{ asset('admin/theme/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTELogo"
                height="60"
                width="60"
            >
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

    <script src="{{ asset('admin/theme/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/chart.js/Chart.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/sparklines/sparkline.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/inputmask/jquery.inputmask.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/jquery-knob/jquery.knob.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/bs-stepper/js/bs-stepper.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/dropzone/min/dropzone.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('admin/theme/plugins/toastr/toastr.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/theme/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/summernote/summernote-bs4.min.js') }}"></script>

    <script src="{{ asset('admin/theme/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>

    <script src="{{ asset('admin/theme/dist/js/adminlte.js?v=3.2.0') }}"></script>

    {{-- <script src="{{ asset('admin/theme/dist/js/demo.js') }}"></script> --}}

    <script src="{{ asset('admin/theme/dist/js/pages/dashboard.js') }}"></script>


    @include('admin.scripts.common')

    @include('admin.components.common.toast.success')
    @include('admin.components.common.toast.error')

</body>

</html>
