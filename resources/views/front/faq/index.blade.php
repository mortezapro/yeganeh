@extends("front.layouts.xaito-light")
@section("head")
    <title>سوالات متداول | {{ env("APP_NAME") }}</title>
    <meta name="description" content="توضیحات تماس با ما">
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
                        <h3 class="xc-breadcrumb__title">سوالات متداول</h3>
                        <div class="xc-breadcrumb__list">
                            <span><a href="{{ route("home") }}">خانه</a></span>

                            <span class="dvdr">/</span>
                            <span>سوالات متداول</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="xc-faq-two__section pb-90 pt-120">
        <div class="container">
            <div class="xc-section__title-wrapper text-center mb-60 wow xcfadeUp">
{{--                <h3 class="xc-section__title wow">Frequently Asked Questions</h3>--}}
            </div>
            <div class="row">
                <div class="xc-accrodion-grp" data-grp-name="faq-two-xc-accrodion">
                    <div class="xc-accrodion active wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چه مشکلاتی از سازمان‌ها را با استفاده از سرویس شما می‌توان حل کرد؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p class="mb-2">خدمات ما به سازمان‌ها کمک می‌کند تا تمام اسناد و مدارک فیزیکی را به فرمت دیجیتال تبدیل کرده و به صورت امن و بلندمدت ذخیره کند. ما همچنین می‌توانیم حجم عظیمی از اسناد را به صورت هوشمند سازماندهی، تحلیل و مدیریت کنیم.</p>
                                <p>با استفاده از هوش مصنوعی، ما قادر به استخراج اطلاعات کلیدی از اسناد، شناسایی الگوها و پیش‌بینی روندها هستیم. این به مدیران کمک می‌کند تا تصمیمات آگاهانه‌تری اتخاذ کنند، ریسک‌ها را کاهش دهند و به فرصت‌های جدید دست پیدا کنند. همچنین، با اتوماسیون فرآیندهای دستی، زمان و هزینه‌های سازمان به میزان قابل توجهی کاهش می‌یابد.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چگونه سرویس شما به افزایش بهره‌وری و کاهش هزینه‌ها کمک می‌کند؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p class="mb-2">سرویس هوشمندسازی اسناد ما با اتوماسیون بسیاری از فرآیندهای دستی، به طور چشمگیری بهره‌وری سازمان را افزایش می‌دهد. این فرآیندها شامل استخراج اطلاعات از اسناد، طبقه‌بندی خودکار، جستجوی هوشمند و تحلیل داده‌ها می‌شود.</p>
                                <p>با کاهش نیاز به نیروی انسانی برای انجام این وظایف تکراری، سازمان‌ها می‌توانند هزینه‌های عملیاتی خود را کاهش دهند. همچنین، تصمیم‌گیری‌های مبتنی بر داده‌های دقیق و به موقع، منجر به افزایش کارایی و کاهش ریسک‌های عملیاتی می‌شود.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چگونه می‌توانیم سرویس شما را با سیستم‌های موجود در سازمان خود ادغام کنیم؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>سرویس ما از طریق Restful API قدرتمند و قابل سفارشی‌سازی، به راحتی با انواع سیستم‌های موجود در سازمان شما ادغام می‌شود. این APIها امکان دسترسی به تمامی قابلیت‌های سرویس ما را فراهم کرده و به شما اجازه می‌دهند تا آن را به صورت یکپارچه در فرآیندهای کاری خود بگنجانید. همچنین، تیم پشتیبانی ما آماده است تا در فرآیند ادغام و پیکربندی سرویس، به شما کمک کند.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>آیا سرویس شما با نرم‌افزارهای رایج مورد استفاده در سازمان‌ها سازگار است؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>بله، سرویس ما با بسیاری از نرم‌افزارهای رایج مورد استفاده در سازمان‌ها از جمله سیستم‌های مدیریت اسناد، CRM، ERP و ابزارهای اداری سازگار است. ما از استانداردهای باز و پروتکل‌های ارتباطی شناخته شده استفاده می‌کنیم تا اطمینان حاصل کنیم که سرویس ما به راحتی با محیط IT شما یکپارچه می‌شود.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چه برنامه‌هایی برای توسعه و بهبود سرویس در آینده دارید؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>ما به طور مداوم در حال توسعه و بهبود سرویس خود هستیم. برنامه‌های آتی ما شامل افزودن قابلیت‌های جدید هوش مصنوعی، بهبود دقت مدل‌های پیش‌بینی، گسترش پشتیبانی از فرمت‌های فایل مختلف و ارائه ابزارهای تجزیه و تحلیل پیشرفته‌تر است. همچنین، ما به دنبال ایجاد یک پلتفرم باز هستیم که به توسعه‌دهندگان اجازه می‌دهد تا اپلیکیشن‌های سفارشی خود را بر روی آن بسازند.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>آیا سرویس شما از استانداردهای بین‌المللی پیروی می‌کند؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>بله، سرویس ما از بالاترین استانداردهای امنیتی و حریم خصوصی پیروی می‌کند. ما از پروتکل‌های رمزنگاری قوی برای محافظت از داده‌های شما استفاده می‌کنیم و به طور مرتب سیستم‌های خود را در برابر تهدیدات امنیتی به روز می‌کنیم. همچنین، ما با استانداردهای بین‌المللی مانند GDPR و CCPA مطابقت داریم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="100ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>امنیت داده‌های ما تا چه اندازه تضمین شده است؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>امنیت داده‌های شما برای ما بسیار مهم است. ما از چندین لایه امنیتی برای محافظت از داده‌های شما استفاده می‌کنیم، از جمله رمزنگاری قوی، کنترل دسترسی دقیق، نظارت مداوم بر تهدیدات امنیتی و پشتیبان‌گیری منظم از داده‌ها. همچنین، داده‌های شما در مراکز داده ایمن و با دسترسی محدود ذخیره می‌شود.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="200ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>آیا داده‌های ما در سرورهای داخلی ذخیره می‌شوند یا در ابر؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>شما می‌توانید بسته به نیازهای خود، داده‌های خود را در سرورهای داخلی سازمان یا در ابر ذخیره کنید. ما هر دو گزینه را به شما ارائه می‌دهیم و به شما کمک می‌کنیم تا بهترین گزینه را برای سازمان خود انتخاب کنید.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>در صورت بروز هرگونه مشکل امنیتی چه اقداماتی انجام می‌دهید؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>ما یک تیم امنیتی متخصص داریم که به صورت ۲۴ ساعته سیستم‌های ما را نظارت می‌کند. در صورت بروز هرگونه مشکل امنیتی، ما بلافاصله اقدامات لازم را برای رفع مشکل و جلوگیری از تکرار آن انجام می‌دهیم. همچنین، ما به شما اطلاع می‌دهیم و تمام مراحل را با شما شفاف سازی می‌کنیم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>سرعت پردازش اسناد و تولید نتایج چقدر است؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>سرعت پردازش اسناد به حجم و پیچیدگی اسناد شما بستگی دارد. با این حال، سرویس ما قادر است حجم بالایی از اسناد را در زمان بسیار کوتاهی پردازش کند. ما از فناوری‌های پیشرفته‌ای استفاده می‌کنیم که به ما اجازه می‌دهند تا نتایج را به سرعت و با دقت بالا تولید کنیم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>آیا سیستم شما با انواع مختلف فایل سازگار است؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>بله، سیستم ما طیف گسترده‌ای از فرمت‌های فایل را پشتیبانی می‌کند. از جمله این فرمت‌ها می‌توان به انواع فایل‌های متنی (Word، PDF، TXT)، صفحات گسترده (Excel)، ارائه‌ها (PowerPoint) و حتی فایل‌های تصویری اشاره کرد. ما دائماً در حال گسترش لیست فرمت‌های پشتیبانی شده هستیم تا بتوانیم نیازهای متنوع کاربران را برآورده کنیم.</p>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چگونه می‌توانیم از دقت نتایج تولید شده توسط هوش مصنوعی اطمینان حاصل کنیم؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>ما برای اطمینان از دقت نتایج تولید شده توسط هوش مصنوعی، از روش‌های مختلفی استفاده می‌کنیم. این روش‌ها شامل آموزش مدل‌ها بر روی داده‌های آموزشی با کیفیت بالا، استفاده از الگوریتم‌های پیشرفته و ارزیابی مداوم عملکرد مدل‌ها است. همچنین، ما به کاربران امکان می‌دهیم تا نتایج تولید شده را بررسی و اصلاح کنند.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>برای استفاده از سرویس شما به چه دانش فنی نیاز است؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p>برای استفاده از سرویس ما، نیازی به دانش فنی خاصی ندارید. رابط کاربری سرویس ما بسیار ساده و کاربرپسند طراحی شده است و به شما امکان می‌دهد تا به راحتی اسناد خود را آپلود کنید و نتایج را مشاهده کنید. همچنین، ما راهنماهای آموزشی کاملی را در اختیار کاربران قرار می‌دهیم تا به آن‌ها در استفاده از تمام قابلیت‌های سرویس کمک کنیم.</p>
                            </div><!-- /.inner -->
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>چه نوع پشتیبانی برای کاربران ارائه می‌دهید؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p class="mb-2">ما انواع مختلفی از پشتیبانی را برای کاربران خود ارائه می‌دهیم. این پشتیبانی شامل:</p>
                                <ol>
                                    <li><strong>پشتیبانی آنلاین</strong>: شما می‌توانید از طریق چت زنده، ایمیل یا سیستم تیکتینگ با تیم پشتیبانی ما در ارتباط باشید.</li>
                                    <li><strong>پایگاه دانش</strong>: ما یک پایگاه دانش جامع داریم که در آن به سوالات متداول پاسخ داده شده و راهنماهای آموزشی مختلفی ارائه شده است.</li>
                                    <li><strong>آموزش‌های تخصصی</strong>: ما دوره‌های آموزشی تخصصی را برای کاربران پیشرفته برگزار می‌کنیم.</li>
                                    <li><strong>پشتیبانی تلفنی</strong>: در صورت نیاز، می‌توانید با تیم پشتیبانی ما تماس بگیرید.</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <div class="xc-accrodion wow xcfadeUp" data-wow-delay="300ms">
                        <div class="xc-accrodion-title">
                            <span class="xc-icon"><i class="fa-regular fa-question"></i></span>
                            <h4>آیا آموزش‌های لازم برای استفاده از سرویس به کاربران ارائه می‌شود؟</h4>
                        </div>
                        <div class="xc-accrodion-content">
                            <div class="inner">
                                <p class="mb-2">بله، ما آموزش‌های لازم برای استفاده از سرویس را به کاربران ارائه می‌دهیم. این آموزش‌ها شامل:</p>
                                <ol>
                                    <li><strong>راهنماهای کاربری آنلاین</strong>: این راهنماها به صورت گام به گام نحوه استفاده از هر یک از قابلیت‌های سرویس را توضیح می‌دهند.</li>
                                    <li><strong>ویدئوهای آموزشی</strong>: ما ویدئوهای آموزشی کوتاهی را برای آموزش نحوه استفاده از ویژگی‌های مختلف سرویس تهیه کرده‌ایم.</li>
                                    <li><strong>وبینارهای آموزشی</strong>: ما به صورت دوره‌ای وبینارهایی را برگزار می‌کنیم تا به کاربران کمک کنیم تا با جدیدترین ویژگی‌های سرویس آشنا شوند.</li>
                                    <li><strong>پشتیبانی شخصی</strong>: تیم پشتیبانی ما آماده است تا به سوالات شما در مورد نحوه استفاده از سرویس پاسخ دهد.</li>
                                </ol>
                                <p>در کل، هدف ما این است که استفاده از سرویس ما برای کاربران به سادگی ممکن باشد و آن‌ها بتوانند به راحتی از تمام قابلیت‌های آن بهره‌مند شوند.</p>
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
