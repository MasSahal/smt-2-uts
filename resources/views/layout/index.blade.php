<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Reservasi Hotel pangeran Cirebon</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/vendors/iconfonts/mdi/css/materialdesignicons.css">
    <!-- endinject -->
    <!-- vendor css for this page -->
    <!-- End vendor css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/css/shared/style.css">
    <!-- endinject -->
    <!-- Layout style -->
    <link rel="stylesheet" href="{{ asset('data-asset') }}/css/demo_1/style.css">
    <!-- Layout style -->
    <link rel="shortcut icon" href="{{ asset('data-asset') }}/images/favicon.ico" />
</head>

<body class="header-fixed">
    <!-- partial:partials/_header.html -->
    <nav class="t-header">
        <div class="t-header-brand-wrapper">
            <a href="index.html">
                {{-- <img class="logo" src="{{ asset('data-asset') }}/images/logo.svg" alt="">
                <img class="logo-mini" src="{{ asset('data-asset') }}/images/logo_mini.svg" alt=""> --}}
                <h4 class="text-primary">Hotel Pangeran</h4>
            </a>
        </div>
        <div class="t-header-content-wrapper">
            <div class="t-header-content">
                <button class="t-header-toggler t-header-mobile-toggler d-block d-lg-none">
                    <i class="mdi mdi-menu"></i>
                </button>
                <form action="#" class="t-header-search-box">
                    <div class="input-group">
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Search"
                            autocomplete="off">
                        <button class="btn btn-primary" type="submit"><i
                                class="mdi mdi-arrow-right-thick"></i></button>
                    </div>
                </form>
                <ul class="nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="notificationDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-bell-outline mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="notificationDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Notifications</h6>
                                <p class="dropdown-title-text">You have 4 unread notification</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-primary text-primary">
                                        <i class="mdi mdi-alert"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Storage Full</small>
                                        <small class="content-text">Server storage almost full</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-success text-success">
                                        <i class="mdi mdi-cloud-upload"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Upload Completed</small>
                                        <small class="content-text">3 Files uploded successfully</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="icon-wrapper rounded-circle bg-inverse-warning text-warning">
                                        <i class="mdi mdi-security"></i>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Authentication Required</small>
                                        <small class="content-text">Please verify your password to continue using cloud
                                            services</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="messageDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-message-outline mdi-1x"></i>
                            <span
                                class="notification-indicator notification-indicator-primary notification-indicator-ripple"></span>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right"
                            aria-labelledby="messageDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Messages</h6>
                                <p class="dropdown-title-text">You have 4 unread messages</p>
                            </div>
                            <div class="dropdown-body">
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img"
                                            src="{{ asset('data-asset') }}/images/profile/male/image_1.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Clifford Gordon</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img"
                                            src="{{ asset('data-asset') }}/images/profile/female/image_2.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-success"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Rachel Doyle</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                                <div class="dropdown-list">
                                    <div class="image-wrapper">
                                        <img class="profile-img"
                                            src="{{ asset('data-asset') }}/images/profile/male/image_3.png"
                                            alt="profile image">
                                        <div class="status-indicator rounded-indicator bg-warning"></div>
                                    </div>
                                    <div class="content-wrapper">
                                        <small class="name">Lewis Guzman</small>
                                        <small class="content-text">Lorem ipsum dolor sit amet.</small>
                                    </div>
                                </div>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" id="appsDropdown" data-toggle="dropdown"
                            aria-expanded="false">
                            <i class="mdi mdi-apps mdi-1x"></i>
                        </a>
                        <div class="dropdown-menu navbar-dropdown dropdown-menu-right" aria-labelledby="appsDropdown">
                            <div class="dropdown-header">
                                <h6 class="dropdown-title">Apps</h6>
                                <p class="dropdown-title-text mt-2">Authentication required for 3 apps</p>
                            </div>
                            <div class="dropdown-body border-top pt-0">
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-jira mdi-2x"></i>
                                    <span class="grid-tittle">Jira</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-trello mdi-2x"></i>
                                    <span class="grid-tittle">Trello</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-artstation mdi-2x"></i>
                                    <span class="grid-tittle">Artstation</span>
                                </a>
                                <a class="dropdown-grid">
                                    <i class="grid-icon mdi mdi-bitbucket mdi-2x"></i>
                                    <span class="grid-tittle">Bitbucket</span>
                                </a>
                            </div>
                            <div class="dropdown-footer">
                                <a href="#">View All</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <!-- partial -->
    <div class="page-body">
        <!-- partial:partials/_sidebar.html -->
        @include('layout.sidebar')
        <!-- partial -->
        <div class="page-content-wrapper">
            <div class="page-content-wrapper-inner">
                <div class="content-viewport">
                    @yield('content')
                </div>
            </div>
            <!-- content viewport ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="row">
                    <div class="col-sm-6 text-center text-sm-right order-sm-1">
                        <ul class="text-gray">
                            <li><a href="#">Terms of use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 text-center text-sm-left mt-3 mt-sm-0">
                        <small class="text-muted d-block">Copyright ?? {{ date('Y') }} <a href="#">Hotel
                                Pangeran</a>.
                            All rights reserved</small>
                        <small class="text-gray mt-2">Handcrafted With <i class="mdi mdi-heart text-danger"></i> -
                            Sahl 20210120016</small>
                    </div>
                </div>
            </footer>
            <!-- partial -->
        </div>
        <!-- page content ends -->
    </div>
    <!--page body ends -->
    <!-- SCRIPT LOADING START FORM HERE /////////////-->
    <!-- plugins:js -->
    <script src="{{ asset('data-asset') }}/vendors/js/core.js"></script>
    <script src="{{ asset('data-asset') }}/vendors/js/jquery.js"></script>
    <!-- endinject -->
    <!-- Vendor Js For This Page Ends-->
    <script src="{{ asset('data-asset') }}/vendors/apexcharts/apexcharts.min.js"></script>
    <script src="{{ asset('data-asset') }}/vendors/chartjs/Chart.min.js"></script>
    <script src="{{ asset('data-asset') }}/js/charts/chartjs.addon.js"></script>
    <!-- Vendor Js For This Page Ends-->
    <!-- build:js -->
    <script src="{{ asset('data-asset') }}/js/template.js"></script>
    <script src="{{ asset('data-asset') }}/js/dashboard.js"></script>
    <!-- endbuild -->
    @yield('js')
</body>

</html>
