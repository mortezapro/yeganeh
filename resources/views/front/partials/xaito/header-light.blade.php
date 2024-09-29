<header>
    <div class="xc-header-one__header header-light">
        <div class="xc-header-one__main" id="xc-header-sticky">
            <div class="container">
                <div class="xc-header-one__main-wrapper">
                    <div class="xc-header-one__left">
                        <div class="xc-header-one__logo xc-disabled-dark">
                            <a href="{{ route("home") }}"><img src="{{ asset("theme/xaito/assets/img/logo/white-logo.png") }}" alt="logo"></a>
                        </div>
                        <div class="xc-header-one__logo xc-enable-dark">
                            <a href="{{ route("home") }}"><img src="{{ asset("theme/xaito/assets/img/logo/white-logo.png") }}" alt="logo"></a>
                        </div>
                    </div>
                    <div class="xc-header-one__right">
                        <div
                            class="xc-header-one__right-menu d-flex flex-wrap justify-content-between align-items-center">
                            <div class="main-menu d-none d-xl-block">
                                @include("front.partials.xaito.navbar")
                            </div>
                            <div class="xc-header-one__right-btn d-none d-md-flex">
                                <button class="xc-dark-swich">
                                    <i class="moon fa-light fa-moon light-icon"></i>
                                    <i class="sun fa-light fa-sun-bright dark-icon"></i>
                                </button>
                                <div class="xc-header-bnt-1">
                                    <a href="#" class="xc-border-btn">{{ __("main-menu.navbar-cta-text") }}</a>
                                </div>
                            </div>
                            <div class="xc-header-one__hamburger mr-30 d-xl-none">
                                <button type="button" class="xc-hamburger-btn xc-offcanvas-open-btn">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
