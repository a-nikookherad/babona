<!DOCTYPE html>
<html direction="rtl" dir="rtl" style="direction: rtl">
<!--begin::Head-->
<head>
    <base href=""/>
    <title>@yield("title","babona.ir")</title>
    <meta charset="utf-8"/>
    <meta name="description" content="@yield("description","babona.ir")"/>
    <meta name="keywords" content="@yield("keywords","babona.ir,بابونا,clothing,پوشاک")"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta property="og:locale" content="en_US"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="بابونا"/>
    <meta property="og:url" content="https://babona.ir"/>
    <meta property="og:site_name" content="babona | بابونا"/>
    {{--    <link rel="canonical" href="" />--}}
    <link rel="shortcut icon" href="{{asset("admin/media/logos/favicon.ico")}}"/>
    <!--begin::Fonts(mوatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>
    <!--end::Fonts-->

    @stack("styles_before")

<!--begin::Vendor Stylesheets(used for this page only)-->
    {{--    <link href="{{asset("admin/plugins/custom/fullcalendar/fullcalendar.bundle.css")}}" rel="stylesheet"
              type="text/css"/>--}}
<!--end::Vendor Stylesheets-->

    <!--begin::Global Stylesheets Bundle(mوatory for all pages)-->
    <link href="{{asset("admin/plugins/global/plugins.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset("admin/css/style.bundle.rtl.css")}}" rel="stylesheet" type="text/css"/>
    <!--end::Global Stylesheets Bundle-->

    @stack("styles_after")
    @stack("manual_styles")
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true"
      data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true"
      data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
      data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>
    var defaultThemeMode = "light";
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
    }
</script>
<!--end::Theme mode setup on page load-->

