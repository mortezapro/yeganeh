<div class="xc-sidebar__wrapper mb-3">
    <div class="xc-sidebar__widget">
        <h3 class="xc-sidebar__widget-title">مطالب سایت</h3>
        <div class="xc-sidebar__widget-content">
            <ul class="pl-0 mb-0">
                <li><a href="{{ route("front.blog.index",["type" => "article"] ) }}">بلاگ</a></li>
                <li><a href="{{ route("front.blog.index",["type" => "news" ]) }}">اخبار</a></li>
                <li><a href="{{ route("front.blog.index",["type" => "event" ]) }}">رویدادها</a></li>
                <li><a href="{{ route("front.blog.index",["type" => "video" ]) }}">فیلم‌ها</a></li>
                <li><a href="{{ route("front.blog.index",["type" => "solution" ]) }}">راهکارها</a></li>
                <li><a href="{{ route("front.blog.index",["type" => "download" ]) }}">دانلود نرم‌افزار</a></li>
            </ul>
        </div>
    </div>
</div>
<div class="xc-sidebar__wrapper">
    <div class="xc-sidebar__widget">
        <div class="xc-sidebar__widget-content">
            <div class="xc-sidebar__search">
                <form action="{{ isset($category) ? route("front.category.index",["category" => $category->slug]) : route("front.category.index") }}" method="get">
                    <div class="xc-sidebar__search-input">
                        <input type="text" name="search" placeholder="تایپ کنید...">
                        <button type="submit">
                            <i class="fa-light fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="xc-sidebar__widget">
        <h3 class="xc-sidebar__widget-title">دسته‌بندی‌های محبوب</h3>
        <div class="xc-sidebar__widget-content">
            <ul class="pl-0 mb-0">
                @foreach($topCategories as $item)
                    <li><a href="{{ route("front.category.index",["category" => $item->slug]) }}">{{ $item->title." (".$item->posts_count.")" }}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
