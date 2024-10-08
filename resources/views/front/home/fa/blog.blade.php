<section class="xc-postbox__area pb-60">
    <div class="container">
        <div class="xc-section__title-wrapper text-center mb-55 wow xcfadeUp">
            <span class="xc-section__subtitle">Our Blog</span>
            <h3 class="xc-section__title wow"> جدیدترین <span>مطالب بلاگ</span><br>
            </h3>
        </div>
        <div class="xc-postbox__wrapper mb-30">
            <div class="row">
                @forelse($topPosts as $post)
                    <div class="col-lg-4 col-md-6">
                        <div class="xc-postbox__item xc-grid mb-30">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <a href="{{ route("front.post.single",["post" => $post->slug]) }}">
                                    <img src="{{ asset("post-thumbnails/md")."/".$post->thumbnail }}" alt="">
                                </a>
                                <div class="xc-postbox__cat">
                                    <a href="{{ route("front.category.index",["category" => $post->firstCategory["slug"]]) }}">{{ $post->firstCategory["title"] }}</a>
                                </div>
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                    <span>
                                        <a href="#"><i class="fa-light fa-user"></i>{{ $post->userName }}</a>
                                    </span>
                                    <span><a href="#"><i class="fa-light fa-calendar"></i>{{ $post->persianDate }}</a></span>

                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="{{ route("front.post.single",["post" => $post->slug]) }}">{{ $post->title }}</a>
                                </h3>
                                <div class="xc-postbox__read-more">
                                    <a href="{{ route("front.post.single",["post" => $post->slug]) }}" class="xc-more-btn">ادامه <i
                                            class="fa-light fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-12">
                        <h5 class="my-5 text-center">پستی برای نمایش وجود ندارد.</h5>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
