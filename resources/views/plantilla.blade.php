<!DOCTYPE html>
<html lang="en">
<head>
    <title>Open HTML Pro- Bootstrap 5</title>
    <meta charset="utf-8">
    <meta name="description"
        content="Open admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets.">
    <meta name="keywords"
        content="Open theme, bootstrap, bootstrap 5, admin themes, laravel, free admin themes, bootstrap admin, bootstrap dashboard">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Open HTML Pro - Bootstrap 5 HTML & Laravel Multipurpose Admin Dashboard Theme">
    <meta property="og:url" content="https://keenthemes.com/products/open-html-pro">
    <meta property="og:site_name" content="Keenthemes | Open HTML Pro">
    <link rel="canonical" href="index.htm">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico">

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="../css?family=Inter:300,400,500,600,700"> <!--end::Fonts-->

    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Vendor Stylesheets-->


    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css">
    <!--end::Global Stylesheets Bundle-->

    <!--Begin::Google Tag Manager -->
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');</script>
    <!--End::Google Tag Manager -->
</head>

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true"
    data-kt-app-toolbar-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true"
    data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true"
    data-kt-app-sidebar-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
    <script>
        var defaultThemeMode = "light";
        var themeMode;

        if (document.documentElement) {
            if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
            } else {
                if (localStorage.getItem("data-bs-theme") !== null) {
                    themeMode = localStorage.getItem("data-bs-theme");
                } else {
                    themeMode = defaultThemeMode;
                }
            }

            if (themeMode === "system") {
                themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
            }

            document.documentElement.setAttribute("data-bs-theme", themeMode);
        }            
    </script>
    <!--end::Theme mode setup on page load-->
    <!--Begin::Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5FS8GGP" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!--End::Google Tag Manager (noscript) -->


    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


            <!--begin::Header-->
            <div id="kt_app_header" class="app-header " data-kt-sticky="true"
                data-kt-sticky-activate="{default: true, lg: true}" data-kt-sticky-name="app-header-minimize"
                data-kt-sticky-offset="{default: '200px', lg: '300px'}" data-kt-sticky-animation="false">

                <!--begin::Header container-->
                <div class="app-container  container-fluid d-flex align-items-stretch flex-stack "
                    id="kt_app_header_container">
                    <!--begin::Sidebar toggle-->
                    <div class="d-flex align-items-center d-block d-lg-none ms-n3" title="Show sidebar menu">
                        <div class="btn btn-icon btn-color-gray-600 btn-active-color-primary w-35px h-35px me-1"
                            id="kt_app_sidebar_mobile_toggle">
                            <i class="ki-duotone ki-abstract-14 fs-2"><i class="path1"></i><i class="path2"></i></i>
                        </div>

                        <!--begin::Logo image-->
                        <a href="index.htm.html?page=index">
                            <img alt="Logo" src="assets/media/logos/default-dark.svg" class="h-30px">
                        </a>
                        <!--end::Logo image-->
                    </div>
                    <!--end::Sidebar toggle-->


                    <!--begin::Navbar-->
                    <div class="app-navbar flex-lg-grow-1" id="kt_app_header_navbar">
                        <div class="app-navbar-item d-flex align-items-center flex-lg-grow-1 me-2 me-lg-0">

                            <!--begin::Search-->
                            <div id="kt_header_search" class="header-search d-flex align-items-center w-lg-350px"
                                data-kt-search-keypress="true" data-kt-search-min-length="2"
                                data-kt-search-enter="enter" data-kt-search-layout="menu"
                                data-kt-search-responsive="true" data-kt-menu-trigger="auto"
                                data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">

                                <!--begin::Tablet and mobile search toggle-->
                                <div data-kt-search-element="toggle"
                                    class="search-toggle-mobile d-flex d-lg-none align-items-center">
                                    <div class="d-flex ">
                                        <i class="ki-duotone ki-magnifier fs-1 "><i class="path1"></i><i
                                                class="path2"></i></i>
                                    </div>
                                </div>
                                <!--end::Tablet and mobile search toggle-->

                                <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                                <form data-kt-search-element="form"
                                    class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                                    <!--begin::Hidden input(Added to disable form autocomplete)-->
                                    <input type="hidden">
                                    <!--end::Hidden input-->

                                    <!--begin::Icon-->
                                    <i
                                        class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5"><i
                                            class="path1"></i><i class="path2"></i></i> <!--end::Icon-->

                                    <!--begin::Input-->
                                    <input type="text" class="search-input form-control form-control rounded-1  ps-13"
                                        name="search" value="" placeholder="Search..." data-kt-search-element="input">
                                    <!--end::Input-->

                                    <!--begin::Spinner-->
                                    <span
                                        class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                        data-kt-search-element="spinner">
                                        <span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
                                    </span>
                                    <!--end::Spinner-->

                                    <!--begin::Reset-->
                                    <span
                                        class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4"
                                        data-kt-search-element="clear">
                                        <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><i class="path1"></i><i
                                                class="path2"></i></i> </span>
                                    <!--end::Reset-->
                                </form>
                                <!--end::Form-->
                                <!--begin::Menu-->
                                <div data-kt-search-element="content"
                                    class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                                    <!--begin::Wrapper-->
                                    <div data-kt-search-element="wrapper">
                                        <!--begin::Recently viewed-->
                                        <div data-kt-search-element="results" class="d-none">
                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-350px">
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0  pb-5"
                                                    data-kt-search-element="category-title">
                                                    Users </h3>
                                                <!--end::Category title-->




                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-6.jpg" alt="">
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Karina Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing
                                                            Manager</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-2.jpg" alt="">
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Olivia Bold</span>
                                                        <span class="fs-7 fw-semibold text-muted">Software
                                                            Engineer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-9.jpg" alt="">
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Ana Clark</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-14.jpg" alt="">
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Nick Pitola</span>
                                                        <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <img src="assets/media/avatars/300-11.jpg" alt="">
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                                        <span class="fs-7 fw-semibold text-muted">System
                                                            Administrator</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->
                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">
                                                    Customers </h3>
                                                <!--end::Category title-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/volicity-9.svg"
                                                                alt="">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Rbranding</span>
                                                        <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/tvit.svg" alt="">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Company Re-branding</span>
                                                        <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/misc/infography.svg" alt="">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Business Analytics App</span>
                                                        <span class="fs-7 fw-semibold text-muted">Administration</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/leaf.svg" alt="">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <img class="w-20px h-20px"
                                                                src="assets/media/svg/brand-logos/tower.svg" alt="">
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column justify-content-start fw-semibold">
                                                        <span class="fs-6 fw-semibold">Tower Group Website</span>
                                                        <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->

                                                <!--begin::Category title-->
                                                <h3 class="fs-5 text-muted m-0 pt-5 pb-5"
                                                    data-kt-search-element="category-title">
                                                    Projects </h3>
                                                <!--end::Category title-->


                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-notepad fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i><i
                                                                    class="path3"></i><i class="path4"></i><i
                                                                    class="path5"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45670</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-frame fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i><i
                                                                    class="path3"></i><i class="path4"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                                        <span class="fs-7 fw-semibold text-muted">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-message-text-2 fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i><i
                                                                    class="path3"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Finance Monitoring SAAS
                                                            Discussion</span>
                                                        <span class="fs-7 fw-semibold text-muted">#21090</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->



                                                <!--begin::Item-->
                                                <a href="#"
                                                    class="d-flex text-dark text-hover-primary align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-profile-circle fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i><i
                                                                    class="path3"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                                        <span class="fs-7 fw-semibold text-muted">#34560</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </a>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Recently viewed-->
                                        <div class="" data-kt-search-element="main">
                                            <!--begin::Heading-->
                                            <div class="d-flex flex-stack fw-semibold mb-4">
                                                <!--begin::Label-->
                                                <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                                <!--end::Label-->

                                                <!--begin::Toolbar-->
                                                <div class="d-flex" data-kt-search-element="toolbar">
                                                    <!--begin::Preferences toggle-->
                                                    <div data-kt-search-element="preferences-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle="
                                                        tooltip"="" title="Show search preferences">
                                                        <i class="ki-duotone ki-setting-2 fs-2"><i class="path1"></i><i
                                                                class="path2"></i></i>
                                                    </div>
                                                    <!--end::Preferences toggle-->

                                                    <!--begin::Advanced search toggle-->
                                                    <div data-kt-search-element="advanced-options-form-show"
                                                        class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1"
                                                        data-bs-toggle="tooltip" title="Show more search options">
                                                        <i class="ki-duotone ki-down fs-2"></i>
                                                    </div>
                                                    <!--end::Advanced search toggle-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Heading-->

                                            <!--begin::Items-->
                                            <div class="scroll-y mh-200px mh-lg-325px">
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-laptop fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp
                                                            by Keenthemes</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45789</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-simple fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i><i
                                                                    class="path3"></i><i class="path4"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept
                                                            API Project Meeting</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84050</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI
                                                            Monitoring App Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project
                                                            Reference FAQ</a>
                                                        <span class="fs-7 text-muted fw-semibold">#67945</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-sms fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro
                                                            App Development</a>
                                                        <span class="fs-7 text-muted fw-semibold">#84250</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-bank fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix
                                                            Mobile App</a>
                                                        <span class="fs-7 text-muted fw-semibold">#45690</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex align-items-center mb-5">
                                                    <!--begin::Symbol-->
                                                    <div class="symbol symbol-40px me-4">
                                                        <span class="symbol-label bg-light">
                                                            <i class="ki-duotone ki-chart-line-down fs-2 text-primary"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                        </span>
                                                    </div>
                                                    <!--end::Symbol-->

                                                    <!--begin::Title-->
                                                    <div class="d-flex flex-column">
                                                        <a href="#"
                                                            class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing
                                                            UI Design" Launch</a>
                                                        <span class="fs-7 text-muted fw-semibold">#24005</span>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Items-->
                                        </div>
                                        <!--end::Recently viewed-->
                                        <!--begin::Empty-->
                                        <div data-kt-search-element="empty" class="text-center d-none">
                                            <!--begin::Icon-->
                                            <div class="pt-10 pb-10">
                                                <i class="ki-duotone ki-search-list fs-4x opacity-50"><i
                                                        class="path1"></i><i class="path2"></i><i class="path3"></i></i>
                                            </div>
                                            <!--end::Icon-->

                                            <!--begin::Message-->
                                            <div class="pb-15 fw-semibold">
                                                <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                                <div class="text-muted fs-7">Please try again with a different query
                                                </div>
                                            </div>
                                            <!--end::Message-->
                                        </div>
                                        <!--end::Empty-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
                                        <!--end::Heading-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" class="form-control form-control-sm form-control-solid"
                                                placeholder="Contains the word" name="query">
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="has"
                                                        checked="checked">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                        All
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="users">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Users
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="orders">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Orders
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="type" value="projects">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Projects
                                                    </span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="assignedto"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Assigned to" value="">
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <input type="text" name="collaborators"
                                                class="form-control form-control-sm form-control-solid"
                                                placeholder="Collaborators" value="">
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <!--begin::Radio group-->
                                            <div class="nav-group nav-group-fluid">
                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="has"
                                                        checked="checked">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                                                        Has attachment
                                                    </span>
                                                </label>
                                                <!--end::Option-->

                                                <!--begin::Option-->
                                                <label>
                                                    <input type="radio" class="btn-check" name="attachment" value="any">
                                                    <span
                                                        class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                                                        Any
                                                    </span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Radio group-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="mb-5">
                                            <select name="timezone" aria-label="Select a Timezone"
                                                data-control="select2" data-placeholder="date_period"
                                                class="form-select form-select-sm form-select-solid">
                                                <option value="next">Within the next</option>
                                                <option value="last">Within the last</option>
                                                <option value="between">Between</option>
                                                <option value="on">On</option>
                                            </select>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-8">
                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <input type="number" name="date_number"
                                                    class="form-control form-control-sm form-control-solid"
                                                    placeholder="Lenght" value="">
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-6">
                                                <select name="date_typer" aria-label="Select a Timezone"
                                                    data-control="select2" data-placeholder="Period"
                                                    class="form-select form-select-sm form-select-solid">
                                                    <option value="days">Days</option>
                                                    <option value="weeks">Weeks</option>
                                                    <option value="months">Months</option>
                                                    <option value="years">Years</option>
                                                </select>
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="advanced-options-form-cancel">Cancel</button>

                                            <a href="index.htm-1.html?page=pages/search/horizontal"
                                                class="btn btn-sm fw-bold btn-primary"
                                                data-kt-search-element="advanced-options-form-search">Search</a>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                    <!--begin::Preferences-->
                                    <form data-kt-search-element="preferences" class="pt-1 d-none">
                                        <!--begin::Heading-->
                                        <h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
                                        <!--end::Heading-->

                                        <!--begin::Input group-->
                                        <div class="pb-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Projects
                                                </span>

                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked">
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Targets
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked">
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Affiliate Programs
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Referrals
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked">
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="py-4 border-bottom">
                                            <label
                                                class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                                <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                                                    Users
                                                </span>
                                                <input class="form-check-input" type="checkbox" value="1">
                                            </label>
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Actions-->
                                        <div class="d-flex justify-content-end pt-7">
                                            <button type="reset"
                                                class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2"
                                                data-kt-search-element="preferences-dismiss">Cancel</button>
                                            <button type="submit" class="btn btn-sm fw-bold btn-primary">Save
                                                Changes</button>
                                        </div>
                                        <!--end::Actions-->
                                    </form>
                                    <!--end::Preferences-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Search-->
                        </div>

                        <!--begin::Actions-->
                        <div class="d-flex align-self-center flex-center flex-shrink-0">
                            <a href="#" class="btn btn-sm btn-secondary d-flex flex-center ms-3 px-4 py-3"
                                data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                <i class="ki-duotone ki-plus-square fs-2 text-gray-400"><i class="path1"></i><i
                                        class="path2"></i><i class="path3"></i></i>
                                <span>Invite</span>
                            </a>

                            <a href="#" class="btn btn-sm btn-success ms-3 px-4 py-3" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_create_app">Create App</a>
                        </div>
                        <!--end::Actions-->

                        <!--begin::Header menu toggle-->
                        <!--end::Header menu toggle-->
                    </div>
                    <!--end::Navbar-->
                </div>
                <!--end::Header container-->
            </div>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">

                <!--begin::Toolbar-->
                <div id="kt_app_toolbar" class="app-toolbar ">

                    <!--begin::Toolbar container-->
                    <div id="kt_app_toolbar_container"
                        class="app-container  container-fluid d-flex flex-lg-column py-3 py-lg-6 ">



                        <!--begin::Page title-->
                        <div class="page-title d-flex align-items-center gap-1 me-3" data-kt-swapper="true"
                            data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}"
                            data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_header_wrapper'}">
                            <!--begin::Title-->
                            <span class="text-gray-900 fw-bolder fs-2x">
                                Account
                            </span>
                            <!--end::Title-->


                            <!--begin::Breadcrumb-->
                            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-base ms-3">


                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                    <a href="index.htm.html?page=index" class="text-gray-700 text-hover-primary">
                                        <i class="ki-duotone ki-home fs-3 text-gray-400 ms-2"></i>
                                    </a>
                                </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                                </li>
                                <!--end::Item-->



                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                    Account </li>
                                <!--end::Item-->

                                <!--begin::Item-->
                                <li class="breadcrumb-item">
                                    <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n2"></i>
                                </li>
                                <!--end::Item-->



                                <!--begin::Item-->
                                <li class="breadcrumb-item text-gray-500">
                                    Overview </li>
                                <!--end::Item-->


                            </ul>
                            <!--end::Breadcrumb-->
                        </div>
                        <!--end::Page title-->
                        <!--begin::Navs-->
                        <ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 active"
                                    href="index.htm.html?page=index">
                                    Overview </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index-1.htm?page=account/settings">
                                    Settings </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index.htm-2.html?page=account/security">
                                    Security </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index.htm-3.html?page=account/billing">
                                    Billing </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index-2.htm?page=account/statements">
                                    Statements </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index.htm-4.html?page=account/referrals">
                                    Referrals </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index.htm-5.html?page=account/api-keys">
                                    API Keys </a>
                            </li>
                            <!--end::Nav item-->
                            <!--begin::Nav item-->
                            <li class="nav-item mt-2">
                                <a class="nav-link text-active-primary ms-0 me-5 me-lg-8 pt-2 pb-3 pt-lg-4 pb-lg-5 "
                                    href="index.htm-6.html?page=account/logs">
                                    Logs </a>
                            </li>
                            <!--end::Nav item-->
                        </ul>
                        <!--begin::Navs-->

                        <!--begin::Separator-->
                        <div class="app-toolbar-container-separator separator d-none d-lg-flex"></div>
                        <!--end::Separator-->
                    </div>
                    <!--end::Toolbar container-->
                </div>
                <!--end::Toolbar-->




                <!--begin::Sidebar-->
                <div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true"
                    data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}"
                    data-kt-drawer-overlay="true" data-kt-drawer-width="300px" data-kt-drawer-direction="start"
                    data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">


                    <!--begin::Header-->
                    <div class="app-sidebar-header flex-column mx-10 pt-8" id="kt_app_sidebar_header">
                        <!--begin::Brand-->
                        <div class="d-flex flex-stack d-none d-lg-flex mb-13">
                            <!--begin::Logo-->
                            <a href="index.htm.html?page=index" class="app-sidebar-logo">
                                <img alt="Logo" src="assets/media/logos/default.svg"
                                    class="h-30px app-sidebar-logo-default">
                            </a>
                            <!--end::Logo-->

                            <!--begin::Chat-->
                            <div class="d-flex align-items-center <br />
