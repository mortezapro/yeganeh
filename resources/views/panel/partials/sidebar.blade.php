<div class="left-side-menu">

    <div class="h-100" >

        <div class="sidebar-content">
            <div class="sidebar-icon-menu h-100" data-simplebar>
                <!-- LOGO -->
                <a href="{{ route("admin.dashboard.index") }}" class="logo">
                                <span>
                                    <img src="{{ asset("panel/assets/images/logo/logo-light.png") }}" alt="" height="28">
                                </span>
                </a>
                <nav class="nav flex-column" id="two-col-sidenav-main">
                    <a class="nav-link waves-effect waves-dark active" href="#dashboard" title="داشبورد">
                        <i data-feather="home"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#apps" title="اپلیکیشن ها">
                        <i data-feather="grid"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#products" title="محصولات">
                        <i data-feather="shopping-bag"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#contents" title="محتوا">
                        <i data-feather="edit"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#store" title="فروشگاه">
                        <i data-feather="shopping-cart"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#reports" title="گزارشات">
                        <i data-feather="file-text"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#settings" title="تنظیمات">
                        <i data-feather="tool"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#users" title="کاربران">
                        <i data-feather="users"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#finances" title="حسابداری">
                        <i data-feather="credit-card"></i>
                    </a>
                    <a class="nav-link waves-effect waves-dark" href="#security" title="احراز هویت">
                        <i data-feather="shield"></i>
                    </a>
                </nav>
            </div>
            <!--- Sidemenu -->
            <div class="sidebar-main-menu">
                <div id="two-col-menu" class="h-100" data-simplebar>
                    <div class="twocolumn-menu-item d-block" id="dashboard">
                        <div class="title-box">
                            <h5 class="menu-title">داشبورد</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item waves-effect waves-dark">
                                    <a class="nav-link" href="index.html">داشبورد فروشگاه</a>
                                </li>
                                <li class="nav-item waves-effect waves-dark">
                                    <a class="nav-link" href="dashboard-2.html">داشبورد بلاگ</a>
                                </li>
                                <li class="nav-item waves-effect waves-dark">
                                    <a class="nav-link" href="dashboard-3.html">داشبورد حسابداری</a>
                                </li>
                                <li class="nav-item waves-effect waves-dark">
                                    <a class="nav-link" href="dashboard-3.html">داشبورد CRM</a>
                                </li>
                                <li class="nav-item waves-effect waves-dark">
                                    <a class="nav-link" href="dashboard-3.html">تاریخچه جستجوی کاربر</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="apps">
                        <h5 class="menu-title">اپلیکیشن</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-calendar.html">تقویم</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-chat.html">چت</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-chat.html">CRM</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-chat.html">ارسال پیامک انبوه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-chat.html">ارسال ایمیل انبوه</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-chat.html">لیست Todo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link waves-effect waves-dark" href="apps-file-manager.html">مدیریت فایل</a>
                            </li>
                        </ul>
                    </div>

                    <div class="twocolumn-menu-item" id="products">
                        <div class="title-box">
                            <h5 class="menu-title">محصولات</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.products.create") }}">ایجاد محصول جدید</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.products.index") }}">لیست محصولات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">محصولات ویژه</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.categories.index") }}">دسته ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.brands.index") }}">برند ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.keys.index") }}">ویژگی ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.values.index") }}">مقادیر</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="contents">
                        <div class="title-box">
                            <h5 class="menu-title">محتوا</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.posts.index") }}">لیست پست ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.posts.create") }}">ایجاد پست جدید</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.categories.index") }}">دسته ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.comments.index") }}">نظرات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.page.index") }}">لیست صفحات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.page.create") }}">ایجاد صفحه جدید</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="store">
                        <div class="title-box">
                            <h5 class="menu-title">فروشگاه</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">پرداخت ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.orders.index") }}">سفارشات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">تخفیف ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">نظرات</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="reports">
                        <div class="title-box">
                            <h5 class="menu-title">گزارشات</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">کاربران</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-timeline.html">گوگل آنالیتیکس</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">فروش</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.consultations.index") }}">درخواست های مشاوره</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.newsletter.index") }}">اعضای خبرنامه</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="settings">
                        <div class="title-box">
                            <h5 class="menu-title">تنظیمات</h5>
                            {{--
                            محاسبه هزینه ارسال پست
                            --}}
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">تنظیمات عمومی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">تنظیمات صفحه اصلی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-timeline.html">ریدایرکت ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">قوانین و مقررات</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">پوسته ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">دپارتمان ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">api ها</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">مالی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.menu.index") }}">منوها</a>
                                </li>
								<li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="{{ route("admin.ticket.index") }}">تیکت</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="users">
                        <div class="title-box">
                            <h5 class="menu-title">کاربران</h5>
                            {{--
                            لیست کاربرانی که خرید دوم، سوم، چهارم و بیشتر را داشته اند.
                            --}}
                            <ul class="nav flex-column">
                                {{--
                                ورود به عنوان کاربر، تغییر رمز عبور، ارسال پیامک و ایمیل به کاربر، نمایش تاریخچه خریدهای کاربر، تاریخچه سبد خرید کاربر، ارسال پیام واتساپ، مدیریت نقش ها و دسترسی ها
                                --}}
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">لیست کاربران</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-timeline.html">آخرین فعالیت ها (user activity log)</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="finances">
                        <div class="title-box">
                            <h5 class="menu-title">مالی</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
{{--
ثبت هزینه دسته بندی، هزینه ارسال، حقوق کارکنان، مخارج دیگر کل هزینه ها
درخواست های واریز، درخواست های برداشت
--}}
                                    <a class="nav-link waves-effect waves-dark" href="pages-starter.html">
                                        گردش حساب
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="twocolumn-menu-item" id="security">
                        <div class="title-box">
                            <h5 class="menu-title">احراز هویت</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-timeline.html">سطوح دسترسی</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">نقش های کاربری</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">تخصیص نقش به کاربر</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">تخصیص دسترسی به کاربر</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link waves-effect waves-dark" href="pages-sitemap.html">تخصیص دسترسی به نقش</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- End Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>
