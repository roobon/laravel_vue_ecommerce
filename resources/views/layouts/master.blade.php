<!doctype html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content>
    <meta name="description" content>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Premat - Product Landing Page</title>
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="/front_assets/images/favicon.png">
    
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!--bootstrap css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/bootstrap.min.css">
    <!--owl carousel css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/owl.carousel.min.css">
    <!--magnific popup css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/magnific-popup.css">
    <!--icomoon css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/icomoon.css">
    <!--icofont css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/icofont.min.css">
    <!--animate css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/animate.css">
    <!--main css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/style.css">
    <!--responsive css-->
    <link rel="stylesheet" type="text/css" href="/front_assets/css/responsive.css">

</head>

<body>
    <div id="app">
    <!--Start Preloader-->
    <div class="preloader">
        <div class="d-table">
            <div class="d-table-cell align-middle">
                <div class="spinner">
                    <div class="double-bounce1"></div>
                    <div class="double-bounce2"></div>
                </div>
            </div>
        </div>
    </div>
    <!--End Preloader-->
    <!--start header-->
    @include('layouts.front.header')
    <!--end header-->
    @yield('main')
    <!--end contact area-->
    <!--start footer-->
    @include('layouts.front.footer')
    <!--end footer-->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!--jQuery js-->
    <script src="/front_assets/js/jquery-3.3.1.min.js"></script>
    <!--proper js-->
    <script src="/front_assets/js/popper.min.js"></script>
    <!--bootstrap js-->
    <script src="/front_assets/js/bootstrap.min.js"></script>
    <!--magnic popup js-->
    <script src="/front_assets/js/magnific-popup.min.js"></script>
    <!--owl carousel js-->
    <script src="/front_assets/js/owl.carousel.min.js"></script>
    <!--scrollIt js-->
    <script src="/front_assets/js/scrollIt.min.js"></script>
    <!--validator js-->
    <script src="/front_assets/js/validator.min.js"></script>
    <!--contact js-->
    <script src="/front_assets/js/contact.js"></script>
    <!--main js-->
    <script src="/front_assets/js/custom.js"></script>
</div>
</body>

</html>
