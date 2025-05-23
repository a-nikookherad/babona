﻿<!DOCTYPE html>
<!--
نویسنده: Babona
محصولات نام: بابونا
خرید: https://1.envato.market/EA4JP
وب سایت: http://www.keenthemes.com
تماس با ما: support@keenthemes.com
دنبال کردن: www.twitter.com/keenthemes
دریبل: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
لاینسس شده: For each use you must have a valid license purchased only from above link in order to legally use the theme for your project.
-->
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <base href="../../../"/>
    <title>ورود به بخش مدیریت</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="بابونا "/>
    <meta property="og:site_name" content="Babona | بابونا"/>
    {{--    <link rel="shortcut icon" href="assets/media/logos/favicon.ico"/>--}}
    <link rel="shortcut icon" href="{{asset("admin/media/logos/favicon.ico")}}"/>
    <!--begin::Fonts(mوatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    {{--    <link href="assets/plugins/global/plugins.bundle.rtl.css" rel="stylesheet" type="text/css"/>--}}
    <link href="{{asset("admin/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
    {{--    <link href="assets/css/style.bundle.rtl.css" rel="stylesheet" type="text/css"/>--}}
    <link href="{{asset("admin/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light";
    var themeMode;
    if (document.documentElement) {
        if (document.documentElement.hasAttribute("data-theme-mode")) {
            themeMode = document.documentElement.getAttribute("data-theme-mode");
        } else {
            if (localStorage.getItem("data-theme") !== null) {
                themeMode = localStorage.getItem("data-theme");
            } else {
                themeMode = defaultThemeMode;
            }
        }
        if (themeMode === "system") {
            themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
        }
        document.documentElement.setAttribute("data-theme", themeMode);
    }</script>
<!--end::Theme mode setup on page load-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root" id="kt_app_root">
    <!--begin::Page bg image-->
    <style>body {
            background-image: url('{{asset("admin/media/auth/bg10.jpeg")}}');
        }

        [data-theme="dark"] body {
            background-image: url('{{asset("admin/media/auth/bg10-dark.jpeg")}}');
        }</style>
    <!--end::Page bg image-->
    <!--begin::احراز هویت - ورود -->
    <div class="d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::کناری-->
        <div class="d-flex flex-lg-row-fluid">
            <!--begin::Content-->
            <div class="d-flex flex-column flex-center pb-0 pb-lg-10 p-10 w-100">
                <!--begin::Image-->
                <img class="theme-light-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                     src="{{asset("admin/media/auth/agency.png")}}" alt=""/>
                <img class="theme-dark-show mx-auto mw-100 w-150px w-lg-300px mb-10 mb-lg-20"
                     src="{{asset("admin/media/auth/agency-dark.png")}}" alt=""/>
                <!--end::Image-->
                <!--begin::Title-->
                <h1 class="text-gray-800 fs-2qx fw-bold text-center mb-7">بابونا، محصولات متنوع با قیمت مناسب.</h1>
                <!--end::Title-->
                <!--begin::Text-->
                <div class="text-gray-600 fs-base text-center fw-semibold">در این نوع پست،
                    <a href="#" class="opacity-75-hover text-primary me-1">وبلاگ نویس</a>فردی را که با او مصاحبه کرده
                    اند معرفی می کند
                    <br/>و برخی اطلاعات پس زمینه در مورد ارائه می دهد
                    <a href="#" class="opacity-75-hover text-primary me-1">مصاحبه شونده</a>و آنها
                    <br/>کار بعد از این متن مصاحبه است.
                </div>
                <!--end::Text-->
            </div>
            <!--end::Content-->
        </div>
        <!--begin::کناری-->
        <!--begin::Body-->
        <div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12">
            <!--begin::Wrapper-->
            <div class="bg-body d-flex flex-center rounded-4 w-md-600px p-10">
                <!--begin::Content-->
                <div class="w-md-400px">
                    <!--begin::Form-->
                    <form class="form w-100" novalidate="novalidate" id="kt_sign_in_form"
                          data-kt-redirect-url="{{route("admin.dashboard")}}" action="#">
                        @csrf
                        <!--begin::Heading-->
                        <div class="text-center mb-11">
                            <!--begin::Title-->
                            <h1 class="text-dark fw-bolder mb-3">ورود</h1>
                            <!--end::Title-->
                            <!--begin::Subtitle-->
                            <div class="text-gray-500 fw-semibold fs-6">با شبکه های اجتماعی</div>
                            <!--end::Subtitle=-->
                        </div>
                        <!--begin::Heading-->
                        <!--begin::Login options-->
                        <div class="row g-3 mb-9">
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::گوگل link=-->
                                <a href="#"
                                   class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="{{asset("admin/media/svg/brand-logos/google-icon.svg")}}"
                                         class="h-15px me-3"/>ورود از طریق گوگل</a>
                                <!--end::گوگل link=-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-md-6">
                                <!--begin::گوگل link=-->
                                <a href="#"
                                   class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
                                    <img alt="Logo" src="{{asset("admin/media/svg/brand-logos/apple-black.svg")}}"
                                         class="theme-light-show h-15px me-3"/>
                                    <img alt="Logo" src="{{asset("admin/media/svg/brand-logos/apple-black-dark.svg")}}"
                                         class="theme-dark-show h-15px me-3"/>با اپلیکیشن وارد شوید</a>
                                <!--end::گوگل link=-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Login options-->
                        <!--begin::Separator-->
                        <div class="separator separator-content my-14">
                            <span class="w-125px text-gray-500 fw-semibold fs-7">یا با نام کاربری</span>
                        </div>
                        <!--end::Separator-->
                        <!--begin::Input group=-->
                        <div class="fv-row mb-8">
                            <!--begin::ایمیل-->
                            <input type="text" placeholder="ایمیل یا شماره موبایل" name="username" autocomplete="on"
                                   class="form-control bg-transparent"/>
                            <!--end::ایمیل-->
                        </div>
                        <!--end::Input group=-->
                        <div class="fv-row mb-3">
                            <!--begin::password-->
                            <input type="password" placeholder="کلمه عبور" name="password" autocomplete="off"
                                   class="form-control bg-transparent"/>
                            <!--end::password-->
                        </div>
                        <!--end::Input group=-->
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
                            <div></div>
                            <!--begin::Link-->
                        {{--<a href="../../demo1/dist/authentication/layouts/overlay/reset-password.html"
                           class="link-primary">فراموشی رمز?</a>--}}
                        <!--end::Link-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::ثبت button-->
                        <div class="d-grid mb-10">
                            <button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
                                <!--begin::Indicator label-->
                                <span class="indicator-label">ورود</span>
                                <!--end::Indicator label-->
                                <!--begin::Indicator progress-->
                                <span class="indicator-progress">لطفا صبر کنید...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                <!--end::Indicator progress-->
                            </button>
                        </div>
                        <!--end::ثبت button-->
                        <!--begin::ثبت نام-->
                    {{--<div class="text-gray-500 text-center fw-semibold fs-6">آیا هنوز عضو نشده?
                        <a href="../../demo1/dist/authentication/layouts/overlay/sign-up.html" class="link-primary">ثبت
                            نام</a></div>--}}
                    <!--end::ثبت نام-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Body-->
    </div>
    <!--end::احراز هویت - ورود-->
</div>
<!--end::Root-->
<!--begin::Javascript-->
<script>
    var hostUrl = "admin/";
    var loginUrl = "{{route("admin.login.post")}}";
</script>
<!--begin::Global Javascript Bundle(mوatory for all pages)-->
{{--<script src="assets/plugins/global/plugins.bundle.js"></script>--}}
<script src="{{asset("admin/plugins/global/plugins.bundle.js")}}"></script>
{{--<script src="assets/js/scripts.bundle.js"></script>--}}
<script src="{{asset("admin/js/scripts.bundle.js")}}"></script>
<!--end::Global Javascript Bundle-->
<!--begin::سفارشی Javascript(used for this page only)-->
{{--<script src="assets/js/custom/authentication/sign-in/general.js"></script>--}}
<script src="{{asset("admin/js/custom/authentication/sign-in/general.js")}}"></script>
<!--end::سفارشی Javascript-->
<!--end::Javascript-->
</body>
<!--end::Body-->
</html>
