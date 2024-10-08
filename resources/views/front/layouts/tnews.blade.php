<!doctype html>
<html class="no-js" data-theme="light" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="apple-touch-icon" href="{{ asset("theme/tnews/assets/img/favicons/apple-icon-114x114.png") }}">
    <link rel="icon" type="image/png" href="{{ asset("theme/tnews/assets/img/favicons/android-icon-192x192.png") }}">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="{{ asset("theme/tnews/assets/css/app.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/tnews/assets/css/fontawesome.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/tnews/assets/css/style.css") }}">
    @yield("head")
</head>
<body class="rtl">
<div class="preloader">
    <button class="th-btn preloaderCls">Cancel Preloader</button>
    <div class="preloader-inner"><span class="loader"></span></div>
</div>
@include("front.partials.tnews.popup-search")
@include("front.partials.tnews.mobile-sidebar")
@include("front.partials.tnews.header")
@yield("content")
@include("front.partials.tnews.footer")
@include("front.partials.tnews.scroll-top")

<script src="{{ asset("theme/tnews/assets/js/vendor/jquery-3.6.0.min.js") }}"></script>
<script src="{{ asset("theme/tnews/assets/js/app.min.js") }}"></script>
<script src="{{ asset("theme/tnews/assets/js/main.js") }}"></script>
@yield("script")
</body>
</html>
