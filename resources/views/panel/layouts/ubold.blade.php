<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{ asset("panel/assets/images/favicon.ico") }}">
    <link href="{{ asset("panel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("panel/assets/css/config/saas/app-rtl.min.css") }}" rel="stylesheet" type="text/css" id="app-style"/>
    <link href="{{ asset("panel/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    @yield("head")
</head>

<body class="loading" data-layout-mode="two-column" data-layout-color="light" data-layout-width="fluid" data-topbar-color="light" data-leftbar-color="light" data-sidebar-user='false'>

<div id="wrapper">

    @include("panel.partials.header")
    @include("panel.partials.sidebar")

    <div class="content-page">
        @yield("content")

        @include("panel.partials.footer")
    </div>
</div>

@include("panel.partials.sidebar-setting")

<script src="{{ asset("panel/assets/js/vendor.min.js") }}"></script>
<script src="{{ asset("panel/assets/libs/jquery-sparkline/jquery.sparkline.min.js") }}"></script>
<script src="{{ asset("panel/assets/libs/admin-resources/jquery.vectormap/jquery-jvectormap-1.2.2.min.js") }}"></script>
<script src="{{ asset("panel/assets/libs/admin-resources/jquery.vectormap/maps/jquery-jvectormap-world-mill-en.js") }}"></script>
<script src="{{ asset("panel/assets/js/pages/dashboard-2.init.js") }}"></script>
<script src="{{ asset("panel/assets/js/app.min.js") }}"></script>

<script>
    $(document).on("keyup", ".check-english-number", (function (event) {
        let Input = this.value;
        $(this).val(toEnglishNumber(Input));
    }));
    function toEnglishNumber(strNum) {
        let pn = ["۰", "۱", "۲", "۳", "۴", "۵", "۶", "۷", "۸", "۹"];
        let en = ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9"];
        let an = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
        let cache = strNum;
        for (let i = 0; i < 10; i++) {
            let regex_fa = new RegExp(pn[i], 'g');
            let regex_ar = new RegExp(an[i], 'g');
            cache = cache.replace(regex_fa, en[i]);
            cache = cache.replace(regex_ar, en[i]);
        }
        return cache;
    }


    let x, y, z;

    function separate(Number) {
        Number += '';
        Number = Number.replace(',', '');
        x = Number.split('.');
        y = x[0];
        z = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(y))
            y = y.replace(rgx, '$1' + ',' + '$2');
        return y + z;
    }


    function priceFormat(price) {
        return parseInt(price.replace(/\D/g, ''), 10);
    }

    let slug;
    $(document).ready(function (){
        $("#title").keyup(function (){
            slug = $("#title").val();
            slug = slug.replace(/\s+/g, '-').toLowerCase();
            $("#slug").val(slug);
        })
    })
</script>

@yield("script")
</body>

</html>
