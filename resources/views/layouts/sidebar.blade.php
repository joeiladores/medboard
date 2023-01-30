<!DOCTYPE html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="enable" data-layout-mode="light" data-layout-width="fluid" data-layout-position="fixed" data-layout-style="default">
  


<!-- ***** -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sidebar Component</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600&family=Poppins&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

  <!--CSS-->
  <link rel="stylesheet" href="/style.css">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
      font-size: small;

    }

    body {
      --vz-blue: #3577f1;
    --vz-indigo: #405189;
    --vz-purple: #6559cc;
    --vz-pink: #f672a7;
    --vz-red: #f06548;
    --vz-orange: #f1963b;
    --vz-yellow: #f7b84b;
    --vz-green: #0ab39c;
    --vz-teal: #02a8b5;
    --vz-cyan: #299cdb;
    --vz-white: #fff;
    --vz-gray: #878a99;
    --vz-gray-dark: #343a40;
    --vz-gray-100: #f3f6f9;
    --vz-gray-200: #eff2f7;
    --vz-gray-300: #e9ebec;
    --vz-gray-400: #ced4da;
    --vz-gray-500: #adb5bd;
    --vz-gray-600: #878a99;
    --vz-gray-700: #495057;
    --vz-gray-800: #343a40;
    --vz-gray-900: #212529;
    --vz-primary: #405189;
    --vz-secondary: #3577f1;
    --vz-success: #0ab39c;
    --vz-info: #299cdb;
    --vz-warning: #f7b84b;
    --vz-danger: #f06548;
    --vz-light: #f3f6f9;
    --vz-dark: #212529;
    --vz-primary-rgb: 64,81,137;
    --vz-secondary-rgb: 53,119,241;
    --vz-success-rgb: 10,179,156;
    --vz-info-rgb: 41,156,219;
    --vz-warning-rgb: 247,184,75;
    --vz-danger-rgb: 240,101,72;
    --vz-light-rgb: 243,246,249;
    --vz-dark-rgb: 33,37,41;
    --vz-white-rgb: 255,255,255;
    --vz-black-rgb: 0,0,0;
    --vz-body-color-rgb: 33,37,41;
    --vz-body-bg-rgb: 243,243,249;
    --vz-font-sans-serif: "Poppins",sans-serif;
    --vz-font-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
    --vz-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
    --vz-body-font-family: var(--vz-font-sans-serif);
    --vz-body-font-size: 0.8125rem;
    --vz-body-font-weight: 400;
    --vz-body-line-height: 1.5;
    --vz-body-color: #212529;
    --vz-body-bg: #f3f3f9;
    --vz-border-width: 1px;
    --vz-border-style: solid;
    --vz-border-color-translucent: rgba(0, 0, 0, 0.175);
    --vz-border-radius: 0.25rem;
    --vz-border-radius-sm: 0.2rem;
    --vz-border-radius-lg: 0.3rem;
    --vz-border-radius-xl: 1rem;
    --vz-border-radius-2xl: 2rem;
    --vz-border-radius-pill: 50rem;
    --vz-code-color: #f672a7;
    --vz-highlight-bg: #fcf8e3;
    --vz-vertical-menu-bg: #fff;
    --vz-vertical-menu-item-color: #6d7080;
    --vz-vertical-menu-item-hover-color: #405189;
    --vz-vertical-menu-item-active-color: #405189;
    --vz-vertical-menu-sub-item-color: #7c7f90;
    --vz-vertical-menu-sub-item-hover-color: #405189;
    --vz-vertical-menu-sub-item-active-color: #405189;
    --vz-vertical-menu-title-color: #919da9;
    --vz-vertical-menu-bg-dark: #405189;
    --vz-vertical-menu-item-color-dark: #abb9e8;
    --vz-vertical-menu-item-hover-color-dark: #fff;
    --vz-vertical-menu-item-active-color-dark: #fff;
    --vz-vertical-menu-sub-item-color-dark: #abb9e8;
    --vz-vertical-menu-sub-item-hover-color-dark: #fff;
    --vz-vertical-menu-sub-item-active-color-dark: #fff;
    --vz-vertical-menu-title-color-dark: #838fb9;
    --vz-header-bg: #fff;
    --vz-header-item-color: #e9ecef;
    --vz-header-bg-dark: #405189;
    --vz-header-item-color-dark: #b0c4d9;
    --vz-topbar-search-bg: #f3f3f9;
    --vz-topbar-user-bg: #f3f3f9;
    --vz-topbar-user-bg-dark: #52639c;
    --vz-footer-bg: #fff;
    --vz-footer-color: #98a6ad;
    --vz-topnav-bg: #fff;
    --vz-topnav-item-color: #6d7080;
    --vz-topnav-item-color-active: #405189;
    --vz-twocolumn-menu-iconview-bg: #fff;
    --vz-twocolumn-menu-bg: #fff;
    --vz-twocolumn-menu-iconview-bg-dark: var(--vz-vertical-menu-bg-dark);
    --vz-twocolumn-menu-bg-dark: #435590;
    --vz-twocolumn-menu-item-color-dark: var(--vz-vertical-menu-item-color-dark);
    --vz-twocolumn-menu-item-active-color-dark: #fff;
    --vz-twocolumn-menu-item-active-bg-dark: rgba(255, 255, 255, 0.15);
    --vz-boxed-body-bg: #e5e5f2;
    --vz-heading-color: #495057;
    --vz-link-color: #405189;
    --vz-link-hover-color: #405189;
    --vz-border-color: #e9ebec;
    --vz-card-bg-custom: #fff;
    --vz-card-logo-dark: block;
    --vz-card-logo-light: none;
    --vz-list-group-hover-bg: #f3f6f9;
    --vz-input-bg: #fff;
    --vz-input-border: #ced4da;
    --vz-input-focus-border: #a0a8c4;
    --vz-input-disabled-bg: #eff2f7;
    --vz-input-group-addon-bg: #eff2f7;
    --vz-input-check-border: var(--vz-input-border);
    font-family: var(--vz-body-font-family);
    font-size: var(--vz-body-font-size);
    font-weight: var(--vz-body-font-weight);
    line-height: var(--vz-body-line-height);
    color: var(--vz-body-color);
    text-align: var(--vz-body-text-align);
    -webkit-text-size-adjust: 100%;
    -webkit-tap-highlight-color: transparent;
    box-sizing: border-box;
    }

    


  </style>
</head>
<body>
  
<div id="layout-wrapper">

