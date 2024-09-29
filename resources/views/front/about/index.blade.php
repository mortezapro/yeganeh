@extends("front.layouts.xaito-light")
@section("head")
    <title>درباره ما | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات صفحه‌اصلی">
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
                        <h3 class="xc-breadcrumb__title">درباره ما</h3>
                        <div class="xc-breadcrumb__list">
                            <span><a href="{{ route("home") }}">خانه</a></span>
                            <span class="dvdr">/</span>
                            <span>درباره ما</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xc-about-page__section pt-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="xc-about-page__img w-img wow xcfadeUp">
                        <img src="{{ asset("theme/xaito/assets/img/resourse/about-page-1.jpg") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xc-about-history__section pt-110 pb-60">
        <div class="container">
            <div class="xc-about-history__title-wraper text-center mb-50">
                <h3 class="xc-about-history__title">ما یه تیم پرانرژی هستیم که اومدیم تا کار با کاغذ رو از سرتون کم کنیم</h3>
            </div>
            <div class="xc-about-history__wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="xc-about-history__item">
                                <div class="shape">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/histroy-shape.png") }}" alt="">
                                </div>
                                <div class="xc-about-history__imgs">
                                    <div class="img-1">
                                        <img src="x{{ asset("theme/xaito/assets/img/resourse/histroy-2.jpg") }}" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img src="{{ asset("theme/xaito/assets/img/resourse/histroy-2.jpg") }}" alt="">
                                    </div>
                                </div>
                                <div class="xc-about-history__content">
                                    <span class="xc-about-history__date">Jun 23, 2016</span>
                                    <h3 class="xc-about-history__title"><a href="about.html">Established</a>
                                    </h3>
                                    <p class="xc-about-history__content">global leader in conversational AI,
                                        delivering
                                        autonomous, human-like experiences for customers and employees to
                                        accelerate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="xc-about-history__item">
                                <div class="shape">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/histroy-shape.png") }}" alt="">
                                </div>
                                <div class="xc-about-history__imgs">
                                    <div class="img-1">
                                        <img src="{{ asset("theme/xaito/assets/img/resourse/histroy-3.jpg") }}" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img src="{{ asset("theme/xaito/assets/img/resourse/histroy-4.jpg") }}" alt="">
                                    </div>
                                </div>
                                <div class="xc-about-history__content">
                                    <span class="xc-about-history__date">Jun 23, 2019</span>
                                    <h3 class="xc-about-history__title"><a href="about.html">Fund Raised</a>
                                    </h3>
                                    <p class="xc-about-history__content">global leader in conversational AI,
                                        delivering
                                        autonomous, human-like experiences for customers and employees to
                                        accelerate</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="xc-about-history__item">
                                <div class="shape">
                                    <img src="{{ asset("theme/xaito/assets/img/shapes/histroy-shape.png") }}" alt="">
                                </div>
                                <div class="xc-about-history__imgs">
                                    <div class="img-1">
                                        <img src="{{ asset("theme/xaito/assets/img/resourse/histroy-5.jpg") }}" alt="">
                                    </div>
                                    <div class="img-2">
                                        <img src="{{ asset("theme/xaito/assets/img/resourse/histroy-6.jpg") }}" alt="">
                                    </div>
                                </div>
                                <div class="xc-about-history__content">
                                    <span class="xc-about-history__date">Jun 23, 2023</span>
                                    <h3 class="xc-about-history__title"><a href="about.html">Global
                                            Brand</a></h3>
                                    <p class="xc-about-history__content">global leader in conversational AI,
                                        delivering
                                        autonomous, human-like experiences for customers and employees to
                                        accelerate</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="xc-about-one__section pt-30 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xc-about-one__img mb-30 wow xcfadeLeft">
                        <img data-tilt="" src="{{ asset("theme/xaito/assets/img/resourse/about-6.jpg") }}" alt="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="xc-about-one__right  wow xcfadeRight">
                        <div class="xc-section__title-wrapper">
                            <span class="xc-section__subtitle">who we are</span>
                            <h3 class="xc-section__title wow">We help achieve <br> higher customer <br>
                                satisfaction
                            </h3>
                            <p class="mb-20">In a few seconds, our A.I. will generate amazing results that
                                you can copy,
                                paste & publish. No matter your native, write creatively and clearly in 25+
                                languages.
                            </p>
                        </div>
                        <div class="xc-about-one__feature">
                            <ul class="xc-about-one__feature-list list-unstyled">
                                <li>
                                    <p><span class="xc-icon"><i class="fa-solid fa-check"></i></span>Easily
                                        write and <a href="#">test more copy variations </a></p>
                                </li>
                                <li>
                                    <p><span class="xc-icon"><i class="fa-solid fa-check"></i></span><a
                                            href="#">Generate content </a>that are keyword-rich and
                                        plagiarism-free.</p>
                                </li>
                                <li>
                                    <p><span class="xc-icon"><i class="fa-solid fa-check"></i></span>No
                                        matter your
                                        native tongue, <a href="#">write creatively</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="xc-sponsor-two__section theme-bg-5 pt-110 pb-90">
        <div class="container">
            <h3 class="xc-sponsor-two__title text-center">+8000 سازمان در 12 استان ایران مشتریان ما هستند</h3>
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6">
                    <div class="xc-sponsor-two__item" data-tilt="">
                        <img src="{{ asset("theme/xaito/assets/img/brand/brand-2-1.png") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-sponsor-two__item" data-tilt="">
                        <img src="{{ asset("theme/xaito/assets/img/brand/brand-2-2.png") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-sponsor-two__item" data-tilt="">
                        <img src="{{ asset("theme/xaito/assets/img/brand/brand-2-3.png") }}" alt="">
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-sponsor-two__item" data-tilt="">
                        <img src="{{ asset("theme/xaito/assets/img/brand/brand-2-4.png") }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="xc-team-one__section pt-120 pb-90">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60">
                <span class="xc-section__subtitle">آشنایی با تیم ما</span>
                <h3 class="xc-section__title wow">ما اینجا هستیم تا در مسیر دیجیتالی شدن همراه شما باشیم
                </h3>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-1.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Andrew Holder</a></h3>
                            <span class="xc-team-one__bio">AI Expert</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-2.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Ebony Hennig</a></h3>
                            <span class="xc-team-one__bio">Senior Developer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-3.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Pallab Kawa</a></h3>
                            <span class="xc-team-one__bio">Senior Engineer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-4.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Pooja Vinter</a></h3>
                            <span class="xc-team-one__bio">Senior Engineer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-5.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Otieno Regenbogen</a></h3>
                            <span class="xc-team-one__bio">Senior Engineer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-6.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Van Apeldoorn</a></h3>
                            <span class="xc-team-one__bio">Web Developer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-7.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Felix Macvan</a></h3>
                            <span class="xc-team-one__bio">Markerting Expert</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="xc-team-one__item text-center">
                        <div class="xc-team-one__img">
                            <img src="{{ asset("theme/xaito/assets/img/team/team-8.jpg") }}" alt="">
                        </div>
                        <div class="xc-team-one__content">
                            <h3 class="xc-team-one__name"><a href="team.html">Gauri Tiedeman</a></h3>
                            <span class="xc-team-one__bio">Senior Engineer</span>
                            <div class="xc-team-one__social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include("front.home.fa.cta")
@endsection

@section("scripts")
@endsection
