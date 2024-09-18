<!DOCTYPE html>
<html lang="en">
@yield("head")
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/iconoir-icons/iconoir@main/css/iconoir.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="{{ asset("theme/synck/assets/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/synck/assets/css/swiper-bundle.min.css") }}"/>
    <link rel="stylesheet" href="{{ asset("theme/synck/assets/css/style.css") }}">
    <link rel="stylesheet" href="{{ asset("theme/synck/assets/css/responsive.css") }}">
</head>
<body>
<main class="main-page homepage rtl">
    @include("front.partials.synck.header")
    @yield("content")
    @include("front.partials.synck.footer")
</main>
<script src="{{ asset("theme/synck/assets/js/jquery-3.7.0.min.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/gsap.min.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/Draggable.min.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/swiper-bundle.min.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/client-marquee.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/theme-custom.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/form1.js") }}"></script>
<script src="{{ asset("theme/synck/assets/js/subscribe-form.js") }}"></script>
@yield("script")
</body>
</html>
