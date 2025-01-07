<!DOCTYPE html>
<!-- resources/views/layouts/app.blade.php -->
<html class="no-js" lang="">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Movflx - Online Movies & TV Shows Template</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/gh/smarticons/icons/flaticon.css" rel="stylesheet" />

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{asset('/')}}frond/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/animate.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/magnific-popup.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/fontawesome-all.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/flaticon.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/odometer.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/aos.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/slick.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/default.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/style.css" />
    <link rel="stylesheet" href="{{asset('/')}}frond/css/responsive.css" />
</head>

<body>
    <!-- preloader -->
    <div id="preloader">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <img src="{{asset('/')}}frond/img/preloader.svg" alt="" />
            </div>
        </div>
    </div>
    <!-- preloader-end -->

    <!-- Scroll-top -->
    <button class="scroll-top scroll-to-target" data-target="html">
        <i class="fas fa-angle-up"></i>
    </button>
    <!-- Scroll-top-end-->

    <!-- header-area -->
    @include('frond_layout.header')     
    <!-- header-area-end -->

    <!-- main-area -->
    @yield('content')
    <!-- main-area-end -->

    <!-- footer-area -->
    @include('frond_layout.footer')  
    <!-- footer-area-end -->

    <!-- JS here -->
    <script src="{{asset('/')}}frond/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="{{asset('/')}}frond/js/popper.min.js"></script>
    <script src="{{asset('/')}}frond/js/bootstrap.min.js"></script>
    <script src="{{asset('/')}}frond/js/isotope.pkgd.min.js"></script>
    <script src="{{asset('/')}}frond/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{asset('/')}}frond/js/jquery.magnific-popup.min.js"></script>
    <script src="{{asset('/')}}frond/js/owl.carousel.min.js"></script>
    <script src="{{asset('/')}}frond/js/jquery.odometer.min.js"></script>
    <script src="{{asset('/')}}frond/js/jquery.appear.js"></script>
    <script src="{{asset('/')}}frond/js/slick.min.js"></script>
    <script src="{{asset('/')}}frond/js/ajax-form.js"></script>
    <script src="{{asset('/')}}frond/js/wow.min.js"></script>
    <script src="{{asset('/')}}frond/js/aos.js"></script>
    <script src="{{asset('/')}}frond/js/plugins.js"></script>
    <script src="{{asset('/')}}frond/js/main.js"></script>
</body>

</html>