<b>Warning</b>:  Undefined variable $itemClass in <b>/var/www/preview.keenthemes.com/kt-products/open/releases/2023-03-01-140756-pro/themes/open/html/dist/view/layout/partials/sidebar/_header.php</b> on line <b>18</b><br />
">
                                <!--begin::Menu wrapper-->
                                <div class="btn btn-icon w-15px h-15px w-lg-20px h-lg-20px btn-color-success position-relative"
                                    data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                                    data-kt-menu-placement="bottom-start">
                                    <i class="fonticon-stats fs-2"></i>

                                    <span
                                        class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle ms-7 mb-3 animation-blink">
                                    </span>

                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                        data-kt-menu="true" id="kt_menu_notifications">
                                        <!--begin::Heading-->
                                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                            style="background-image:url('/open-html-pro/assets/media/misc/menu-header-bg.jpg')">
                                            <!--begin::Title-->
                                            <h3 class="text-white fw-semibold px-9 mt-10 mb-6">
                                                Notifications <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                            </h3>
                                            <!--end::Title-->

                                            <!--begin::Tabs-->
                                            <ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-semibold px-9">
                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_1">Alerts</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                        data-bs-toggle="tab"
                                                        href="#kt_topbar_notifications_2">Updates</a>
                                                </li>

                                                <li class="nav-item">
                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                        data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
                                                </li>
                                            </ul>
                                            <!--end::Tabs-->
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Tab content-->
                                        <div class="tab-content">
                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-28 fs-2 text-primary"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Alice</a>
                                                                <div class="text-gray-400 fs-7">Phase 1 development
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 hr</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i
                                                                        class="ki-duotone ki-information fs-2 text-danger"><i
                                                                            class="path1"></i><i class="path2"></i><i
                                                                            class="path3"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">HR
                                                                    Confidential</a>
                                                                <div class="text-gray-400 fs-7">Confidential staff
                                                                    documents</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i
                                                                        class="ki-duotone ki-briefcase fs-2 text-warning"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Company
                                                                    HR</a>
                                                                <div class="text-gray-400 fs-7">Corporeate staff
                                                                    profiles</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-12 fs-2 text-success"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Redux</a>
                                                                <div class="text-gray-400 fs-7">New frontend admin theme
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i
                                                                        class="ki-duotone ki-colors-square fs-2 text-primary"><i
                                                                            class="path1"></i><i class="path2"></i><i
                                                                            class="path3"></i><i class="path4"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Project
                                                                    Breafing</a>
                                                                <div class="text-gray-400 fs-7">Product launch status
                                                                    update</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-info">
                                                                    <i class="ki-duotone ki-picture
 fs-2 text-info"></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Banner
                                                                    Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of banner
                                                                    images</div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">21 Jan</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-35px me-4">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i
                                                                        class="ki-duotone ki-color-swatch fs-2 text-warning"><i
                                                                            class="path1"></i><i class="path2"></i><i
                                                                            class="path3"></i><i class="path4"></i><i
                                                                            class="path5"></i><i class="path6"></i><i
                                                                            class="path7"></i><i class="path8"></i><i
                                                                            class="path9"></i><i class="path10"></i><i
                                                                            class="path11"></i><i class="path12"></i><i
                                                                            class="path13"></i><i class="path14"></i><i
                                                                            class="path15"></i><i class="path16"></i><i
                                                                            class="path17"></i><i class="path18"></i><i
                                                                            class="path19"></i><i class="path20"></i><i
                                                                            class="path21"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Title-->
                                                            <div class="mb-0 me-2">
                                                                <a href="#"
                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bold">Icon
                                                                    Assets</a>
                                                                <div class="text-gray-400 fs-7">Collection of SVG icons
                                                                </div>
                                                            </div>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">20 March</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Items-->

                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="index.htm-7.html?page=pages/user-profile/activity"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><i
                                                                class="path1"></i><i class="path2"></i></i> </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->

                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade show active" id="kt_topbar_notifications_2"
                                                role="tabpanel">
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-column px-9">
                                                    <!--begin::Section-->
                                                    <div class="pt-10 pb-0">
                                                        <!--begin::Title-->
                                                        <h3 class="text-dark text-center fw-bold">
                                                            Get Pro Access
                                                        </h3>
                                                        <!--end::Title-->

                                                        <!--begin::Text-->
                                                        <div class="text-center text-gray-600 fw-semibold pt-1">
                                                            Outlines keep you honest. They stoping you from amazing
                                                            poorly about drive
                                                        </div>
                                                        <!--end::Text-->

                                                        <!--begin::Action-->
                                                        <div class="text-center mt-5 mb-9">
                                                            <a href="#" class="btn btn-sm btn-primary px-6"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                        </div>
                                                        <!--end::Action-->
                                                    </div>
                                                    <!--end::Section-->

                                                    <!--begin::Illustration-->
                                                    <div class="text-center px-4">
                                                        <img class="mw-100 mh-200px" alt="image"
                                                            src="assets/media/illustrations/dozzy-1/1.png">
                                                    </div>
                                                    <!--end::Illustration-->
                                                </div>
                                                <!--end::Wrapper-->
                                            </div>
                                            <!--end::Tab panel-->

                                            <!--begin::Tab panel-->
                                            <div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
                                                <!--begin::Items-->
                                                <div class="scroll-y mh-325px my-5 px-8">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                order</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Just now</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">New
                                                                customer</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Payment
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">5 hrs</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Search
                                                                query</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">2 days</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
                                                                connection</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">1 week</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-success me-4">200
                                                                OK</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Database
                                                                restore</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Mar 5</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">System
                                                                update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">May 15</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Server
                                                                OS update</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Apr 3</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-warning me-4">300
                                                                WRN</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">API
                                                                rollback</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jun 30</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Refund
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Jul 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Withdrawal
                                                                process</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Sep 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack py-4">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-2">
                                                            <!--begin::Code-->
                                                            <span class="w-70px badge badge-light-danger me-4">500
                                                                ERR</span>
                                                            <!--end::Code-->

                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 text-hover-primary fw-semibold">Mail
                                                                tasks</a>
                                                            <!--end::Title-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light fs-8">Dec 10</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Item-->

                                                </div>
                                                <!--end::Items-->

                                                <!--begin::View more-->
                                                <div class="py-3 text-center border-top">
                                                    <a href="index.htm-7.html?page=pages/user-profile/activity"
                                                        class="btn btn-color-gray-600 btn-active-color-primary">
                                                        View All
                                                        <i class="ki-duotone ki-arrow-right fs-5"><i
                                                                class="path1"></i><i class="path2"></i></i> </a>
                                                </div>
                                                <!--end::View more-->
                                            </div>
                                            <!--end::Tab panel-->
                                        </div>
                                        <!--end::Tab content-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::Menu wrapper-->
                            </div>
                            <!--end::Chat-->
                        </div>
                        <!--end::Brand-->

                        <!--begin::User-->
                        <div class="d-flex  btn btn-outline btn-custom align-items-center w-200 mb-2"
                            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                            data-kt-menu-placement="bottom-start">
                            <!--begin::User-->
                            <div class="cursor-pointer symbol symbol-35px symbol-lg-40px me-3 ms-n2">
                                <img class="" src="assets/media/avatars/300-3.jpg" alt="user">
                            </div>
                            <!--end::User-->

                            <!--begin:Info-->
                            <div class="d-flex flex-column align-items-start flex-grow-1">
                                <a href="index.htm-8.html?page=pages/user-profile/projects"
                                    class="btn-title fs-6 fw-bold">Johnson</a>

                                <a href="index.htm-9.html?page=pages/user-profile/overview"
                                    class="btn-desc fs-7 fw-bold d-block">React Developer</a>
                            </div>
                            <!--end:Info-->

                            <i class="ki-duotone ki-icons/duotune/general/gen033.svg  btn-icon fs-2 me-n2"></i>
                        </div>


                        <!--begin::User account menu-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px"
                            data-kt-menu="true">
                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <div class="menu-content d-flex align-items-center px-3">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-50px me-5">
                                        <img alt="Logo" src="assets/media/avatars/300-3.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Username-->
                                    <div class="d-flex flex-column">
                                        <div class="fw-bold d-flex align-items-center fs-5">
                                            Johnson <span
                                                class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                                        </div>

                                        <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                                            React Developer </a>
                                    </div>
                                    <!--end::Username-->
                                </div>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="index.htm-10.html?page=account/overview" class="menu-link px-5">
                                    My Profile
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="index.htm-11.html?page=apps/projects/list" class="menu-link px-5">
                                    <span class="menu-text">My Projects</span>
                                    <span class="menu-badge">
                                        <span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title">My Subscription</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index.htm-4.html?page=account/referrals" class="menu-link px-5">
                                            Referrals
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index.htm-3.html?page=account/billing" class="menu-link px-5">
                                            Billing
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-2.htm?page=account/statements" class="menu-link px-5">
                                            Payments
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-2.htm?page=account/statements"
                                            class="menu-link d-flex flex-stack px-5">
                                            Statements

                                            <span class="ms-2" data-bs-toggle="tooltip" title="View your statements">
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu separator-->
                                    <div class="separator my-2"></div>
                                    <!--end::Menu separator-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content px-3">
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input w-30px h-20px" type="checkbox" value="1"
                                                    checked="checked" name="notifications">
                                                <span class="form-check-label text-muted fs-7">
                                                    Notifications
                                                </span>
                                            </label>
                                        </div>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="index-2.htm?page=account/statements" class="menu-link px-5">
                                    My Statements
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu separator-->
                            <div class="separator my-2"></div>
                            <!--end::Menu separator-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">
                                        Mode

                                        <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                                            <i class="ki-duotone ki-night-day theme-light-show fs-2"><i
                                                    class="path1"></i><i class="path2"></i><i class="path3"></i><i
                                                    class="path4"></i><i class="path5"></i><i class="path6"></i><i
                                                    class="path7"></i><i class="path8"></i><i class="path9"></i><i
                                                    class="path10"></i></i> <i
                                                class="ki-duotone ki-moon theme-dark-show fs-2"><i class="path1"></i><i
                                                    class="path2"></i></i> </span>
                                    </span>
                                </a>

                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="light">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-night-day fs-2"><i class="path1"></i><i
                                                        class="path2"></i><i class="path3"></i><i class="path4"></i><i
                                                        class="path5"></i><i class="path6"></i><i class="path7"></i><i
                                                        class="path8"></i><i class="path9"></i><i
                                                        class="path10"></i></i> </span>
                                            <span class="menu-title">
                                                Light
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="dark">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-moon fs-2"><i class="path1"></i><i
                                                        class="path2"></i></i> </span>
                                            <span class="menu-title">
                                                Dark
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-0">
                                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode"
                                            data-kt-value="system">
                                            <span class="menu-icon" data-kt-element="icon">
                                                <i class="ki-duotone ki-screen fs-2"><i class="path1"></i><i
                                                        class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                            </span>
                                            <span class="menu-title">
                                                System
                                            </span>
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->

                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}"
                                data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
                                <a href="#" class="menu-link px-5">
                                    <span class="menu-title position-relative">
                                        Language

                                        <span
                                            class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                            English <img class="w-15px h-15px rounded-1 ms-2"
                                                src="assets/media/flags/united-states.svg" alt="">
                                        </span>
                                    </span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-1.htm?page=account/settings"
                                            class="menu-link d-flex px-5 active">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/united-states.svg"
                                                    alt="">
                                            </span>
                                            English
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/spain.svg" alt="">
                                            </span>
                                            Spanish
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/germany.svg" alt="">
                                            </span>
                                            German
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/japan.svg" alt="">
                                            </span>
                                            Japanese
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="index-1.htm?page=account/settings" class="menu-link d-flex px-5">
                                            <span class="symbol symbol-20px me-4">
                                                <img class="rounded-1" src="assets/media/flags/france.svg" alt="">
                                            </span>
                                            French
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5 my-1">
                                <a href="index-1.htm?page=account/settings" class="menu-link px-5">
                                    Account Settings
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-5">
                                <a href="index.htm-12.html?page=authentication/sign-in/basic" class="menu-link px-5">
                                    Sign Out
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::User account menu-->

                        <!--end::User-->
                    </div>
                    <!--end::Header-->

                    <!--begin::Navs-->
                    <div class="app-sidebar-navs flex-column-fluid pb-6" id="kt_app_sidebar_navs">
                        <div id="kt_app_sidebar_navs_wrappers" class="hover-scroll-y my-2" data-kt-scroll="true"
                            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_app_sidebar_header"
                            data-kt-scroll-wrappers="#kt_app_sidebar_navs" data-kt-scroll-offset="5px">

                            <!--begin::Sidebar menu-->
                            <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false"
                                class="menu menu-column menu-rounded menu-sub-indention menu-active-bg mb-7">

                                <!--begin:Menu item-->
                                <div class="menu-item pt-5"><!--begin:Menu content-->
                                    <div class="menu-content"><span
                                            class="menu-heading fw-bold text-uppercase fs-5">Dashboards</span></div>
                                    <!--end:Menu content-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link active"
                                        href="index.htm.html?page=index"><span class="menu-icon"><i
                                                class="ki-duotone ki-element-11 fs-1"><i class="path1"></i><i
                                                    class="path2"></i><i class="path3"></i><i
                                                    class="path4"></i></i></span><span
                                            class="menu-title">Default</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="index.htm-13.html?page=dashboards/projects"><span class="menu-icon"><i
                                                class="ki-duotone ki-some-files fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Projects</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="index.htm-14.html?page=dashboards/ecommerce"><span class="menu-icon"><i
                                                class="ki-duotone ki-chart-line-star fs-1"><i class="path1"></i><i
                                                    class="path2"></i><i class="path3"></i></i></span><span
                                            class="menu-title">eCommerce</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="index.htm-15.html?page=dashboards/bidding"><span class="menu-icon"><i
                                                class="ki-duotone ki-rescue fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Bidding</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item pt-7"><!--begin:Menu content-->
                                    <div class="menu-content"><span
                                            class="menu-heading fw-bold text-uppercase fs-5">Pages</span></div>
                                    <!--end:Menu content-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-colors-square fs-1"><i class="path1"></i><i
                                                    class="path2"></i><i class="path3"></i><i
                                                    class="path4"></i></i></span><span class="menu-title">User
                                            Profile</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-9.html?page=pages/user-profile/overview"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-8.html?page=pages/user-profile/projects"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Projects</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-16.html?page=pages/user-profile/campaigns"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Campaigns</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-17.html?page=pages/user-profile/documents"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Documents</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-18.html?page=pages/user-profile/followers"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Followers</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-7.html?page=pages/user-profile/activity"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-chart-pie-4 fs-1"><i class="path1"></i><i
                                                    class="path2"></i><i class="path3"></i></i></span><span
                                            class="menu-title">Account</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-10.html?page=account/overview"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Overview</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index-1.htm?page=account/settings"><span class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-2.html?page=account/security"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Security</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-19.html?page=account/activity"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-3.html?page=account/billing"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Billing</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index-2.htm?page=account/statements"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Statements</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-4.html?page=account/referrals"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Referrals</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-5.html?page=account/api-keys"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">API Keys</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-6.html?page=account/logs"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Logs</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-user fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Authentication</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Sign In</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-12.html?page=authentication/sign-in/basic"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Basic</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-20.html?page=authentication/sign-in/two-steps"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Two Steps</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-21.html?page=authentication/sign-in/password-reset"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Password
                                                            Reset</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-22.html?page=authentication/sign-in/new-password"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">New
                                                            Password</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Sign Up</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-23.html?page=authentication/sign-up/basic"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Basic</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-24.html?page=authentication/sign-up/multi-steps"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Multi-steps</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-25.html?page=authentication/sign-up/free-trial"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Free Trial</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-26.html?page=authentication/sign-up/coming-soon"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Coming
                                                            Soon</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-27.html?page=authentication/general/welcome"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Welcome Message</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-28.html?page=authentication/general/verify-email"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Verify Email</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-29.html?page=authentication/general/password-confirmation"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Password
                                                    Confirmation</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-30.html?page=authentication/general/deactivation"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Account
                                                    Deactivation</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-31.html?page=authentication/general/error-404"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Error 404</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-32.html?page=authentication/general/error-500"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Error 500</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Email Templates</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion menu-active-bg">
                                                <!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-33.html?page=authentication/email/verify-email"
                                                        target="_blank"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Verify
                                                            Email</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-34.html?page=authentication/email/invitation"
                                                        target="_blank"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Account
                                                            Invitation</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-35.html?page=authentication/email/password-reset"
                                                        target="_blank"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Password
                                                            Reset</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-36.html?page=authentication/email/password-change"
                                                        target="_blank"><span class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Password
                                                            Changed</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-rocket fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">General</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-37.html?page=pages/general/about"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">About Us</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-38.html?page=pages/general/invoice"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Invoice</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-39.html?page=pages/general/faq"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">FAQ</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-40.html?page=pages/general/wizard"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Wizard</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index-3.htm?page=pages/general/pricing"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Pricing</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item pt-7"><!--begin:Menu content-->
                                    <div class="menu-content"><span
                                            class="menu-heading fw-bold text-uppercase fs-5">APPS</span></div>
                                    <!--end:Menu content-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-abstract-41 fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Projects</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-11.html?page=apps/projects/list"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">My Projects</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-41.html?page=apps/projects/project"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">View Project</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-42.html?page=apps/projects/targets"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Targets</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-43.html?page=apps/projects/budget"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Budget</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-44.html?page=apps/projects/users"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Users</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-45.html?page=apps/projects/files"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Files</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-46.html?page=apps/projects/activity"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Activity</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-47.html?page=apps/projects/settings"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-basket fs-1"><i class="path1"></i><i
                                                    class="path2"></i><i class="path3"></i><i
                                                    class="path4"></i></i></span><span
                                            class="menu-title">eCommerce</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Catalog</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-48.html?page=apps/ecommerce/catalog/products"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Products</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-49.html?page=apps/ecommerce/catalog/categories"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Categories</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-50.html?page=apps/ecommerce/catalog/add-product"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Add
                                                            Product</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-51.html?page=apps/ecommerce/catalog/edit-product"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Edit
                                                            Product</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-52.html?page=apps/ecommerce/catalog/add-category"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Add
                                                            Category</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-53.html?page=apps/ecommerce/catalog/edit-category"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Edit
                                                            Category</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Sales</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-54.html?page=apps/ecommerce/sales/listing"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Orders
                                                            Listing</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-55.html?page=apps/ecommerce/sales/details"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Order
                                                            Details</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-56.html?page=apps/ecommerce/sales/add-order"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Add Order</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-57.html?page=apps/ecommerce/sales/edit-order"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Edit Order</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Customers</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-58.html?page=apps/ecommerce/customers/listing"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customer
                                                            Listing</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-59.html?page=apps/ecommerce/customers/details"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customer
                                                            Details</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Reports</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-60.html?page=apps/ecommerce/reports/view"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Products
                                                            Viewed</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-61.html?page=apps/ecommerce/reports/sales"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Sales</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-62.html?page=apps/ecommerce/reports/returns"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Returns</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-63.html?page=apps/ecommerce/reports/customer-orders"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Customer
                                                            Orders</span></a><!--end:Menu link--></div>
                                                <!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-64.html?page=apps/ecommerce/reports/shipping"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Shipping</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-65.html?page=apps/ecommerce/settings"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Settings</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-abstract-28 fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span class="menu-title">User
                                            Management</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Users</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-66.html?page=apps/user-management/users/list"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Users List</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-67.html?page=apps/user-management/users/view"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View User</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                            <!--begin:Menu link--><span class="menu-link"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Roles</span><span
                                                    class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                            <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-68.html?page=apps/user-management/roles/list"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">Roles List</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item--><!--begin:Menu item-->
                                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                        href="index.htm-69.html?page=apps/user-management/roles/view"><span
                                                            class="menu-bullet"><span
                                                                class="bullet bullet-dot"></span></span><span
                                                            class="menu-title">View Role</span></a><!--end:Menu link-->
                                                </div><!--end:Menu item-->
                                            </div><!--end:Menu sub-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-70.html?page=apps/user-management/permissions"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Permissions</span></a><!--end:Menu link--></div>
                                        <!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                                    <!--begin:Menu link--><span class="menu-link"><span class="menu-icon"><i
                                                class="ki-duotone ki-abstract-9 fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Subscription</span><span
                                            class="menu-arrow"></span></span><!--end:Menu link--><!--begin:Menu sub-->
                                    <div class="menu-sub menu-sub-accordion"><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-71.html?page=apps/subscriptions/getting-started"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Getting Started</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-72.html?page=apps/subscriptions/list"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Subscription List</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-73.html?page=apps/subscriptions/add"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">Add Subscription</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item--><!--begin:Menu item-->
                                        <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                                href="index.htm-74.html?page=apps/subscriptions/view"><span
                                                    class="menu-bullet"><span
                                                        class="bullet bullet-dot"></span></span><span
                                                    class="menu-title">View Subscription</span></a><!--end:Menu link-->
                                        </div><!--end:Menu item-->
                                    </div><!--end:Menu sub-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item pt-7"><!--begin:Menu content-->
                                    <div class="menu-content"><span
                                            class="menu-heading fw-bold text-uppercase fs-5">Resources</span></div>
                                    <!--end:Menu content-->
                                </div><!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="https://preview.keenthemes.com/html/open-html-pro/docs/base/utilities"
                                        target="_blank"
                                        title="Check out over 200 in-house components, plugins and ready for use solutions"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right"><span class="menu-icon"><i
                                                class="ki-duotone ki-element-8 fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span
                                            class="menu-title">Components</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="https://preview.keenthemes.com/html/open-html-pro/docs" target="_blank"
                                        title="Check out the complete documentation" data-bs-toggle="tooltip"
                                        data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"><span
                                            class="menu-icon"><i class="ki-duotone ki-abstract-14 fs-1"><i
                                                    class="path1"></i><i class="path2"></i></i></span><span
                                            class="menu-title">Documentation</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="index.htm-75.html?page=layout-builder"
                                        title="Build your layout, preview and export HTML for server side integration"
                                        data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click"
                                        data-bs-placement="right"><span class="menu-icon"><i
                                                class="ki-duotone ki-switch fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span class="menu-title">Layout
                                            Builder</span></a><!--end:Menu link--></div>
                                <!--end:Menu item--><!--begin:Menu item-->
                                <div class="menu-item"><!--begin:Menu link--><a class="menu-link"
                                        href="https://preview.keenthemes.com/html/open-html-pro/docs/getting-started/changelog"
                                        target="_blank"><span class="menu-icon"><i
                                                class="ki-duotone ki-arrows-loop fs-1"><i class="path1"></i><i
                                                    class="path2"></i></i></span><span class="menu-title">Changelog
                                            v1.0.0</span></a><!--end:Menu link--></div><!--end:Menu item-->
                            </div>
                            <!--end::Sidebar menu-->

                            <!--begin::Projects-->
                            <div class="menu menu-rounded menu-column">
                                <!--begin::Heading-->
                                <div class="menu-item">
                                    <div class="menu-content menu-heading text-uppercase fs-6">
                                        Projects
                                    </div>
                                </div>
                                <!--end::Heading-->



                                <!--begin::Menu Item-->
                                <div class="menu-item">
                                    <!--begin::Menu link-->
                                    <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                        <!--begin::Bullet-->
                                        <span class="menu-icon">
                                            <span class="bullet bullet-dot h-10px w-10px bg-primary">
                                            </span>
                                        </span>
                                        <!--end::Bullet-->

                                        <!--begin::Title-->
                                        <span class="menu-title">
                                            Google Ads </span>
                                        <!--end::Title-->

                                        <!--begin::Badge-->
                                        <span class="menu-badge">
                                            <span class="badge badge-custom">
                                                6 </span>
                                        </span>
                                        <!--end::Badge-->
                                    </a>
                                    <!--end::Menu link-->
                                </div>
                                <!--end::Menu Item-->



                                <!--begin::Menu Item-->
                                <div class="menu-item">
                                    <!--begin::Menu link-->
                                    <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                        <!--begin::Bullet-->
                                        <span class="menu-icon">
                                            <span class="bullet bullet-dot h-10px w-10px bg-success">
                                            </span>
                                        </span>
                                        <!--end::Bullet-->

                                        <!--begin::Title-->
                                        <span class="menu-title">
                                            AirStoke App </span>
                                        <!--end::Title-->

                                        <!--begin::Badge-->
                                        <span class="menu-badge">
                                            <span class="badge badge-custom">
                                                2 </span>
                                        </span>
                                        <!--end::Badge-->
                                    </a>
                                    <!--end::Menu link-->
                                </div>
                                <!--end::Menu Item-->



                                <!--begin::Menu Item-->
                                <div class="menu-item">
                                    <!--begin::Menu link-->
                                    <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                        <!--begin::Bullet-->
                                        <span class="menu-icon">
                                            <span class="bullet bullet-dot h-10px w-10px bg-warning">
                                            </span>
                                        </span>
                                        <!--end::Bullet-->

                                        <!--begin::Title-->
                                        <span class="menu-title">
                                            Internal Tasks </span>
                                        <!--end::Title-->

                                        <!--begin::Badge-->
                                        <span class="menu-badge">
                                            <span class="badge badge-custom">
                                                37 </span>
                                        </span>
                                        <!--end::Badge-->
                                    </a>
                                    <!--end::Menu link-->
                                </div>
                                <!--end::Menu Item-->


                                <!--begin::Collapsible items-->
                                <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_projects_collapse">

                                    <!--begin::Menu Item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                            <!--begin::Bullet-->
                                            <span class="menu-icon">
                                                <span class="bullet bullet-dot h-10px w-10px bg-danger">
                                                </span>
                                            </span>
                                            <!--end::Bullet-->

                                            <!--begin::Title-->
                                            <span class="menu-title">
                                                Fitnes App </span>
                                            <!--end::Title-->

                                            <!--begin::Badge-->
                                            <span class="menu-badge">
                                                <span class="badge badge-custom">
                                                    3 </span>
                                            </span>
                                            <!--end::Badge-->
                                        </a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu Item-->



                                    <!--begin::Menu Item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                            <!--begin::Bullet-->
                                            <span class="menu-icon">
                                                <span class="bullet bullet-dot h-10px w-10px bg-info">
                                                </span>
                                            </span>
                                            <!--end::Bullet-->

                                            <!--begin::Title-->
                                            <span class="menu-title">
                                                Oppo CRM </span>
                                            <!--end::Title-->

                                            <!--begin::Badge-->
                                            <span class="menu-badge">
                                                <span class="badge badge-custom">
                                                    12 </span>
                                            </span>
                                            <!--end::Badge-->
                                        </a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu Item-->



                                    <!--begin::Menu Item-->
                                    <div class="menu-item">
                                        <!--begin::Menu link-->
                                        <a class="menu-link" href="index.htm-41.html?page=apps/projects/project">
                                            <!--begin::Bullet-->
                                            <span class="menu-icon">
                                                <span class="bullet bullet-dot h-10px w-10px bg-warning">
                                                </span>
                                            </span>
                                            <!--end::Bullet-->

                                            <!--begin::Title-->
                                            <span class="menu-title">
                                                Finance Dispatch </span>
                                            <!--end::Title-->

                                            <!--begin::Badge-->
                                            <span class="menu-badge">
                                                <span class="badge badge-custom">
                                                    25 </span>
                                            </span>
                                            <!--end::Badge-->
                                        </a>
                                        <!--end::Menu link-->
                                    </div>
                                    <!--end::Menu Item-->

                                </div>
                                <!--end::Collapsible items-->


                                <!--begin::Collapse toggle-->
                                <div class="menu-item">
                                    <!--begin::Toggle-->
                                    <a class="menu-link menu-collapse-toggle toggle collapsible collapsed"
                                        data-bs-toggle="collapse" href="#kt_app_sidebar_menu_projects_collapse"
                                        data-kt-toggle-text="Show less">
                                        <span class="menu-icon">
                                            <i class="ki-duotone ki-down toggle-off fs-3 me-0"></i> <i
                                                class="ki-duotone ki-up toggle-on fs-3 me-0"></i> </span>

                                        <!--begin::Title-->
                                        <span class="menu-title" data-kt-toggle-text-target="true">
                                            Show more
                                        </span>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Toggle-->
                                </div>
                                <!--end::Collapse toggle-->
                            </div>
                            <!--end::Projects-->
                        </div>
                    </div>
                    <!--end::Navs-->

                </div>
                <!--end::Sidebar-->


                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">


                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-fluid ">
                                <!--begin::Row-->
                                <div class="row gy-5 gx-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xxl-4 mb-5 mb-xl-10">
                                        <!--begin::Chart widget 27-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">
                                                <!--begin::Statistics-->
                                                <div class="m-0">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">35,568</span>
                                                        <!--end::Title-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                            8.02%
                                                        </span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Organic Sessions</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-0 pb-1">
                                                <div id="kt_charts_widget_27" class="min-h-auto"></div>
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 27-->


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xxl-4 mb-5 mb-xl-10">
                                        <!--begin::Chart widget 28-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">
                                                <!--begin::Statistics-->
                                                <div class="m-0">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">2,579</span>
                                                        <!--end::Title-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                            2.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Domain External
                                                        Links</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body d-flex align-items-end ps-4 pe-0 pb-4">
                                                <!--begin::Chart-->
                                                <div id="kt_charts_widget_28" class="h-300px w-100 min-h-auto"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 28-->


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xxl-4 mb-5 mb-xl-10">

                                        <!--begin::List widget 9-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">

                                                <!--begin::Statistics-->
                                                <div class="m-0">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">5,037</span>
                                                        <!--end::Title-->

                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                            2.2%
                                                        </span>
                                                        <!--end::Label-->

                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Visits by Social
                                                        Networks</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->

                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div
                                                class="card-body card-body d-flex justify-content-between flex-column pt-3">

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    2.6%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/linkedin-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                                                In</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                Media</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,088</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.4%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/slack-icon.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.2%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/youtube-3.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video
                                                                Channel</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">978</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    4.1%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                Network</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,458</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    8.3%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 9-->


                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xxl-4 mb-xxl-10">

                                        <!--begin::List widget 7-->
                                        <div class="card card-flush h-md-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">
                                                <!--begin::Statistics-->
                                                <div class="m-0">
                                                    <!--begin::Heading-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Title-->
                                                        <span
                                                            class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">0.37%</span>
                                                        <!--end::Title-->

                                                        <!--begin::Badge-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <i class="ki-duotone ki-arrow-up fs-5 text-danger ms-n1"><i
                                                                    class="path1"></i><i class="path2"></i></i>
                                                            8.02%
                                                        </span>
                                                        <!--end::Badge-->
                                                    </div>
                                                    <!--end::Heading-->

                                                    <!--begin::Description-->
                                                    <span class="fs-6 fw-semibold text-gray-400">Online store convertion
                                                        rate</span>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Statistics-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i></i>
                                                    </button>


                                                    <!--begin::Menu 2-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                                        data-kt-menu="true">
                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">
                                                                Quick Actions</div>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mb-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Ticket
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Customer
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-start">
                                                            <!--begin::Menu item-->
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">New Group</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>
                                                            <!--end::Menu item-->

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Admin Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Staff Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Member Group
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                New Contact
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu separator-->
                                                        <div class="separator mt-3 opacity-75"></div>
                                                        <!--end::Menu separator-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <div class="menu-content px-3 py-3">
                                                                <a class="btn btn-primary  btn-sm px-4" href="#">
                                                                    Generate Reports
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 2-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Items-->
                                                <div class="mb-0">
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <span class="symbol-label">
                                                                    <i
                                                                        class="ki-duotone ki-magnifier fs-3 text-gray-600"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Search
                                                                    Retargeting</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.24%</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center">
                                                                <!--begin::label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    2.4%
                                                                </span>
                                                                <!--end::label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <span class="symbol-label">
                                                                    <i class="ki-duotone ki-tiktok fs-3 text-gray-600"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Social
                                                                    Retargeting</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.94%</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center">
                                                                <!--begin::label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    9.4%
                                                                </span>
                                                                <!--end::label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <span class="symbol-label">
                                                                    <i class="ki-duotone ki-sms fs-3 text-gray-600"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Email
                                                                    Retargeting</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 me-3">1.23%</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center">
                                                                <!--begin::label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.2%
                                                                </span>
                                                                <!--end::label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <span class="symbol-label">
                                                                    <i class="ki-duotone ki-icon fs-3 text-gray-600"><i
                                                                            class="path1"></i><i class="path2"></i><i
                                                                            class="path3"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Referrals
                                                                    Customers</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.08%</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center">
                                                                <!--begin::label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.4%
                                                                </span>
                                                                <!--end::label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Section-->
                                                        <div class="d-flex align-items-center me-5">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px me-5">
                                                                <span class="symbol-label">
                                                                    <i
                                                                        class="ki-duotone ki-abstract-25 fs-3 text-gray-600"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->

                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Other</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                        <!--end::Section-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->
                                                            <span class="text-gray-800 fw-bold fs-6 me-3">0.46%</span>
                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex flex-center">
                                                                <!--begin::label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    8.3%
                                                                </span>
                                                                <!--end::label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->

                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 7-->

                                    </div>
                                    <!--end::Col-->


                                    <!--begin::Col-->
                                    <div class="col-xl-8 mb-5 mb-xl-10">

                                        <!--begin::Chart widget 20-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-5">
                                                <!--begin::Title-->
                                                <h3 class="card-title fw-bold text-gray-800">Monthly Targets</h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                                    <div data-kt-daterangepicker="true"
                                                        data-kt-daterangepicker-opens="left"
                                                        class="btn btn-sm btn-light d-flex align-items-center px-4">
                                                        <!--begin::Display range-->
                                                        <div class="text-gray-600 fw-bold">
                                                            Loading date range...
                                                        </div>
                                                        <!--end::Display range-->

                                                        <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i><i
                                                                class="path5"></i><i class="path6"></i></i>
                                                    </div>
                                                    <!--end::Daterangepicker-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Card body-->
                                            <div
                                                class="card-body d-flex justify-content-between flex-column pb-0 px-0 pt-1">
                                                <!--begin::Items-->
                                                <div class="d-flex flex-wrap d-grid gap-5 px-9 mb-5">
                                                    <!--begin::Item-->
                                                    <div class="me-md-2">
                                                        <!--begin::Statistics-->
                                                        <div class="d-flex mb-2">
                                                            <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                                                            <span
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">12,706</span>
                                                        </div>
                                                        <!--end::Statistics-->

                                                        <!--begin::Description-->
                                                        <span class="fs-6 fw-semibold text-gray-400">Targets for
                                                            April</span>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div
                                                        class="border-start-dashed border-end-dashed border-start border-end border-gray-300 px-5 ps-md-10 pe-md-7 me-md-5">
                                                        <!--begin::Statistics-->
                                                        <div class="d-flex mb-2">
                                                            <span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
                                                            <span
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">8,035</span>
                                                        </div>
                                                        <!--end::Statistics-->

                                                        <!--begin::Description-->
                                                        <span class="fs-6 fw-semibold text-gray-400">Actual for
                                                            April</span>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Item-->
                                                    <div class="m-0">
                                                        <!--begin::Statistics-->
                                                        <div class="d-flex align-items-center mb-2">
                                                            <!--begin::Currency-->
                                                            <span
                                                                class="fs-4 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                                            <!--end::Currency-->

                                                            <!--begin::Value-->
                                                            <span
                                                                class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">4,684</span>
                                                            <!--end::Value-->

                                                            <!--begin::Label-->
                                                            <span class="badge badge-light-success fs-base">
                                                                <i
                                                                    class="ki-duotone ki-black-up fs-7 text-success ms-n1"></i>
                                                                4.5%
                                                            </span>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Statistics-->

                                                        <!--begin::Description-->
                                                        <span class="fs-6 fw-semibold text-gray-400">GAP</span>
                                                        <!--end::Description-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Items-->

                                                <!--begin::Chart-->
                                                <div id="kt_charts_widget_20" class="min-h-auto ps-4 pe-6"
                                                    data-kt-chart-info="Revenue" style="height: 300px"></div>
                                                <!--end::Chart-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Chart widget 20-->

                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                                <!--begin::Row-->
                                <div class="row g-5 g-xl-10 g-xl-10">
                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">

                                        <!--begin::List widget 8-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7 mb-5">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Visits by
                                                        Country</span>
                                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">20 countries share
                                                        97% visits</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="index.htm-54.html?page=apps/ecommerce/sales/listing"
                                                        class="btn btn-sm btn-light">View All</a>
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-0">
                                                <!--begin::Items-->
                                                <div class="m-0">

                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/united-states.svg"
                                                            class="me-4 w-25px" style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">United
                                                                    States</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Direct
                                                                    link clicks</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">9,763</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        2.6%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/brazil.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Brasil</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">All
                                                                    Social Channels </span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">4,062</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        0.4%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/turkey.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Turkey</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Mailchimp
                                                                    Campaigns</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">1,680</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        0.2%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/france.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">France</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Impact
                                                                    Radius visits</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">849</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        4.1%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/india.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">India</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Many
                                                                    Sources</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">604</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-danger fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        8.3%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->

                                                    <!--begin::Separator-->
                                                    <div class="separator separator-dashed my-3"></div>
                                                    <!--end::Separator-->


                                                    <!--begin::Item-->
                                                    <div class="d-flex flex-stack">
                                                        <!--begin::Flag-->
                                                        <img src="assets/media/flags/sweden.svg" class="me-4 w-25px"
                                                            style="border-radius: 4px" alt="">
                                                        <!--end::Flag-->

                                                        <!--begin::Section-->
                                                        <div class="d-flex flex-stack flex-row-fluid d-grid gap-2">
                                                            <!--begin::Content-->
                                                            <div class="me-5">
                                                                <!--begin::Title-->
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary fs-6">Sweden</a>
                                                                <!--end::Title-->

                                                                <!--begin::Desc-->
                                                                <span
                                                                    class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                    Network</span>
                                                                <!--end::Desc-->
                                                            </div>
                                                            <!--end::Content-->

                                                            <!--begin::Info-->
                                                            <div class="d-flex align-items-center">
                                                                <!--begin::Number-->
                                                                <span
                                                                    class="text-gray-800 fw-bold fs-6 me-3 d-block">237</span>
                                                                <!--end::Number-->

                                                                <!--begin::Label-->
                                                                <div class="m-0">
                                                                    <!--begin::Label-->
                                                                    <span class="badge badge-light-success fs-base">
                                                                        <i
                                                                            class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                                class="path1"></i><i
                                                                                class="path2"></i></i>
                                                                        1.9%
                                                                    </span>
                                                                    <!--end::Label-->

                                                                </div>
                                                                <!--end::Label-->
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Section-->
                                                    </div>
                                                    <!--end::Item-->


                                                </div>
                                                <!--end::Items-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::LIst widget 8-->


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-xl-10">

                                        <!--begin::List widget 9-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header py-7">

                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-gray-800">Social Network
                                                        Visits</span>
                                                    <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social
                                                        visitors</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <a href="#" class="btn btn-sm btn-light">View All</a>
                                                </div>
                                                <!--end::Toolbar-->

                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div
                                                class="card-body card-body d-flex justify-content-between flex-column pt-3">

                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/dribbble-icon-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Dribbble</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Community</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">579</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    2.6%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/linkedin-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Linked
                                                                In</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                Media</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,588</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-danger fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-down fs-5 text-danger ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.4%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/slack-icon.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Slack</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Messanger</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">794</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    0.2%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/youtube-3.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">YouTube</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Video
                                                                Channel</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">1,578</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    4.1%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/instagram-2-1.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Instagram</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                Network</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">3,458</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    8.3%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                                <!--begin::Separator-->
                                                <div class="separator separator-dashed my-3"></div>
                                                <!--end::Separator-->


                                                <!--begin::Item-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Flag-->
                                                    <img src="assets/media/svg/brand-logos/facebook-3.svg"
                                                        class="me-4 w-30px" style="border-radius: 4px" alt="">
                                                    <!--end::Flag-->

                                                    <!--begin::Section-->
                                                    <div
                                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                                        <!--begin::Content-->
                                                        <div class="me-5">
                                                            <!--begin::Title-->
                                                            <a href="#"
                                                                class="text-gray-800 fw-bold text-hover-primary fs-6">Facebook</a>
                                                            <!--end::Title-->

                                                            <!--begin::Desc-->
                                                            <span
                                                                class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Social
                                                                Network</span>
                                                            <!--end::Desc-->
                                                        </div>
                                                        <!--end::Content-->

                                                        <!--begin::Wrapper-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Number-->

                                                            <span class="text-gray-800 fw-bold fs-4 me-3">2,047</span>

                                                            <!--end::Number-->

                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <!--begin::Label-->
                                                                <span class="badge badge-light-success fs-base">
                                                                    <i
                                                                        class="ki-duotone ki-arrow-up fs-5 text-success ms-n1"><i
                                                                            class="path1"></i><i class="path2"></i></i>
                                                                    1.9%
                                                                </span>
                                                                <!--end::Label-->

                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Wrapper-->
                                                    </div>
                                                    <!--end::Section-->
                                                </div>
                                                <!--end::Item-->


                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::List widget 9-->


                                    </div>
                                    <!--end::Col-->

                                    <!--begin::Col-->
                                    <div class="col-xl-4 mb-5 mb-xl-10">
                                        <!--begin::Chart widget 14-->
                                        <div class="card card-flush h-xl-100">
                                            <!--begin::Header-->
                                            <div class="card-header pt-7">
                                                <!--begin::Title-->
                                                <h3 class="card-title align-items-start flex-column">
                                                    <span class="card-label fw-bold text-dark">Departments</span>

                                                    <span class="text-gray-400 pt-2 fw-semibold fs-6">Performance &
                                                        achievements</span>
                                                </h3>
                                                <!--end::Title-->

                                                <!--begin::Toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Menu-->
                                                    <button
                                                        class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                                        data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                                        data-kt-menu-overflow="true">
                                                        <i class="ki-duotone ki-dots-square fs-1 text-gray-300 me-n1"><i
                                                                class="path1"></i><i class="path2"></i><i
                                                                class="path3"></i><i class="path4"></i></i>
                                                    </button>


                                                    <!--begin::Menu 3-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="menu-item px-3">
                                                            <div
                                                                class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                                                Payments
                                                            </div>
                                                        </div>
                                                        <!--end::Heading-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Create Invoice
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link flex-stack px-3">
                                                                Create Payment

                                                                <span class="ms-2" data-bs-toggle="tooltip"
                                                                    title="Specify a target name for future usage and reference">
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3">
                                                            <a href="#" class="menu-link px-3">
                                                                Generate Bill
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                            data-kt-menu-placement="right-end">
                                                            <a href="#" class="menu-link px-3">
                                                                <span class="menu-title">Subscription</span>
                                                                <span class="menu-arrow"></span>
                                                            </a>

                                                            <!--begin::Menu sub-->
                                                            <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Plans
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Billing
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3">
                                                                        Statements
                                                                    </a>
                                                                </div>
                                                                <!--end::Menu item-->

                                                                <!--begin::Menu separator-->
                                                                <div class="separator my-2"></div>
                                                                <!--end::Menu separator-->

                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <div class="menu-content px-3">
                                                                        <!--begin::Switch-->
                                                                        <label
                                                                            class="form-check form-switch form-check-custom form-check-solid">
                                                                            <!--begin::Input-->
                                                                            <input
                                                                                class="form-check-input w-30px h-20px"
                                                                                type="checkbox" value="1"
                                                                                checked="checked" name="notifications">
                                                                            <!--end::Input-->

                                                                            <!--end::Label-->
                                                                            <span
                                                                                class="form-check-label text-muted fs-6">
                                                                                Recuring
                                                                            </span>
                                                                            <!--end::Label-->
                                                                        </label>
                                                                        <!--end::Switch-->
                                                                    </div>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu sub-->
                                                        </div>
                                                        <!--end::Menu item-->

                                                        <!--begin::Menu item-->
                                                        <div class="menu-item px-3 my-1">
                                                            <a href="#" class="menu-link px-3">
                                                                Settings
                                                            </a>
                                                        </div>
                                                        <!--end::Menu item-->
                                                    </div>
                                                    <!--end::Menu 3-->

                                                    <!--end::Menu-->
                                                </div>
                                                <!--end::Toolbar-->
                                            </div>
                                            <!--end::Header-->

                                            <!--begin::Body-->
                                            <div class="card-body pt-5">
                                                <!--begin::Chart container-->
                                                <div id="kt_charts_widget_14_chart" class="w-100 h-350px"></div>
                                                <!--end::Chart container-->
                                            </div>
                                            <!--end::Body-->
                                        </div>
                                        <!--end::Chart widget 14-->
                                    </div>
                                    <!--end::Col-->
                                </div>
                                <!--end::Row-->

                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Content wrapper-->


                    <!--begin::Footer-->
                    <div id="kt_app_footer" class="app-footer ">
                        <!--begin::Footer container-->
                        <div
                            class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-1">2023&copy;</span>
                                <a href="https://keenthemes.com" target="_blank"
                                    class="text-gray-800 text-hover-primary">Keenthemes</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="https://keenthemes.com" target="_blank"
                                        class="menu-link px-2">About</a></li>

                                <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank"
                                        class="menu-link px-2">Support</a></li>

                                <li class="menu-item"><a href="https://keenthemes.com/products/open-html-pro"
                                        target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Footer container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end:::Main-->


            </div>
            <!--end::Wrapper-->


        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->


    <!--begin::App layout builder-->
    <div id="kt_app_layout_builder" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="app-settings"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '380px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_app_layout_builder_toggle" data-kt-drawer-close="#kt_app_layout_builder_close">

        <!--begin::Card-->
        <div class="card border-0 shadow-none rounded-0 w-100">
            <!--begin::Card header-->
            <div class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4"
                id="kt_app_layout_builder_header"
                style="background-image:url('assets/media/misc/layout/customizer-header-bg.jpg')">

                <!--begin::Card title-->
                <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
                    Open HTML Pro Builder

                    <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
                        Get your product deeply customized
                    </small>
                </h3>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <button type="button"
                        class="btn btn-sm btn-icon bg-white bg-opacity-25 btn-color-white p-0 w-20px h-20px rounded-1"
                        id="kt_app_layout_builder_close">
                        <i class="ki-duotone ki-cross-square fs-2"><i class="path1"></i><i class="path2"></i></i>
                    </button>
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body position-relative" id="kt_app_layout_builder_body">
                <!--begin::Content-->
                <div id="kt_app_settings_content" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_app_layout_builder_body"
                    data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Form-->
                    <form class="form" method="POST" id="kt_app_layout_builder_form" action="/open-html-pro/index.php">
                        <input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]">

                        <!--begin::Card body-->
                        <div class="card-body p-0">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <!--begin::Heading-->
                                <div class="mb-6">
                                    <h4 class="fw-bold text-dark">Theme Mode</h4>
                                    <div class="fw-semibold text-muted fs-7 d-block lh-1">
                                        Enjoy Dark & Light modes.

                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/open-html-pro/docs/getting-started/dark-mode"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="row " data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image,.form-check-input">
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="assets/media/preview/light.png" class="mw-100 mh-250px"
                                                    alt="">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="light"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_light">

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Light </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->
                                    <!--begin::Col-->
                                    <div class="col-6">
                                        <!--begin::Option-->
                                        <label class="form-check-image form-check-success">
                                            <!--begin::Image-->
                                            <div class="form-check-wrapper border-gray-200 border-2">
                                                <img src="assets/media/preview/dark.png" class="mw-100 mh-250px" alt="">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Check-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
                                                <input class="form-check-input" type="radio" value="dark"
                                                    name="theme_mode" id="kt_layout_builder_theme_mode_dark">

                                                <!--begin::Label-->
                                                <div class="form-check-label text-gray-700">
                                                    Dark </div>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Check-->
                                        </label>
                                        <!--end::Option-->
                                    </div>
                                    <!--end::Col-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>

                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">RTL Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">
                                        Change Language Direction.

                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/open-html-pro/docs/getting-started/rtl"
                                            target="_blank">See docs</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-solid form-check-success form-switch">
                                        <input type="hidden" value="false"
                                            name="layout-builder[layout][app][general][rtl]">

                                        <input class="form-check-input w-45px h-30px" type="checkbox" value="true"
                                            name="layout-builder[layout][app][general][rtl]">
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Width Mode</h4>
                                    <div class="fs-7 fw-semibold text-muted">Page width options</div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex gap-7">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" checked="" value="default"
                                            id="kt_layout_builder_page_width_default"
                                            name="layout-builder[layout][app][general][page-width]">

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_default">
                                            Default </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fluid"
                                            id="kt_layout_builder_page_width_fluid"
                                            name="layout-builder[layout][app][general][page-width]">

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_fluid">
                                            Fluid </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-custom form-check-success form-check-solid form-check-sm">
                                        <input class="form-check-input" type="radio" value="fixed"
                                            id="kt_layout_builder_page_width_fixed"
                                            name="layout-builder[layout][app][general][page-width]">

                                        <!--begin::Label-->
                                        <label class="form-check-label text-gray-700 fw-bold text-nowrap"
                                            for="kt_layout_builder_page_width_fixed">
                                            Fixed </label>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group ">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column mb-4">
                                    <h4 class="fw-bold text-dark">Keenicons Style</h4>

                                    <div>
                                        <span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
                                        <a class="fw-semibold"
                                            href="https://preview.keenthemes.com/html/open-html-pro/docs/icons/keenicons"
                                            target="_blank">Learn more</a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Options-->
                                <div class="d-flex flex-stack gap-3 " data-kt-buttons="true"
                                    data-kt-buttons-target=".form-check-image,.form-check-input">

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover active">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><i
                                                    class="path1"></i><i class="path2"></i></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="duotone" checked=""
                                                name="layout-builder[layout][app][general][icons]">
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="outline"
                                                name="layout-builder[layout][app][general][icons]">
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                    <!--begin::Option-->
                                    <label
                                        class="form-check-image form-check-success w-100 parent-active parent-hover ">
                                        <!--begin::Image-->
                                        <div
                                            class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
                                            <i
                                                class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>
                                            <span
                                                class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>
                                        </div>
                                        <!--end::Image-->

                                        <!--begin::Check-->
                                        <div
                                            style="visibility: hidden; height: 0 !important; width: 0 !importnat; overflow:hidden">
                                            <input class="form-check-input" type="radio" value="solid"
                                                name="layout-builder[layout][app][general][icons]">
                                        </div>
                                        <!--end::Check-->
                                    </label>
                                    <!--end::Option-->

                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Form group-->
                            <div class="separator separator-dashed my-5"></div>


                            <!--begin::Form group-->
                            <div class="form-group d-flex flex-stack">
                                <!--begin::Heading-->
                                <div class="d-flex flex-column">
                                    <h4 class="fw-bold text-dark">Fixed Header</h4>

                                    <div class="fs-7 fw-semibold text-muted">
                                        Enable fixed header

                                        <a href="index.htm-75.html?page=layout-builder"
                                            class="fw-semibold text-primary">
                                            More layout options
                                        </a>
                                    </div>
                                </div>
                                <!--end::Heading-->

                                <!--begin::Option-->
                                <div class="d-flex justify-content-end">
                                    <!--begin::Check-->
                                    <div
                                        class="form-check form-check-solid form-check-custom form-check-success form-switch">
                                        <input type="hidden" value="false"
                                            name="layout-builder[layout][app][header][default][fixed][desktop]">

                                        <input class="form-check-input w-45px h-30px" type="checkbox" checked=""
                                            value="true"
                                            name="layout-builder[layout][app][header][default][fixed][desktop]">
                                    </div>
                                    <!--end::Check-->
                                </div>
                                <!--end::Option-->
                            </div>
                            <!--end::Form group-->

                        </div>
                        <!--end::Card body-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
                <button type="button" id="kt_app_layout_builder_preview"
                    class="btn btn-primary flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Preview</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>

                <button type="button" id="kt_app_layout_builder_reset" class="btn btn-light flex-grow-1 fw-semibold">

                    <!--begin::Indicator label-->
                    <span class="indicator-label">
                        Reset</span>
                    <!--end::Indicator label-->

                    <!--begin::Indicator progress-->
                    <span class="indicator-progress">
                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                    </span>
                    <!--end::Indicator progress--> </button>
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::App layout builder-->

    <!--begin::App settings toggle-->
    <button id="kt_app_layout_builder_toggle" class="btn btn-dark app-layout-builder-toggle lh-1 py-4 "
        title="Open HTML Pro Builder" data-bs-custom-class="tooltip-inverse" data-bs-toggle="tooltip"
        data-bs-placement="left" data-bs-dismiss="click" data-bs-trigger="hover">
        <i class="ki-duotone ki-setting-4 fs-4 me-1"></i> Customize
    </button>
    <!--end::App settings toggle-->
    <!--begin::Drawers-->
    <!--begin::Activities drawer-->
    <div id="kt_activities" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="activities"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close">

        <div class="card shadow-none border-0 rounded-0">
            <!--begin::Header-->
            <div class="card-header" id="kt_activities_header">
                <h3 class="card-title fw-bold text-dark">Activity Logs</h3>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                        id="kt_activities_close">
                        <i class="ki-duotone ki-cross fs-1"><i class="path1"></i><i class="path2"></i></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body position-relative" id="kt_activities_body">
                <!--begin::Content-->
                <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_activities_body"
                    data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                    data-kt-scroll-offset="5px">

                    <!--begin::Timeline items-->
                    <div class="timeline">
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-message-text-2 fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i><i class="path3"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile
                                        App” project:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                        <!--begin::Title-->
                                        <a href="index.htm-41.html?page=apps/projects/project"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Meeting
                                            with customer</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px pe-2">
                                            <span class="badge badge-light text-muted">Application Design</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-2.jpg" alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-14.jpg" alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">
                                                    A</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px pe-2">
                                            <span class="badge badge-light-primary">In Progress</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="index.htm-41.html?page=apps/projects/project"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->

                                    <!--begin::Record-->
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                        <!--begin::Title-->
                                        <a href="index.htm-41.html?page=apps/projects/project"
                                            class="fs-5 text-dark text-hover-primary fw-semibold w-375px min-w-200px">Project
                                            Delivery Preparation</a>
                                        <!--end::Title-->

                                        <!--begin::Label-->
                                        <div class="min-w-175px">
                                            <span class="badge badge-light text-muted">CRM System Development</span>
                                        </div>
                                        <!--end::Label-->

                                        <!--begin::Users-->
                                        <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <img src="assets/media/avatars/300-20.jpg" alt="img">
                                            </div>
                                            <!--end::User-->

                                            <!--begin::User-->
                                            <div class="symbol symbol-circle symbol-25px">
                                                <div
                                                    class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">
                                                    B</div>
                                            </div>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Users-->

                                        <!--begin::Progress-->
                                        <div class="min-w-125px">
                                            <span class="badge badge-light-success">Completed</span>
                                        </div>
                                        <!--end::Progress-->

                                        <!--begin::Action-->
                                        <a href="index.htm-41.html?page=apps/projects/project"
                                            class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Record-->
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-flag fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n2">
                                <!--begin::Timeline heading-->
                                <div class="overflow-auto pe-3">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that
                                        speak human workshop</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                                            <img src="assets/media/avatars/300-1.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-disconnect fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i><i class="path3"></i><i class="path4"></i><i
                                            class="path5"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="mb-5 pe-3">
                                    <!--begin::Title-->
                                    <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New
                                        Incoming Project Files:</a>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                                            <img src="assets/media/avatars/300-23.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="" class="w-30px me-3" src="assets/media/svg/files/pdf.svg">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="index.htm-41.html?page=apps/projects/project"
                                                    class="fs-6 text-hover-primary fw-bold">Finance KPI App
                                                    Guidelines</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">1.9mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--begin::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                            <!--begin::Icon-->
                                            <img alt="/open-html-pro/?page=apps/projects/project" class="w-30px me-3"
                                                src="assets/media/svg/files/doc.svg">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing
                                                    Results</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">18kb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="d-flex flex-aligns-center">
                                            <!--begin::Icon-->
                                            <img alt="/open-html-pro/?page=apps/projects/project" class="w-30px me-3"
                                                src="assets/media/svg/files/css.svg">
                                            <!--end::Icon-->

                                            <!--begin::Info-->
                                            <div class="ms-1 fw-semibold">
                                                <!--begin::Desc-->
                                                <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                                                <!--end::Desc-->

                                                <!--begin::Number-->
                                                <div class="text-gray-400">20mb</div>
                                                <!--end::Number-->
                                            </div>
                                            <!--end::Icon-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-abstract-26 fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        Task <a href="#" class="text-primary fw-bold me-1">#45890</a>
                                        merged with <a href="#" class="text-primary fw-bold me-1">#45890</a> in “Ads Pro
                                        Admin Dashboard project:
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                                            <img src="assets/media/avatars/300-14.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-pencil fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                                            <img src="assets/media/avatars/300-2.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">
                                    <div
                                        class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-29.jpg">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay me-10">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-31.jpg">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->

                                        <!--begin::Item-->
                                        <div class="overlay">
                                            <!--begin::Image-->
                                            <div class="overlay-wrapper">
                                                <img alt="img" class="rounded w-150px"
                                                    src="assets/media/stock/600x400/img-40.jpg">
                                            </div>
                                            <!--end::Image-->

                                            <!--begin::Link-->
                                            <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                            </div>
                                            <!--end::Link-->
                                        </div>
                                        <!--end::Item-->
                                    </div>
                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-sms fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New case <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is assigned to you in Multi-platform Database Design project
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="overflow-auto pb-5">
                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center mt-1 fs-6">
                                            <!--begin::Info-->
                                            <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                            <!--end::Info-->

                                            <!--begin::User-->
                                            <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                                            <!--end::User-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-pencil fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mb-10 mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                            data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                                            <img src="assets/media/avatars/300-4.jpg" alt="img">
                                        </div>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->

                                <!--begin::Timeline details-->
                                <div class="overflow-auto pb-5">

                                    <!--begin::Notice-->
                                    <div
                                        class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                        <!--begin::Icon-->
                                        <i class="ki-duotone ki-devices-2 fs-2tx text-primary me-4"><i
                                                class="path1"></i><i class="path2"></i><i class="path3"></i></i>
                                        <!--end::Icon-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                            <!--begin::Content-->
                                            <div class="mb-3 mb-md-0 fw-semibold">
                                                <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!
                                                </h4>

                                                <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make
                                                    sure the data integrity is OK</div>
                                            </div>
                                            <!--end::Content-->

                                            <!--begin::Action-->
                                            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap">
                                                Proceed </a>
                                            <!--end::Action-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Notice-->

                                </div>
                                <!--end::Timeline details-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                        <!--begin::Timeline item-->
                        <div class="timeline-item">
                            <!--begin::Timeline line-->
                            <div class="timeline-line w-40px"></div>
                            <!--end::Timeline line-->

                            <!--begin::Timeline icon-->
                            <div class="timeline-icon symbol symbol-circle symbol-40px">
                                <div class="symbol-label bg-light">
                                    <i class="ki-duotone ki-basket fs-2 text-gray-500"><i class="path1"></i><i
                                            class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                                </div>
                            </div>
                            <!--end::Timeline icon-->

                            <!--begin::Timeline content-->
                            <div class="timeline-content mt-n1">
                                <!--begin::Timeline heading-->
                                <div class="pe-3 mb-5">
                                    <!--begin::Title-->
                                    <div class="fs-5 fw-semibold mb-2">
                                        New order <a href="#" class="text-primary fw-bold me-1">#67890</a>
                                        is placed for Workshow Planning & Budget Estimation
                                    </div>
                                    <!--end::Title-->

                                    <!--begin::Description-->
                                    <div class="d-flex align-items-center mt-1 fs-6">
                                        <!--begin::Info-->
                                        <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                        <!--end::Info-->

                                        <!--begin::User-->
                                        <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                                        <!--end::User-->
                                    </div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Timeline heading-->
                            </div>
                            <!--end::Timeline content-->
                        </div>
                        <!--end::Timeline item-->
                    </div>
                    <!--end::Timeline items-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

            <!--begin::Footer-->
            <div class="card-footer py-5 text-center" id="kt_activities_footer">
                <a href="index.htm-7.html?page=pages/user-profile/activity" class="btn btn-bg-body text-primary">
                    View All Activities <i class="ki-duotone ki-arrow-right fs-3 text-primary"><i class="path1"></i><i
                            class="path2"></i></i> </a>
            </div>
            <!--end::Footer-->
        </div>
    </div>
    <!--end::Activities drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

        <!--begin::Messenger-->
        <div class="card w-100 rounded-0 border-0" id="kt_drawer_chat_messenger">
            <!--begin::Card header-->
            <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                <!--begin::Title-->
                <div class="card-title">
                    <!--begin::User-->
                    <div class="d-flex justify-content-center flex-column me-3">
                        <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                        <!--begin::Info-->
                        <div class="mb-0 lh-1">
                            <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                            <span class="fs-7 fw-semibold text-muted">Active</span>
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <div class="me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary" data-kt-menu-trigger="click"
                            data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-dots-square fs-3"><i class="path1"></i><i class="path2"></i><i
                                    class="path3"></i><i class="path4"></i></i> </button>

                        <!--begin::Menu 3-->
                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3"
                            data-kt-menu="true">
                            <!--begin::Heading-->
                            <div class="menu-item px-3">
                                <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
                                    Contacts
                                </div>
                            </div>
                            <!--end::Heading-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_users_search">
                                    Add Contact
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3">
                                <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                    data-bs-target="#kt_modal_invite_friends">
                                    Invite Contacts

                                    <span class="ms-2" data-bs-toggle="tooltip"
                                        title="Specify a contact email to send an invitation">
                                    </span>
                                </a>
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                data-kt-menu-placement="right-start">
                                <a href="#" class="menu-link px-3">
                                    <span class="menu-title">Groups</span>
                                    <span class="menu-arrow"></span>
                                </a>

                                <!--begin::Menu sub-->
                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Create Group
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Invite Members
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                            Settings
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu sub-->
                            </div>
                            <!--end::Menu item-->

                            <!--begin::Menu item-->
                            <div class="menu-item px-3 my-1">
                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                                    Settings
                                </a>
                            </div>
                            <!--end::Menu item-->
                        </div>
                        <!--end::Menu 3-->
                    </div>
                    <!--end::Menu-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                        <i class="ki-duotone ki-cross fs-2"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body" id="kt_drawer_chat_messenger_body">
                <!--begin::Messages-->
                <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                    data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                    data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                    data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">



                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">2 mins</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                How likely are you to recommend our company to your friends and family ? </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">5 mins</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-1.jpg"></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Hey there, we’re just writing to let you know that you’ve been subscribed to a
                                repository on GitHub. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">1 Hour</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Ok, Understood! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">2 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-1.jpg"></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                You’ll receive notifications for all issues, pull requests! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">3 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                You can unwatch this repository immediately by clicking here: <a
                                    href="https://keenthemes.com">Keenthemes.com</a> </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(out)-->
                    <div class="d-flex justify-content-end mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">4 Hours</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-1.jpg"></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                                Most purchased Business courses during this sale! </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(out)-->

                    <!--begin::Message(in)-->
                    <div class="d-flex justify-content-start mb-10 ">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">5 Hours</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Company BBQ to celebrate the last quater achievements and goals. Food and drinks
                                provided </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(in)-->

                    <!--begin::Message(template for out)-->
                    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-end">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Details-->
                                <div class="me-3">
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>
                                </div>
                                <!--end::Details-->

                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-1.jpg"></div><!--end::Avatar-->
                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-primary text-dark fw-semibold mw-lg-400px text-end"
                                data-kt-element="message-text">
                            </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for out)-->

                    <!--begin::Message(template for in)-->
                    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-column align-items-start">
                            <!--begin::User-->
                            <div class="d-flex align-items-center mb-2">
                                <!--begin::Avatar-->
                                <div class="symbol  symbol-35px symbol-circle "><img alt="Pic"
                                        src="assets/media/avatars/300-25.jpg"></div><!--end::Avatar-->
                                <!--begin::Details-->
                                <div class="ms-3">
                                    <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                    <span class="text-muted fs-7 mb-1">Just now</span>
                                </div>
                                <!--end::Details-->

                            </div>
                            <!--end::User-->

                            <!--begin::Text-->
                            <div class="p-5 rounded bg-light-info text-dark fw-semibold mw-lg-400px text-start"
                                data-kt-element="message-text">
                                Right before vacation season we have the next Big Deal for you. </div>
                            <!--end::Text-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Message(template for in)-->
                </div>
                <!--end::Messages-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
                <!--begin::Input-->
                <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                    placeholder="Type a message">

            </textarea>
                <!--end::Input-->

                <!--begin:Toolbar-->
                <div class="d-flex flex-stack">
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center me-2">
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-paper-clip fs-3"></i> </button>
                        <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                            data-bs-toggle="tooltip" title="Coming soon">
                            <i class="ki-duotone ki-cloud-add fs-3"><i class="path1"></i><i class="path2"></i></i>
                        </button>
                    </div>
                    <!--end::Actions-->

                    <!--begin::Send-->
                    <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                    <!--end::Send-->
                </div>
                <!--end::Toolbar-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->

    <!--begin::Chat drawer-->
    <div id="kt_shopping_cart" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="cart"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" data-kt-drawer-close="#kt_drawer_shopping_cart_close">

        <!--begin::Messenger-->
        <div class="card card-flush w-100 rounded-0">
            <!--begin::Card header-->
            <div class="card-header">
                <!--begin::Title-->
                <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
                <!--end::Title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                        <i class="ki-duotone ki-cross fs-2"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body hover-scroll-overlay-y h-400px pt-5">

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>

                            <span class="text-gray-400 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-1.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>

                            <span class="text-gray-400 fw-semibold d-block">Smart tool for cooking</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-3.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>

                            <span class="text-gray-400 fw-semibold d-block">Professional camera for edge</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-8.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-26.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>

                            <span class="text-gray-400 fw-semibold d-block">Perfect animation tool</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-21.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>

                            <span class="text-gray-400 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-34.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->

                <!--begin::Separator-->
                <div class="separator separator-dashed my-6"></div>
                <!--end::Separator-->


                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->
                        <div class="mb-3">
                            <a href="index.htm-55.html?page=apps/ecommerce/sales/details"
                                class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>

                            <span class="text-gray-400 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>
                        <!--end::Section-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#"
                                class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-duotone ki-minus fs-4"></i> </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-duotone ki-plus fs-4"></i> </a>
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Wrapper-->

                    <!--begin::Pic-->
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="assets/media/stock/600x400/img-27.jpg" alt="">
                    </div>
                    <!--end::Pic-->
                </div>
                <!--end::Item-->



            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer">
                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Total</span>
                    <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-stack">
                    <span class="fw-bold text-gray-600">Sub total</span>
                    <span class="text-primary fw-bolder fs-5">$ 246.35</span>
                </div>
                <!--end::Item-->

                <!--end::Action-->
                <div class="d-flex justify-content-end mt-9">
                    <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
                </div>
                <!--end::Action-->
            </div>
            <!--end::Card footer-->
        </div>
        <!--end::Messenger-->
    </div>
    <!--end::Chat drawer-->
    <!--end::Drawers--> <!--begin::Engage drawers-->

    <!--begin::Exolore drawer-->
    <div id="kt_explore" class="explore bg-body" data-kt-drawer="true" data-kt-drawer-name="explore"
        data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'300px', 'lg': '440px'}" data-kt-drawer-direction="end"
        data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_explore_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Purchase Open HTML Pro </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_explore_close">
                        <i class="ki-duotone ki-cross fs-2"><i class="path1"></i><i class="path2"></i></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_explore_body">
                <!--begin::Content-->
                <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body"
                    data-kt-scroll-dependencies="#kt_explore_header, #kt_explore_footer" data-kt-scroll-offset="5px">

                    <!--begin::License-->
                    <div class="rounded border border-dashed border-gray-300 py-6 px-8 mb-5">
                        <!--begin::Heading-->
                        <div class="d-flex flex-stack mb-5">
                            <!--begin::Price-->
                            <h3 class="fs-3 fw-bold mb-0">All-in License</h3>
                            <!--end::Price-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-7">
                            <span class="text-gray-500">Unlimited End Products and SaaS sites with paying users.</span>
                            <a class="explore-link" href="https://keenthemes.com/licensing">License Terms</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Payment info-->
                        <div class="d-flex flex-column flex-center mb-3">
                            <!--begin::Heading-->
                            <div class="mb-3 text-gray-500 fw-semibold fs-6">
                                Secured Payment by <a href="https://www.2checkout.com/" target="_black"
                                    class="fw-bold text-dark explore-link-hover me-1">2Checkout</a> with:
                            </div>
                            <!--end::Heading-->

                            <!--begin::Payment methods-->
                            <div class="mb-2">
                                <img src="assets/media/svg/payment-methods/paypal.svg" alt=""
                                    class="h-30px me-3 rounded-1">

                                <img src="assets/media/svg/payment-methods/visa.svg" alt=""
                                    class="h-30px me-3 rounded-1">

                                <img src="assets/media/svg/payment-methods/mastercard.svg" alt=""
                                    class="h-30px me-3 rounded-1">

                                <img src="assets/media/svg/payment-methods/americanexpress.svg" alt=""
                                    class="h-30px rounded-1">
                            </div>
                            <!--end::Payment methods-->

                            <!--begin::Notice-->
                            <div class="text-gray-400 fs-7">
                                100% money back guarantee!
                            </div>
                            <!--end::Notice-->
                        </div>
                        <!--end::Payment info-->
                    </div>
                    <!--end::Licenses-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->

        </div>
        <!--end::Card-->
    </div>
    <!--end::Exolore drawer-->
    <!--begin::Help drawer-->
    <div id="kt_help" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="help" data-kt-drawer-activate="true"
        data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'350px', 'md': '525px'}"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_help_toggle" data-kt-drawer-close="#kt_help_close">

        <!--begin::Card-->
        <div class="card shadow-none rounded-0 w-100">
            <!--begin::Header-->
            <div class="card-header" id="kt_help_header">
                <h5 class="card-title fw-semibold text-gray-600">
                    Learn & Get Inspired
                </h5>

                <div class="card-toolbar">
                    <button type="button" class="btn btn-sm btn-icon explore-btn-dismiss me-n5" id="kt_help_close">
                        <i class="ki-duotone ki-cross fs-2"><i class="path1"></i><i class="path2"></i></i> </button>
                </div>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body" id="kt_help_body">
                <!--begin::Content-->
                <div id="kt_help_scroll" class="hover-scroll-overlay-y" data-kt-scroll="true"
                    data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_help_body"
                    data-kt-scroll-dependencies="#kt_help_header" data-kt-scroll-offset="5px">

                    <!--begin::Support-->
                    <div class="rounded border border-dashed border-gray-300 p-6 p-lg-8 mb-10">
                        <!--begin::Heading-->
                        <h2 class="fw-bold mb-5">Support at <a href="https://devs.keenthemes.com"
                                class="">devs.keenthemes.com</a></h2>
                        <!--end::Heading-->

                        <!--begin::Description-->
                        <div class="fs-5 fw-semibold mb-5">
                            <span class="text-gray-500">Join our developers community to find answer to your question
                                and help others.</span>
                            <a class="explore-link d-none" href="https://keenthemes.com/licensing">FAQs</a>
                        </div>
                        <!--end::Description-->

                        <!--begin::Link-->
                        <a href="https://devs.keenthemes.com" class="btn btn-lg explore-btn-primary w-100">Get
                            Support</a>
                        <!--end::Link-->
                    </div>
                    <!--end::Support-->

                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/open-html-pro/docs"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-warning">
                            <i class="ki-duotone ki-abstract-26 text-warning fs-2x fs-lg-3x"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Documentation </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    From guides and how-tos, to live demos and code examples to get started right away.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/open-html-pro/docs//base/utilities"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-primary">
                            <i class="ki-duotone ki-wallet text-primary fs-2x fs-lg-3x"><i class="path1"></i><i
                                    class="path2"></i><i class="path3"></i><i class="path4"></i></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Plugins & Components </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Check out our 300+ in-house components and customized 3rd-party plugins. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="index.htm-75.html?page=layout-builder" class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-info">
                            <i class="ki-duotone ki-design-1 text-info fs-2x fs-lg-3x"></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    Layout Builder </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Build your layout, preview it and export the HTML for server side integration.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                    <!--begin::Link-->
                    <a href="https://preview.keenthemes.com/html/open-html-pro/docs/getting-started/changelog"
                        class="parent-hover d-flex align-items-center mb-7">
                        <!--begin::Icon-->
                        <div
                            class="d-flex flex-center w-50px h-50px w-lg-75px h-lg-75px flex-shrink-0 rounded bg-light-danger">
                            <i class="ki-duotone ki-keyboard text-danger fs-2x fs-lg-3x"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Icon-->

                        <!--begin::Info-->
                        <div class="d-flex flex-stack flex-grow-1 ms-4 ms-lg-6">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column me-2 me-lg-5">
                                <!--begin::Title-->
                                <div class="text-dark parent-hover-primary fw-bold fs-6 fs-lg-4 mb-1">
                                    What's New ? </div>
                                <!--end::Title-->

                                <!--begin::Description-->
                                <div class="text-muted fw-semibold fs-7 fs-lg-6">
                                    Latest features and improvements added with our users feedback in mind. </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Wrapper-->

                            <i class="ki-duotone ki-arrow-right text-gray-400 fs-2"><i class="path1"></i><i
                                    class="path2"></i></i>
                        </div>
                        <!--end::Info-->
                    </a>
                    <!--end::Link-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Card-->
    </div>
    <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
        <i class="ki-duotone ki-arrow-up"><i class="path1"></i><i class="path2"></i></i>
    </div>
    <!--end::Scrolltop-->

    <!--begin::Modals-->

    <!--begin::Modal - Invite Friends-->
    <div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Heading-->
                    <div class="text-center mb-13">
                        <!--begin::Title-->
                        <h1 class="mb-3">Invite a Friend</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check out
                            <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Google Contacts Invite-->
                    <div class="btn btn-light-primary fw-bold w-100 mb-8">
                        <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3">
                        Invite Gmail Contacts
                    </div>
                    <!--end::Google Contacts Invite-->

                    <!--begin::Separator-->
                    <div class="separator d-flex flex-center mb-8">
                        <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                    </div>
                    <!--end::Separator-->

                    <!--begin::Textarea-->
                    <textarea class="form-control form-control-solid mb-8" rows="3"
                        placeholder="Type or paste emails here">
                </textarea>
                    <!--end::Textarea-->

                    <!--begin::Users-->
                    <div class="mb-10">
                        <!--begin::Heading-->
                        <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                        <!--end::Heading-->

                        <!--begin::List-->
                        <div class="mh-300px scroll-y me-n7 pe-7">
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            M </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                            Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                            Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                            Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                            Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                            C </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                            Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-9.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                            Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            O </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                            Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                            N </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                            Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-23.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                            Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                            Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-info text-info fw-semibold">
                                            A </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                            Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-13.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                            Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-success text-success fw-semibold">
                                            L </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                            Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2" selected="">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <img alt="Pic" src="assets/media/avatars/300-21.jpg">
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                            Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected="">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                            <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                        <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                            E </span>
                                    </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                            Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2"
                                        data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1">Guest</option>
                                        <option value="2">Owner</option>
                                        <option value="3" selected="">Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::List-->
                    </div>
                    <!--end::Users-->

                    <!--begin::Notice-->
                    <div class="d-flex flex-stack">
                        <!--begin::Label-->
                        <div class="me-5 fw-semibold">
                            <label class="fs-6">Adding Users by Team Members</label>
                            <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked">

                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Notice-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Invite Friend--><!--begin::Modal - Create App-->
    <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-900px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2>Create App</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body py-lg-10 px-lg-10">
                    <!--begin::Stepper-->
                    <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                        id="kt_modal_create_app_stepper">
                        <!--begin::Aside-->
                        <div
                            class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                            <!--begin::Nav-->
                            <div class="stepper-nav ps-lg-10">
                                <!--begin::Step 1-->
                                <div class="stepper-item current" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">1</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Details
                                            </h3>

                                            <div class="stepper-desc">
                                                Name your App
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 1-->

                                <!--begin::Step 2-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">2</span>
                                        </div>
                                        <!--begin::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Frameworks
                                            </h3>

                                            <div class="stepper-desc">
                                                Define your app framework
                                            </div>
                                        </div>
                                        <!--begin::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 2-->

                                <!--begin::Step 3-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">3</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Database
                                            </h3>

                                            <div class="stepper-desc">
                                                Select the app database type
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 3-->

                                <!--begin::Step 4-->
                                <div class="stepper-item" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">4</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Billing
                                            </h3>

                                            <div class="stepper-desc">
                                                Provide payment details
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Line-->
                                    <div class="stepper-line h-40px"></div>
                                    <!--end::Line-->
                                </div>
                                <!--end::Step 4-->

                                <!--begin::Step 5-->
                                <div class="stepper-item mark-completed" data-kt-stepper-element="nav">
                                    <!--begin::Wrapper-->
                                    <div class="stepper-wrapper">
                                        <!--begin::Icon-->
                                        <div class="stepper-icon w-40px h-40px">
                                            <i class="stepper-check fas fa-check"></i>
                                            <span class="stepper-number">5</span>
                                        </div>
                                        <!--end::Icon-->

                                        <!--begin::Label-->
                                        <div class="stepper-label">
                                            <h3 class="stepper-title">
                                                Completed
                                            </h3>

                                            <div class="stepper-desc">
                                                Review and Submit
                                            </div>
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Step 5-->
                            </div>
                            <!--end::Nav-->
                        </div>
                        <!--begin::Aside-->

                        <!--begin::Content-->
                        <div class="flex-row-fluid py-lg-5 px-lg-15">
                            <!--begin::Form-->
                            <form class="form" novalidate="novalidate" id="kt_modal_create_app_form">
                                <!--begin::Step 1-->
                                <div class="current" data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-2">
                                                <span class="required">App Name</span>
                                                <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                    title="Specify your unique app name"></i>
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="name" placeholder="" value="">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Category</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Select your app category">
                                                </span> </label>
                                            <!--end::Label-->

                                            <!--begin:Options-->
                                            <div class="fv-row">
                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-primary">
                                                                <i class="ki-duotone ki-compass fs-1 text-primary"><i
                                                                        class="path1"></i><i class="path2"></i></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Quick Online Courses</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one SEO</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="1">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->

                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-danger  ">
                                                                <i class="ki-duotone ki-element-11 fs-1 text-danger"><i
                                                                        class="path1"></i><i class="path2"></i><i
                                                                        class="path3"></i><i class="path4"></i></i>
                                                            </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Face to Face Discussions</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure is just one aspect</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="2">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->

                                                <!--begin:Option-->
                                                <label class="d-flex flex-stack cursor-pointer">
                                                    <!--begin:Label-->
                                                    <span class="d-flex align-items-center me-2">
                                                        <!--begin:Icon-->
                                                        <span class="symbol symbol-50px me-6">
                                                            <span class="symbol-label bg-light-success">
                                                                <i class="ki-duotone ki-timer fs-1 text-success"><i
                                                                        class="path1"></i><i class="path2"></i><i
                                                                        class="path3"></i></i> </span>
                                                        </span>
                                                        <!--end:Icon-->

                                                        <!--begin:Info-->
                                                        <span class="d-flex flex-column">
                                                            <span class="fw-bold fs-6">Full Intro Training</span>

                                                            <span class="fs-7 text-muted">Creating a clear text
                                                                structure copywriting</span>
                                                        </span>
                                                        <!--end:Info-->
                                                    </span>
                                                    <!--end:Label-->

                                                    <!--begin:Input-->
                                                    <span class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio" name="category"
                                                            value="3">
                                                    </span>
                                                    <!--end:Input-->
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end:Options-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 1-->
                                <!--begin::Step 2-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Framework</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify your apps framework">
                                                </span> </label>
                                            <!--end::Label-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fab fa-html5 text-warning fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">HTML5</span>

                                                        <span class="fs-7 text-muted">Base Web Projec</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" checked=""
                                                        name="framework" value="1">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="fab fa-react text-success fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">ReactJS</span>
                                                        <span class="fs-7 text-muted">Robust and flexible app
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="2">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="fab fa-angular text-danger fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Angular</span>
                                                        <span class="fs-7 text-muted">Powerful data mangement</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="3">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-primary">
                                                            <i class="fab fa-vuejs text-primary fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end:Icon-->

                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Vue</span>
                                                        <span class="fs-7 text-muted">Lightweight and responsive
                                                            framework</span>
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->

                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="framework"
                                                        value="4">
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 2-->
                                <!--begin::Step 3-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="fv-row mb-10">
                                            <!--begin::Label-->
                                            <label class="required fs-5 fw-semibold mb-2">
                                                Database Name
                                            </label>
                                            <!--end::Label-->

                                            <!--begin::Input-->
                                            <input type="text" class="form-control form-control-lg form-control-solid"
                                                name="dbname" placeholder="" value="master_db">
                                            <!--end::Input-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-5 fw-semibold mb-4">
                                                <span class="required">Select Database Engine</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Select your app database engine">
                                                </span> </label>
                                            <!--end::Label-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-success">
                                                            <i class="fas fa-database text-success fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">MySQL</span>

                                                        <span class="fs-7 text-muted">Basic MySQL database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        checked="" value="1">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer mb-5">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-danger">
                                                            <i class="fab fa-google text-danger fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Firebase</span>

                                                        <span class="fs-7 text-muted">Google based app data
                                                            management</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="2">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->

                                            <!--begin:Option-->
                                            <label class="d-flex flex-stack cursor-pointer">
                                                <!--begin::Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin::Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <span class="symbol-label bg-light-warning">
                                                            <i class="fab fa-amazon text-warning fs-2x"></i>
                                                        </span>
                                                    </span>
                                                    <!--end::Icon-->

                                                    <!--begin::Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">DynamoDB</span>

                                                        <span class="fs-7 text-muted">Amazon Fast NoSQL Database</span>
                                                    </span>
                                                    <!--end::Info-->
                                                </span>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input" type="radio" name="dbengine"
                                                        value="3">
                                                </span>
                                                <!--end::Input-->
                                            </label>
                                            <!--end::Option-->
                                        </div>
                                        <!--end::Input group-->
                                    </div>
                                </div>
                                <!--end::Step 3-->
                                <!--begin::Step 4-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100">
                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                <span class="required">Name On Card</span>


                                                <span class="ms-1" data-bs-toggle="tooltip"
                                                    title="Specify a card holder's name">
                                                </span> </label>
                                            <!--end::Label-->

                                            <input type="text" class="form-control form-control-solid" placeholder=""
                                                name="card_name" value="Max Doe">
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-column mb-7 fv-row">
                                            <!--begin::Label-->
                                            <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
                                            <!--end::Label-->

                                            <!--begin::Input wrapper-->
                                            <div class="position-relative">
                                                <!--begin::Input-->
                                                <input type="text" class="form-control form-control-solid"
                                                    placeholder="Enter card number" name="card_number"
                                                    value="4111 1111 1111 1111">
                                                <!--end::Input-->

                                                <!--begin::Card logos-->
                                                <div class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                    <img src="assets/media/svg/card-logos/visa.svg" alt=""
                                                        class="h-25px">
                                                    <img src="assets/media/svg/card-logos/mastercard.svg" alt=""
                                                        class="h-25px">
                                                    <img src="assets/media/svg/card-logos/american-express.svg" alt=""
                                                        class="h-25px">
                                                </div>
                                                <!--end::Card logos-->
                                            </div>
                                            <!--end::Input wrapper-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="row mb-10">
                                            <!--begin::Col-->
                                            <div class="col-md-8 fv-row">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Expiration
                                                    Date</label>
                                                <!--end::Label-->

                                                <!--begin::Row-->
                                                <div class="row fv-row">
                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_month"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Month">
                                                            <option></option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->

                                                    <!--begin::Col-->
                                                    <div class="col-6">
                                                        <select name="card_expiry_year"
                                                            class="form-select form-select-solid" data-control="select2"
                                                            data-hide-search="true" data-placeholder="Year">
                                                            <option></option>
                                                            <option value="2023">2023</option>
                                                            <option value="2024">2024</option>
                                                            <option value="2025">2025</option>
                                                            <option value="2026">2026</option>
                                                            <option value="2027">2027</option>
                                                            <option value="2028">2028</option>
                                                            <option value="2029">2029</option>
                                                            <option value="2030">2030</option>
                                                            <option value="2031">2031</option>
                                                            <option value="2032">2032</option>
                                                            <option value="2033">2033</option>
                                                        </select>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Row-->
                                            </div>
                                            <!--end::Col-->

                                            <!--begin::Col-->
                                            <div class="col-md-4 fv-row">
                                                <!--begin::Label-->
                                                <label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
                                                    <span class="required">CVV</span>


                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Enter a card CVV code">
                                                    </span> </label>
                                                <!--end::Label-->

                                                <!--begin::Input wrapper-->
                                                <div class="position-relative">
                                                    <!--begin::Input-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        minlength="3" maxlength="4" placeholder="CVV" name="card_cvv">
                                                    <!--end::Input-->

                                                    <!--begin::CVV icon-->
                                                    <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                        <i class="ki-duotone ki-credit-cart fs-2hx"><i
                                                                class="path1"></i><i class="path2"></i></i>
                                                    </div>
                                                    <!--end::CVV icon-->
                                                </div>
                                                <!--end::Input wrapper-->
                                            </div>
                                            <!--end::Col-->
                                        </div>
                                        <!--end::Input group-->

                                        <!--begin::Input group-->
                                        <div class="d-flex flex-stack">
                                            <!--begin::Label-->
                                            <div class="me-5">
                                                <label class="fs-6 fw-semibold form-label">Save Card for further
                                                    billing?</label>
                                                <div class="fs-7 fw-semibold text-muted">If you need more info, please
                                                    check budget planning</div>
                                            </div>
                                            <!--end::Label-->

                                            <!--begin::Switch-->
                                            <label class="form-check form-switch form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="1"
                                                    checked="checked">
                                                <span class="form-check-label fw-semibold text-muted">
                                                    Save Card
                                                </span>
                                            </label>
                                            <!--end::Switch-->
                                        </div>
                                        <!--end::Input group-->

                                    </div>
                                </div>
                                <!--end::Step 4-->
                                <!--begin::Step 5-->
                                <div data-kt-stepper-element="content">
                                    <div class="w-100 text-center">
                                        <!--begin::Heading-->
                                        <h1 class="fw-bold text-dark mb-3">Release!</h1>
                                        <!--end::Heading-->

                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-3">
                                            Submit your app to kickstart your project.
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Illustration-->
                                        <div class="text-center px-4 py-15">
                                            <img src="assets/media/illustrations/dozzy-1/9.png" alt=""
                                                class="mw-100 mh-300px">
                                        </div>
                                        <!--end::Illustration-->
                                    </div>
                                </div>
                                <!--end::Step 5-->


                                <!--begin::Actions-->
                                <div class="d-flex flex-stack pt-10">
                                    <!--begin::Wrapper-->
                                    <div class="me-2">
                                        <button type="button" class="btn btn-lg btn-light-primary me-3"
                                            data-kt-stepper-action="previous">
                                            <i class="ki-duotone ki-arrow-left fs-3 me-1"><i class="path1"></i><i
                                                    class="path2"></i></i> Back
                                        </button>
                                    </div>
                                    <!--end::Wrapper-->

                                    <!--begin::Wrapper-->
                                    <div>
                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="submit">
                                            <span class="indicator-label">
                                                Submit
                                                <i class="ki-duotone ki-arrow-right fs-3 ms-2 me-0"><i
                                                        class="path1"></i><i class="path2"></i></i> </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>

                                        <button type="button" class="btn btn-lg btn-primary"
                                            data-kt-stepper-action="next">
                                            Continue
                                            <i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0"><i class="path1"></i><i
                                                    class="path2"></i></i> </button>
                                    </div>
                                    <!--end::Wrapper-->
                                </div>
                                <!--end::Actions-->
                            </form>
                            <!--end::Form-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Stepper-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Create App-->
    <!--begin::Modal - Upgrade plan-->
    <div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-xl">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header justify-content-end border-0 pb-0">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <h1 class="mb-3">Upgrade a Plan</h1>

                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing
                                Guidelines</a>.
                        </div>
                    </div>
                    <!--end::Heading-->

                    <!--begin::Plans-->
                    <div class="d-flex flex-column">
                        <!--begin::Nav group-->
                        <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                data-kt-plan="month">
                                Monthly
                            </button>
                            <button class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                data-kt-plan="annual">
                                Annual
                            </button>
                        </div>
                        <!--end::Nav group-->

                        <!--begin::Row-->
                        <div class="row mt-10">
                            <!--begin::Col-->
                            <div class="col-lg-6 mb-10 mb-lg-0">
                                <!--begin::Tabs-->
                                <div class="nav flex-column">
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    checked="checked" value="startup">
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="39"
                                                data-kt-plan-price-annual="399">
                                                39 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="advanced">
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="339"
                                                data-kt-plan-price-annual="3399">
                                                339 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"
                                                    value="enterprise">
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                    <span
                                                        class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <span class="mb-2">$</span>

                                            <span class="fs-3x fw-bold" data-kt-plan-price-month="999"
                                                data-kt-plan-price-annual="9999">
                                                999 </span>

                                            <span class="fs-7 opacity-50">/
                                                <span data-kt-element="period">Mon</span>
                                            </span>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                    <!--begin::Tab link-->
                                    <label
                                        class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                        data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">

                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div
                                                class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" value="custom">
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                        </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                </div>
                                <!--end::Tabs-->
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-lg-6">
                                <!--begin::Tab content-->
                                <div class="tab-content rounded h-100 bg-light p-10">
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-cross-circle fs-1"><i class="path1"></i><i
                                                        class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 10 Active Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Up to 30 Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-dark">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Users </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Project Integrations </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Analytics Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Finance Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Accounting Module </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center mb-7">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Network Platform </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <div class="d-flex align-items-center ">
                                                <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                    Unlimited Cloud Space </span>
                                                <i class="ki-duotone ki-check-circle fs-1 text-success"><i
                                                        class="path1"></i><i class="path2"></i></i>
                                            </div>
                                            <!--end::Item-->
                                        </div>
                                        <!--end::Body-->
                                    </div>
                                    <!--end::Tab Pane-->
                                </div>
                                <!--end::Tab content-->
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->
                    </div>
                    <!--end::Plans-->

                    <!--begin::Actions-->
                    <div class="d-flex flex-center flex-row-fluid pt-12">
                        <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">

                            <!--begin::Indicator label-->
                            <span class="indicator-label">
                                Upgrade Plan</span>
                            <!--end::Indicator label-->

                            <!--begin::Indicator progress-->
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                            <!--end::Indicator progress-->
                        </button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - Upgrade plan--><!--begin::Modal - Users Search-->
    <div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><i class="path1"></i><i class="path2"></i></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                    <!--begin::Content-->
                    <div class="text-center mb-13">
                        <h1 class="mb-3">Search Users</h1>

                        <div class="text-muted fw-semibold fs-5">
                            Invite Collaborators To Your Project
                        </div>
                    </div>
                    <!--end::Content-->

                    <!--begin::Search-->
                    <div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2"
                        data-kt-search-enter="enter" data-kt-search-layout="inline">

                        <!--begin::Form-->
                        <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
                            <!--begin::Hidden input(Added to disable form autocomplete)-->
                            <input type="hidden">
                            <!--end::Hidden input-->

                            <!--begin::Icon-->
                            <i
                                class="ki-duotone ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"><i
                                    class="path1"></i><i class="path2"></i></i> <!--end::Icon-->

                            <!--begin::Input-->
                            <input type="text" class="form-control form-control-lg form-control-solid px-15"
                                name="search" value="" placeholder="Search by username, full name or email..."
                                data-kt-search-element="input">
                            <!--end::Input-->

                            <!--begin::Spinner-->
                            <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5"
                                data-kt-search-element="spinner">
                                <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                            </span>
                            <!--end::Spinner-->

                            <!--begin::Reset-->
                            <span
                                class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none"
                                data-kt-search-element="clear">
                                <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0"><i class="path1"></i><i
                                        class="path2"></i></i> </span>
                            <!--end::Reset-->
                        </form>
                        <!--end::Form-->

                        <!--begin::Wrapper-->
                        <div class="py-5">
                            <!--begin::Suggestions-->
                            <div data-kt-search-element="suggestions">
                                <!--begin::Heading-->
                                <h3 class="fw-semibold mb-5">Recently searched:</h3>
                                <!--end::Heading-->

                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                                            <span class="badge badge-light">Art Director</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M </span>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                                            <span class="badge badge-light">Marketing Analytic</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                                            <span class="badge badge-light">Software Enginer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                                            <span class="badge badge-light">Web Developer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <a href="#"
                                        class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Info-->
                                        <div class="fw-semibold">
                                            <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                                            <span class="badge badge-light">UI/UX Designer</span>
                                        </div>
                                        <!--end::Info-->
                                    </a>
                                    <!--end::User-->
                                </div>
                                <!--end::Users-->
                            </div>
                            <!--end::Suggestions-->

                            <!--begin::Results(add d-none to below element to hide the users list by default)-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Users-->
                                <div class="mh-375px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='0']"
                                                    value="0">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-6.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='1']"
                                                    value="1">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    M </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>

                                                <div class="fw-semibold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='2']"
                                                    value="2">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-1.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>

                                                <div class="fw-semibold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='3']"
                                                    value="3">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-5.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>

                                                <div class="fw-semibold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='4']"
                                                    value="4">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-25.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>

                                                <div class="fw-semibold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='5']"
                                                    value="5">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                    C </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>

                                                <div class="fw-semibold text-muted">mik@pex.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='6']"
                                                    value="6">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-9.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>

                                                <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='7']"
                                                    value="7">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    O </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>

                                                <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='8']"
                                                    value="8">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                    N </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>

                                                <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='9']"
                                                    value="9">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-23.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>

                                                <div class="fw-semibold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='10']"
                                                    value="10">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                    E </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>

                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='11']"
                                                    value="11">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-12.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>

                                                <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='12']"
                                                    value="12">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-semibold">
                                                    A </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>

                                                <div class="fw-semibold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='13']"
                                                    value="13">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-13.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>

                                                <div class="fw-semibold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='14']"
                                                    value="14">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-semibold">
                                                    L </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>

                                                <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='15']"
                                                    value="15">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1" selected="">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--begin::Separator-->
                                    <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                                    <!--end::Separator-->

                                    <!--begin::User-->
                                    <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Checkbox-->
                                            <label class="form-check form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" name="users"
                                                    data-kt-check="true" data-kt-check-target="[data-user-id='16']"
                                                    value="16">
                                            </label>
                                            <!--end::Checkbox-->

                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/300-21.jpg">
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>

                                                <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->

                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select class="form-select form-select-solid form-select-sm"
                                                data-control="select2" data-hide-search="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="">Can Edit</option>
                                            </select>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->


                                </div>
                                <div class="d-flex flex-center mt-15">
                                    <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal"
                                        class="btn btn-active-light me-3">Cancel
                                    </button>

                                    <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
                                </div>
                            </div>
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <div class="fw-semibold py-10">
                                    <div class="text-gray-600 fs-3 mb-2">No users found</div>

                                    <div class="text-muted fs-6">Try to search by username, full name or email...</div>
                                </div>
                                <div class="text-center px-5">
                                    <img src="assets/media/illustrations/dozzy-1/1.png" alt=""class="w-100 h-200px h-sm-325px">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script> var hostUrl = "/open-html-pro/assets/";</script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="../lib/5/index.js"></script>
    <script src="../lib/5/xy.js"></script>
    <script src="../lib/5/percent.js"></script>
    <script src="../lib/5/radar.js"></script>
    <script src="../lib/5/themes/Animated.js"></script>
    <script src="../lib/5/map.js"></script>
    <script src="../lib/5/geodata/worldLow.js"></script>
    <script src="../lib/5/geodata/continentsLow.js"></script>
    <script src="../lib/5/geodata/usaLow.js"></script>
    <script src="../lib/5/geodata/worldTimeZonesLow.js"></script>
    <script src="../lib/5/geodata/worldTimeZoneAreasLow.js"></script>
    <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
    <script src="assets/js/widgets.bundle.js"></script>
    <script src="assets/js/custom/widgets.js"></script>
    <script src="assets/js/custom/apps/chat/chat.js"></script>
    <script src="assets/js/custom/utilities/modals/create-app.js"></script>
    <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
    <script src="assets/js/custom/utilities/modals/users-search.js"></script>

</body>
</html>