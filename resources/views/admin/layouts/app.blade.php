<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{ $title }} </title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.webp') }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="{{asset('admin/vendor/fonts/boxicons.css')}}" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/core.css')}}" class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/theme-default.css')}}" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{asset('admin/css/demo.css')}}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/sweetalert2/sweetalert2.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('admin/vendor/libs/select2/select2.css')}}"> -->
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/typeahead-js/typeahead.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/formvalidation/formValidation.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/flatpickr/flatpickr.css')}}">
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/typeahead-js/typeahead.css')}}">

    <link rel="stylesheet" href="{{asset('admin/vendor/libs/apex-charts/apex-charts.css')}}" />

    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/page-user-view.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/page-invoice.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/page-misc.css')}}" />
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/page-account-settings.css')}}" />

    <!-- Helpers -->
    <script src="{{asset('admin/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <script src="{{asset('admin/vendor/js/template-customizer.js')}}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/js/config.js')}}"></script>

    @yield('spesificScript')

</head>

<body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <!-- Menu -->
            @include('admin.layouts.sidebar', ['title'=>$title])
            <!-- / Menu -->

            <!-- Layout container -->
            <div class="layout-page">
                <!-- Navbar -->
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="bx bx-menu bx-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- title bar -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center lead mb-0" data-size="large">
                                Admin Page
                                <!-- <a class="github-button" href="#" data-size="large">Admin Page</a> -->
                            </div>
                        </div>
                        <!-- /title bar-->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item">
                                <a href="#" data-size="large"><strong>{{Auth::user()->name}}</strong></a>
                            </li>
                            <!-- User -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" href="#" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <img src="{{asset('storage/'.Auth::user()->photo)}}" alt class="w-px-40 h-auto rounded-circle" />
                                    </div>
                                </a>
                            </li>
                            <!--/ User -->
                        </ul>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <div class="d-flex">
                                        <div class="flex-shrink-0 me-3">
                                            <div class="avatar avatar-online">
                                                <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <span class="fw-semibold d-block">John Doe</span>
                                            <small class="text-muted">Admin</small>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-user me-2"></i>
                                    <span class="align-middle">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bx bx-cog me-2"></i>
                                    <span class="align-middle">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <span class="d-flex align-items-center align-middle">
                                        <i class="flex-shrink-0 bx bx-credit-card me-2"></i>
                                        <span class="flex-grow-1 align-middle">Billing</span>
                                        <span class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <div class="dropdown-divider"></div>
                            </li>
                            <li>
                                <a class="dropdown-item" href="auth-login-basic.html">
                                    <i class="bx bx-power-off me-2"></i>
                                    <span class="align-middle">Log Out</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <!-- / Navbar -->

                <!-- Content wrapper -->
                <div class="content-wrapper">
                    <!-- Content -->
                    <div class="container-xxl flex-grow-1 container-p-y">

                        @yield('content')

                    </div>
                    <!-- / Content -->

                    @include('admin.layouts.footer')

                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
            <!-- / Layout page -->
        </div>

        <!-- Overlay -->
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    @yield('scriptJS')

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('admin/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('admin/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('admin/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <!-- <script src="{{asset('admin/vendor/libs/select2/select2.js')}}"></script> -->
    <script src="{{asset('admin/vendor/libs/sweetalert2/sweetalert2.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/formvalidation/FormValidation.min.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/formvalidation/Bootstrap5.min.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/formvalidation/AutoFocus.min.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/cleavejs/cleave.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/cleavejs/cleave-phone.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/flatpickr/flatpickr.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/jquery-repeater/jquery-repeater.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('admin/js/modal-edit-user.js')}}"></script>
    <script src="{{asset('admin/js/modal-enable-otp.js')}}"></script>
    <script src="{{asset('admin/js/app-user-view.js')}}"></script>
    <script src="{{asset('admin/js/app-user-view-security.js')}}"></script>
    <script src="{{asset('admin/js/app-invoice-add.js')}}"></script>
    <script src="{{asset('admin/js/offcanvas-send-invoice.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>