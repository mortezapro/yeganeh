@extends("front.layouts.xaito-light")
@section("head")
    <title>@if(isset($category)) {{ $category->seo_title ? $category->seo_title:$category->title }} @else بلاگ @endif | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات بلاگ">
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
                        <h3 class="xc-breadcrumb__title">@if(isset($category)) {{ $category->title }} @else بلاگ @endif</h3>
                        <div class="xc-breadcrumb__list">
                            @if(isset($category))
                                <span><a href="{{ route("home") }}">خانه</a></span>
                                <span class="dvdr">/</span>
                                <span><a href="{{ route("front.blog.index") }}">بلاگ</a></span>
                                <span class="dvdr">/</span>
                                <span>{{ $category->title }}</span>
                            @else
                                <span><a href="{{ route("home") }}">خانه</a></span>
                                <span class="dvdr">/</span>
                                <span>بلاگ</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="xc-postbox__area pt-120 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-xxl-4 col-lg-4">
                    @include("front.post.sidebar")
                </div>
                <div class="col-xxl-8 col-lg-8">
                    <div class="xc-postbox__wrapper mb-50">
                        @forelse($posts as $post)
                        <article class="xc-postbox__item mb-50">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <a href="{{ route("front.post.single",["post" => $post->slug]) }}">
                                    <img src="{{ asset("post-thumbnails/lg")."/".$post->thumbnail }}" alt="">
                                </a>
                                <div class="xc-postbox__cat">
                                    @foreach($post->categories as $item)
                                        <a href="{{ route("front.blog.index",["category" => $item->slug]) }}">{{ $item->title }}</a>
                                    @endforeach
                                </div>
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                                <span>
                                                    <a href="#"><i class="fa-light fa-user"></i>{{ $post->user->name }}</a>
                                                </span>
                                    <span><a href="#"><i class="fa-light fa-calendar"></i>{{ $post->persianDate }}</a></span>
                                    {{--<span>
                                        <a href=""><i class="fa-light fa-comment"></i> 02 Commnets</a>
                                    </span>--}}
                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="{{ route("front.post.single",["post" => $post->slug]) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="xc-postbox__read-more">
                                    <a href="{{ route("front.post.single",["post" => $post->slug]) }}" class="xc-more-btn">ادامه<i
                                            class="fa-light fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                        </article>
                        @empty
                            <h6 class="text-center">نتیجه‌ای برای این پرس‌وجو یافت نشد!</h6>
                        @endforelse
                        <div class="pagination">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")
@endsection
