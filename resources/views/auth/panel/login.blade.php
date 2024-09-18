<!DOCTYPE html>
<html lang="en" data-layout="two-column" data-two-column-color="brand">

<head>
    <meta charset="utf-8"/>
    <title>ورود به پنل مدیری | {{ env("APP_NAME") }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset("theme/vizion/ai-healthcare/images/favicon.ico") }}">
    <script src="{{ asset("panel/assets/js/head.js") }}"></script>
    <link href="{{ asset("panel/assets/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" id="app-style"/>
    <link href="{{ asset("panel/assets/css/app.min.css") }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset("panel/assets/css/icons.min.css") }}" rel="stylesheet" type="text/css"/>
    <style>
        @font-face {
            src: url(" {{ asset("theme/xaito/assets/fonts/IranYekan.woff2") }} ");
            font-family: 'iran-yekan';
        }

        body, h1, h2, h, h4, h5, h6 {
            font-family: 'iran-yekan', sans-serif;
            direction: rtl;
        }

        .form-check .form-check-input {
            float: right;
        }

        .list-inline-item:not(:last-child) {
            margin-right: 0;
            margin-left: 0.5rem;
        }

        .social-list {
            padding-left: 2rem;
        }
    </style>
</head>

<body class="authentication-bg authentication-bg-pattern">

<div class="account-pages mt-5 mb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="card bg-pattern">
                    <div class="card-body p-4">
                        <div class="text-center w-75 m-auto">
                            <div class="auth-brand">
                                <a href="index.html" class="logo logo-dark text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset("panel/assets/images/logo-dark.png") }}" alt=""
                                             height="22">
                                    </span>
                                </a>
                                <a href="index.html" class="logo logo-light text-center">
                                    <span class="logo-lg">
                                        <img src="{{ asset("panel/assets/images/logo-light.png") }}" alt=""
                                             height="22">
                                    </span>
                                </a>
                            </div>
                            <p class="text-muted mb-4 mt-3">ورود به پنل مدیریت.</p>
                        </div>
                        <form action="{{ route("panel.login") }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">ایمیل</label>
                                <input class="form-control" type="email" name="email" id="email" required="" placeholder="ایمیل">
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">رمز عبور</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="رمز عبور">
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                    <label class="form-check-label" for="checkbox-signin">مرا به خاطر بسپار</label>
                                </div>
                            </div>

                            <div class="text-center d-grid">
                                <button class="btn btn-primary" type="submit"> ورود</button>
                            </div>

                        </form>

                        <div class="text-center">
                            <h5 class="mt-3 text-muted">ورود با</h5>
                            <ul class="social-list list-inline mt-3 mb-0">
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="javascript: void(0);" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12 text-center">
                        <p><a href="auth-recoverpw.html" class="text-white-50 ms-1">فراموشی رمز عبور</a></p>
                        <p class="text-white-50">اکانت کاربری ندارید?
                            <a href="auth-register.html"class="text-white ms-1"><b>عضویت</b></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
