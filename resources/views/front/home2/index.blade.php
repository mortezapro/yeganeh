@extends("front.layouts.synck")
@section("head")
    <title>صفحه‌اصلی | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات صفحه اصلی" />
@endsection
@section("content")
    @include("front.home2.hero")
    @include("front.home2.client")
    @include("front.home2.how-we-do")
    @include("front.home2.service")
    @include("front.home2.case-studio")
    @include("front.home2.about")
    @include("front.home2.testimonial")
    @include("front.home2.project")
    @include("front.home2.blog")
    @include("front.home2.features")
    @include("front.home2.contact")
@endsection
@section("script")
@endsection
