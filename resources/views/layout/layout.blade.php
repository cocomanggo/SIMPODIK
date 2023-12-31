<html lang="en" class="semi-dark">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ url('assets/images/favicon-32x32.png') }}" type="image/png">
    <!--plugins-->
    <link href="{{ url('assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet">
    <!-- loader-->
    <link href="{{ url('assets/css/pace.min.css') }}" rel="stylesheet">
    <script src="{{ url('assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ url('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ url('assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ url('assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/dark-theme.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/semi-dark.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/header-colors.css') }}">
    @stack('mycss')
    <title>Amdash - Bootstrap 5 Admin Dashboard Template</title>
</head>

<body class="pace-done">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99"
            style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
        <div class="pace-activity"></div>
    </div>
        @include('layout.sidebar')

        @include('layout.topnav')

        @yield('content')

        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button-->
        <a href="javaScript:;" class="back-to-top" style="display: inline;">
            <i class="bx bxs-up-arrow-alt"></i>
        </a>
        <!--End Back To Top Button-->
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2021. All right reserved.</p>
        </footer>
    </div>
    <!--end wrapper-->
    <!--start switcher-->

    <!--end switcher-->
    <!-- Bootstrap JS -->
    <script src="{{ url('assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ url('assets/js/jquery.min.js') }}"></script>
    <script src="{{ url('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ url('assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ url('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ url('assets/js/app.js') }}"></script>
    @stack('myjs')

</body>

</html>
