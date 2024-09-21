
<!DOCTYPE html>
<html lang="en" dir="rtl" data-layout="two-column" data-two-column-color="brand">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("panel/assets/images/favicon.ico") }}">
    <link href="{{ asset("panel/assets/libs/flatpickr/flatpickr.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("panel/assets/libs/selectize/css/selectize.bootstrap3.css") }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("panel/assets/js/head.js") }}"></script>
    <link href="{{ asset("panel/assets/css/bootstrap-rtl.min.css") }}" rel="stylesheet" type="text/css" id="app-style" />
    <link href="{{ asset("panel/assets/css/app-rtl.min.css") }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset("panel/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css" />
    @yield("head")
    <style>
        @font-face {
            src: url("{{ asset("panel/assets/fonts/IranYekan.woff2") }}");
            font-family: "iran-yekan";
        }
        body,h1,h2,h3,h4,h5,h6{
            font-family: "iran-yekan",sans-serif;
        }
        .gallery-preview-item{
            width: 100%;
            height: auto;
            margin-bottom: 1em;
            border-radius: 7px;
        }
        .ck-editor__editable {
            min-height: 500px; /* or any desired height */
        }
        .sticky-top{
            position: sticky;
            top: 95px;
        }
        html[data-bs-theme=dark] .ck-editor__editable,html[data-bs-theme=dark] .ck.ck-toolbar,html[data-bs-theme=dark] .ck.ck-list{
            background: var(--ct-secondary-bg) !important;
        }
        html[data-bs-theme=dark] .ck.ck-toolbar svg,.ck.ck-reset_all,html[data-bs-theme=dark] .ck.ck-reset_all *{
            color: #9097a7;
        }
        html[data-bs-theme=dark] .nav-pills>li>a, .nav-tabs>li>a{
            color: #9097a7;
        }
        table,th,td{
            text-align: center!important;
        }
        .input-search,.input-search:active,.input-search:focus{
            border:none;
            outline: none;
            padding-bottom: 5px;
            border-bottom: 1px solid #dcd5d5;
        }
        html[data-bs-theme=dark] .dataTables_wrapper .dataTables_filter input{
            color: #9097a7;
        }
        html[data-bs-theme=dark] .input-search,html[data-bs-theme=dark] .input-search:active,html[data-bs-theme=dark] .input-search:focus{
            background: transparent;
        }
        html[data-bs-theme=dark] select option{
            background: var(--ct-topbar-bg);
        }
        html[data-bs-theme=dark] label,html[data-bs-theme=dark] select,html[data-bs-theme=dark] .dataTables_info,html[data-bs-theme=dark] .dataTables_paginate a{
            color: #9097a7;
        }

        table.dataTable thead th, table.dataTable thead td{
            border: none;
        }
    </style>
</head>

<body>

<div id="wrapper">
    @include("panel.partials.sidebar")
    <div class="content-page">
        @include("panel.partials.navbar")
        <div class="content">
            @yield("content")
        </div>

    </div>
{{--    @include("panel.partials.footer")--}}
</div>
@include("panel.partials.theme-setting")
<script src="{{ asset("panel/assets/js/vendor.min.js") }}"></script>
<script src="{{ asset("panel/assets/js/app.min.js") }}"></script>
@yield("script")
{{--<script src="{{ asset("panel/assets/libs/flatpickr/flatpickr.min.js") }}"></script>--}}
{{--<script src="{{ asset("panel/assets/libs/apexcharts/apexcharts.min.js") }}"></script>--}}
{{--<script src="{{ asset("panel/assets/libs/selectize/js/standalone/selectize.min.js") }}"></script>--}}
{{--<script src="{{ asset("panel/assets/js/pages/dashboard-1.init.js") }}"></script>--}}

</body>
</html>
