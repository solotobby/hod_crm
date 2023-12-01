<!doctype html>
<html lang="en">

    <head>
    
        <meta charset="utf-8">
        <title>HOD CRM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="HOD CRM" name="description">
        <meta content="HOD" name="author">
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
    
        <link href="{{ asset('assets/libs/chartist/chartist.min.css') }}" rel="stylesheet">
    
        <!-- Bootstrap Css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css">
        <!-- Icons Css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
        <!-- App Css-->
        <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css">
    
    </head>

    <body data-sidebar="dark">

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-dark.png') }}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{ asset('assets/images/logo-sm.png') }}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{ asset('assets/images/logo-light.png') }}" alt="" height="18">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                            <i class="mdi mdi-menu"></i>
                        </button>

                        <div class="d-none d-sm-block">
                            <div class="dropdown pt-3 d-inline-block">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Create <i class="mdi mdi-chevron-down"></i>
                                    </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex">
                          <!-- App Search-->
                          <form class="app-search d-none d-lg-block">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="fa fa-search"></span>
                            </div>
                        </form>

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
                    
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-none d-md-block ms-2">
                            <button type="button" class="btn header-item waves-effect"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="me-2" src="{{ asset('assets/images/flags/us_flag.jpg') }}" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                    
                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/germany_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/italy_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/french_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                                </a>

                                <!-- item-->
                                <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/spain_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                                </a>

                                 <!-- item-->
                                 <a href="javascript:void(0);" class="dropdown-item notify-item">
                                    <img src="{{ asset('assets/images/flags/russia_flag.jpg') }}" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                                </a>
                            </div>
                        </div>

                        <div class="dropdown d-none d-lg-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" data-bs-toggle="fullscreen">
                                <i class="mdi mdi-fullscreen"></i>
                            </button>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-notifications-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge bg-danger rounded-pill">3</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h5 class="m-0 font-size-16"> Notifications (258) </h5>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-success rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                        
                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-warning rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-info rounded-circle font-size-16">
                                                        <i class="mdi mdi-glass-cocktail"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">It is a long established fact that a reader will</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                                        <i class="mdi mdi-cart-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">Dummy text of the printing and typesetting industry.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar-xs">
                                                    <span class="avatar-title bg-danger rounded-circle font-size-16">
                                                        <i class="mdi mdi-message-text-outline"></i>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="mb-1">New Message received</h6>
                                                <div class="font-size-12 text-muted">
                                                    <p class="mb-1">You have 87 unread messages</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <div class="d-grid">
                                        <a class="btn btn-sm btn-link font-size-14 text-center" href="javascript:void(0)">
                                            View all
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ asset('assets/images/users/user-4.jpg') }}"
                                    alt="Header Avatar">
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i> Profile</a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-wallet font-size-17 align-middle me-1"></i> My Wallet</a>
                                <a class="dropdown-item d-flex align-items-center" href="#"><i class="mdi mdi-cog font-size-17 align-middle me-1"></i> Settings<span class="badge bg-success ms-auto">11</span></a>
                                <a class="dropdown-item" href="#"><i class="mdi mdi-lock-open-outline font-size-17 align-middle me-1"></i> Lock screen</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>Log Out</a>
                                <form action="{{ route('logout') }}" method="post" id="logout-form" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon right-bar-toggle waves-effect">
                                <i class="mdi mdi-cog-outline"></i>
                            </button>
                        </div>
            
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Main</li>

                            <li>
                                <a href="#" class="waves-effect">
                                    <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                                    <span>Dashboard</span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-email"></i>
                                    <span>User Management</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    @foreach ($roles as $role)
                                        @php
                                            $role_name = $role->name;
                                            $name = '';
                                            $split = explode('_', $role_name);
                                            $num = count($split);
                                            if ($num === 1) {
                                                $name = ucfirst($role_name);
                                            } else {
                                                $i = 0;
                                                foreach ($split as $val) {
                                                    $name .= ucfirst($val);
                                                    $i++;
                                                    if ($i < $num) {
                                                        $name .= ' ';
                                                    }
                                                }
                                            }
                                            
                                        @endphp
                                        <li><a href="{{ route('user.roles', ['name' => $role->name]) }}">{{ $name }}</a></li>
                                    @endforeach
                                </ul>
                            </li>

                            <li>
                                <a href="{{ route('branches') }}" class="waves-effect">
                                    <i class="ti-home"></i><span class="badge rounded-pill bg-primary float-end">1</span>
                                    <span>Branches</span>
                                </a>
                            </li>

                            <li class="menu-title">Components</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-package"></i>
                                    <span>UI Elements</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="ui-alerts.html">Alerts</a></li>
                                    <li><a href="ui-buttons.html">Buttons</a></li>
                                    <li><a href="ui-cards.html">Cards</a></li>
                                    <li><a href="ui-carousel.html">Carousel</a></li>
                                    <li><a href="ui-dropdowns.html">Dropdowns</a></li>
                                    <li><a href="ui-grid.html">Grid</a></li>
                                    <li><a href="ui-images.html">Images</a></li>
                                    <li><a href="ui-lightbox.html">Lightbox</a></li>
                                    <li><a href="ui-modals.html">Modals</a></li>
                                    <li><a href="ui-offcanvas.html">Offcanvas</a></li>
                                    <li><a href="ui-rangeslider.html">Range Slider</a></li>
                                    <li><a href="ui-session-timeout.html">Session Timeout</a></li>
                                    <li><a href="ui-progressbars.html">Progress Bars</a></li>
                                    <li><a href="ui-sweet-alert.html">SweetAlert 2</a></li>
                                    <li><a href="ui-tabs-accordions.html">Tabs &amp; Accordions</a></li>
                                    <li><a href="ui-typography.html">Typography</a></li>
                                    <li><a href="ui-video.html">Video</a></li>
                                    <li><a href="ui-general.html">General</a></li>
                                    <li><a href="ui-colors.html">Colors</a></li>
                                    <li><a href="ui-rating.html">Rating</a></li>
                                    <li><a href="ui-utilities.html">Utilities</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ti-receipt"></i>
                                    <span class="badge rounded-pill bg-success float-end">9</span>
                                    <span>Forms</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-editors.html">Form Editors</a></li>
                                    <li><a href="form-uploads.html">Form File Upload</a></li>
                                    <li><a href="form-xeditable.html">Form Xeditable</a></li>
                                    <li><a href="form-repeater.html">Form Repeater</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Mask</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-pie-chart"></i>
                                    <span>Charts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="charts-morris.html">Morris Chart</a></li>
                                    <li><a href="charts-chartist.html">Chartist Chart</a></li>
                                    <li><a href="charts-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="charts-flot.html">Flot Chart</a></li>
                                    <li><a href="charts-knob.html">Jquery Knob Chart</a></li>
                                    <li><a href="charts-sparkline.html">Sparkline Chart</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-view-grid"></i>
                                    <span>Tables</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-datatable.html">Data Tables</a></li>
                                    <li><a href="tables-responsive.html">Responsive Tables</a></li>
                                    <li><a href="tables-editable.html">Editable Tables</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-face-smile"></i>
                                    <span>Icons</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="icons-material.html">Material Design</a></li>
                                    <li><a href="icons-fontawesome.html">Font Awesome</a></li>
                                    <li><a href="icons-ion.html">Ion Icons</a></li>
                                    <li><a href="icons-themify.html">Themify Icons</a></li>
                                    <li><a href="icons-dripicons.html">Dripicons</a></li>
                                    <li><a href="icons-typicons.html">Typicons Icons</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="waves-effect">
                                    <i class="ti-location-pin"></i>
                                    <span class="badge rounded-pill bg-danger float-end">2</span>
                                    <span>Maps</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="maps-google.html"> Google Map</a></li>
                                    <li><a href="maps-vector.html"> Vector Map</a></li>
                                </ul>
                            </li>

                            <li class="menu-title">Extras</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-layout"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-light-sidebar.html">Light Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbar-light.html">Light Topbar</a></li>
                                            <li><a href="layouts-hori-boxed.html">Boxed Layout</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>



                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-archive"></i>
                                    <span> Authentication </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-login.html">Login 1</a></li>
                                    <li><a href="pages-login-2.html">Login 2</a></li>
                                    <li><a href="pages-register.html">Register 1</a></li>
                                    <li><a href="pages-register-2.html">Register 2</a></li>
                                    <li><a href="pages-recoverpw.html">Recover Password 1</a></li>
                                    <li><a href="pages-recoverpw-2.html">Recover Password 2</a></li>
                                    <li><a href="pages-lock-screen.html">Lock Screen 1</a></li>
                                    <li><a href="pages-lock-screen-2.html">Lock Screen 2</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-support"></i>
                                    <span>  Extra Pages  </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                    <li><a href="pages-pricing.html">Pricing</a></li>
                                    <li><a href="pages-gallery.html">Gallery</a></li>
                                    <li><a href="pages-profile.html">Profile</a></li>
                                    <li><a href="pages-maintenance.html">Maintenance</a></li>
                                    <li><a href="pages-comingsoon.html">Coming Soon</a></li>
                                    <li><a href="pages-faq.html">FAQs</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-bookmark-alt"></i>
                                    <span>  Email Templates  </span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="email-template-basic.html">Basic Action Email</a></li>
                                    <li><a href="email-template-alert.html">Alert Email</a></li>
                                    <li><a href="email-template-billing.html">Billing Email</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ti-more"></i>
                                    <span>Multi Level</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li><a href="javascript: void(0);">Level 1.1</a></li>
                                    <li><a href="javascript: void(0);" class="has-arrow">Level 1.2</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="javascript: void(0);">Level 2.1</a></li>
                                            <li><a href="javascript: void(0);">Level 2.2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="page-title-box">
                            <div class="row align-items-center">
                                <div class="col-md-8">
                                    <h6 class="page-title">{{ count($users) }}</h6>
                                    {{-- <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item active">Welcome to Veltrix Dashboard</li>
                                    </ol> --}}
                                </div>
                                {{-- <div class="col-md-4">
                                    <div class="float-end d-none d-md-block">
                                        <div class="dropdown">
                                            <button class="btn btn-primary  dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-cog me-2"></i> Settings
                                            </button>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                                <div class="dropdown-divider"></div>
                                                <a class="dropdown-item" href="#">Separated link</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <!-- end page title -->


                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">

                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th>Branch</th>
                                                <th>Email</th>
                                                <th>Phone Number</th>
                                                <th>Gender</th>
                                                <th>Age Bracket</th>
                                                <th>Address</th>
                                                <th>City</th>
                                                <th>Country</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($branches as $user)
                                                <tr>
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                                    <td>{{ $user->branch->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->phone_number }}</td>
                                                    <td>{{ $user->gender }}</td>
                                                    <td>{{ $user->profile->age_bracket }}</td>
                                                    <td>{{ $user->profile->address }}</td>
                                                    <td>{{ $user->profile->city }}</td>
                                                    <td>{{ $user->profile->country }}</td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="10">No record found</td>
                                                </tr>
                                            @endforelse
                                            </tbody>
                                        </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
                        {{--  --}}
                        
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="{{ asset('assets/images/services-icon/01.png') }}" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Orders</h5>
                                            <h4 class="fw-medium font-size-24">1,685 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                            <div class="mini-stat-label bg-success">
                                                <p class="mb-0">+ 12%</p>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="{{ asset('assets/images/services-icon/02.png') }}" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Revenue</h5>
                                            <h4 class="fw-medium font-size-24">52,368 <i
                                                    class="mdi mdi-arrow-down text-danger ms-2"></i></h4>
                                            <div class="mini-stat-label bg-danger">
                                                <p class="mb-0">- 28%</p>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="{{ asset('assets/images/services-icon/03.png') }}" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Average Price</h5>
                                            <h4 class="fw-medium font-size-24">15.8 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                            <div class="mini-stat-label bg-info">
                                                <p class="mb-0"> 00%</p>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card mini-stat bg-primary text-white">
                                    <div class="card-body">
                                        <div class="mb-4">
                                            <div class="float-start mini-stat-img me-4">
                                                <img src="{{ asset('assets/images/services-icon/04.png') }}" alt="">
                                            </div>
                                            <h5 class="font-size-16 text-uppercase text-white-50">Product Sold</h5>
                                            <h4 class="fw-medium font-size-24">2436 <i
                                                    class="mdi mdi-arrow-up text-success ms-2"></i></h4>
                                            <div class="mini-stat-label bg-warning">
                                                <p class="mb-0">+ 84%</p>
                                            </div>
                                        </div>
                                        <div class="pt-2">
                                            <div class="float-end">
                                                <a href="#" class="text-white-50"><i class="mdi mdi-arrow-right h5 text-white-50"></i></a>
                                            </div>

                                            <p class="text-white-50 mb-0 mt-1">Since last month</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-9">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Monthly Earning</h4>
                                        <div class="row">
                                            <div class="col-lg-7">
                                                <div>
                                                    <div id="chart-with-area" class="ct-chart earning ct-golden-section">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">This month</p>
                                                            <h3>$34,252</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">4/5</span>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="text-center">
                                                            <p class="text-muted mb-4">Last month</p>
                                                            <h3>$36,253</h3>
                                                            <p class="text-muted mb-5">It will be as simple as in fact it
                                                                will be occidental.</p>
                                                            <span class="peity-donut"
                                                                data-peity='{ "fill": ["#02a499", "#f2f2f2"], "innerRadius": 28, "radius": 32 }'
                                                                data-width="72" data-height="72">3/5</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end row -->
                                    </div>
                                </div>
                                <!-- end card -->
                            </div>

                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h4 class="card-title mb-4">Sales Analytics</h4>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Online</p>
                                                        <h5 class="mb-4">1,542</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="wid-peity mb-4">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Offline</p>
                                                        <h5 class="mb-4">6,451</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,-3,8,1,-3,6,-5,9,2,-8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div>
                                                        <p class="text-muted">Marketing</p>
                                                        <h5>84,574</h5>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="mb-4">
                                                        <span class="peity-line" data-width="100%"
                                                            data-peity='{ "fill": ["rgba(2, 164, 153,0.3)"],"stroke": ["rgba(2, 164, 153,0.8)"]}'
                                                            data-height="60">6,2,8,4,3,8,1,3,6,5,9,2,8,1,4,8,9,8,2,1</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-3">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Sales Report</h4>

                                        <div class="cleafix">
                                            <p class="float-start"><i class="mdi mdi-calendar me-1 text-primary"></i> Jan 01
                                                - Jan 31</p>
                                            <h5 class="font-18 text-end">$4230</h5>
                                        </div>

                                        <div id="ct-donut" class="ct-chart wid"></div>

                                        <div class="mt-4">
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td><span class="badge bg-primary">Desk</span></td>
                                                        <td>Desktop</td>
                                                        <td class="text-end">54.5%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge bg-success">Mob</span></td>
                                                        <td>Mobile</td>
                                                        <td class="text-end">28.0%</td>
                                                    </tr>
                                                    <tr>
                                                        <td><span class="badge bg-warning">Tab</span></td>
                                                        <td>Tablets</td>
                                                        <td class="text-end">17.5%</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Activity</h4>
                                        <ol class="activity-feed">
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date">Jan 22</span>
                                                    <span class="activity-text">Responded to need “Volunteer
                                                        Activities”</span>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date">Jan 20</span>
                                                    <span class="activity-text">At vero eos et accusamus et iusto odio
                                                        dignissimos ducimus qui deleniti atque...<a href="#"
                                                            class="text-success">Read more</a></span>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date">Jan 19</span>
                                                    <span class="activity-text">Joined the group “Boardsmanship
                                                        Forum”</span>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date">Jan 17</span>
                                                    <span class="activity-text">Responded to need “In-Kind
                                                        Opportunity”</span>
                                                </div>
                                            </li>
                                            <li class="feed-item">
                                                <div class="feed-item-list">
                                                    <span class="date">Jan 16</span>
                                                    <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                                        error sit rem.</span>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="text-center">
                                            <a href="#" class="btn btn-primary">Load More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-5">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card text-center">
                                            <div class="card-body">
                                                <div class="py-4">
                                                    <i
                                                        class="ion ion-ios-checkmark-circle-outline display-4 text-success"></i>

                                                    <h5 class="text-primary mt-4">Order Successful</h5>
                                                    <p class="text-muted">Thanks you so much for your order.</p>
                                                    <div class="mt-4">
                                                        <a href="" class="btn btn-primary btn-sm">Chack Status</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="card bg-primary product-sale">
                                            <div class="card-body">
                                                <div class="text-center text-white py-4">
                                                    <h5 class="mb-4 text-white-50 font-size-16">Top Product Sale</h5>
                                                    <h1>1452</h1>
                                                    <p class="font-size-14 pt-1">Computer</p>
                                                    <p class="text-white-50 mb-0">At solmen va esser necessi far uniform
                                                        myth... <a href="#" class="text-white">View more</a></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="card-title mb-4">Client Reviews</h4>
                                                <p class="text-muted mb-3 pb-4">" Everyone realizes why a new common
                                                    language would be desirable one could refuse to pay expensive
                                                    translators it would be necessary. "</p>
                                                <div class="float-end mt-2">
                                                    <a href="#" class="text-primary">
                                                        <i class="mdi mdi-arrow-right fs-5"></i>
                                                    </a>
                                                </div>
                                                <h6 class="mb-0"><img src="{{ asset('assets/images/users/user-3.jpg') }}" alt=""
                                                        class="avatar-sm rounded-circle me-2"> James Athey</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Latest Transaction</h4>
                                        <div class="table-responsive">
                                            <table class="table table-hover table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">(#) Id</th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col" colspan="2">Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">#14256</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-2.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> Philip Smead
                                                            </div>
                                                        </td>
                                                        <td>15/1/2018</td>
                                                        <td>$94</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#14257</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-3.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> Brent Shipley
                                                            </div>
                                                        </td>
                                                        <td>16/1/2019</td>
                                                        <td>$112</td>
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#14258</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-4.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> Robert Sitton
                                                            </div>
                                                        </td>
                                                        <td>17/1/2019</td>
                                                        <td>$116</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#14259</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-5.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                                            </div>
                                                        </td>
                                                        <td>18/1/2019</td>
                                                        <td>$109</td>
                                                        <td><span class="badge bg-danger">Cancel</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#14260</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-6.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> David Sanchez
                                                            </div>
                                                        </td>
                                                        <td>19/1/2019</td>
                                                        <td>$120</td>
                                                        <td><span class="badge bg-success">Delivered</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">#14261</th>
                                                        <td>
                                                            <div>
                                                                <img src="{{ asset('assets/images/users/user-2.jpg') }}" alt=""
                                                                    class="avatar-xs rounded-circle me-2"> Philip Smead
                                                            </div>
                                                        </td>
                                                        <td>15/1/2018</td>
                                                        <td>$94</td>
                                                        <td><span class="badge bg-warning">Pending</span></td>
                                                        <td>
                                                            <div>
                                                                <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4">Chat</h4>
                                        <div class="chat-conversation">
                                            <ul class="conversation-list" data-simplebar style="max-height: 367px;">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('assets/images/users/user-2.jpg') }}"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:00</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">John Deo</span>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}"
                                                            class="avatar-xs rounded-circle" alt="Female">
                                                        <span class="time">10:01</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">Smith</span>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('assets/images/users/user-2.jpg') }}"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:04</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">John Deo</span>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:05</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">Smith</span>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('assets/images/users/user-3.jpg') }}"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:08</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name mb-2">Smith</span>

                                                            <img src="{{ asset('assets/images/small/img-1.jpg') }}" alt="" height="48"
                                                                class="rounded me-2">
                                                            <img src="{{ asset('assets/images/small/img-2.jpg') }}" alt="" height="48"
                                                                class="rounded">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-sm-9 col-8 chat-inputbar">
                                                    <input type="text" class="form-control chat-input"
                                                        placeholder="Enter your text">
                                                </div>
                                                <div class="col-sm-3 col-4 chat-send">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-success">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->


                
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                © <script>document.write(new Date().getFullYear())</script> Veltrix<span class="d-none d-sm-inline-block"> - Crafted with <i class="mdi mdi-heart text-danger"></i> by Themesbrand.</span>
                            </div>
                        </div>
                    </div>
                </footer>

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div data-simplebar class="h-100">
                <div class="rightbar-title px-3 py-4">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close noti-icon"></i>
                    </a>
                    <h5 class="m-0">Settings</h5>
                </div>

                <!-- Settings -->
                <hr class="mt-0" />
                <h6 class="text-center">Choose Layouts</h6>

                <div class="p-4">
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-1.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="light-mode-switch" checked />
                        <label class="form-check-label" for="light-mode-switch">Light Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-2.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-3">
                        <input type="checkbox" class="form-check-input theme-choice" id="dark-mode-switch" data-bsStyle="{{ asset('assets/css/bootstrap-dark.min.css') }}" 
                            data-appStyle="{{ asset('assets/css/app-dark.min.css') }}" />
                        <label class="form-check-label" for="dark-mode-switch">Dark Mode</label>
                    </div>
    
                    <div class="mb-2">
                        <img src="{{ asset('assets/images/layouts/layout-3.jpg') }}" class="img-fluid img-thumbnail" alt="">
                    </div>
                    <div class="form-check form-switch mb-5">
                        <input type="checkbox" class="form-check-input theme-choice" id="rtl-mode-switch" data-appStyle="{{ asset('assets/css/app-rtl.min.css') }}" />
                        <label class="form-check-label" for="rtl-mode-switch">RTL Mode</label>
                    </div>
                    <div class="d-grid">
                        <a href="https://1.envato.market/grNDB" class="btn btn-primary mt-3" target="_blank"><i class="mdi mdi-cart me-1"></i> Purchase Now</a>
                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

                <!-- JAVASCRIPT -->
                <script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
                <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
                <script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>


        <!-- Peity chart-->
        <script src="{{ asset('assets/libs/peity/jquery.peity.min.js') }}"></script>

        <!-- Plugin Js-->
        <script src="{{ asset('assets/libs/chartist/chartist.min.js') }}"></script>
        <script src="{{ asset('assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js') }}"></script>

        <script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>

        <script src="{{ asset('assets/js/app.js') }}"></script>

    </body>

</html>