<header id="page-topbar" class="">
<div class="layout-width">
<div class="navbar-header">
    <div class="d-flex">
        <!-- LOGO -->
        <div class="navbar-brand-box horizontal-logo">
            <a href="index.html" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-dark.png" alt="" height="17">
                </span>
            </a>

            <a href="index.html" class="logo logo-light">
                <span class="logo-sm">
                    <img src="assets/images/logo-sm.png" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="assets/images/logo-light.png" alt="" height="17">
                </span>
            </a>
        </div>

        <button type="button" class="btn btn-sm px-3 fs-16 header-item vertical-menu-btn topnav-hamburger" id="topnav-hamburger-icon" fdprocessedid="zrah7d">
            <span class="hamburger-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </button>

        <!-- App Search-->
        <form class="app-search d-none d-md-block">
            <div class="position-relative">
                <input type="text" class="form-control" placeholder="Search..." autocomplete="off" id="search-options" value="" fdprocessedid="rc9on">
                <span class="mdi mdi-magnify search-widget-icon"></span>
                <span class="mdi mdi-close-circle search-widget-icon search-widget-icon-close d-none" id="search-close-options"></span>
            </div>
            <div class="dropdown-menu dropdown-menu-lg" id="search-dropdown">
                <div data-simplebar="init" style="max-height: 320px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                    <!-- item-->
                    <div class="dropdown-header">
                        <h6 class="text-overflow text-muted mb-0 text-uppercase">Recent Searches</h6>
                    </div>

                    <div class="dropdown-item bg-transparent text-wrap">
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">how to setup <i class="mdi mdi-magnify ms-1"></i></a>
                        <a href="index.html" class="btn btn-soft-secondary btn-sm btn-rounded">buttons <i class="mdi mdi-magnify ms-1"></i></a>
                    </div>
                    <!-- item-->
                    <div class="dropdown-header mt-2">
                        <h6 class="text-overflow text-muted mb-1 text-uppercase">Pages</h6>
                    </div>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-bubble-chart-line align-middle fs-18 text-muted me-2"></i>
                        <span>Analytics Dashboard</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-lifebuoy-line align-middle fs-18 text-muted me-2"></i>
                        <span>Help Center</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="ri-user-settings-line align-middle fs-18 text-muted me-2"></i>
                        <span>My account settings</span>
                    </a>

                    <!-- item-->
                    <div class="dropdown-header mt-2">
                        <h6 class="text-overflow text-muted mb-2 text-uppercase">Members</h6>
                    </div>

                    <div class="notification-list">
                        <!-- item -->
                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">Angela Bernier</h6>
                                    <span class="fs-11 mb-0 text-muted">Manager</span>
                                </div>
                            </div>
                        </a>
                        <!-- item -->
                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">David Grasso</h6>
                                    <span class="fs-11 mb-0 text-muted">Web Designer</span>
                                </div>
                            </div>
                        </a>
                        <!-- item -->
                        <a href="javascript:void(0);" class="dropdown-item notify-item py-2">
                            <div class="d-flex">
                                <img src="assets/images/users/avatar-5.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="m-0">Mike Bunch</h6>
                                    <span class="fs-11 mb-0 text-muted">React Developer</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>

                <div class="text-center pt-3 pb-1">
                    <a href="pages-search-results.html" class="btn btn-primary btn-sm">View All Results <i class="ri-arrow-right-line ms-1"></i></a>
                </div>
            </div>
        </form>
    </div>

    <div class="d-flex align-items-center">

        <div class="dropdown d-md-none topbar-head-dropdown header-item">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-search-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="bx bx-search fs-22"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-search-dropdown">
                <form class="p-3">
                    <div class="form-group m-0">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="dropdown ms-1 topbar-head-dropdown header-item">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" fdprocessedid="suof2qo">
                <img id="header-lang-img" src="assets/images/flags/us.svg" alt="Header Language" height="20" class="rounded">
            </button>
            <div class="dropdown-menu dropdown-menu-end">

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language py-2" data-lang="en" title="English">
                    <img src="assets/images/flags/us.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">English</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="sp" title="Spanish">
                    <img src="assets/images/flags/spain.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">Española</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="gr" title="German">
                    <img src="assets/images/flags/germany.svg" alt="user-image" class="me-2 rounded" height="18"> <span class="align-middle">Deutsche</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="it" title="Italian">
                    <img src="assets/images/flags/italy.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">Italiana</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ru" title="Russian">
                    <img src="assets/images/flags/russia.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">русский</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ch" title="Chinese">
                    <img src="assets/images/flags/china.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">中国人</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="fr" title="French">
                    <img src="assets/images/flags/french.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">français</span>
                </a>

                <!-- item-->
                <a href="javascript:void(0);" class="dropdown-item notify-item language" data-lang="ar" title="Arabic">
                    <img src="assets/images/flags/ae.svg" alt="user-image" class="me-2 rounded" height="18">
                    <span class="align-middle">Arabic</span>
                </a>
            </div>
        </div>

        <div class="dropdown topbar-head-dropdown ms-1 header-item">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" fdprocessedid="aw5c6g">
                <i class="bx bx-category-alt fs-22"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0 fw-semibold fs-15"> Web Apps </h6>
                        </div>
                        <div class="col-auto">
                            <a href="#!" class="btn btn-sm btn-soft-info"> View All Apps
                                <i class="ri-arrow-right-s-line align-middle"></i></a>
                        </div>
                    </div>
                </div>

                <div class="p-2">
                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/github.png" alt="Github">
                                <span>GitHub</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/bitbucket.png" alt="bitbucket">
                                <span>Bitbucket</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/dribbble.png" alt="dribbble">
                                <span>Dribbble</span>
                            </a>
                        </div>
                    </div>

                    <div class="row g-0">
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/dropbox.png" alt="dropbox">
                                <span>Dropbox</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/mail_chimp.png" alt="mail_chimp">
                                <span>Mail Chimp</span>
                            </a>
                        </div>
                        <div class="col">
                            <a class="dropdown-icon-item" href="#!">
                                <img src="assets/images/brands/slack.png" alt="slack">
                                <span>Slack</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown topbar-head-dropdown ms-1 header-item">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" fdprocessedid="i55mj4">
                <i class="bx bx-shopping-bag fs-22"></i>
                <span class="position-absolute topbar-badge cartitem-badge fs-10 translate-middle badge rounded-pill bg-info">5</span>
            </button>
            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0 dropdown-menu-cart" aria-labelledby="page-header-cart-dropdown">
                <div class="p-3 border-top-0 border-start-0 border-end-0 border-dashed border">
                    <div class="row align-items-center">
                        <div class="col">
                            <h6 class="m-0 fs-16 fw-semibold"> My Cart</h6>
                        </div>
                        <div class="col-auto">
                            <span class="badge badge-soft-warning fs-13"><span class="cartitem-badge">5</span>
                                items</span>
                        </div>
                    </div>
                </div>
                <div data-simplebar="init" style="max-height: 300px;"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                    <div class="p-2">
                        <div class="text-center empty-cart" id="empty-cart" style="display: none;">
                            <div class="avatar-md mx-auto my-3">
                                <div class="avatar-title bg-soft-info text-info fs-36 rounded-circle">
                                    <i class="bx bx-cart"></i>
                                </div>
                            </div>
                            <h5 class="mb-3">Your Cart is Empty!</h5>
                            <a href="apps-ecommerce-products.html" class="btn btn-success w-md mb-3">Shop Now</a>
                        </div>
                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/products/img-1.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1 fs-14">
                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Branded
                                            T-Shirts</a>
                                    </h6>
                                    <p class="mb-0 fs-12 text-muted">
                                        Quantity: <span>10 x $32</span>
                                    </p>
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">320</span></h5>
                                </div>
                                <div class="ps-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/products/img-2.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1 fs-14">
                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Bentwood Chair</a>
                                    </h6>
                                    <p class="mb-0 fs-12 text-muted">
                                        Quantity: <span>5 x $18</span>
                                    </p>
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">89</span></h5>
                                </div>
                                <div class="ps-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/products/img-3.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1 fs-14">
                                        <a href="apps-ecommerce-product-details.html" class="text-reset">
                                            Borosil Paper Cup</a>
                                    </h6>
                                    <p class="mb-0 fs-12 text-muted">
                                        Quantity: <span>3 x $250</span>
                                    </p>
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">750</span></h5>
                                </div>
                                <div class="ps-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/products/img-6.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1 fs-14">
                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Gray
                                            Styled T-Shirt</a>
                                    </h6>
                                    <p class="mb-0 fs-12 text-muted">
                                        Quantity: <span>1 x $1250</span>
                                    </p>
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0 fw-normal">$ <span class="cart-item-price">1250</span></h5>
                                </div>
                                <div class="ps-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                            </div>
                        </div>

                        <div class="d-block dropdown-item dropdown-item-cart text-wrap px-3 py-2">
                            <div class="d-flex align-items-center">
                                <img src="assets/images/products/img-5.png" class="me-3 rounded-circle avatar-sm p-2 bg-light" alt="user-pic">
                                <div class="flex-1">
                                    <h6 class="mt-0 mb-1 fs-14">
                                        <a href="apps-ecommerce-product-details.html" class="text-reset">Stillbird Helmet</a>
                                    </h6>
                                    <p class="mb-0 fs-12 text-muted">
                                        Quantity: <span>2 x $495</span>
                                    </p>
                                </div>
                                <div class="px-2">
                                    <h5 class="m-0 fw-normal">$<span class="cart-item-price">990</span></h5>
                                </div>
                                <div class="ps-2">
                                    <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary remove-item-btn"><i class="ri-close-fill fs-16"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                <div class="p-3 border-bottom-0 border-start-0 border-end-0 border-dashed border" id="checkout-elem" style="display: block;">
                    <div class="d-flex justify-content-between align-items-center pb-3">
                        <h5 class="m-0 text-muted">Total:</h5>
                        <div class="px-2">
                            <h5 class="m-0" id="cart-item-total">$3399.00</h5>
                        </div>
                    </div>

                    <a href="apps-ecommerce-checkout.html" class="btn btn-success text-center w-100">
                        Checkout
                    </a>
                </div>
            </div>
        </div>

        <div class="ms-1 header-item d-none d-sm-flex">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" data-toggle="fullscreen" fdprocessedid="onjnvb">
                <i class="bx bx-fullscreen fs-22"></i>
            </button>
        </div>

        <div class="ms-1 header-item d-none d-sm-flex">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle light-dark-mode" fdprocessedid="w4yfxj">
                <i class="bx bx-moon fs-22"></i>
            </button>
        </div>

        <div class="dropdown topbar-head-dropdown ms-1 header-item" id="notificationDropdown">
            <button type="button" class="btn btn-icon btn-topbar btn-ghost-secondary rounded-circle" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false" fdprocessedid="mx8toe">
                <i class="bx bx-bell fs-22"></i>
                <span class="position-absolute topbar-badge fs-10 translate-middle badge rounded-pill bg-danger">3<span class="visually-hidden">unread messages</span></span>
            </button>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">

                <div class="dropdown-head bg-primary bg-pattern rounded-top">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0 fs-16 fw-semibold text-white"> Notifications </h6>
                            </div>
                            <div class="col-auto dropdown-tabs">
                                <span class="badge badge-soft-light fs-13"> 4 New</span>
                            </div>
                        </div>
                    </div>

                    <div class="px-2 pt-2">
                        <ul class="nav nav-tabs dropdown-tabs nav-tabs-custom" data-dropdown-tabs="true" id="notificationItemsTab" role="tablist">
                            <li class="nav-item waves-effect waves-light" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#all-noti-tab" role="tab" aria-selected="true">
                                    All (4)
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#messages-tab" role="tab" aria-selected="false" tabindex="-1">
                                    Messages
                                </a>
                            </li>
                            <li class="nav-item waves-effect waves-light" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#alerts-tab" role="tab" aria-selected="false" tabindex="-1">
                                    Alerts
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>

                <div class="tab-content position-relative" id="notificationItemsTabContent">
                    <div class="tab-pane fade show active py-2 ps-2" id="all-noti-tab" role="tabpanel">
                        <div data-simplebar="init" style="max-height: 300px;" class="pe-2"><div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-soft-info text-info rounded-circle fs-16">
                                            <i class="bx bx-badge-check"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-2 lh-base">Your <b>Elite</b> author Graphic
                                                Optimization <span class="text-secondary">reward</span> is
                                                ready!
                                            </h6>
                                        </a>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> Just 30 sec ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check01">
                                            <label class="form-check-label" for="all-notification-check01"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                graph 🔔.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 48 min ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check02">
                                            <label class="form-check-label" for="all-notification-check02"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                <div class="d-flex">
                                    <div class="avatar-xs me-3">
                                        <span class="avatar-title bg-soft-danger text-danger rounded-circle fs-16">
                                            <i class="bx bx-message-square-dots"></i>
                                        </span>
                                    </div>
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-2 fs-13 lh-base">You have received <b class="text-success">20</b> new messages in the conversation
                                            </h6>
                                        </a>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check03">
                                            <label class="form-check-label" for="all-notification-check03"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item position-relative">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 4 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="all-notification-check04">
                                            <label class="form-check-label" for="all-notification-check04"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3 text-center view-all" style="display: block;">
                                <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                    All Notifications <i class="ri-arrow-right-line align-middle"></i></button>
                            </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>

                    </div>

                    <div class="tab-pane fade py-2 ps-2" id="messages-tab" role="tabpanel" aria-labelledby="messages-tab">
                        <div data-simplebar="init" style="max-height: 300px;" class="pe-2"><div class="simplebar-wrapper" style="margin: 0px -8px 0px 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px 8px 0px 0px;">
                            <div class="text-reset notification-item d-block dropdown-item">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-3.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">James Lemire</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 30 min ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="messages-notification-check01">
                                            <label class="form-check-label" for="messages-notification-check01"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-2.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Angela Bernier</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">Answered to your comment on the cash flow forecast's
                                                graph 🔔.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 2 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="messages-notification-check02">
                                            <label class="form-check-label" for="messages-notification-check02"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-6.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Kenneth Brown</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">Mentionned you in his comment on 📃 invoice #12501.
                                            </p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 10 hrs ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="messages-notification-check03">
                                            <label class="form-check-label" for="messages-notification-check03"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-reset notification-item d-block dropdown-item">
                                <div class="d-flex">
                                    <img src="assets/images/users/avatar-8.jpg" class="me-3 rounded-circle avatar-xs" alt="user-pic">
                                    <div class="flex-1">
                                        <a href="#!" class="stretched-link">
                                            <h6 class="mt-0 mb-1 fs-13 fw-semibold">Maureen Gibson</h6>
                                        </a>
                                        <div class="fs-13 text-muted">
                                            <p class="mb-1">We talked about a project on linkedin.</p>
                                        </div>
                                        <p class="mb-0 fs-11 fw-medium text-uppercase text-muted">
                                            <span><i class="mdi mdi-clock-outline"></i> 3 days ago</span>
                                        </p>
                                    </div>
                                    <div class="px-2 fs-15">
                                        <div class="form-check notification-check">
                                            <input class="form-check-input" type="checkbox" value="" id="messages-notification-check04">
                                            <label class="form-check-label" for="messages-notification-check04"></label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="my-3 text-center view-all" style="display: block;">
                                <button type="button" class="btn btn-soft-success waves-effect waves-light">View
                                    All Messages <i class="ri-arrow-right-line align-middle"></i></button>
                            </div>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: 0px; height: 0px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></div>
                    </div>
                    <div class="tab-pane fade p-4" id="alerts-tab" role="tabpanel" aria-labelledby="alerts-tab"><div class="empty-notification-elem">							<div class="w-25 w-sm-50 pt-3 mx-auto">								<img src="assets/images/svg/bell.svg" class="img-fluid" alt="user-pic">							</div>							<div class="text-center pb-5 mt-2">								<h6 class="fs-18 fw-semibold lh-base">Hey! You have no any notifications </h6>							</div>						</div></div>

                    <div class="notification-actions" id="notification-actions">
                        <div class="d-flex text-muted justify-content-center">
                            Select <div id="select-content" class="text-body fw-semibold px-1">0</div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeNotificationModal">Remove</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="dropdown ms-sm-3 header-item topbar-user">
            <button type="button" class="btn" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" fdprocessedid="mimw5s">
                <span class="d-flex align-items-center">
                    <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg" alt="Header Avatar">
                    <span class="text-start ms-xl-2">
                        <span class="d-none d-xl-inline-block ms-1 fw-medium user-name-text">Anna Adame</span>
                        <span class="d-none d-xl-block ms-1 fs-12 text-muted user-name-sub-text">Founder</span>
                    </span>
                </span>
            </button>
            <div class="dropdown-menu dropdown-menu-end">
                <!-- item-->
                <h6 class="dropdown-header">Welcome Anna!</h6>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-account-circle text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Profile</span></a>
                <a class="dropdown-item" href="apps-chat.html"><i class="mdi mdi-message-text-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Messages</span></a>
                <a class="dropdown-item" href="apps-tasks-kanban.html"><i class="mdi mdi-calendar-check-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Taskboard</span></a>
                <a class="dropdown-item" href="pages-faqs.html"><i class="mdi mdi-lifebuoy text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Help</span></a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="pages-profile.html"><i class="mdi mdi-wallet text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Balance : <b>$5971.67</b></span></a>
                <a class="dropdown-item" href="pages-profile-settings.html"><span class="badge bg-soft-success text-success mt-1 float-end">New</span><i class="mdi mdi-cog-outline text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Settings</span></a>
                <a class="dropdown-item" href="auth-lockscreen-basic.html"><i class="mdi mdi-lock text-muted fs-16 align-middle me-1"></i> <span class="align-middle">Lock screen</span></a>
                <a class="dropdown-item" href="auth-logout-basic.html"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout">Logout</span></a>
            </div>
        </div>
    </div>
