<div class="xc-contact-page__section pt-50 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="xc-section__title-wrapper mb-30">
                    <h4 class=" sm-title wow">چه کمکی از ما برمی‌آید؟</h4>
                    <p>ایده یا پیشنهادی دارید؟ همین الان با ما در ارتباط باشید. ما در اسرع وقت به شما پاسخ خواهیم داد.</p>
                    <div class="xc-contact-img mt-40 mb-40">
                        <img src="{{ asset("theme/xaito/assets/img/resourse/contact-1.png") }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="xc-contact-page__form">
                    <form class="contact-form-validated" action="{{ route("contact.store") }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="xc-contact-page__input-box">
                                    <input type="text" id="name" name="name" placeholder="نام و نام خانوادگی"
                                           required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="xc-contact-page__input-box">
                                    <input type="email" id="email" name="email" placeholder="ایمیل"
                                           required>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="xc-contact-page__input-box">
                                    <select id="subject" name="subject" required>
                                        <option value="1">درخواست همکاری</option>
                                        <option value="2">انتقادات و پیشنهادات</option>
                                        <option value="3">گزارش باگ</option>
                                        <option value="4">دیگر</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="xc-contact-page__input-box">
                                        <textarea cols="30" rows="10" id="message" name="message"
                                                  placeholder="متن پیام..." required></textarea>
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
