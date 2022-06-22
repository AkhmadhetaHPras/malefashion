<html lang="en" class="light-style " dir="ltr" data-theme="theme-default" data-assets-path="../../assets/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>{{$title}}</title>

    <meta name="description" content="Most Powerful &amp; Comprehensive Bootstrap 5 HTML Admin Dashboard Template built for developers!" />
    <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5">
    <!-- Canonical SEO -->
    <link rel="canonical" href="https://themeselection.com/products/sneat-bootstrap-html-admin-template/">

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
    <link rel="stylesheet" href="{{asset('admin/vendor/libs/typeahead-js/typeahead.css')}}">


    <!-- Page CSS -->
    <link rel="stylesheet" href="{{asset('admin/vendor/css/pages/app-invoice-print.css')}}" />
    <!-- Helpers -->
    <script src="{{asset('admin/vendor/js/helpers.js')}}"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <script src="{{asset('admin/vendor/js/template-customizer.js')}}"></script>

    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="{{asset('admin/js/config.js')}}"></script>

</head>
<div class="invoice-print p-5">

    <div class="d-flex justify-content-between flex-row">
        <div class="mb-4">
            <div class="d-flex svg-illustration mb-3 gap-2">
                <span class="app-brand-logo demo">
                    <a href="index.html" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <img src="{{ asset('img/logo-light.webp') }}" alt="logo">
                        </span>
                    </a>

                    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                        <i class="bx bx-chevron-left bx-sm align-middle"></i>
                    </a>
                </span>                
            </div>
            <p class="mb-1">Office 149, 450 South Brand Brooklyn</p>
            <p class="mb-1">San Diego County, CA 91905, USA</p>
            <p class="mb-0">+1 (123) 456 7891, +44 (876) 543 2198</p>
        </div>
        <div>
            <h4>Invoice #3492</h4>
            <div class="mb-2">
                <span>Date Issues:</span>
                <span class="fw-semibold">April 25, 2021</span>
            </div>
            <div>
                <span>Date Due:</span>
                <span class="fw-semibold">May 25, 2021</span>
            </div>
        </div>
    </div>

    <hr>

    <div class="row d-flex justify-content-between mb-4">
        <div class="col-sm-6 w-50">
            <h6>Invoice To:</h6>
            <p class="mb-1">Thomas shelby</p>
            <p class="mb-1">Shelby Company Limited</p>
            <p class="mb-1">Small Heath, B10 0HF, UK</p>
            <p class="mb-1">718-986-6062</p>
            <p class="mb-0">peakyFBlinders@gmail.com</p>
        </div>
        <div class="col-sm-6 w-50">
            <h6>Bill To:</h6>
            <table>
                <tbody>
                    <tr>
                        <td class="pe-3">Total Due:</td>
                        <td><strong>$12,110.55</strong></td>
                    </tr>
                    <tr>
                        <td class="pe-3">Bank name:</td>
                        <td>American Bank</td>
                    </tr>
                    <tr>
                        <td class="pe-3">Country:</td>
                        <td>United States</td>
                    </tr>
                    <tr>
                        <td class="pe-3">IBAN:</td>
                        <td>ETD95476213874685</td>
                    </tr>
                    <tr>
                        <td class="pe-3">SWIFT code:</td>
                        <td>BR91905</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-responsive">
        <table class="table border-top m-0">
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Description</th>
                    <th>Cost</th>
                    <th>Qty</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Vuexy Admin Template</td>
                    <td>HTML Admin Template</td>
                    <td>$32</td>
                    <td>1</td>
                    <td>$32.00</td>
                </tr>
                <tr>
                    <td>Frest Admin Template</td>
                    <td>Angular Admin Template</td>
                    <td>$22</td>
                    <td>1</td>
                    <td>$22.00</td>
                </tr>
                <tr>
                    <td>Apex Admin Template</td>
                    <td>HTML Admin Template</td>
                    <td>$17</td>
                    <td>2</td>
                    <td>$34.00</td>
                </tr>
                <tr>
                    <td>Robust Admin Template</td>
                    <td>React Admin Template</td>
                    <td>$66</td>
                    <td>1</td>
                    <td>$66.00</td>
                </tr>
                <tr>
                    <td colspan="3" class="align-top px-4 py-3">
                        <p class="mb-2">
                            <span class="me-1 fw-semibold">Salesperson:</span>
                            <span>Alfie Solomons</span>
                        </p>
                        <span>Thanks for your business</span>
                    </td>
                    <td class="text-end px-4 py-3">
                        <p class="mb-2">Subtotal:</p>
                        <p class="mb-2">Discount:</p>
                        <p class="mb-2">Tax:</p>
                        <p class="mb-0">Total:</p>
                    </td>
                    <td class="px-4 py-3">
                        <p class="fw-semibold mb-2">$154.25</p>
                        <p class="fw-semibold mb-2">$00.00</p>
                        <p class="fw-semibold mb-2">$50.00</p>
                        <p class="fw-semibold mb-0">$204.25</p>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="row">
        <div class="col-12">
            <span class="fw-semibold">Note:</span>
            <span>It was a pleasure working with you and your team. We hope you will keep us in mind for future
                freelance projects. Thank You!</span>
        </div>
    </div>
</div>

<!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="{{asset('admin/vendor/libs/jquery/jquery.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/popper/popper.js')}}"></script>
    <script src="{{asset('admin/vendor/js/bootstrap.js')}}"></script>
    <script src="{{asset('admin/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>

    <script src="{{asset('admin/vendor/js/menu.js')}}"></script>
    <!-- endbuild -->

    <!-- Vendors JS --> 
    <script src="{{asset('admin/vendor/libs/typeahead-js/typeahead.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('admin/js/main.js')}}"></script>

    <!-- Page JS -->   
    <script src="{{asset('admin/js/app-invoice-print.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

</body>

</html>