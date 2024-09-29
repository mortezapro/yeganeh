<nav id="mobile-menu">
    <ul class="ul-0">
        <li><a href="{{ route("home") }}">{{ __("main-menu.store") }}</a></li>
        <li class="has-dropdown">
            <a href="#">{{ __("main-menu.services") }}</a>
            <ul class="submenu">
                <li><a href="{{ route("front.service.single",["service" => "scan"]) }}">{{ __("main-menu.scan") }}</a></li>
                <li><a href="#">{{ __("main-menu.digitization") }}</a></li>
                <li><a href="#">{{ __("main-menu.ai-solution") }}</a></li>
                <li><a href="#">{{ __("main-menu.ocr") }}</a></li>
                <li><a href="#">{{ __("main-menu.idp") }}</a></li>
                <li><a href="#">{{ __("main-menu.ai-assistant") }}</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">{{ __("main-menu.products") }}</a>
            <ul class="submenu">
                <li><a href="#">{{ __("main-menu.dms") }}</a></li>
                <li><a href="#">{{ __("main-menu.edms") }}</a></li>
                <li><a href="#">{{ __("main-menu.crm") }}</a></li>
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
            <a href="#">{{ __("main-menu.tutorials") }}</a>
            <ul class="submenu">
                <li><a href="{{ route("front.blog.index") }}">{{ __("main-menu.blogs") }}</a></li>
                <li><a href="#">{{ __("main-menu.downloads") }}</a></li>
                <li><a href="#">{{ __("main-menu.events") }}</a></li>
                <li><a href="#">{{ __("main-menu.api-document") }}</a></li>
                <li><a href="{{ route("faq") }}">{{ __("main-menu.faq") }}</a></li>
                <li><a href="#">{{ __("main-menu.terms") }}</a></li>
            </ul>
        </li>
        <li class="has-dropdown">
            <a href="#">{{ __("main-menu.resources") }}</a>
            <ul class="submenu">
                <li><a href="{{ route("about") }}">{{ __("main-menu.about") }}</a></li>
                <li><a href="{{ route("about") }}">{{ __("main-menu.my-brand") }}</a></li>
                <li><a href="{{ route("contact.index") }}">{{ __("main-menu.contact") }}</a></li>
                <li><a href="#">{{ __("main-menu.projects") }}</a></li>
                <li><a href="#">{{ __("main-menu.rewards") }}</a></li>
                <li><a href="#">{{ __("main-menu.career") }}</a></li>
                <li><a href="#">{{ __("main-menu.partners") }}</a></li>
            </ul>
        </li>
        <li><a href="#">{{ __("main-menu.pricing") }}</a></li>
    </ul>
</nav>