</div>
</div>
</header>

<!-- removeNotificationModal -->
<div id="removeNotificationModal" class="modal fade zoomIn" tabindex="-1" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
    <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="NotificationModalbtn-close"></button>
    </div>
    <div class="modal-body">
        <div class="mt-2 text-center">
            <lord-icon src="https://cdn.lordicon.com/gsqxdxog.json" trigger="loop" colors="primary:#f7b84b,secondary:#f06548" style="width:100px;height:100px"></lord-icon>
            <div class="mt-4 pt-2 fs-15 mx-4 mx-sm-5">
                <h4>Are you sure ?</h4>
                <p class="text-muted mx-4 mb-0">Are you sure you want to remove this Notification ?</p>
            </div>
        </div>
        <div class="d-flex gap-2 justify-content-center mt-4 mb-2">
            <button type="button" class="btn w-sm btn-light" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn w-sm btn-danger" id="delete-notification">Yes, Delete It!</button>
        </div>
    </div>

</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index.html" class="logo logo-dark">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-dark.png" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index.html" class="logo logo-light">
            <span class="logo-sm">
                <img src="assets/images/logo-sm.png" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="assets/images/logo-light.png" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar" data-simplebar="init" class="h-100"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" tabindex="0" role="region" aria-label="scrollable content" style="height: auto; overflow: hidden;"><div class="simplebar-content" style="padding: 0px;">
                <li class="menu-title"><span data-key="t-menu">Menu</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-dashboards">Dashboards</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarDashboards" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="dashboard-analytics.html" class="nav-link" data-key="t-analytics">Analytics</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crm.html" class="nav-link" data-key="t-crm">CRM</a>
                            </li>
                            <li class="nav-item">
                                <a href="index.html" class="nav-link" data-key="t-ecommerce">Ecommerce</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-crypto.html" class="nav-link" data-key="t-crypto">Crypto</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-projects.html" class="nav-link" data-key="t-projects">Projects</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-nft.html" class="nav-link" data-key="t-nft">NFT</a>
                            </li>
                            <li class="nav-item">
                                <a href="dashboard-job.html" class="nav-link"><span data-key="t-job">Job</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarApps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApps">
                        <i class="ri-apps-2-line"></i> <span data-key="t-apps">Apps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarApps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="apps-calendar.html" class="nav-link" data-key="t-calendar">Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-chat.html" class="nav-link" data-key="t-chat">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEmail" data-key="t-email">Email</a>
                                <div class="collapse menu-dropdown" id="sidebarEmail">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-mailbox.html" class="nav-link" data-key="t-mailbox">Mailbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebaremailTemplates" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebaremailTemplates" data-key="t-email-templates">Email Templates</a>
                                            <div class="collapse menu-dropdown" id="sidebaremailTemplates">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-email-basic.html" class="nav-link" data-key="t-basic-action">Basic Action</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-email-ecommerce.html" class="nav-link" data-key="t-ecommerce-action">Ecommerce Action</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarEcommerce" data-key="t-ecommerce">Ecommerce</a>
                                <div class="collapse menu-dropdown" id="sidebarEcommerce">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-products.html" class="nav-link" data-key="t-products">Products</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-product-details.html" class="nav-link" data-key="t-product-Details">Product Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-add-product.html" class="nav-link" data-key="t-create-product">Create Product</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-orders.html" class="nav-link" data-key="t-orders">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-order-details.html" class="nav-link" data-key="t-order-details">Order Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-customers.html" class="nav-link" data-key="t-customers">Customers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-cart.html" class="nav-link" data-key="t-shopping-cart">Shopping Cart</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-checkout.html" class="nav-link" data-key="t-checkout">Checkout</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-sellers.html" class="nav-link" data-key="t-sellers">Sellers</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-ecommerce-seller-details.html" class="nav-link" data-key="t-sellers-details">Seller Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProjects" data-key="t-projects">Projects</a>
                                <div class="collapse menu-dropdown" id="sidebarProjects">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-projects-list.html" class="nav-link" data-key="t-list">List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-overview.html" class="nav-link" data-key="t-overview">Overview</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-projects-create.html" class="nav-link" data-key="t-create-project">Create Project</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTasks" data-key="t-tasks">Tasks</a>
                                <div class="collapse menu-dropdown" id="sidebarTasks">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tasks-kanban.html" class="nav-link" data-key="t-kanbanboard">Kanban Board</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-list-view.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tasks-details.html" class="nav-link" data-key="t-task-details">Task Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCRM" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCRM" data-key="t-crm">CRM</a>
                                <div class="collapse menu-dropdown" id="sidebarCRM">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crm-contacts.html" class="nav-link" data-key="t-contacts">Contacts</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-companies.html" class="nav-link" data-key="t-companies">Companies</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-deals.html" class="nav-link" data-key="t-deals">Deals</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crm-leads.html" class="nav-link" data-key="t-leads">Leads</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrypto" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrypto" data-key="t-crypto">Crypto</a>
                                <div class="collapse menu-dropdown" id="sidebarCrypto">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-crypto-transactions.html" class="nav-link" data-key="t-transactions">Transactions</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-buy-sell.html" class="nav-link" data-key="t-buy-sell">Buy &amp; Sell</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-orders.html" class="nav-link" data-key="t-orders">Orders</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-wallet.html" class="nav-link" data-key="t-my-wallet">My Wallet</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-ico.html" class="nav-link" data-key="t-ico-list">ICO List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-crypto-kyc.html" class="nav-link" data-key="t-kyc-application">KYC Application</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarInvoices" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarInvoices" data-key="t-invoices">Invoices</a>
                                <div class="collapse menu-dropdown" id="sidebarInvoices">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-invoices-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-details.html" class="nav-link" data-key="t-details">Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-invoices-create.html" class="nav-link" data-key="t-create-invoice">Create Invoice</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTickets" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTickets" data-key="t-supprt-tickets">Support Tickets</a>
                                <div class="collapse menu-dropdown" id="sidebarTickets">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-tickets-list.html" class="nav-link" data-key="t-list-view">List View</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-tickets-details.html" class="nav-link" data-key="t-ticket-details">Ticket Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarnft" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarnft" data-key="t-nft-marketplace">NFT Marketplace</a>
                                <div class="collapse menu-dropdown" id="sidebarnft">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-nft-marketplace.html" class="nav-link" data-key="t-marketplace">Marketplace</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-explore.html" class="nav-link" data-key="t-explore-now">Explore Now</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-auction.html" class="nav-link" data-key="t-live-auction">Live Auction</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-item-details.html" class="nav-link" data-key="t-item-details">Item Details</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-collections.html" class="nav-link" data-key="t-collections">Collections</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-creators.html" class="nav-link" data-key="t-creators">Creators</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-ranking.html" class="nav-link" data-key="t-ranking">Ranking</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-wallet.html" class="nav-link" data-key="t-wallet-connect">Wallet Connect</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-nft-create.html" class="nav-link" data-key="t-create-nft">Create NFT</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-file-manager.html" class="nav-link"> <span data-key="t-file-manager">File Manager</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="apps-todo.html" class="nav-link"> <span data-key="t-to-do">To Do</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarjobs" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarjobs"> <span data-key="t-jobs">Jobs</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                                <div class="collapse menu-dropdown" id="sidebarjobs">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="apps-job-statistics.html" class="nav-link" data-key="t-candidate-list"> Statistics </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarJoblists" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarJoblists" data-key="t-job-lists">Job Lists</a>
                                            <div class="collapse menu-dropdown" id="sidebarJoblists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-lists.html" class="nav-link" data-key="t-list">List</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-grid-lists.html" class="nav-link" data-key="t-grid">Grid</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-details.html" class="nav-link" data-key="t-overview">Overview</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCandidatelists" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCandidatelists" data-key="t-candidate-lists">Candidate Lists</a>
                                            <div class="collapse menu-dropdown" id="sidebarCandidatelists">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-lists.html" class="nav-link" data-key="t-list-view">List View</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="apps-job-candidate-grid.html" class="nav-link" data-key="t-grid-view">Grid View</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-application.html" class="nav-link" data-key="t-application">Application</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-new.html" class="nav-link" data-key="t-new-job">New Job</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-companies-lists.html" class="nav-link" data-key="t-companies-list">Companies List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="apps-job-categories.html" class="nav-link" data-key="t-job-categories">Job Categories</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="apps-api-key.html" class="nav-link"> <span data-key="t-api-key">API Key</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                        <i class="ri-layout-3-line"></i> <span data-key="t-layouts">Layouts</span> <span class="badge badge-pill bg-danger" data-key="t-hot">Hot</span>
                    </a>
                    <div class="menu-dropdown collapse" id="sidebarLayouts" style="">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Horizontal</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Detached</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-two-column.html" target="_blank" class="nav-link" data-key="t-two-column">Two Column</a>
                            </li>
                            <li class="nav-item">
                                <a href="layouts-vertical-hovered.html" target="_blank" class="nav-link" data-key="t-hovered">Hovered</a>
                            </li>
                        </ul>
                    </div>
                </li> <!-- end Dashboard Menu -->

                <li class="menu-title"><i class="ri-more-fill" aria-expanded="false"></i> <span data-key="t-pages">Pages</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAuth" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAuth">
                        <i class="ri-account-circle-line"></i> <span data-key="t-authentication">Authentication</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarSignIn" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignIn" data-key="t-signin">Sign In</a>
                                <div class="collapse menu-dropdown" id="sidebarSignIn">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signin-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signin-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSignUp" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSignUp" data-key="t-signup">Sign Up</a>
                                <div class="collapse menu-dropdown" id="sidebarSignUp">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-signup-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-signup-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarResetPass" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarResetPass" data-key="t-password-reset">Password Reset</a>
                                <div class="collapse menu-dropdown" id="sidebarResetPass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-reset-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarchangePass" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarchangePass" data-key="t-password-create">Password Create</a>
                                <div class="collapse menu-dropdown" id="sidebarchangePass">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-pass-change-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-pass-change-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLockScreen" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLockScreen" data-key="t-lock-screen">Lock Screen</a>
                                <div class="collapse menu-dropdown" id="sidebarLockScreen">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-lockscreen-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item">
                                <a href="#sidebarLogout" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLogout" data-key="t-logout">Logout</a>
                                <div class="collapse menu-dropdown" id="sidebarLogout">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-logout-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-logout-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarSuccessMsg" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarSuccessMsg" data-key="t-success-message">Success Message</a>
                                <div class="collapse menu-dropdown" id="sidebarSuccessMsg">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-success-msg-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-success-msg-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTwoStep" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTwoStep" data-key="t-two-step-verification">Two Step Verification</a>
                                <div class="collapse menu-dropdown" id="sidebarTwoStep">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-twostep-basic.html" class="nav-link" data-key="t-basic">Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-twostep-cover.html" class="nav-link" data-key="t-cover">Cover</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarErrors" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarErrors" data-key="t-errors">Errors</a>
                                <div class="collapse menu-dropdown" id="sidebarErrors">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="auth-404-basic.html" class="nav-link" data-key="t-404-basic">404 Basic</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-cover.html" class="nav-link" data-key="t-404-cover">404 Cover</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-404-alt.html" class="nav-link" data-key="t-404-alt">404 Alt</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-500.html" class="nav-link" data-key="t-500">500</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="auth-offline.html" class="nav-link" data-key="t-offline-page">Offline Page</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarPages" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarPages">
                        <i class="ri-pages-line"></i> <span data-key="t-pages">Pages</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarPages">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="pages-starter.html" class="nav-link" data-key="t-starter">Starter</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProfile" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarProfile" data-key="t-profile">Profile</a>
                                <div class="collapse menu-dropdown" id="sidebarProfile">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="pages-profile.html" class="nav-link" data-key="t-simple-page">Simple Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="pages-profile-settings.html" class="nav-link" data-key="t-settings">Settings</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="pages-team.html" class="nav-link" data-key="t-team">Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-timeline.html" class="nav-link" data-key="t-timeline">Timeline</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-faqs.html" class="nav-link" data-key="t-faqs">FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-pricing.html" class="nav-link" data-key="t-pricing">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-gallery.html" class="nav-link" data-key="t-gallery">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-maintenance.html" class="nav-link" data-key="t-maintenance">Maintenance</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-coming-soon.html" class="nav-link" data-key="t-coming-soon">Coming Soon</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-sitemap.html" class="nav-link" data-key="t-sitemap">Sitemap</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-search-results.html" class="nav-link" data-key="t-search-results">Search Results</a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-privacy-policy.html" class="nav-link"><span data-key="t-privacy-policy">Privacy Policy</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                            </li>
                            <li class="nav-item">
                                <a href="pages-term-conditions.html" class="nav-link"><span data-key="t-term-conditions">Term &amp; Conditions</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarLanding" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLanding">
                        <i class="ri-rocket-line"></i> <span data-key="t-landing">Landing</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarLanding">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="landing.html" class="nav-link" data-key="t-one-page">One Page</a>
                            </li>
                            <li class="nav-item">
                                <a href="nft-landing.html" class="nav-link" data-key="t-nft-landing">NFT Landing</a>
                            </li>
                            <li class="nav-item">
                                <a href="job-landing.html" class="nav-link"><span data-key="t-job">Job</span> <span class="badge badge-pill bg-success" data-key="t-new">New</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="menu-title"><i class="ri-more-fill" aria-expanded="false"></i> <span data-key="t-components">Components</span></li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarUI">
                        <i class="ri-pencil-ruler-2-line"></i> <span data-key="t-base-ui">Base UI</span>
                    </a>
                    <div class="collapse menu-dropdown mega-dropdown-menu" id="sidebarUI">
                        <div class="row">
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-alerts.html" class="nav-link" data-key="t-alerts">Alerts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-badges.html" class="nav-link" data-key="t-badges">Badges</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-buttons.html" class="nav-link" data-key="t-buttons">Buttons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-colors.html" class="nav-link" data-key="t-colors">Colors</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-cards.html" class="nav-link" data-key="t-cards">Cards</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-carousel.html" class="nav-link" data-key="t-carousel">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-dropdowns.html" class="nav-link" data-key="t-dropdowns">Dropdowns</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-grid.html" class="nav-link" data-key="t-grid">Grid</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-images.html" class="nav-link" data-key="t-images">Images</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-tabs.html" class="nav-link" data-key="t-tabs">Tabs</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-accordions.html" class="nav-link" data-key="t-accordion-collapse">Accordion &amp; Collapse</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-modals.html" class="nav-link" data-key="t-modals">Modals</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-offcanvas.html" class="nav-link" data-key="t-offcanvas">Offcanvas</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-placeholders.html" class="nav-link" data-key="t-placeholders">Placeholders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-progress.html" class="nav-link" data-key="t-progress">Progress</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-notifications.html" class="nav-link" data-key="t-notifications">Notifications</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="nav nav-sm flex-column">
                                    <li class="nav-item">
                                        <a href="ui-media.html" class="nav-link" data-key="t-media-object">Media object</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-embed-video.html" class="nav-link" data-key="t-embed-video">Embed Video</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-typography.html" class="nav-link" data-key="t-typography">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-lists.html" class="nav-link" data-key="t-lists">Lists</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-general.html" class="nav-link" data-key="t-general">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-ribbons.html" class="nav-link" data-key="t-ribbons">Ribbons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="ui-utilities.html" class="nav-link" data-key="t-utilities">Utilities</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarAdvanceUI" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAdvanceUI">
                        <i class="ri-stack-line"></i> <span data-key="t-advance-ui">Advance UI</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarAdvanceUI">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="advance-ui-sweetalerts.html" class="nav-link" data-key="t-sweet-alerts">Sweet Alerts</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-nestable.html" class="nav-link" data-key="t-nestable-list">Nestable List</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollbar.html" class="nav-link" data-key="t-scrollbar">Scrollbar</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-animation.html" class="nav-link" data-key="t-animation">Animation</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-tour.html" class="nav-link" data-key="t-tour">Tour</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-swiper.html" class="nav-link" data-key="t-swiper-slider">Swiper Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-ratings.html" class="nav-link" data-key="t-ratings">Ratings</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-highlight.html" class="nav-link" data-key="t-highlight">Highlight</a>
                            </li>
                            <li class="nav-item">
                                <a href="advance-ui-scrollspy.html" class="nav-link" data-key="t-scrollSpy">ScrollSpy</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="widgets.html" aria-expanded="false">
                        <i class="ri-honour-line"></i> <span data-key="t-widgets">Widgets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarForms" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarForms">
                        <i class="ri-file-list-3-line"></i> <span data-key="t-forms">Forms</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarForms">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="forms-elements.html" class="nav-link" data-key="t-basic-elements">Basic Elements</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select.html" class="nav-link" data-key="t-form-select">Form Select</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-checkboxs-radios.html" class="nav-link" data-key="t-checkboxs-radios">Checkboxs &amp; Radios</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-pickers.html" class="nav-link" data-key="t-pickers">Pickers</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-masks.html" class="nav-link" data-key="t-input-masks">Input Masks</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-advanced.html" class="nav-link" data-key="t-advanced">Advanced</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-range-sliders.html" class="nav-link" data-key="t-range-slider">Range Slider</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-validation.html" class="nav-link" data-key="t-validation">Validation</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-wizard.html" class="nav-link" data-key="t-wizard">Wizard</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-editors.html" class="nav-link" data-key="t-editors">Editors</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-file-uploads.html" class="nav-link" data-key="t-file-uploads">File Uploads</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-layouts.html" class="nav-link" data-key="t-form-layouts">Form Layouts</a>
                            </li>
                            <li class="nav-item">
                                <a href="forms-select2.html" class="nav-link" data-key="t-select2">Select2</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed active" href="#sidebarTables" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarTables">
                        <i class="ri-layout-grid-line"></i> <span data-key="t-tables">Tables</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarTables">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="tables-basic.html" class="nav-link" data-key="t-basic-tables">Basic Tables</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-gridjs.html" class="nav-link" data-key="t-grid-js">Grid Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-listjs.html" class="nav-link" data-key="t-list-js">List Js</a>
                            </li>
                            <li class="nav-item">
                                <a href="tables-datatables.html" class="nav-link active" data-key="t-datatables">Datatables</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarCharts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCharts">
                        <i class="ri-pie-chart-line"></i> <span data-key="t-charts">Charts</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarCharts">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#sidebarApexcharts" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarApexcharts" data-key="t-apexcharts">Apexcharts</a>
                                <div class="collapse menu-dropdown" id="sidebarApexcharts">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="charts-apex-line.html" class="nav-link" data-key="t-line">Line</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-area.html" class="nav-link" data-key="t-area">Area</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-column.html" class="nav-link" data-key="t-column">Column</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bar.html" class="nav-link" data-key="t-bar">Bar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-mixed.html" class="nav-link" data-key="t-mixed">Mixed</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-timeline.html" class="nav-link" data-key="t-timeline">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-candlestick.html" class="nav-link" data-key="t-candlstick">Candlstick</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-boxplot.html" class="nav-link" data-key="t-boxplot">Boxplot</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-bubble.html" class="nav-link" data-key="t-bubble">Bubble</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-scatter.html" class="nav-link" data-key="t-scatter">Scatter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-heatmap.html" class="nav-link" data-key="t-heatmap">Heatmap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-treemap.html" class="nav-link" data-key="t-treemap">Treemap</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-pie.html" class="nav-link" data-key="t-pie">Pie</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radialbar.html" class="nav-link" data-key="t-radialbar">Radialbar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-radar.html" class="nav-link" data-key="t-radar">Radar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="charts-apex-polar.html" class="nav-link" data-key="t-polar-area">Polar Area</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="charts-chartjs.html" class="nav-link" data-key="t-chartjs">Chartjs</a>
                            </li>
                            <li class="nav-item">
                                <a href="charts-echarts.html" class="nav-link" data-key="t-echarts">Echarts</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span data-key="t-icons">Icons</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="icons-remix.html" class="nav-link" data-key="t-remix">Remix</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-boxicons.html" class="nav-link" data-key="t-boxicons">Boxicons</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-materialdesign.html" class="nav-link" data-key="t-material-design">Material Design</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-lineawesome.html" class="nav-link" data-key="t-line-awesome">Line Awesome</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-feather.html" class="nav-link" data-key="t-feather">Feather</a>
                            </li>
                            <li class="nav-item">
                                <a href="icons-crypto.html" class="nav-link"> <span data-key="t-crypto-svg">Crypto SVG</span></a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMaps" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMaps">
                        <i class="ri-map-pin-line"></i> <span data-key="t-maps">Maps</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMaps">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="maps-google.html" class="nav-link" data-key="t-google">Google</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-vector.html" class="nav-link" data-key="t-vector">Vector</a>
                            </li>
                            <li class="nav-item">
                                <a href="maps-leaflet.html" class="nav-link" data-key="t-leaflet">Leaflet</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link collapsed" href="#sidebarMultilevel" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarMultilevel">
                        <i class="ri-share-line"></i> <span data-key="t-multi-level">Multi Level</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarMultilevel">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-key="t-level-1.1">Level 1.1</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarAccount" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarAccount" data-key="t-level-1.2">Level 1.2</a>
                                <div class="collapse menu-dropdown" id="sidebarAccount">
                                    <ul class="nav nav-sm flex-column">
                                        <li class="nav-item">
                                            <a href="#" class="nav-link" data-key="t-level-2.1">Level 2.1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#sidebarCrm" class="nav-link collapsed" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarCrm" data-key="t-level-2.2">Level 2.2</a>
                                            <div class="collapse menu-dropdown" id="sidebarCrm">
                                                <ul class="nav nav-sm flex-column">
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.1">Level 3.1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="#" class="nav-link" data-key="t-level-3.2">Level 3.2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>

            </div></div></div></div><div class="simplebar-placeholder" style="width: 249px; height: 827px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: hidden;"><div class="simplebar-scrollbar" style="height: 0px; display: none;"></div></div></ul>
        </div>
        <!-- Sidebar -->
    </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 827px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none; transform: translate3d(0px, 0px, 0px);"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 585px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></div>

    <div class="sidebar-background"></div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>

