<nav id="mobile-menu">
    <ul class="ul-0">
        <li><a href="{{ route("home") }}">فروشگاه</a></li>
        <li class="has-dropdown">
            <a href="#">خدمات</a>
            <ul class="submenu">
                <li><a href="{{ route("front.service.single",["service" => "scan"]) }}">اسکن اسناد</a></li>
                <li><a href="#">دیجیتالی کردن سازمان</a></li>
                <li><a href="#">راهکارهای مبتنی بر AI</a></li>
                <li><a href="#">تبدیل تصویر به متن (OCR)</a></li>
                <li><a href="#">پردازش هوشمند اسناد</a></li>
                <li><a href="#">دستیار شخصی هوش مصنوعی</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">محصولات</a>
            <ul class="submenu">
                <li><a href="#">مدیریت اسناد DMS</a></li>
                <li><a href="#">مدیریت اسناد مهندسی EDMS</a></li>
                <li><a href="#">مدیریت ارتباط با مشتریان CRM</a></li>
            </ul>
        </li>
        {{--<li class="has-dropdown">
            <a href="#">راهکارها</a>
            <ul class="submenu">
                <li><a href="#">حوزه آموزش و دانشگاه</a></li>
                <li><a href="#">حوزه هنر</a></li>
                <li><a href="#">حوزه مالی و بانکی</a></li>
                <li><a href="#">حوزه خدمات حقوقی</a></li>
                <li><a href="#">حوزه حمل و نقل</a></li>
                <li><a href="#">شرکت‌های کوچک</a></li>
                <li><a href="#">حوزه پزشکی و درمان</a></li>
                <li><a href="#">نیرو انسانی</a></li>
                <li><a href="#">سازمان‌های دولتی</a></li>
                <li><a href="#">بیمه</a></li>
                <li><a href="#">حوزه انرژی</a></li>
                <li><a href="#">حوزه املاک و ساخت و ساز</a></li>
            </ul>
        </li>--}}
        <li class="has-dropdown">
            <a href="#">آموزش</a>
            <ul class="submenu">
                <li><a href="{{ route("front.blog.index") }}">وبلاگ</a></li>
                <li><a href="#">دانلود</a></li>
                <li><a href="#">رویدادها</a></li>
                <li><a href="#">مستندات API</a></li>
                <li><a href="{{ route("faq") }}">سوالات متداول</a></li>
                <li><a href="#">اصطلاحات</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">منابع</a>
            <ul class="submenu">
                <li><a href="{{ route("about") }}">درباره ما</a></li>
                <li><a href="{{ route("about") }}">[ نام برند ] چیست</a></li>
                <li><a href="{{ route("contact.index") }}">تماس با ما</a></li>
                <li><a href="#">پروژه‌ها</a></li>
                <li><a href="#">مجوزها و دستاوردها</a></li>
                <li><a href="#">فرصت‌های شغلی</a></li>
                <li><a href="#">شرکای تجاری</a></li>
            </ul>
        </li>
        <li><a href="#">تعرفه‌ها</a></li>
    </ul>
</nav>
