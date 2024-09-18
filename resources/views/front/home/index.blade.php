@extends("front.layouts.xaito-dark")
@section("head")
    <title>صفحه‌اصلی | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات صفحه‌اصلی">
@endsection

@section("content")
    @include("front.home.space")
    @include("front.home.services")
    @include("front.home.about")
    @include("front.home.solutions")
    @include("front.home.brands")
    @include("front.home.testimonials")
    @include("front.home.pricing")
    @include("front.home.faq")
    @include("front.home.blog")
    @include("front.home.cta")
@endsection

@section("scripts")
@endsection
