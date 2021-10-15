<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('vendors/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/ti-icons/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/css/vendor.bundle.base.css') }}">

    <!-- Plugin css for this page -->
    {{-- <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css"> --}}

    <!-- Custom fonts for this template-->
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" />

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="app">
        <!-- Page Wrapper -->
        <div class="container-scroller">

            @include('partials.navbar')

            <!-- Content Wrapper -->
            <div class="container-fluid page-body-wrapper">
                @include('partials.theme-settings')
                @include('partials.right-sidebar')
                @include('partials.sidebar')

                <div class="main-panel">
                    <!-- Main Content -->
                    <div class="content-wrapper">
                        @yield('content')
                    </div>

                    @include('partials.footer')
                </div>

                <!-- End of Content Wrapper -->

            </div>
        </div>
        <!-- End of Page Wrapper -->
    </div>
    <!-- plugins:js -->
    <script src="{{ asset('vendors/js/vendor.bundle.base.js') }}"></script>

    <script src="{{ asset('vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('js/components/dataTables.select.min.js') }}"></script>

    <script src="{{ asset('js/components/off-canvas.js') }}"></script>
    <script src="{{ asset('js/components/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('js/components/template.js') }}"></script>
    <script src="{{ asset('js/components/settings.js') }}"></script>
    <script src="{{ asset('js/components/todolist.js') }}"></script>

    <script src="{{ asset('js/components/dashboard.js') }}"></script>
    <script src="{{ asset('js/components/Chart.roundedBarCharts.js') }}"></script>
    <!-- End custom js for this page-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    @yield('modals')

    @yield('scripts')

</body>

</html>
