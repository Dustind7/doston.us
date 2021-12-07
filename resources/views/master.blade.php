<!DOCTYPE html>
<!--[if lt IE 7]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta name="description" content="Barna" />
    <meta name="author" content="ib-themes" />

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1"
    />

    <title>@yield('title')</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Nunito+Sans:ital,wght@0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet"
    />
    <!-- /Google Fonts -->

    <link rel="icon" href="./img/favicon.ico" />
    <!-- /Favicon -->

    <!-- Styles -->
    <link type="text/css" rel="stylesheet" href="css/base.css" />
    <link type="text/css" rel="stylesheet" href="css/hamburger.css" />
    <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" />
    <link type="text/css" rel="stylesheet" href="css/owl-carousel.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/modernizr.custom.js"></script>
    <![endif]-->
    <!-- /Styles -->
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="loader_line"></div>
</div>
<!-- /Preloader -->

<!-- MODALBOX -->
<div class="barna_modalbox">
    <div class="box_inner">
        <div class="close">
            <a href="#"><img class="svg" src="svg/cancel.svg" alt="" /></a>
        </div>
        <div class="modal_content">
            <h3 class="fixed_title"></h3>

            <div class="modal_in">
                <!-- Content comes from JS -->
            </div>

            <div class="barna_prevnext" data-index="" data-from="">
                <div class="next"><a href="#">Next</a></div>
                <div class="prev"><a href="#">Prev</a></div>
            </div>
        </div>
    </div>
</div>
<!-- /MODALBOX -->

<!-- Wrapper -->
    @yield('content')
<!-- /Wrapper -->

<!-- Scripts -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/onepage.js"></script>
<script type="text/javascript" src="js/countto.js"></script>
<script type="text/javascript" src="js/isotope.js"></script>
<script type="text/javascript" src="js/magnific-popup.js"></script>
<script type="text/javascript" src="js/waypoints.js"></script>
<script type="text/javascript" src="js/owl-carousel.js"></script>
<!--[if lt IE 10]>
<script type="text/javascript" src="js/ie8.js"></script>
<![endif]-->
<script type="text/javascript" src="js/init.js"></script>
<!-- /Scripts -->
</body>
</html>
