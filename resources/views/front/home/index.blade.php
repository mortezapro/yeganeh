@extends("front.layouts.xaito-dark")
@section("head")
    <title>صفحه‌اصلی | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات صفحه‌اصلی">
@endsection

@section("content")
    @if(app()->getLocale() == "fa")
        @include("front.home.fa.space")
        @include("front.home.fa.services")
        @include("front.home.fa.solutions")
        @include("front.home.fa.brands")
        @include("front.home.fa.testimonials")
        @include("front.home.fa.pricing")
        @include("front.home.fa.faq")
        @include("front.home.fa.blog")
        @include("front.home.fa.cta")
    @else
        @include("front.home.en.space")
        @include("front.home.en.services")
        @include("front.home.en.solutions")
        @include("front.home.en.brands")
        @include("front.home.en.testimonials")
        @include("front.home.en.pricing")
        @include("front.home.en.faq")
        @include("front.home.en.blog")
        @include("front.home.en.cta")
    @endif

@endsection

@section("scripts")
@endsection
