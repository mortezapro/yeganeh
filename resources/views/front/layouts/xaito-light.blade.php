<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <style>
        @font-face {
            src: url(" {{ asset("theme/xaito/assets/fonts/IranYekan.woff2") }} ");
            font-family: 'iran-yekan';
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("theme/xaito/assets/img/favicon/favicon.png") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/bootstrap/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/mean-menu/meanmenu.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/odometer/odometer.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/magnific-popup/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/animate/animate.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/swiper/swiper-bundle.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/owl-carousel/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/owl-carousel/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/nice-select/nice-select.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/font-awesome-pro/css/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/vendors/spacing/spacing.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/xaito/assets/css/main.css") }}">
    @yield("head")
</head>

<body class="{{ app()->getLocale() == "fa" ? "rtl" : "ltr" }}">
<!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
<div class="xc-page-wrapper rtl">
    @include("front.partials.xaito.header-light")
    <div id="xc-cursor">
        <div class="xc-cursor__circle"></div>
    </div>
    <div class="xc-body-overlay">
    </div>
    <div class="xc-search-popup open">
        <div class="xc-search-popup__overlay"></div>
        <div class="xc-search-popup__content">
            <form action="#">
                <input type="text" id="search" placeholder="Search Here..." />
                <button type="submit" aria-label="search submit" class="xc-search-popup-btn">
                    <span><i class="fa-light fa-magnifying-glass"></i></span>
                </button>
            </form>
        </div>
    </div>
    <div class="xc-back-to-top-wrapper xc-back-to-top-btn-show">
        <button id="xc_back-to-top" type="button" class="xc-back-to-top-btn">
            <svg width="12" height="7" viewBox="0 0 12 7" fill="none" xmlns="../www.w3.org/2000/svg.html">
                <path d="M11 6L6 1L1 6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                      stroke-linejoin="round"></path>
            </svg>
        </button>
    </div>

    <div class="xc-preloader">
        <div class="xc-preloader__image" data-background="{{ asset("theme/xaito/assets/img/preloader/preloader.png") }}"></div>
    </div>
    <div class="xc-mobile-nav__wrapper">
        <div class="xc-mobile-nav__overlay xc-mobile-nav__toggler"></div>
        <div class="xc-mobile-nav__content">
            <span class="xc-mobile-nav__close xc-mobile-nav__toggler"><i class="fa fa-times"></i></span>

            <div class="logo-box">
                <a href="index.html"><img src="{{ asset("theme/xaito/assets/img/logo/white-logo.png") }}" width="150" alt="" /></a>
            </div>
            <div class="xc-mobile-nav__menu"></div>
            <ul class="xc-mobile-nav__contact list-unstyled">
                <li>
                    <i class="fa fa-envelope"></i>
                    <a href="mailto:needhelp@packageName__.com">info@my.com</a>
                </li>
                <li>
                    <i class="fa fa-phone-alt"></i>
                    <a href="tel:666-888-0000">666 888 0000</a>
                </li>
            </ul>
            <div class="xc-mobile-nav__top">
                <div class="xc-mobile-nav__social">
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-facebook-square"></a>
                    <a href="#" class="fab fa-pinterest-p"></a>
                    <a href="#" class="fab fa-instagram"></a>
                </div>
            </div>
        </div>
    </div>

    <div id="smooth-wrapper">
        <div id="smooth-content">
            @yield("content")
            @include("front.partials.xaito.footer")
        </div>
    </div>
</div>


<script src="{{ asset("theme/xaito/assets/vendors/jquery/jquery-3.6.0.min.js") }}"></script>

<script src="{{ asset("theme/xaito/assets/vendors/bootstrap/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/mean-menu/meanmenu.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-appear/appear.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-validate/jquery.validate.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-migrate/jquery-migrate.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/odometer/odometer.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/animaiton-headline/animation-headline.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/swiper/swiper-bundle.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/nice-select/nice-select.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/swiper/swiper-bundle.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/gsap/gsap.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/gsap/ScrollTrigger.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/gsap/ScrollToPlugin.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/gsap/ScrollSmoother.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/owl-carousel/owl.carousel.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/magnific-popup/magnific-popup.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-wow/wow.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-isotope/isotope.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/tilt/tilt.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/jquery-imagesloaded/imagesloaded.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/vendors/ajaxchimp/jquery.ajaxchimp.min.js") }}"></script>
<script src="{{ asset("theme/xaito/assets/js/main.js") }}"></script>
@yield("scripts")
</body>
</html>