<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                        <h4 class="mb-sm-0">Datatables</h4>

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                <li class="breadcrumb-item active">Datatables</li>
                            </ol>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="alert alert-danger" role="alert">
                This is <strong>Datatable</strong> page in wihch we have used <b>jQuery</b> with cnd link!
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Basic Datatables</h5>
                        </div>
                        <div class="card-body">
                            <div id="example_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="example_length"><label>Show <select name="example_length" aria-controls="example" class="form-select form-select-sm" fdprocessedid="9ssm0m"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="example_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="example_info">
                                <thead>
                                    <tr><th scope="col" style="width: 17.0667px;" class="sorting sorting_asc" tabindex="0" aria-controls="example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                            
                                        : activate to sort column descending">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th><th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 234.733px;" aria-label="SR No.: activate to sort column ascending">SR No.</th><th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 205.733px;" aria-label="ID: activate to sort column ascending">ID</th><th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 361.733px;" aria-label="Purchase ID: activate to sort column ascending">Purchase ID</th><th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px;" aria-label="Title: activate to sort column ascending">Title</th><th data-ordering="false" class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px;" aria-label="User: activate to sort column ascending">User</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Created By: activate to sort column ascending">Created By</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Create Date: activate to sort column ascending">Create Date</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="example" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>01</td>
                                        <td>VLZ-452</td>
                                        <td>VLZ1400087402</td>
                                        <td style=""><a href="#!">Post launch reminder/ post list</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="display: none;">Joseph Parker</td>
                                        <td style="display: none;">03 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-info">Re-open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>02</td>
                                        <td>VLZ-453</td>
                                        <td>VLZ1400087425</td>
                                        <td style=""><a href="#!">Additional Calendar</a></td>
                                        <td style="">Diana Kohler</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Mary Rucker</td>
                                        <td style="display: none;">05 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>03</td>
                                        <td>VLZ-454</td>
                                        <td>VLZ1400087438</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">Tonya Noble</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Tonya Noble</td>
                                        <td style="display: none;">27 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>04</td>
                                        <td>VLZ-455</td>
                                        <td>VLZ1400087748</td>
                                        <td style=""><a href="#!">Apologize for shopping Error!</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="display: none;">Joseph Parker</td>
                                        <td style="display: none;">14 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>05</td>
                                        <td>VLZ-456</td>
                                        <td>VLZ1400087547</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Donald Palmer</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Donald Palmer</td>
                                        <td style="display: none;">25 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>06</td>
                                        <td>VLZ-457</td>
                                        <td>VLZ1400087245</td>
                                        <td style=""><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td style="">Mary Rucker</td>
                                        <td style="">Jennifer Carter</td>
                                        <td style="display: none;">Mary Rucker</td>
                                        <td style="display: none;">14 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>07</td>
                                        <td>VLZ-458</td>
                                        <td>VLZ1400087785</td>
                                        <td style=""><a href="#!">Change email option process</a></td>
                                        <td style="">James Morris</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">James Morris</td>
                                        <td style="display: none;">12 March, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-primary">Open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>08</td>
                                        <td>VLZ-460</td>
                                        <td>VLZ1400087745</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Nathan Cole</td>
                                        <td style="">Nancy Martino</td>
                                        <td style="display: none;">Nathan Cole</td>
                                        <td style="display: none;">28 Feb, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>09</td>
                                        <td>VLZ-461</td>
                                        <td>VLZ1400087179</td>
                                        <td style=""><a href="#!">Form submit issue</a></td>
                                        <td style="">Grace Coles</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Grace Coles</td>
                                        <td style="display: none;">07 Jan, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-success">New</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>10</td>
                                        <td>VLZ-462</td>
                                        <td>VLZ140008856</td>
                                        <td style=""><a href="#!">Edit customer testimonial</a></td>
                                        <td style="">Freda</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="display: none;">Freda</td>
                                        <td style="display: none;">16 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1 dtr-control">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>11</td>
                                        <td>VLZ-463</td>
                                        <td>VLZ1400078031</td>
                                        <td style=""><a href="#!">Ca i have an e-copy invoice</a></td>
                                        <td style="">Williams</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Williams</td>
                                        <td style="display: none;">24 Feb, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-primary">Open</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1 dtr-control">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>12</td>
                                        <td>VLZ-464</td>
                                        <td>VLZ1400087416</td>
                                        <td style=""><a href="#!">Brand logo design</a></td>
                                        <td style="">Richard V.</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Richard V.</td>
                                        <td style="display: none;">16 March, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1 dtr-control">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>13</td>
                                        <td>VLZ-466</td>
                                        <td>VLZ1400089015</td>
                                        <td style=""><a href="#!">Issue with finding information about order ?</a></td>
                                        <td style="">Olive Gunther</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="display: none;">Schaefer</td>
                                        <td style="display: none;">32 March, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-success">New</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1 dtr-control">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>14</td>
                                        <td>VLZ-467</td>
                                        <td>VLZ1400090324</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">Edwin</td>
                                        <td style="">Admin</td>
                                        <td style="display: none;">Edwin</td>
                                        <td style="display: none;">05 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="example_info" role="status" aria-live="polite">Showing 1 to 14 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="example_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="example_previous"><a href="#" aria-controls="example" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="example" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="example_next"><a href="#" aria-controls="example" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Scroll - Vertical</h5>
                        </div>
                        <div class="card-body">
                            <div id="scroll-vertical_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"></div><div class="col-sm-12 col-md-6"><div id="scroll-vertical_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="scroll-vertical"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 979.333px; padding-right: 17px;"><table class="table table-bordered dt-responsive nowrap align-middle mdl-data-table dataTable no-footer" style="width: 979.333px; margin-left: 0px;"><thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 279.844px;" aria-sort="ascending" aria-label="ID: activate to sort column descending">ID</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 618.302px;" aria-label="Project: activate to sort column ascending">Project</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px;" aria-label="Task: activate to sort column ascending">Task</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px;" aria-label="Client Name: activate to sort column ascending">Client Name</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px;" aria-label="Due Date: activate to sort column ascending">Due Date</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Priority: activate to sort column ascending">Priority</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; max-height: 210px; width: 100%;"><table id="scroll-vertical" class="table table-bordered dt-responsive nowrap align-middle mdl-data-table dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="scroll-vertical_info"><thead>
                                    <tr style="height: 0px;"><th class="sorting sorting_asc" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 279.844px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-sort="ascending" aria-label="ID: activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">ID</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 618.302px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Project: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Project</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Task: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Task</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Client Name: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Client Name</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Assigned To: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Assigned To</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Due Date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Due Date</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Status: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Status</div></th><th class="sorting" aria-controls="scroll-vertical" rowspan="1" colspan="1" style="width: 0px; display: none; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Priority: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Priority</div></th></tr>
                                </thead>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-452</td>
                                        <td>Symox v1.0.0</td>
                                        <td style=""><a href="#!">Add Dynamic Contact List</a></td>
                                        <td style="">RH Nichols</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">03 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-info">Re-open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-453</td>
                                        <td>Doot - Chat App Template</td>
                                        <td style=""><a href="#!">Additional Calendar</a></td>
                                        <td style="">Diana Kohler</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-4.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">05 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">David Nichols</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">27 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-454</td>
                                        <td>Qexal - Landing Page</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">David Nichols</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">27 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td style=""><a href="#!">Apologize for shopping Error!</a></td>
                                        <td style="">Tonya Noble</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">14 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-455</td>
                                        <td>Dorsin - Landing Page</td>
                                        <td style=""><a href="#!">Apologize for shopping Error!</a></td>
                                        <td style="">Tonya Noble</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">14 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Donald Palmer</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">25 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-456</td>
                                        <td>Minimal - v2.1.0</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Donald Palmer</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">25 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td style=""><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td style="">Jennifer Carter</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">14 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-457</td>
                                        <td>Dason - v1.0.0</td>
                                        <td style=""><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td style="">Jennifer Carter</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-6.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-6.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-7.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-7.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                    
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-8.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-8.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">14 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-458</td>
                                        <td>Velzon v1.6.0</td>
                                        <td style=""><a href="#!">Add datatables</a></td>
                                        <td style="">James Morris</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-4.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-4.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">12 March, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-primary">Open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-460</td>
                                        <td>Skote v2.0.0</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Nancy Martino</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-3.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-3.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-10.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-9.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">28 Feb, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-461</td>
                                        <td>Velzon v1.0.0</td>
                                        <td style=""><a href="#!">Form submit issue</a></td>
                                        <td style="">Grace Coles</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-5.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-5.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-9.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-9.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-10.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-10.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">07 Jan, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-success">New</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">VLZ-462</td>
                                        <td>Minimal - v2.2.0</td>
                                        <td style=""><a href="#!">Edit customer testimonial</a></td>
                                        <td style="">Freda</td>
                                        <td style="">
                                            <div class="avatar-group">
                                                <a href="javascript: void(0);" class="avatar-group-item" data-img="avatar-2.jpg" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top" aria-label="Username" data-bs-original-title="Username">
                                                    <img src="assets/images/users/avatar-2.jpg" alt="" class="rounded-circle avatar-xxs">
                                                </a>
                                            </div>
                                        </td>
                                        <td style="">16 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                    </tr></tbody>
                            </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll-vertical_info" role="status" aria-live="polite">Showing 1 to 14 of 14 entries</div></div><div class="col-sm-12 col-md-7"></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Scroll - Horizontal</h5>
                        </div>
                        <div class="card-body">
                            <div id="scroll-horizontal_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="scroll-horizontal_length"><label>Show <select name="scroll-horizontal_length" aria-controls="scroll-horizontal" class="form-select form-select-sm" fdprocessedid="7tfxu"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="scroll-horizontal_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="scroll-horizontal"></label></div></div></div><div class="row"><div class="col-sm-12"><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1295.83px; padding-right: 17px;"><table class="table nowrap align-middle dataTable no-footer" style="width: 1295.83px; margin-left: 0px;"><thead>
                                    <tr><th scope="col" style="width: 16.5px;" class="sorting sorting_asc" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                            
                                        : activate to sort column descending">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 40.5833px;" aria-label="SR No.: activate to sort column ascending">SR No.</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 32.7917px;" aria-label="ID: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 78.125px;" aria-label="Purchase ID: activate to sort column ascending">Purchase ID</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 207.167px;" aria-label="Title: activate to sort column ascending">Title</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 75.4896px;" aria-label="User: activate to sort column ascending">User</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 80.2292px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 75.4896px;" aria-label="Created By: activate to sort column ascending">Created By</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 79.4375px;" aria-label="Create Date: activate to sort column ascending">Create Date</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 45.3646px;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 46.8438px;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 42.6875px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%;"><table id="scroll-horizontal" class="table nowrap align-middle dataTable no-footer" style="width: 100%;" aria-describedby="scroll-horizontal_info"><thead>
                                    <tr style="height: 0px;"><th scope="col" style="width: 16.5px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" class="sorting sorting_asc" aria-controls="scroll-horizontal" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                            
                                        : activate to sort column descending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 40.5833px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="SR No.: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">SR No.</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 32.7917px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="ID: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">ID</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 78.125px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Purchase ID: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Purchase ID</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 207.167px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Title: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Title</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 75.4896px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="User: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">User</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 80.2292px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Assigned To: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Assigned To</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 75.4896px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Created By: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Created By</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 79.4375px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Create Date: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Create Date</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 45.3646px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Status: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Status</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 46.8438px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Priority: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Priority</div></th><th class="sorting" aria-controls="scroll-horizontal" rowspan="1" colspan="1" style="width: 42.6875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" aria-label="Action: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Action</div></th></tr>
                                </thead>
                                
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>01</td>
                                        <td>VLZ-452</td>
                                        <td>VLZ1400087402</td>
                                        <td><a href="#!">Post launch reminder/ post list</a></td>
                                        <td>Joseph Parker</td>
                                        <td>Alexis Clarke</td>
                                        <td>Joseph Parker</td>
                                        <td>03 Oct, 2021</td>
                                        <td><span class="badge badge-soft-info">Re-open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>02</td>
                                        <td>VLZ-453</td>
                                        <td>VLZ1400087425</td>
                                        <td><a href="#!">Additional Calendar</a></td>
                                        <td>Diana Kohler</td>
                                        <td>Admin</td>
                                        <td>Mary Rucker</td>
                                        <td>05 Oct, 2021</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>03</td>
                                        <td>VLZ-454</td>
                                        <td>VLZ1400087438</td>
                                        <td><a href="#!">Make a creating an account profile</a></td>
                                        <td>Tonya Noble</td>
                                        <td>Admin</td>
                                        <td>Tonya Noble</td>
                                        <td>27 April, 2022</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>04</td>
                                        <td>VLZ-455</td>
                                        <td>VLZ1400087748</td>
                                        <td><a href="#!">Apologize for shopping Error!</a></td>
                                        <td>Joseph Parker</td>
                                        <td>Alexis Clarke</td>
                                        <td>Joseph Parker</td>
                                        <td>14 June, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>05</td>
                                        <td>VLZ-456</td>
                                        <td>VLZ1400087547</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Donald Palmer</td>
                                        <td>Admin</td>
                                        <td>Donald Palmer</td>
                                        <td>25 June, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>06</td>
                                        <td>VLZ-457</td>
                                        <td>VLZ1400087245</td>
                                        <td><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td>Mary Rucker</td>
                                        <td>Jennifer Carter</td>
                                        <td>Mary Rucker</td>
                                        <td>14 Aug, 2021</td>
                                        <td><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>07</td>
                                        <td>VLZ-458</td>
                                        <td>VLZ1400087785</td>
                                        <td><a href="#!">Change email option process</a></td>
                                        <td>James Morris</td>
                                        <td>Admin</td>
                                        <td>James Morris</td>
                                        <td>12 March, 2022</td>
                                        <td><span class="badge badge-soft-primary">Open</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>08</td>
                                        <td>VLZ-460</td>
                                        <td>VLZ1400087745</td>
                                        <td><a href="#!">Support for theme</a></td>
                                        <td>Nathan Cole</td>
                                        <td>Nancy Martino</td>
                                        <td>Nathan Cole</td>
                                        <td>28 Feb, 2022</td>
                                        <td><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td><span class="badge bg-success">Low</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>09</td>
                                        <td>VLZ-461</td>
                                        <td>VLZ1400087179</td>
                                        <td><a href="#!">Form submit issue</a></td>
                                        <td>Grace Coles</td>
                                        <td>Admin</td>
                                        <td>Grace Coles</td>
                                        <td>07 Jan, 2022</td>
                                        <td><span class="badge badge-soft-success">New</span></td>
                                        <td><span class="badge bg-danger">High</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="sorting_1">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>10</td>
                                        <td>VLZ-462</td>
                                        <td>VLZ140008856</td>
                                        <td><a href="#!">Edit customer testimonial</a></td>
                                        <td>Freda</td>
                                        <td>Alexis Clarke</td>
                                        <td>Freda</td>
                                        <td>16 Aug, 2021</td>
                                        <td><span class="badge badge-soft-danger">Closed</span></td>
                                        <td><span class="badge bg-info">Medium</span></td>
                                        <td>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div></div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="scroll-horizontal_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="scroll-horizontal_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="scroll-horizontal_previous"><a href="#" aria-controls="scroll-horizontal" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="scroll-horizontal" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="scroll-horizontal" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="scroll-horizontal_next"><a href="#" aria-controls="scroll-horizontal" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Alternative Pagination</h5>
                        </div>
                        <div class="card-body">
                            <div id="alternative-pagination_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="alternative-pagination_length"><label>Show <select name="alternative-pagination_length" aria-controls="alternative-pagination" class="form-select form-select-sm" fdprocessedid="8r0qjq"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="alternative-pagination_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="alternative-pagination"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="alternative-pagination" class="table nowrap dt-responsive align-middle table-hover table-bordered dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="alternative-pagination_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 119.067px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">SR No.</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 261.733px;" aria-label="Currency: activate to sort column ascending">Currency</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 124.733px;" aria-label="Price: activate to sort column ascending">Price</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 138.733px;" aria-label="Pairs: activate to sort column ascending">Pairs</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 135.733px;" aria-label="24 High: activate to sort column ascending">24 High</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 0px;" aria-label="24 Low: activate to sort column ascending">24 Low</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 0px;" aria-label="Market Volume: activate to sort column ascending">Market Volume</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 0px;" aria-label="Volume %: activate to sort column ascending">Volume %</th><th class="sorting" tabindex="0" aria-controls="alternative-pagination" rowspan="1" colspan="1" style="width: 0px;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">01</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/btc.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Bitcoin (BTC)</a>
                                            </div>
                                        </td>
                                        <td>$47,071.60</td>
                                        <td>BTC/USD</td>
                                        <td>$28,722.76</td>
                                        <td style="">$68,789.63</td>
                                        <td style="">$888,411,910</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>1.50%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="eo6q5l">Trade Now</button>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">02</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/eth.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Ethereum (ETH)</a>
                                            </div>
                                        </td>
                                        <td>$3,813.14</td>
                                        <td>ETH/USDT</td>
                                        <td>$4,036.24</td>
                                        <td style="">$3,588.14</td>
                                        <td style="">$314,520,675</td>
                                        <td style=""><h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>0.42%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="yypon">Trade Now</button>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">03</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/ltc.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Litecoin (LTC)</a>
                                            </div>
                                        </td>
                                        <td>$149.65</td>
                                        <td>LTC/USDT</td>
                                        <td>$412.96</td>
                                        <td style="">$104.33</td>
                                        <td style="">$314,520,675</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>0.89%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="ukefa">Trade Now</button>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">04</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/xmr.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Monero (XMR)</a>
                                            </div>
                                        </td>
                                        <td>$17,491.16</td>
                                        <td>XRM/USDT</td>
                                        <td>$31,578.35</td>
                                        <td style="">$8691.75</td>
                                        <td style="">$9,847,327</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>1.92%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="3qyfuf">Trade Now</button>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">05</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/ant.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Aragon (ANT)</a>
                                            </div>
                                        </td>
                                        <td>$172.93</td>
                                        <td>SOL/USD</td>
                                        <td>$178.37</td>
                                        <td style="">$172.3</td>
                                        <td style="">$40,559,274</td>
                                        <td style=""><h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>2.87%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="87o0h">Trade Now</button>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">06</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/sol.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Solana (SOL)</a>
                                            </div>
                                        </td>
                                        <td>$17,491.16</td>
                                        <td>XRM/USDT</td>
                                        <td>$31,578.35</td>
                                        <td style="">$8691.75</td>
                                        <td style="">$9,847,327</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>1.92%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="zxs0sc">Trade Now</button>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">07</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                            </div>
                                        </td>
                                        <td>$13.31</td>
                                        <td>ANT/USD</td>
                                        <td>$13.85</td>
                                        <td style="">$12.53</td>
                                        <td style="">$156,209,195.18</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>3.96%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="qxil6q">Trade Now</button>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">08</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/fil.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Filecoin (FIL)</a>
                                            </div>
                                        </td>
                                        <td>$35.21</td>
                                        <td>FIL/USD</td>
                                        <td>$36.41</td>
                                        <td style="">$35.03</td>
                                        <td style="">$374,618,945.51</td>
                                        <td style=""><h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>0.84%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="vz214">Trade Now</button>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">09</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/aave.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Aave (AAVE)</a>
                                            </div>
                                        </td>
                                        <td>$275.47</td>
                                        <td>AAVE/USDT</td>
                                        <td>$277.11</td>
                                        <td style="">$255.01</td>
                                        <td style="">$156,209,195.18</td>
                                        <td style=""><h6 class="text-success fs-13 mb-0"><i class="mdi mdi-trending-up align-middle me-1"></i>8.20%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="yu8b3d">Trade Now</button>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">10</td>
                                        <td>
                                            <div class="d-flex align-items-center fw-medium">
                                                <img src="assets/images/svg/crypto-icons/ada.svg" alt="" class="avatar-xxs me-2">
                                                <a href="javascript:void(0);" class="currency_name">Cardano (ADA)</a>
                                            </div>
                                        </td>
                                        <td>$1.35</td>
                                        <td>ADA/USD</td>
                                        <td>$1.39</td>
                                        <td style="">$1.32</td>
                                        <td style="">$880,387,980.14</td>
                                        <td style=""><h6 class="text-danger fs-13 mb-0"><i class="mdi mdi-trending-down align-middle me-1"></i>0.42%</h6></td>
                                        <td style="">
                                            <button class="btn btn-sm btn-soft-info" fdprocessedid="ol6ny8">Trade Now</button>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="alternative-pagination_info" role="status" aria-live="polite">Showing 1 to 10 of 13 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_full_numbers" id="alternative-pagination_paginate"><ul class="pagination"><li class="paginate_button page-item first disabled" id="alternative-pagination_first"><a href="#" aria-controls="alternative-pagination" data-dt-idx="0" tabindex="0" class="page-link">First</a></li><li class="paginate_button page-item previous disabled" id="alternative-pagination_previous"><a href="#" aria-controls="alternative-pagination" data-dt-idx="1" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="alternative-pagination" data-dt-idx="2" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="alternative-pagination" data-dt-idx="3" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="alternative-pagination_next"><a href="#" aria-controls="alternative-pagination" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li><li class="paginate_button page-item last" id="alternative-pagination_last"><a href="#" aria-controls="alternative-pagination" data-dt-idx="5" tabindex="0" class="page-link">Last</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex align-items-center">
                            <h5 class="card-title mb-0 flex-grow-1">Add Rows</h5>
                            <div>
                                <button id="addRow" class="btn btn-primary" fdprocessedid="zkf1dq">Add New Row</button>
                            </div>
                        </div>
                        <div class="card-body">

                            <div id="add-rows_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="add-rows_length"><label>Show <select name="add-rows_length" aria-controls="add-rows" class="form-select form-select-sm" fdprocessedid="yoon3a"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="add-rows_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="add-rows"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="add-rows" class="table table-nowrap dt-responsive table-bordered display dataTable no-footer dtr-inline" style="width: 100%;" aria-describedby="add-rows_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="add-rows" rowspan="1" colspan="1" style="width: 200.067px;" aria-label="Column 1: activate to sort column descending" aria-sort="ascending">Column 1</th><th class="sorting" tabindex="0" aria-controls="add-rows" rowspan="1" colspan="1" style="width: 205.733px;" aria-label="Column 2: activate to sort column ascending">Column 2</th><th class="sorting" tabindex="0" aria-controls="add-rows" rowspan="1" colspan="1" style="width: 205.733px;" aria-label="Column 3: activate to sort column ascending">Column 3</th><th class="sorting" tabindex="0" aria-controls="add-rows" rowspan="1" colspan="1" style="width: 207.733px;" aria-label="Column 4: activate to sort column ascending">Column 4</th><th class="sorting" tabindex="0" aria-controls="add-rows" rowspan="1" colspan="1" style="width: 0px;" aria-label="Column 5: activate to sort column ascending">Column 5</th></tr>
                                </thead><tbody><tr class="odd"><td class="sorting_1 dtr-control">1.1</td><td>1.2</td><td>1.3</td><td>1.4</td><td style="">1.5</td></tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="add-rows_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="add-rows_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="add-rows_previous"><a href="#" aria-controls="add-rows" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="add-rows" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="add-rows_next"><a href="#" aria-controls="add-rows" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Fixed Header Datatables</h5>
                        </div>
                        <div class="card-body">
                            <div id="fixed-header_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="fixed-header_length"><label>Show <select name="fixed-header_length" aria-controls="fixed-header" class="form-select form-select-sm" fdprocessedid="tltabk"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="fixed-header_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="fixed-header"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="fixed-header" class="table table-bordered dt-responsive nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="fixed-header_info">
                                <thead>
                                    <tr><th scope="col" style="width: 17.0667px;" class="sorting sorting_asc" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                            
                                                
                                            
                                        : activate to sort column descending">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                            </div>
                                        </th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 234.733px;" aria-label="SR No.: activate to sort column ascending">SR No.</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 205.733px;" aria-label="ID: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 361.733px;" aria-label="Purchase ID: activate to sort column ascending">Purchase ID</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px;" aria-label="Title: activate to sort column ascending">Title</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px;" aria-label="User: activate to sort column ascending">User</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px;" aria-label="Created By: activate to sort column ascending">Created By</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Create Date: activate to sort column ascending">Create Date</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="fixed-header" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>01</td>
                                        <td>VLZ-452</td>
                                        <td>VLZ1400087402</td>
                                        <td style=""><a href="#!">Post launch reminder/ post list</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Joseph Parker</td>
                                        <td style="display: none;">03 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-info">Re-open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>02</td>
                                        <td>VLZ-453</td>
                                        <td>VLZ1400087425</td>
                                        <td style=""><a href="#!">Additional Calendar</a></td>
                                        <td style="">Diana Kohler</td>
                                        <td style="">Admin</td>
                                        <td style="">Mary Rucker</td>
                                        <td style="display: none;">05 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>03</td>
                                        <td>VLZ-454</td>
                                        <td>VLZ1400087438</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">Tonya Noble</td>
                                        <td style="">Admin</td>
                                        <td style="">Tonya Noble</td>
                                        <td style="display: none;">27 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>04</td>
                                        <td>VLZ-455</td>
                                        <td>VLZ1400087748</td>
                                        <td style=""><a href="#!">Apologize for shopping Error!</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Joseph Parker</td>
                                        <td style="display: none;">14 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>05</td>
                                        <td>VLZ-456</td>
                                        <td>VLZ1400087547</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Donald Palmer</td>
                                        <td style="">Admin</td>
                                        <td style="">Donald Palmer</td>
                                        <td style="display: none;">25 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>06</td>
                                        <td>VLZ-457</td>
                                        <td>VLZ1400087245</td>
                                        <td style=""><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td style="">Mary Rucker</td>
                                        <td style="">Jennifer Carter</td>
                                        <td style="">Mary Rucker</td>
                                        <td style="display: none;">14 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>07</td>
                                        <td>VLZ-458</td>
                                        <td>VLZ1400087785</td>
                                        <td style=""><a href="#!">Change email option process</a></td>
                                        <td style="">James Morris</td>
                                        <td style="">Admin</td>
                                        <td style="">James Morris</td>
                                        <td style="display: none;">12 March, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-primary">Open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>08</td>
                                        <td>VLZ-460</td>
                                        <td>VLZ1400087745</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Nathan Cole</td>
                                        <td style="">Nancy Martino</td>
                                        <td style="">Nathan Cole</td>
                                        <td style="display: none;">28 Feb, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>09</td>
                                        <td>VLZ-461</td>
                                        <td>VLZ1400087179</td>
                                        <td style=""><a href="#!">Form submit issue</a></td>
                                        <td style="">Grace Coles</td>
                                        <td style="">Admin</td>
                                        <td style="">Grace Coles</td>
                                        <td style="display: none;">07 Jan, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-success">New</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <th scope="row" class="dtr-control sorting_1" tabindex="0">
                                            <div class="form-check">
                                                <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                            </div>
                                        </th>
                                        <td>10</td>
                                        <td>VLZ-462</td>
                                        <td>VLZ140008856</td>
                                        <td style=""><a href="#!">Edit customer testimonial</a></td>
                                        <td style="">Freda</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Freda</td>
                                        <td style="display: none;">16 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="fixed-header_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="fixed-header_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="fixed-header_previous"><a href="#" aria-controls="fixed-header" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="fixed-header" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="fixed-header" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="fixed-header_next"><a href="#" aria-controls="fixed-header" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Modal Data Datatables</h5>
                        </div>
                        <div class="card-body">
                            <div id="model-datatables_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="model-datatables_length"><label>Show <select name="model-datatables_length" aria-controls="model-datatables" class="form-select form-select-sm" fdprocessedid="eb51fp"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="model-datatables_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="model-datatables"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="model-datatables" class="table table-bordered nowrap table-striped align-middle dataTable no-footer dtr-inline collapsed" style="width: 100%;" aria-describedby="model-datatables_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 253.067px;" aria-sort="ascending" aria-label="SR No.: activate to sort column descending">SR No.</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 220.733px;" aria-label="ID: activate to sort column ascending">ID</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 385.733px;" aria-label="Purchase ID: activate to sort column ascending">Purchase ID</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px;" aria-label="Title: activate to sort column ascending">Title</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px;" aria-label="User: activate to sort column ascending">User</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px;" aria-label="Assigned To: activate to sort column ascending">Assigned To</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px;" aria-label="Created By: activate to sort column ascending">Created By</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Create Date: activate to sort column ascending">Create Date</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Status: activate to sort column ascending">Status</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Priority: activate to sort column ascending">Priority</th><th class="sorting" tabindex="0" aria-controls="model-datatables" rowspan="1" colspan="1" style="width: 0px; display: none;" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                <tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">01</td>
                                        <td>VLZ-452</td>
                                        <td>VLZ1400087402</td>
                                        <td style=""><a href="#!">Post launch reminder/ post list</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Joseph Parker</td>
                                        <td style="display: none;">03 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-info">Re-open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">02</td>
                                        <td>VLZ-453</td>
                                        <td>VLZ1400087425</td>
                                        <td style=""><a href="#!">Additional Calendar</a></td>
                                        <td style="">Diana Kohler</td>
                                        <td style="">Admin</td>
                                        <td style="">Mary Rucker</td>
                                        <td style="display: none;">05 Oct, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">03</td>
                                        <td>VLZ-454</td>
                                        <td>VLZ1400087438</td>
                                        <td style=""><a href="#!">Make a creating an account profile</a></td>
                                        <td style="">Tonya Noble</td>
                                        <td style="">Admin</td>
                                        <td style="">Tonya Noble</td>
                                        <td style="display: none;">27 April, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">04</td>
                                        <td>VLZ-455</td>
                                        <td>VLZ1400087748</td>
                                        <td style=""><a href="#!">Apologize for shopping Error!</a></td>
                                        <td style="">Joseph Parker</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Joseph Parker</td>
                                        <td style="display: none;">14 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">05</td>
                                        <td>VLZ-456</td>
                                        <td>VLZ1400087547</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Donald Palmer</td>
                                        <td style="">Admin</td>
                                        <td style="">Donald Palmer</td>
                                        <td style="display: none;">25 June, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">06</td>
                                        <td>VLZ-457</td>
                                        <td>VLZ1400087245</td>
                                        <td style=""><a href="#!">Benner design for FB &amp; Twitter</a></td>
                                        <td style="">Mary Rucker</td>
                                        <td style="">Jennifer Carter</td>
                                        <td style="">Mary Rucker</td>
                                        <td style="display: none;">14 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-warning">Inprogress</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">07</td>
                                        <td>VLZ-458</td>
                                        <td>VLZ1400087785</td>
                                        <td style=""><a href="#!">Change email option process</a></td>
                                        <td style="">James Morris</td>
                                        <td style="">Admin</td>
                                        <td style="">James Morris</td>
                                        <td style="display: none;">12 March, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-primary">Open</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">08</td>
                                        <td>VLZ-460</td>
                                        <td>VLZ1400087745</td>
                                        <td style=""><a href="#!">Support for theme</a></td>
                                        <td style="">Nathan Cole</td>
                                        <td style="">Nancy Martino</td>
                                        <td style="">Nathan Cole</td>
                                        <td style="display: none;">28 Feb, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-secondary">On-Hold</span></td>
                                        <td style="display: none;"><span class="badge bg-success">Low</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="odd">
                                        <td class="dtr-control sorting_1" tabindex="0">09</td>
                                        <td>VLZ-461</td>
                                        <td>VLZ1400087179</td>
                                        <td style=""><a href="#!">Form submit issue</a></td>
                                        <td style="">Grace Coles</td>
                                        <td style="">Admin</td>
                                        <td style="">Grace Coles</td>
                                        <td style="display: none;">07 Jan, 2022</td>
                                        <td style="display: none;"><span class="badge badge-soft-success">New</span></td>
                                        <td style="display: none;"><span class="badge bg-danger">High</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr><tr class="even">
                                        <td class="dtr-control sorting_1" tabindex="0">10</td>
                                        <td>VLZ-462</td>
                                        <td>VLZ140008856</td>
                                        <td style=""><a href="#!">Edit customer testimonial</a></td>
                                        <td style="">Freda</td>
                                        <td style="">Alexis Clarke</td>
                                        <td style="">Freda</td>
                                        <td style="display: none;">16 Aug, 2021</td>
                                        <td style="display: none;"><span class="badge badge-soft-danger">Closed</span></td>
                                        <td style="display: none;"><span class="badge bg-info">Medium</span></td>
                                        <td style="display: none;">
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="ri-more-fill align-middle"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li><a href="#!" class="dropdown-item"><i class="ri-eye-fill align-bottom me-2 text-muted"></i> View</a></li>
                                                    <li><a class="dropdown-item edit-item-btn"><i class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                                                    <li>
                                                        <a class="dropdown-item remove-item-btn">
                                                            <i class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr></tbody>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="model-datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 14 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="model-datatables_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="model-datatables_previous"><a href="#" aria-controls="model-datatables" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="model-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="model-datatables" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item next" id="model-datatables_next"><a href="#" aria-controls="model-datatables" data-dt-idx="3" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Buttons Datatables</h5>
                        </div>
                        <div class="card-body">
                            <div id="buttons-datatables_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer"><div class="dt-buttons">          <button class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="buttons-datatables" type="button" fdprocessedid="lehn4s"><span>Copy</span></button> <button class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="buttons-datatables" type="button" fdprocessedid="9hmq5r"><span>CSV</span></button> <button class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="buttons-datatables" type="button" fdprocessedid="5x8u3"><span>Excel</span></button> <button class="dt-button buttons-print" tabindex="0" aria-controls="buttons-datatables" type="button" fdprocessedid="k5aj5o"><span>Print</span></button> <button class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="buttons-datatables" type="button" fdprocessedid="moeztf"><span>PDF</span></button> </div><div id="buttons-datatables_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="buttons-datatables"></label></div><table id="buttons-datatables" class="display table table-bordered dataTable no-footer" style="width: 100%;" aria-describedby="buttons-datatables_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 156.067px;">Name</th><th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 240.733px;">Position</th><th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 112.733px;">Office</th><th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 51.7333px;">Age</th><th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Start date: activate to sort column ascending" style="width: 105.733px;">Start date</th><th class="sorting" tabindex="0" aria-controls="buttons-datatables" rowspan="1" colspan="1" aria-label="Salary: activate to sort column ascending" style="width: 73.7333px;">Salary</th></tr>
                                </thead>
                                <tbody>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                            <tr class="odd">
                                        <td class="sorting_1">Airi Satou</td>
                                        <td>Accountant</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Ashton Cox</td>
                                        <td>Junior Technical Author</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Bradley Greer</td>
                                        <td>Software Engineer</td>
                                        <td>London</td>
                                        <td>41</td>
                                        <td>2012/10/13</td>
                                        <td>$132,000</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Brielle Williamson</td>
                                        <td>Integration Specialist</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Caesar Vance</td>
                                        <td>Pre-Sales Support</td>
                                        <td>New York</td>
                                        <td>21</td>
                                        <td>2011/12/12</td>
                                        <td>$106,450</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Cedric Kelly</td>
                                        <td>Senior Javascript Developer</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Charde Marshall</td>
                                        <td>Regional Director</td>
                                        <td>San Francisco</td>
                                        <td>36</td>
                                        <td>2008/10/16</td>
                                        <td>$470,600</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Colleen Hurst</td>
                                        <td>Javascript Developer</td>
                                        <td>San Francisco</td>
                                        <td>39</td>
                                        <td>2009/09/15</td>
                                        <td>$205,500</td>
                                    </tr><tr class="odd">
                                        <td class="sorting_1">Dai Rios</td>
                                        <td>Personnel Lead</td>
                                        <td>Edinburgh</td>
                                        <td>35</td>
                                        <td>2012/09/26</td>
                                        <td>$217,500</td>
                                    </tr><tr class="even">
                                        <td class="sorting_1">Doris Wilder</td>
                                        <td>Sales Assistant</td>
                                        <td>Sydney</td>
                                        <td>23</td>
                                        <td>2010/09/20</td>
                                        <td>$85,600</td>
                                    </tr></tbody></table><div class="dataTables_info" id="buttons-datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 27 entries</div><div class="dataTables_paginate paging_simple_numbers" id="buttons-datatables_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="buttons-datatables_previous"><a href="#" aria-controls="buttons-datatables" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="buttons-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="buttons-datatables" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="buttons-datatables" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item next" id="buttons-datatables_next"><a href="#" aria-controls="buttons-datatables" data-dt-idx="4" tabindex="0" class="page-link">Next</a></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div><!--end row-->


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="card-title mb-0">Ajax Datatables</h5>
                        </div>
                        <div class="card-body">
                            <div id="ajax-datatables_wrapper" class="dataTables_wrapper dt-bootstrap5"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="ajax-datatables_length"><label>Show <select name="ajax-datatables_length" aria-controls="ajax-datatables" class="form-select form-select-sm" fdprocessedid="b1purs"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="ajax-datatables_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="ajax-datatables"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="ajax-datatables" class="display table table-bordered dt-responsive dataTable dtr-inline" style="width: 100%;" aria-describedby="ajax-datatables_info">
                                <thead>
                                    <tr><th class="sorting sorting_asc" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 180.067px;" aria-label="Name: activate to sort column descending" aria-sort="ascending">Name</th><th class="sorting" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 274.733px;" aria-label="Position: activate to sort column ascending">Position</th><th class="sorting" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 130.733px;" aria-label="Office: activate to sort column ascending">Office</th><th class="sorting" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 69.7333px;" aria-label="Extn.: activate to sort column ascending">Extn.</th><th class="sorting" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 123.733px;" aria-label="Start date: activate to sort column ascending">Start date</th><th class="sorting" tabindex="0" aria-controls="ajax-datatables" rowspan="1" colspan="1" style="width: 0px;" aria-label="Salary: activate to sort column ascending">Salary</th></tr>
                                </thead><tbody><tr class="odd"><td class="sorting_1 dtr-control">Airi Satou</td><td>Accountant</td><td>Tokyo</td><td>5407</td><td>2008/11/28</td><td style="">$162,700</td></tr><tr class="even"><td class="sorting_1 dtr-control">Angelica Ramos</td><td>Chief Executive Officer (CEO)</td><td>London</td><td>5797</td><td>2009/10/09</td><td style="">$1,200,000</td></tr><tr class="odd"><td class="sorting_1 dtr-control">Ashton Cox</td><td>Junior Technical Author</td><td>San Francisco</td><td>1562</td><td>2009/01/12</td><td style="">$86,000</td></tr><tr class="even"><td class="sorting_1 dtr-control">Bradley Greer</td><td>Software Engineer</td><td>London</td><td>2558</td><td>2012/10/13</td><td style="">$132,000</td></tr><tr class="odd"><td class="sorting_1 dtr-control">Brenden Wagner</td><td>Software Engineer</td><td>San Francisco</td><td>1314</td><td>2011/06/07</td><td style="">$206,850</td></tr><tr class="even"><td class="sorting_1 dtr-control">Brielle Williamson</td><td>Integration Specialist</td><td>New York</td><td>4804</td><td>2012/12/02</td><td style="">$372,000</td></tr><tr class="odd"><td class="sorting_1 dtr-control">Bruno Nash</td><td>Software Engineer</td><td>London</td><td>6222</td><td>2011/05/03</td><td style="">$163,500</td></tr><tr class="even"><td class="sorting_1 dtr-control">Caesar Vance</td><td>Pre-Sales Support</td><td>New York</td><td>8330</td><td>2011/12/12</td><td style="">$106,450</td></tr><tr class="odd"><td class="sorting_1 dtr-control">Cara Stevens</td><td>Sales Assistant</td><td>New York</td><td>3990</td><td>2011/12/06</td><td style="">$145,600</td></tr><tr class="even"><td class="sorting_1 dtr-control">Cedric Kelly</td><td>Senior Javascript Developer</td><td>Edinburgh</td><td>6224</td><td>2012/03/29</td><td style="">$433,060</td></tr></tbody>
                                <tfoot>
                                    <tr><th rowspan="1" colspan="1">Name</th><th rowspan="1" colspan="1">Position</th><th rowspan="1" colspan="1">Office</th><th rowspan="1" colspan="1">Extn.</th><th rowspan="1" colspan="1">Start date</th><th rowspan="1" colspan="1" style="">Salary</th></tr>
                                </tfoot>
                            </table></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="ajax-datatables_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="ajax-datatables_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="ajax-datatables_previous"><a href="#" aria-controls="ajax-datatables" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item active"><a href="#" aria-controls="ajax-datatables" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ajax-datatables" data-dt-idx="2" tabindex="0" class="page-link">2</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ajax-datatables" data-dt-idx="3" tabindex="0" class="page-link">3</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ajax-datatables" data-dt-idx="4" tabindex="0" class="page-link">4</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ajax-datatables" data-dt-idx="5" tabindex="0" class="page-link">5</a></li><li class="paginate_button page-item "><a href="#" aria-controls="ajax-datatables" data-dt-idx="6" tabindex="0" class="page-link">6</a></li><li class="paginate_button page-item next" id="ajax-datatables_next"><a href="#" aria-controls="ajax-datatables" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li></ul></div></div></div></div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

        </div>
        <!-- container-fluid -->
    </div>
    <!-- End Page-content -->

    <footer class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                    <script>document.write(new Date().getFullYear())</script>2023 © Velzon.
                </div>
                <div class="col-sm-6">
                    <div class="text-sm-end d-none d-sm-block">
                        Design &amp; Develop by Themesbrand
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<!-- end main content-->

</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>