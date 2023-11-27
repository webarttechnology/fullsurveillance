@php
if(Auth::check() == true){
    if(Auth::User()->roles()->first()->name == 'User'){
        if(Auth::user()->status == 'Inactive'){
            Auth::logout();
        }
    }
}  
@endphp

<!DOCTYPE html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_desc')">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <!-- <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.png"> -->
    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;family=Work+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&amp;display=swap"  rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ url('user/assets/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ url('user/assets/css/plugins/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ url('user/assets/css/plugins/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ url('user/assets/css/plugins/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{ url('user/assets/css/plugins/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{ url('user/assets/css/plugins/nice-select.css')}}">
    <!-- Style CSS -->

    {{-- Toast --}}
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <link rel="stylesheet" href="{{ url('user/assets/css/style.css')}}">
    <style>
         .active-wishlist {
            background-color: #02327e !important;
            border-color: #02327e !important;
            color: #FFFFFF !important;
         }
    </style>
</head>
<body>
    <!--== Wrapper Start ==-->
    <div class="wrapper home-four-wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-wrapper">
            <div class="header-top d-none d-md-block">
                <div class="container">
                    <div class="header-top-area">
                        <div class="header-top-info">
                            <a href="#">World Wide Completely Free Returns and Free Shipping</a>
                        </div>
                        <div class="header-top-action-area">
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownLang"
                                    data-bs-toggle="dropdown" aria-expanded="false">English</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownLang">
                                    <li class="dropdown-item active">English</li>
                                </ul>
                            </div>
                            <div class="header-info-dropdown">
                                <button type="button" class="btn-info dropdown-toggle" id="dropdownCurrency"
                                    data-bs-toggle="dropdown" aria-expanded="false">USD</button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownCurrency">
                                    <li class="dropdown-item active">USD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle d-none d-xl-block">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="{{ url('/') }}">
                                    <img class="logo-main" src="{{ url('user/assets/images/brand-logo/fsi-eart.png') }}" width="55px"  height="auto" alt="Logo">
                                    <img src="{{ url('user/assets/images/brand-logo/fsi-logo.png') }}" width="268px" height="42px" alt="logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <form class="header-search-box header-search-box-two ms-3">
                                <input class="form-control" type="text" id="search" placeholder="Search Products">
                                <div class="header-search-box-categories">
                                    <select class="select-active">
                                        <option class="all">All Categories</option>
                                        @foreach (App\Models\Category::where('status', 'Active')->get() as $item)
                                         <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn-src">
                                    <i class="icon-magnifier"></i>
                                </button>
                            </form>
                        </div>
                        <div class="col-auto d-flex justify-content-end align-items-center">
                            @if (Auth::check() == true)
                            <a href="{{ url('/logout') }}" class="header-action-account">Logout</a>
                            @else
                            <a href="{{ url('/login-register') }}" class="header-action-account">Login / SignUp</a>
                            @endif
                            <a class="header-action-wishlist header-action-cart" href="{{ url('wishlist') }}">
                                <i class="icon-heart"></i>
                                <span class="cart-count wishlist-count-show">{{ wishlist_count() }}</span>
                            </a>
                            <button class="header-action-cart" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                <i class="cart-icon icon-handbag"></i>
                                <span class="cart-count cart-count-show">{{ cart_count() }}</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-middle d-xl-none">
                <div class="container">
                    <div class="row align-items-center justify-content-between align-items-center">
                        <div class="col-auto">
                            <div class="header-logo-area">
                                <a href="#">
                                    {{-- <img class="logo-main" src="{{ url('user/assets/images/brand-logo/globe2.png') }}" width="42"
                                        height="31" alt="Logo"> <img src="{{ url('user/assets/images/brand-logo/FSI logo png2.png')}}"
                                        alt=""> --}}
                                        <img class="logo-main" src="{{ url('user/assets/images/brand-logo/fsi-eart.png') }}" width="42"  height="31" alt="Logo">
                                        <img src="{{ url('user/assets/images/brand-logo/fsi-logo.png') }}" width="268px" height="42px" alt="logo">
                                    
                                    </a>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="header-action d-flex justify-content-end align-items-center">
                                <button class="btn-search-menu d-xl-none me-lg-4 me-xl-0" type="button"
                                    data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasSearch"
                                    aria-controls="AsideOffcanvasSearch">
                                    <i class="search-icon icon-magnifier"></i>
                                </button>
                                <a href="#" class="header-action-account d-none d-xl-block">Login / SignUp</a>
                                <a href="#" class="header-action-user me-lg-4 me-xl-0 d-xl-none">
                                    <i class="icon icon-user"></i>
                                </a>
                                <a class="header-action-wishlist" href="#">
                                    <i class="icon-heart"></i>
                                </a>
                                <button class="header-action-cart" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithCartSidebar" aria-controls="offcanvasWithCartSidebar">
                                    <i class="cart-icon icon-handbag"></i>
                                    <span class="cart-count">01</span>
                                </button>
                                <button class="btn-menu d-xl-none" type="button" data-bs-toggle="offcanvas"
                                    data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
                                    <i class="fa fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-four-area d-none d-xl-block">
                <div class="container">
                    <div class="header-four-inner-area">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto d-flex">
                                <div class="vertical-menu vertical-menu-two">
                                    <button class="vmenu-btn"><i class="icon fa fa-list-ul"></i> All Departments <i
                                            class="icon fa fa-angle-down"></i></button>
                                    <ul class="vmenu-content vmenu-content-none">
                                        @foreach (App\Models\Category::where('status', 'Active')->get() as $item)
                                        <li class="vmenu-item">
                                            <a href="#"> 
                                             <span class="icon">
                                                <img src="{{ url($item->img ?? '#') }}" width="24px" height="24px" alt="Icon">
                                              </span>
                                               {{ $item->name }}
                                            </a>
                                          </li>
                                         @endforeach
                                    </ul>
                                    <!-- menu content -->
                                </div>
                                <div class="header-navigation d-none d-lg-block ps-xl-4 ps-xxl-10">
                                    <ul class="main-nav">
                                        <li class="main-nav-item has-submenu"><a class="main-nav-link" href="{{ url('/') }}">Home</a>
                                        </li>
                                        <li class="main-nav-item"><a class="main-nav-link" href="{{ url('/about-us') }}">About Us</a>
                                        </li>
                                        <li class="main-nav-item has-submenu position-static">
                                            <a class="main-nav-link"href="{{ url('/shop') }}">Shop</a>
                                            {{-- <ul class="submenu-nav-mega">
                                                <li class="submenu-nav-mega-item">
                                                    <ul>
                                                        <li><a class="submenu-nav-mega-link" href="#">NVR's and DVR's</a></li>
                                                        <li><a class="submenu-nav-mega-link" href="#">Cameras</a></li>
                                                        <li><a class="submenu-nav-mega-link" href="#">Access Control</a></li>
                                                        <li><a class="submenu-nav-mega-link" href="#">Intercom</a></li>
                                                    </ul>
                                                </li>
                                            </ul> --}}
                                        </li>
                                        <li class="main-nav-item has-submenu"><a class="main-nav-link"
                                            href="{{ url('/service') }}">Services</a></li>
                                        <li class="main-nav-item"><a class="main-nav-link"
                                            href="{{ url('/contact') }}">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="header-action">
                                    <div class="phone-item-action phone-item-action--two">
                                        <div class="phone-item-icon">
                                            <i class="bi bi-headset"></i>
                                            <!-- <img src="assets/images/icons/phone2.png" alt="Icon" width="32" height="36"> -->
                                        </div>
                                        <div class="phone-item-content">
                                            <span>Call Us 24/7</span> <a href="tel:+00123456789">+00 123 456 789</a>
                                        </div>
                                    </div>
                                    <button class="btn-search-menu d-md-none" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#AsideOffcanvasSearch" aria-controls="AsideOffcanvasSearch">
                                        <span class="search-icon">
                                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M12.5 11H11.71L11.43 10.73C12.41 9.59 13 8.11 13 6.5C13 2.91 10.09 0 6.5 0C2.91 0 0 2.91 0 6.5C0 10.09 2.91 13 6.5 13C8.11 13 9.59 12.41 10.73 11.43L11 11.71V12.5L16 17.49L17.49 16L12.5 11ZM6.5 11C4.01 11 2 8.99 2 6.5C2 4.01 4.01 2 6.5 2C8.99 2 11 4.01 11 6.5C11 8.99 8.99 11 6.5 11Z" />
                                            </svg>
                                        </span>
                                    </button>
                                    <button class="btn-menu d-lg-none" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasWithBothOptions"
                                        aria-controls="offcanvasWithBothOptions">
                                        <i class="fa fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--== End Header Wrapper ==-->