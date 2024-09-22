@extends("front.layouts.xaito-light")
@section("head")
    <title>اسکن اسناد | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات اسکن اسناد">
@endsection

@section("content")
    <div class="xc-header-banner-2__section pb-120 include-bg" data-background="{{ asset("theme/xaito/assets/img/backgroud/header-bg-3.png") }}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="xc-header-banner-2__title-wrapper mb-60 wow xcfadeUp">
                        <h2 class="xc-header-banner-2__title">با اسکن حرفه‌ای، به دنیای دیجیتال قدم بگذارید</h2>
                        <div class="line-shape">
                            <img src="{{ asset("theme/xaito/assets/img/shapes/header-banner-3-line.png") }}" alt="">
                        </div>
                    </div>
                    <div class="xc-header-banner-2__btns mb-40 d-md-flex align-items-center wow xcfadeUp"
                         data-wow-delay="300ms">
                        <div class="xc-header-banner-2__btn-1">
                            <a class="xc-btn" href="#">مشاوره رایگان</a>
                        </div>
                        <div class="xc-header-banner-btn-video">
                            <a class="xc-popup-video xc-video-btn"
                               href="https://www.youtube.com/watch?v=wGWVKkYEHBE"><i
                                    class="fas fa-play"></i> آموزش اسکن</a>
                        </div>
                    </div>
                    <div class="xc-header-banner-2__bottom d-md-flex align-items-center wow xcfadeUp"
                         data-wow-delay="300ms">
                        <img src="{{ asset("theme/xaito/assets/img/resourse/header-banner-avata.png") }}" alt="">
                        <p><a href="#">دیجیتالی شوید</a> به 4000 سازمان دیجیتالی بپیوندید و از مزایای خدمات ابری بهره ببرید</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xc-header-banner-2__right wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-header-banner-2__img">
                            <img data-tilt="" src="{{ asset("theme/xaito/assets/img/paperless1-min.png") }}" alt="">
                            <div class="dot-shape">
                                <img src="{{ asset("theme/xaito/assets/img/shapes/header-banner-3-dot.png") }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xc-feature-four__section pt-100 pb-80">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
                <h3 class="xc-section__title wow">مزایای بی‌نظیر دیجیتالی‌سازی اسناد</h3>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="xc-feature-four__item text-center wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-feature-four__icon color-1">
                            <span data-tilt=""><i class="fa-regular fa-legal"></i></span>
                        </div>
                        <h3 class="xc-feature-four__title">کاهش هزینه‌ها و افزایش کارایی</h3>
                        <p class="xc-feature-four__info">با دیجیتالی کردن اسناد، نیاز به فضای فیزیکی برای نگهداری آن‌ها از بین می‌رود. همچنین، جستجو و بازیابی اسناد به مراتب سریع‌تر و آسان‌تر شده و در نتیجه زمان کارمندان آزاد می‌شود تا بر روی وظایف مهم‌تر تمرکز کنند.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="xc-feature-four__item text-center wow xcfadeUp" data-wow-delay="200ms">
                        <div class="xc-feature-four__icon color-2">
                            <span data-tilt=""><i class="fa-brands fa-dropbox"></i></span>
                        </div>
                        <h3 class="xc-feature-four__title">گردش کار ساده و سریع</h3>
                        <p class="xc-feature-four__info">
                            اشتراک‌گذاری اسناد بین همکاران به صورت الکترونیکی امکان‌پذیر می‌شود و نیاز به کپی‌برداری و ارسال فیزیکی اسناد از بین می‌رود. همچنین، امکان ایجاد گردش کارهای خودکار و تعریف دسترسی‌های مختلف، مدیریت اسناد را بسیار کارآمدتر می‌کند.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="xc-feature-four__item text-center wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-feature-four__icon color-3">
                            <span data-tilt=""><i class="fa-solid fa-rocket"></i></span>
                        </div>
                        <h3 class="xc-feature-four__title">استفاده از خدمات ابری</h3>
                        <p class="xc-feature-four__info">با استفاده از فضای ابری امکان همکاری بهتر بین تیم‌ها و دسترسی به اسناد در هر زمان و مکان را فراهم می‌شود. همچنین، خدمات ابری معمولاً امکان پشتیبان‌گیری خودکار از داده‌ها را ارائه می‌دهند که امنیت اسناد را تضمین می‌کند.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--<div class="xc-feature-five__section">
        <div class="container">
            <div class="xc-featrue-five__warapper pt-60 pb-40 theme-bg-4 text-center">
                <div class="xc-section__title-wrapper mb-60  wow xcfadeUp">
                    <h3 class="xc-section__title wow">استفاده از ابزارهای بی‌نظیر هوش مصنوعی</h3>
                </div>
                <div class="d-flex flex-wrap justify-content-center">
                    <div class="item">
                        <div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="100ms">
                                        <span class="xc-feature-five__title"><i
                                                class="fa-light fa-gem"></i>پیش‌بینی نیازهای آتی سازمان</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="200ms">
                                        <span class="xc-feature-five__title"><i
                                                class="fa-regular fa-cubes"></i>شناسایی رفتار خرید کاربر</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="300ms">
                                        <span class="xc-feature-five__title"><i class="fa-solid fa-table-layout"></i>تشخیص و حذف داده‌های تکراری</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="400ms">
                                        <span class="xc-feature-five__title"><i
                                                class="fa-brands fa-dropbox"></i>خلاصه‌سازی اسناد بزرگ</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="xc-feature-five__item wow xcfadeUp" data-wow-delay="500ms">
                                        <span class="xc-feature-five__title"><i class="fa-solid fa-star"></i>تبدیل فرمت اسناد</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>--}}
{{--
    <div class="xc-about-three__section pt-110 ">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
                <h3 class="xc-section__title wow">سفر اسناد از کاغذ به دنیای دیجیتال</h3>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="xc-about-three__left wow xcfadeUp h-100">
                        <div class="xc-about-three__img h-100 d-flex align-items-center">
                            <img data-tilt="" src="{{ asset("theme/xaito/assets/img/resourse/about-3.png") }}" alt="">

                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xc-about-three__right ">
                        <div class="xc-about-three__feature-list">
                            <div class="xc-about-three__feature-item item-1 wow xcfadeUp"
                                 data-wow-delay="100ms">
                                <div class="xc-about-three__feature-count"></div>
                                <div class="xc-about-three__feature-content">
                                    <h3 class="xc-about-three__feature-title">اسکن اسناد</h3>
                                    <p>نرم‌افزارهای اسکن در کامپیوتر یا موبایل می‌تواند انجام شود و فایل اسکن شده برای ما ارسال شود.</p>
                                </div>
                            </div>
                            <div class="xc-about-three__feature-item item-2 wow xcfadeUp"
                                 data-wow-delay="200ms">
                                <div class="xc-about-three__feature-count"></div>
                                <div class="xc-about-three__feature-content">
                                    <h3 class="xc-about-three__feature-title">کنترل کیفیت</h3>
                                    <p>در این مرحله اسناد اسکن شده از نظر کیفی بررسی شده، کیفیت آن توسط هوش مصنوعی افزایش یافته و اعتبارسنجی می‌شود.</p>
                                </div>
                            </div>
                            <div class="xc-about-three__feature-item item-2 wow xcfadeUp"
                                 data-wow-delay="300ms">
                                <div class="xc-about-three__feature-count"></div>
                                <div class="xc-about-three__feature-content">
                                    <h3 class="xc-about-three__feature-title">استفاده از هوش مصنوعی و OCR برای پردازش اسناد</h3>
                                    <p>با استفاده از هوش مصنوعی و تکنولوژی OCR اسناد پردازش شده و اطلاعات آن‌ها استخراج و طبقه‌بندی می‌شوند</p>
                                </div>
                            </div>
                            <div class="xc-about-three__feature-item item-3 wow xcfadeUp"
                                 data-wow-delay="300ms">
                                <div class="xc-about-three__feature-count"></div>
                                <div class="xc-about-three__feature-content">
                                    <h3 class="xc-about-three__feature-title">ذخیره‌سازی ابری و خدمات مبتنی بر داده</h3>
                                    <p>اطلاعات پس از استخراج روی ابر ذخیره شده و برای استفاده در دسترس کاربران قرار خواهد گرفت.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
--}}
    <div class="xc-funfact-one__section theme-bg-4 pt-120 pb-120">
        <div class="container">
            <div class="row row-cols-2 row-cols-md-4 row-cols-xl-auto justify-content-center">
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="100ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-1.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="200ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-2.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="300ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-3.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="400ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-4.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="500ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-5.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="600ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-6.png") }}" alt="">
                    </div>
                </div>
                <div class="col" data-tilt="">
                    <div class="xc-funfact-one__img wow xcfadeUp" data-wow-delay="700ms">
                        <img src="{{ asset("theme/xaito/assets/img/icons/fun-7.png") }}" alt="">
                    </div>
                </div>
            </div>
            <div class="xc-section__title-wrapper text-center wow xcfadeUp">
                <h3 class="xc-section__title wow">امکان ادغام با نرم‌افزاهای سازمانی</h3>
                <p class="mb-20">امکان استفاده از API برای تجمیع و ادغام سرویس‌های ما با نرم‌افزاهای سازمانی وجود دارد.</p>
                <div class="xc-funfact-btn">
                    <a href="about.html" class="xc-btn">دریافت مستندات فنی</a>
                </div>
            </div>
        </div>
    </div>
    <div class="xc-feature-two__section pb-120 pt-100">

        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
                <span class="xc-section__subtitle style-2">مراحل دیجیتالی شدن</span>
                <h3 class="xc-section__title wow">سفر اسناد از کاغذ به دنیای دیجیتال</h3>
                <p class="mb-20">برای دیجیتالی شدن و استفاده از خدمات آنلاین ما، مراحل زیر به ترتیب انجام می‌شوند</p>
            </div>
            <div class="xc-feature-two__inner p-relative">
                <div class="xc-feature-two__line">
                </div>
                <div class="xc-feature-two__item wow xcfadeUp" data-wow-delay="100ms">
                    <div class="row feature-item-1">
                        <div class="col-lg-6">
                            <div class="xc-feature-two__imgs" data-tilt="">
                                <div class="main-img-1" data-tilt="">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/feature-bg-2-1.png") }}" alt="">
                                </div>
                                <div class="xc-feature-two__shapes">
                                    <div class="img-1" data-tilt="">
                                        <img src="{{ asset("theme/xaito/assets/img/shapes/feature-2-1.png") }}" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img data-tilt="" src="{{ asset("theme/xaito/assets/img/shapes/feature-2-2.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xc-feature-two__content">
                                <span class="xc-feature-two__count">01</span>
                                <h3 class="xc-feature-two__title">اسکن اسناد</h3>
                                <p class="xc-feature-two__info">نرم‌افزارهای اسکن در کامپیوتر یا موبایل می‌تواند انجام شود و فایل اسکن شده برای ما ارسال شود.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xc-feature-two__item wow xcfadeUp" data-wow-delay="200ms">
                    <div class="row feature-item-2">
                        <div class="col-lg-6">
                            <div class="xc-feature-two__imgs" data-tilt="">
                                <div class="main-img-1" data-tilt="">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/feature-bg-2-2.png") }}" alt="">
                                </div>
                                <div class="xc-feature-two__shapes">
                                    <div class="img-1">
                                        <img data-tilt="" src="{{ asset("theme/xaito/assets/img/shapes/feature-2-3.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xc-feature-two__content">
                                <span class="xc-feature-two__count">02</span>
                                <h3 class="xc-feature-two__title">کنترل کیفیت</h3>
                                <p class="xc-feature-two__info">در این مرحله اسناد اسکن شده از نظر کیفی بررسی شده، کیفیت آن توسط هوش مصنوعی افزایش یافته و اعتبارسنجی می‌شود.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xc-feature-two__item wow xcfadeUp" data-wow-delay="300ms">
                    <div class="row feature-item-3">
                        <div class="col-lg-6">
                            <div class="xc-feature-two__imgs" data-tilt="">
                                <div class="main-img-1" data-tilt="">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/feature-bg-2-3.png") }}" alt="">
                                </div>
                                <div class="xc-feature-two__shapes">
                                    <div class="img-1">
                                        <img data-tilt="" src="{{ asset("theme/xaito/assets/img/shapes/feature-2-4.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xc-feature-two__content">
                                <span class="xc-feature-two__count">03</span>
                                <h3 class="xc-feature-two__title">استفاده از هوش مصنوعی و OCR برای پردازش اسناد</h3>
                                <p class="xc-feature-two__info">با استفاده از هوش مصنوعی و تکنولوژی OCR اسناد پردازش شده و اطلاعات آن‌ها استخراج و طبقه‌بندی می‌شوند</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xc-feature-two__content">
                                <span class="xc-feature-two__count">04</span>
                                <h3 class="xc-feature-two__title">ذخیره‌سازی ابری و خدمات مبتنی بر داده</h3>
                                <p class="xc-feature-two__info">اطلاعات پس از استخراج روی ابر ذخیره شده و برای استفاده در دسترس کاربران قرار خواهد گرفت.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="xc-feature-two__imgs" data-tilt="">
                                <div class="main-img-1" data-tilt="">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/feature-bg-2-3.png") }}" alt="">
                                </div>
                                <div class="xc-feature-two__shapes">
                                    <div class="img-1">
                                        <img data-tilt="" src="{{ asset("theme/xaito/assets/img/shapes/feature-2-4.png") }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="xc-price-one__section p-relative z-index-1 pt-110 pb-80 overflow-hidden ltr"
             data-background="{{ asset("theme/xaito/assets/img/backgroud/price-bg-1.png") }}">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-55 wow xcfadeUp">
                <h3 class="xc-section__title wow"><span>تعرفه‌های ما</span></h3>
            </div>
            <div class="xc-price-one__tab-nav">
                <nav class="xc-price-one__tab-wrapper xc-nav">
                    <div class="nav nav-tabs xc-price-tab-slide justify-content-center" id="nav-tab"
                         role=tablist>
                        <label for="price-tab-check" class="nav justify-content-center">
                                        <span class="nav-link" id="nav-monthly-tab" data-bs-toggle="tab"
                                              data-bs-target="#nav-monthly" role="tab" aria-controls="nav-monthly"
                                              aria-selected="true">ماهانه</span>
                            <input type="checkbox" id="price-tab-check">
                            <i></i>
                            <span class="nav-link active" id="nav-yearly-tab" data-bs-toggle="tab"
                                  data-bs-target="#nav-yearly" role="tab" aria-controls="nav-yearly"
                                  aria-selected="false">سالانه</span>
                        </label>
                    </div>
                    <div class="xc-price-one__tab-offer">
                        <img src="{{ asset("theme/xaito/assets/img/shapes/price-arrow-1.png") }}" alt="">
                        <span class="rtl">30% تخفیف</span>
                    </div>
                </nav>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="tab-content wow fadeInUp rtl text-right" id="nav-tabContent" data-wow-delay=".3s">
                        <div class="tab-pane fade" id="nav-monthly" role="tabpanel"
                             aria-labelledby="nav-monthly-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item">
                                        <div class="xc-price-one__banner">
                                            <p>Most Popular</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن پایه</h3>
                                            <p class="xc-price-one__price">700,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 40+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 10k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item featured">
                                        <div class="xc-price-one__banner">
                                            <p>محبوب‌ترین</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن حرفه‌ای</h3>
                                            <p class="xc-price-one__price">2,200,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 70+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 20k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a class="mb-2" href="contact.html">3 روز تست رایگان</a>
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item">
                                        <div class="xc-price-one__banner">
                                            <p>Most Popular</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن تجاری</h3>
                                            <p class="xc-price-one__price">4,600,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 940+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 30k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="nav-yearly" role="tabpanel"
                             aria-labelledby="nav-yearly-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item">
                                        <div class="xc-price-one__banner">
                                            <p>Most Popular</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن پایه</h3>
                                            <p class="xc-price-one__price">700,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 40+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 10k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item featured">
                                        <div class="xc-price-one__banner">
                                            <p>محبوب‌ترین</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن حرفه‌ای</h3>
                                            <p class="xc-price-one__price">2,200,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 70+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 20k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a class="mb-2" href="contact.html">3 روز تست رایگان</a>
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="xc-price-one__item">
                                        <div class="xc-price-one__banner">
                                            <p>Most Popular</p>
                                        </div>
                                        <div class="xc-price-one__head">
                                            <h3 class="xc-price-one__package">پلن تجاری</h3>
                                            <p class="xc-price-one__price">4,600,000 تومان </p>
                                        </div>
                                        <div class="xc-price-one__list">
                                            <p><i class="fa-solid fa-check"></i> Access 940+ use-cases</p>
                                            <p><i class="fa-solid fa-check"></i> Generate 30k* characters
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> Built in plagiarism checker
                                            </p>
                                            <p><i class="fa-solid fa-check"></i> 90+ copywriting tools</p>
                                            <p><i class="fa-solid fa-check"></i> 29+ languages</p>
                                        </div>
                                        <div class="xc-price-one__btn">
                                            <a href="contact.html">ادامه</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="xc-contact-page__section pt-50 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="xc-section__title-wrapper mb-30">
                        <h4 class=" sm-title wow animated">نیاز به مشاوره دارید؟</h4>
                        <p>برای دریافت مشاوره رایگان و دریافت خدمت اسکن با ما تماس بگیرید</p>
                        <div class="xc-contact-img mt-40 mb-40">
                            <img src="http://localhost:8000/theme/xaito/assets/img/resourse/contact-1.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="xc-contact-page__form">
                        <form class="contact-form-validated" action="http://localhost:8000/contact" method="POST" novalidate="novalidate">
                            <input type="hidden" name="_token" value="28PBSpv2c6fshTe1KST02y9yvJjuFMcBuyKzEkQE" autocomplete="off">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="xc-contact-page__input-box">
                                        <input type="text" id="name" name="name" placeholder="نام و نام خانوادگی" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="xc-contact-page__input-box">
                                        <input type="email" id="email" name="email" placeholder="ایمیل" required="" aria-required="true">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="xc-contact-page__input-box">
                                        <select id="subject" name="subject" required="" aria-required="true">
                                            <option value="1">درخواست همکاری</option>
                                            <option value="2">انتقادات و پیشنهادات</option>
                                            <option value="3">گزارش باگ</option>
                                            <option value="4">دیگر</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="xc-contact-page__input-box">
                                        <textarea cols="30" rows="10" id="message" name="message" placeholder="متن پیام..." required="" aria-required="true"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="xc-contact-page__submit">
                                        <button type="submit" class="xc-btn">ثبت درخواست </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="result"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xc-feature-three__section pb-90">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60  wow xcfadeUp">
                <span class="xc-section__subtitle style-2">تجربه‌ای متفاوت در دیجیتال‌سازی</span>
                <h3 class="xc-section__title wow">دنیای کاغذی را پشت سر بگذارید</h3>
                <p class="mb-20">MasAI Chat, have a natural conversation with AI that feels surprisingly
                    human <br>
                    Simply ask your friendly AI chatbot to generate ideas.</p>
            </div>
            <div class="xc-feature-three_wrapper">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="xc-feature-three__item wow xcfadeUp" data-wow-delay="100ms">
                            <div class="xc-feature-three__icon color-1">
                                <span><i class="fa-regular fa-file-check"></i></span>
                            </div>
                            <div class="xc-feature-three__content">
                                <h3 class="xc-feature-three__title">پشتیبانی از 121 زبان زنده در دنیا </h3>
                                <p>ابزارهای OCR و هوش مصنوعی ما قادر به استخراج و درک اطلاعات به 121 زبان دنیا است و نیاز تمام کسب‌وکارها را رفع می‌کند</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xc-feature-three__item wow xcfadeUp" data-wow-delay="200ms">
                            <div class="xc-feature-three__icon color-2">
                                <span><i class="fa-sharp fa-solid fa-speed"></i></span>
                            </div>
                            <div class="xc-feature-three__content">
                                <h3 class="xc-feature-three__title">پایداری و امنیت بالا</h3>
                                <p>سرویس‌های ما با توجه به زیرساخت قوی و استفاده از سیستم های مدیریت ترافیک عملکرد پایدار و کارایی بالایی دارد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xc-feature-three__item wow xcfadeUp" data-wow-delay="300ms">
                            <div class="xc-feature-three__icon color-2">
                                <span><i class="fa-regular fa-table-layout"></i></span>
                            </div>
                            <div class="xc-feature-three__content">
                                <h3 class="xc-feature-three__title">بومی‌سازی خدمات</h3>
                                <p>از طریق خدمات API مجموعه ما می‌توانید خدمات مربوط به اسکن و دیجیتالی شدن را با نرم‌افزار سازمانی خود یکپارچه کنید</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="xc-feature-three__item wow xcfadeUp" data-wow-delay="400ms">
                            <div class="xc-feature-three__icon color-4">
                                <span><i class="fa-solid fa-headphones-simple"></i></span>
                            </div>
                            <div class="xc-feature-three__content">
                                <h3 class="xc-feature-three__title">پشتیبانی تمام وقت</h3>
                                <p>ما به صورت شبانه‌روزی آماده خدمت‌رسانی به شما هستیم.
                                    تیم پشتیبانی ما همیشه پاسخگوی نیازهای شماست.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="xc-postbox__area pb-60">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-55 wow xcfadeUp">
                <span class="xc-section__subtitle">بلاگ</span>
                <h3 class="xc-section__title wow">نکات خدمات اسکن</h3>
            </div>
            <div class="xc-postbox__wrapper mb-30">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="xc-postbox__item xc-grid mb-30">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <a href="blog-single.html">
                                    <img src="{{ asset("theme/xaito/assets/img/blog/blog-6.jpg") }}" alt="">
                                </a>
                                <div class="xc-postbox__cat">
                                    <a href="#">مهندسی نرم‌افزار</a>
                                </div>
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                                <span>
                                                    <a href="#"><i class="fa-light fa-user"></i>مدیر سایت</a>
                                                </span>
                                    <span><a href="#"><i class="fa-light fa-calendar"></i>3 روز پیش</a></span>

                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="blog-single.html">آشنایی با مراحل تولید تولید نرم‌افزار</a>
                                </h3>
                                <div class="xc-postbox__read-more">
                                    <a href="blog-single.html" class="xc-more-btn">ادامه <i
                                            class="fa-light fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xc-postbox__item xc-grid mb-30">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <a href="blog-single.html">
                                    <img src="{{ asset("theme/xaito/assets/img/blog/blog-2.jpg") }}" alt="">
                                </a>
                                <div class="xc-postbox__cat">
                                    <a href="#">کسب‌وکار</a>
                                </div>
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                                <span>
                                                    <a href="#"><i class="fa-light fa-user"></i>علیرضا</a>
                                                </span>
                                    <span><a href="#"><i class="fa-light fa-calendar"></i>5 روز پیش</a></span>

                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="blog-single.html">آشنایی با مفهوم گردش کار و اهمیت آن در کسب‌وکار</a>
                                </h3>
                                <div class="xc-postbox__read-more">
                                    <a href="blog-single.html" class="xc-more-btn">ادامه <i
                                            class="fa-light fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="xc-postbox__item xc-grid mb-30">
                            <div class="xc-postbox__thumb w-img mb-20 p-relative">
                                <a href="blog-single.html">
                                    <img src="{{ asset("theme/xaito/assets/img/blog/blog-4.jpg") }}" alt="">
                                </a>
                                <div class="xc-postbox__cat">
                                    <a href="#">اداری</a>
                                </div>
                            </div>
                            <div class="xc-postbox__content">
                                <div class="xc-postbox__meta">
                                                <span>
                                                    <a href="#"><i class="fa-light fa-user"></i>مرتضی</a>
                                                </span>
                                    <span><a href="#"><i class="fa-light fa-calendar"></i>1 هفته پیش</a></span>

                                </div>
                                <h3 class="xc-postbox__title">
                                    <a href="blog-single.html">نامه نگاری چیست؟ اصول صحیح مکاتبات اداری و سازمانی چگونه است؟</a>
                                </h3>
                                <div class="xc-postbox__read-more">
                                    <a href="blog-single.html" class="xc-more-btn">ادامه<i
                                            class="fa-light fa-arrow-left-long"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("scripts")
@endsection
