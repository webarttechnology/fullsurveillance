<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="description" content="full Surveilance">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>@yield('title')</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;family=Poppins:wght@300;400;500;600;700;800;900&amp;family=Roboto:wght@400;500;700;900&amp;display=swap"
        rel="stylesheet">

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/7.3.67/css/materialdesignicons.min.css"
        integrity="sha512-nRzny9w0V2Y1/APe+iEhKAwGAc+K8QYCw4vJek3zXhdn92HtKt226zHs9id8eUq+uYJKaH2gPyuLcaG/dE5c7A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('admin/assets/plugins/daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />

    <!-- Ekka CSS -->
    <link id="ekka-css" href="{{ asset('admin/assets/css/ekka.css') }}" rel="stylesheet" />

    <!-- FAVICON -->
    <link href="{{ asset('assets/images/logo.png') }}" rel="shortcut icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Bootstrap css -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

    {{-- Toast --}}
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    {{-- Data table --}}
    <link href='{{ asset('admin/assets/plugins/data-tables/datatables.bootstrap5.min.css') }}' rel='stylesheet'>
    <link href='{{ asset('admin/assets/plugins/data-tables/responsive.datatables.min.css') }}' rel='stylesheet'>

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="{{ asset('admin/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/css/custom.css') }}">

    <!-- sweetalert -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.1.4/dist/sweetalert2.all.min.js"></script>

    {{-- Select2 --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <!-- editor -->
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
   <style>
     .loading {
	z-index: 20;
	position: absolute;
	top: 0;
	width: 100%;
	height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
}


.loading-content {
	position: absolute;
	border: 8px solid #f3f3f3; 
	border-top: 8px solid rgba(0, 0, 0, 0.9);
	border-radius: 50%;
	width: 50px;
	height: 50px;
	top: 40%;
	left: 45%;
	animation: spin .7s linear infinite;
	}
	
	@keyframes spin {
		0% { transform: rotate(0deg); }
		100% { transform: rotate(360deg); }
	}
   </style>
</head>
<body class="ec-sidebar-fixed compact-spacing ec-sidebar-dark ec-header-dark ec-header-fixed" id="body">

        {{-- Loading --}}
    <div id="loading">
        <div id="loading-content"></div>
    </div>
     
    <div class="wrapper">
        <!-- LEFT MAIN SIDEBAR -->
        <div class="ec-left-sidebar ec-bg-sidebar">
            <div id="sidebar" class="sidebar ec-sidebar-footer">
                <div class="ec-brand">
                    <a href="{{ url('admin/dashboard') }}" title="Ekka">
                        {{-- <img class="ec-brand-icon" src="{{ asset('admin/assets/images/logo.png') }}" alt="logo" /> --}}
                        <span class="ec-brand-name text-truncate">Full Surveilance</span>
                    </a>
                </div>

                <!-- begin sidebar scrollbar -->
                <div class="ec-navigation" data-simplebar>
                    <!-- sidebar menu -->
                    <ul class="nav sidebar-inner" id="sidebar-menu">
                        <!-- Dashboard -->
                        <li class="{{ Request::segment(2) == 'dashboard' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="{{ url('admin/dashboard') }}">
                                <i class="mdi mdi-view-dashboard-outline"></i>
                                <span class="nav-text">Dashboard</span>
                            </a>
                            <hr>
                        </li>

                         <!-- Order -->
                         <li class="has-sub {{ Request::segment(2) == 'order' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Order</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('order.index') }}">
                                            <span class="nav-text">Order List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                       
                        <!-- Users -->
                        <li class="has-sub {{ Request::segment(2) == 'user-lists' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-account-group"></i>
                                <span class="nav-text">Users</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="users" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ url('admin/user-lists') }}">
                                            <span class="nav-text">User List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                        <!-- Category -->
                        <li class="has-sub {{ Request::segment(2) == 'category' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Categories</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('category.create') }}">
                                            <span class="nav-text">Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('category.index') }}">
                                            <span class="nav-text">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <!-- SubCategory -->
                         <li class="has-sub {{ Request::segment(2) == 'sub-category' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Sub Categories</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="categorys" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('sub-category.create') }}">
                                            <span class="nav-text">Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('sub-category.index') }}">
                                            <span class="nav-text">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>


                        <!-- Product -->
                        <li class="has-sub {{ Request::segment(2) == 'product' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Product</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="product" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('product.create') }}">
                                            <span class="nav-text">Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('product.index') }}">
                                            <span class="nav-text">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <!-- Product Image -->
                         <li class="has-sub {{ Request::segment(2) == 'product-image' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Product Image</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="product" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('product-image.create') }}">
                                            <span class="nav-text">Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('product-image.index') }}">
                                            <span class="nav-text">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                         <!-- Coupon -->
                         <li class="has-sub {{ Request::segment(2) == 'coupon' ? 'active' : '' }}">
                            <a class="sidenav-item-link" href="javascript:void(0)">
                                <i class="mdi mdi-dns-outline"></i>
                                <span class="nav-text">Coupon</span> <b class="caret"></b>
                            </a>
                            <div class="collapse">
                                <ul class="sub-menu" id="product" data-parent="#sidebar-menu">
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('coupon.create') }}">
                                            <span class="nav-text">Add</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a class="sidenav-item-link" href="{{ route('coupon.index') }}">
                                            <span class="nav-text">List</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <!--  PAGE WRAPPER -->
        <div class="ec-page-wrapper">

            <!-- Header -->
            <header class="ec-main-header" id="header">
                <nav class="navbar navbar-static-top navbar-expand-lg">
                    <!-- Sidebar toggle button -->
                    <button id="sidebar-toggler" class="menu-bar-icon">
                        <i class="fa-solid fa-bars"></i>
                    </button>
                    <!-- search form -->
                    <div class="search-form d-lg-inline-block">
                        <div class="input-group">
                            <input type="text" name="query" id="search-input" class="form-control"
                                placeholder="search.." autofocus autocomplete="off" />
                            <button type="button" name="search" id="search-btn" class="btn btn-flat">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                        </div>
                        <div id="search-results-container">
                            <ul id="search-results"></ul>
                        </div>
                    </div>

                    <!-- navbar right -->
                    <div class="navbar-right">
                        <ul class="nav navbar-nav">
                            <!-- User Account -->
                            <li class="dropdown user-menu">
                                <button class="dropdown-toggle nav-link ec-drop" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('admin/assets/img/user/user.png') }}" class="user-image"
                                        alt="User Image" />
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right ec-dropdown-menu">
                                    <!-- User image -->
                                    <li class="dropdown-header">
                                        <img src="{{ asset('admin/assets/img/user/user.png') }}" class="img-circle"
                                            alt="User Image" />
                                        <div class="d-inline-block">
                                            {{ Auth::user()->name }}
                                            <small class="pt-1">{{ Auth::user()->email }}</small>
                                        </div>
                                    </li>
                                    <li>
                                        <a href="{{ url('admin/your-profile') }}">
                                            <i class="mdi mdi-account"></i> My Profile
                                        </a>
                                    </li>
                                    <li class="right-sidebar-in">
                                        <a href="javascript:0"> <i class="fa-solid fa-gear profile-dropdown-icon"></i>
                                            Setting </a>
                                    </li>
                                    <li class="dropdown-footer">
                                        <a href="{{ url('admin/logout') }}"> <i class="mdi mdi-logout"></i> Log Out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="right-sidebar-in right-sidebar-2-menu">
                                <i class="mdi mdi-settings-outline mdi-spin"></i>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
