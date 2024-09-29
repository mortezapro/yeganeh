@extends("front.layouts.xaito-light")
@section("head")
    <title>تماس با ما | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات تماس با ما">
@endsection

@section("content")
    <div class="xc-breadcrumb__area">
        <div class="xc-breadcrumb__bg w-img">
            <img src="{{ asset("theme/xaito/assets/img/backgroud/breadcrumb-bg.png") }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="xc-breadcrumb__content text-center p-relative z-index-1">
                        <h3 class="xc-breadcrumb__title">تماس با ما</h3>
                        <div class="xc-breadcrumb__list">
                            <span><a href="{{ route("home") }}">خانه</a></span>

                            <span class="dvdr">/</span>
                            <span>تماس با ما</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("front.contact.details")
    @include("front.contact.form")
    @include("front.contact.map")
    @include("front.home.fa.cta")
@endsection

@section("scripts")
@endsection
