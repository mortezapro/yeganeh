@extends("front.layouts.xaito-light")
@section("head")
    <title> {{ $post->seo_title ? $post->seo_title : $post->title }}</title>
    <meta name="description" content="{{ $post->seo_description ? $post->seo_description : $post->description }}">
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
                        <h3 class="xc-breadcrumb__title">{{ $post->title }}</h3>
                        <div class="xc-breadcrumb__list">
                            <span><a href="{{ route("home") }}">خانه</a></span>
                            <span class="dvdr">/</span>
                            <span><a href="{{ route("front.blog.index") }}">بلاگ</a></span>
                            <span class="dvdr">/</span>
                            <span><a href="{{ route("front.blog.index",["category" => $post->categories[0]?->slug]) }}">{{ $post->categories[0]?->title }}</a></span>
                            <span class="dvdr">/</span>
                            <span>{{ $post->title }}</span>
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
                    <div class="xc-sidebar__wrapper mb-3">
                        <div class="xc-sidebar__widget">
                            <h3 class="xc-sidebar__widget-title">پست‌های مرتبط</h3>
                            <div class="xc-sidebar__widget-content">
                                <div class="xc-sidebar__post">
                                    @foreach($relatedPosts as $item)
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__post-thumb">
                                                <a href="{{ route("front.post.single",["post" => $item->slug]) }}"><img src="{{ asset("post-thumbnails/md")."/".$item->thumbnail }}" alt=""></a>
                                            </div>
                                            <div class="rc__post-content">
                                                <h3 class="rc__post-title">
                                                    <a href="{{ route("front.post.single",["post" => $item->slug]) }}">{{ $item->title }}</a>
                                                </h3>
                                                <div class="rc__meta">
                                                    <span><i class="fa-light fa-clock"></i> {{ $item->persianDate }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-lg-8">
                    <div class="xc-postbox__wrapper mb-50">
                        <article class="xc-postbox__item mb-50">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <img src="{{ asset("post-thumbnails/lg")."/".$post->thumbnail }}" alt="">
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                    <span>
                                        <a href="#"><i class="fa-light fa-user"></i>{{ $post->user->name }}</a>
                                    </span>
                                    <span>
                                        <a href="#"><i class="fa-light fa-calendar"></i>{{ $post->persianDate }}</a>
                                    </span>
                                    {{--<span>
                                        <a href=""><i class="fa-light fa-comment"></i> 02 Commnets</a>
                                    </span>--}}
                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="#">{{ $post->title }}</a>
                                </h3>
                                <div class="xc-postbox__text">
                                    {!! $post->content !!}
                                </div>
                                <div class="xc-postbox-tag__wrapper">
                                    <div class="xc-postbox__cats catscloud">
                                        <span>دسته‌بندی‌ها:</span>
                                        @foreach($post->categories as $item)
                                            <a href="{{ route('front.blog.index',["category:slug"]) }}">{{ $item->title }}</a>
                                        @endforeach
                                    </div>
                                </div>
                                {{--<div class="xc-postbox__comment mb-65">
                                    <h3 class="xc-postbox__comment-title">3 Comments</h3>
                                    <ul class="pl-0 mb-0">
                                        <li>
                                            <div class="xc-postbox__comment-box">
                                                <div class="xc-postbox__comment-info d-flex">
                                                    <div class="xc-postbox__comment-avater mr-20">
                                                        <img src="assets/img/blog/comment-1.jpg" alt="">
                                                    </div>
                                                    <div class="xc-postbox__comment-name">
                                                        <h5>Eleanor Fant</h5>
                                                        <span class="post-meta"> July 14, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="xc-postbox__comment-text ml-65">
                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh
                                                        David
                                                        blatant
                                                        have
                                                        it, standard A bit of how's your father my lady absolutely.
                                                    </p>
                                                    <div class="xc-postbox__comment-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="children">
                                            <div class="xc-postbox__comment-box">
                                                <div class="xc-postbox__comment-info d-flex">
                                                    <div class="xc-postbox__comment-avater mr-20">
                                                        <img src="assets/img/blog/comment-2.jpg" alt="">
                                                    </div>
                                                    <div class="xc-postbox__comment-name">
                                                        <h5>Eleanor Fant</h5>
                                                        <span class="post-meta"> July 14, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="xc-postbox__comment-text ml-65">
                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh
                                                        David
                                                        blatant
                                                        have
                                                        it, standard A bit of how's your father my lady absolutely.
                                                    </p>
                                                    <div class="xc-postbox__comment-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="xc-postbox__comment-box">
                                                <div class="xc-postbox__comment-info d-flex">
                                                    <div class="xc-postbox__comment-avater mr-20">
                                                        <img src="assets/img/blog/comment-3.jpg" alt="">
                                                    </div>
                                                    <div class="xc-postbox__comment-name">
                                                        <h5>Eleanor Fant</h5>
                                                        <span class="post-meta"> July 14, 2023</span>
                                                    </div>
                                                </div>
                                                <div class="xc-postbox__comment-text ml-65">
                                                    <p>So I said lurgy dropped a clanger Jeffrey bugger cuppa gosh
                                                        David
                                                        blatant
                                                        have
                                                        it, standard A bit of how's your father my lady absolutely.
                                                    </p>
                                                    <div class="xc-postbox__comment-reply">
                                                        <a href="#">Reply</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>--}}
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("scripts")
@endsection
