<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion" />
    <meta name="keywords" content="Male_Fashion" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ config('app.name', 'Male-Fashion') }}</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.webp') }}">

    <link rel="stylesheet" href="{{ asset('eshop/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/template.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/fontawesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/elegant-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('eshop/css/slicknav.min.css') }}" />
</head>

<body>
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <div class="offcanvas-menu-overlay"></div>

    <header class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('img/logo-light.webp') }}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6"></div>
                <div class="col-lg-3 col-md-3"></div>
            </div>
        </div>
    </header>

    <!--  CONTENT  -->
    <section class="content">
        @yield('content')
    </section>

    <!-- FOOTER -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="footer__copyright__text">
                    <p>
                        Copyright ©
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        2020 All rights reserved | This template is made with
                        <i class="fa fa-heart-o" aria-hidden="true"></i> by
                        <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('eshop/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('eshop/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('eshop/js/jquery.nice-select.min.js') }}"></script>

    <script src="{{ asset('eshop/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('eshop/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('eshop/js/jquery.countdown.min.js') }}"></script>

    <script src="{{ asset('eshop/js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('eshop/js/mixitup.min.js') }}"></script>
    <script src="{{ asset('eshop/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('eshop/js/main.js') }}"></script>

    <section class="script">
        @yield('script')
    </section>
</body>

</html>