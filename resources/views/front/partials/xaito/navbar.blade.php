<nav id="mobile-menu">
    <ul class="ul-0">
        <li>
            <a href="{{ route("home") }}">خانه</a>
        </li>
        <li>
            <a href="{{ route("home") }}">فروشگاه</a>
        </li>
        <li class="has-dropdown">
            <a href="#">محصولات</a>
            <ul class="submenu">
                <li><a href="#">نرم‌افزار مدیریت هوشمند اسناد</a></li>
                <li><a href="#">دستیار شخصی هوش مصنوعی</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">خدمات</a>
            <ul class="submenu">
                <li><a href="#">دیجیتالی کردن سازمان</a></li>
                <li><a href="#">راهکارهای مبتنی بر AI</a></li>
                <li><a href="#">تبدیل فرمت اسناد</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">راهکارها</a>
            <ul class="submenu">
                <li><a href="#">پردازش هوشمند اسناد</a></li>
                <li><a href="#">تبدیل تصویر به متن (OCR)</a></li>
                <li><a href="#">تبدیل فرمت اسناد</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">منابع</a>
            <ul class="submenu">
                <li><a href="{{ route("about") }}">درباره ما</a></li>
                <li><a href="{{ route("contact.index") }}">تماس با ما</a></li>
                <li><a href="#">وبلاگ</a></li>
                <li><a href="#">مستندات API</a></li>
                <li><a href="{{ route("faq") }}">سوالات متداول</a></li>
                <li><a href="#">تعرفه‌ها</a></li>
            </ul>
        </li>


    </ul>
</nav>
