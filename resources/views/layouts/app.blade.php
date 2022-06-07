<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Male_Fashion" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="keywords" content="Male_Fashion" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{ $title }} </title>
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

    <!-- NAVIGATION -->
    <div class="offcanvas-menu-overlay"></div>

    <!-- HEADER OFFCANVAS -->
    <div class="offcanvas-menu-wrapper">
        @auth

        @else
        <div class="offcanvas__option">
            <div class="offcanvas__links">
                <a href="#">Sign in</a>
            </div>
            <div class="offcanvas__links">
                <a href="#">Sign up</a>
            </div>
        </div>
        @endauth


        <!-- if authenticate -->
        <div class="offcanvas__nav__option">
            <a href="#" class="search-switch"><i class="fa fa-search text-dark"></i></a>
            @auth
            <a href="#"><i class="icon_cart_alt text-dark font-weight-bold"></i>
                <span class="badge rounded-pill bg-warning text-dark">0</span></a>
            <div class="price">$0.00</div>
            <span class="dropdown ml-3">
                <span id="dLabel" type="button" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{asset('storage/'.auth()->user()->photo)}}" alt="" width="36" height="36" id="profile" class="rounded-circle bg-dark">
                </span>
                <ul class="dropdown-menu text-small" aria-labelledby="dLabel">
                    <li><a class="dropdown-item" href="#">Profile</a></li>
                    <li><a class="dropdown-item" href="#">My Orders</a></li>
                    @if(auth()->user()->role=='Admin')
                    <li><a class="dropdown-item" href="#">Open Dashboard Admin</a></li>
                    @endif
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            Sign out
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </span>
            @endauth
        </div>



        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__text">
            <p>Free shipping, 30-day return or refund guarantee.</p>
        </div>
    </div>

    <header class="header">
        <!-- HEADER -->
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-7">
                        <div class="header__top__left">
                            <p>Free shipping, 30-day return or refund guarantee.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="header__top__right">
                            @auth

                            @else
                            <div class="header__top__links">
                                <a href="#" data-toggle="modal" data-target="#signinmodal">Sign in</a>
                            </div>
                            <div class="header__top__links">
                                <a href="">Sign up</a>
                            </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- NAVBAR -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{asset('img/logo-light.webp')}}" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="{{ $title == 'Home' ? 'active' : '' }}"><a href="{{ route('home') }}">Home</a></li>
                            <li class="{{ $title == 'Shop' ? 'active' : '' }}"><a href="{{ route('shop') }}">Shop</a></li>
                            <li class="{{ $title == 'About' ? 'active' : '' }}"><a href="{{ route('about') }}">About Us</a></li>
                            <li class="{{ $title == 'Contact' ? 'active' : '' }}"><a href="{{ route('contact') }}">Contacts</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="header__nav__option">
                        <a href="#" class="search-switch"><i class="fa fa-search text-dark"></i></a>

                        @auth
                        <a href="/cart"><i class="icon_cart_alt text-dark font-weight-bold"></i>
                            <span class="badge rounded-pill bg-warning text-dark">0</span></a>
                        <div class="price mr-2">$0.00</div>
                        <span class="dropdown">
                            <span id="dLabel" type="button" data-toggle="dropdown" aria-expanded="false">
                                <img src="{{asset('storage/'.auth()->user()->photo)}}" alt="" width="36" height="36" id="profile" class="rounded-circle bg-dark">
                            </span>
                            <ul class="dropdown-menu text-small" aria-labelledby="dLabel">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li><a class="dropdown-item" href="#">My Orders</a></li>
                                @if(auth()->user()->role=='Admin')
                                <li><a class="dropdown-item" href="#">Open Dashboard Admin</a></li>
                                @endif
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </span>
                        @endauth
                    </div>
                </div>
            </div>
            <div class="canvas__open"><i class="fa fa-bars"></i></div>
        </div>
    </header>

    <!-- Modal Signin-->
    <div class="modal fade" id="signinmodal" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Sign In</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="login-form">
                        <div id="signinresponse">
                        </div>
                        <div class="checkout__input">
                            <p>Username<span>*</span></p>
                            <input type="text" id="username" class="checkout__input__add" autofocus required />
                        </div>
                        <div class="checkout__input">
                            <p>Password<span>*</span></p>
                            <input type="password" id="password" required value="" />
                        </div>
                        <div class="d-flex justify-content-end">
                            <input type="submit" class="site-btn" id="signinbtn" value="Sign In" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <p>
                        No account? Create one
                        <a href="" class="text-danger">here</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="fixed-top" id="signinsuccess" style="display: none;  margin:80px;">
    </div>

    <!-- NAVBAR SEARCH -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here....." />
            </form>
        </div>
    </div>

    <!--  CONTENT  -->
    <section class="content">
        @yield('content')
    </section>


    <!--  FOOTER  -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__logo">
                            <a href="#"><img src="img/logo-dark.webp" alt="" /></a>
                        </div>
                        <p>
                            The customer is at the heart of our unique business model, which
                            includes design.
                        </p>
                        <a href="#"><img src="img/payment.webp" alt="" /></a>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Clothing Store</a></li>
                            <li><a href="#">Trending Shoes</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Sale</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6">
                    <div class="footer__widget">
                        <h6>Shopping</h6>
                        <ul>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Payment Methods</a></li>
                            <li><a href="#">Delivary</a></li>
                            <li><a href="#">Return & Exchanges</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1 col-md-6 col-sm-6">
                    <div class="footer__widget">
                        <h6>NewLetter</h6>
                        <div class="footer__newslatter">
                            <p>
                                Be the first to know about new arrivals, look books, sales &
                                promos!
                            </p>
                            <form action="#">
                                <input type="text" placeholder="Your email" />
                                <button type="submit">
                                    <span class="icon_mail_alt"></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
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
    </footer>


    <script src="{{ asset('eshop/js/popper.min.js') }}"></script>
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

    <script>
        $(document).ready(function() {

            $(document).on('click', '#signinbtn', function(e) {
                e.preventDefault();

                var data = {
                    'username': $('#username').val(),
                    'password': $('#password').val(),
                }

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type: "POST",
                    url: "/signin",
                    data: data,
                    dataType: "json",
                    success: function(response) {
                        if (response.status == 400) {
                            // gagal
                            $('#signinresponse').html("");
                            $('#signinresponse').html("<div class='alert alert-danger' role='alert'></div>");
                            $('.alert').text(response.message);
                            window.setTimeout(function() {
                                $(".alert").fadeTo(500, 0).slideUp(500, function() {
                                    $(this).remove();
                                });
                            }, 4000);

                            $('#username').focus();
                            $('#password').val("");
                        } else {
                            // berhasil
                            window.location.replace("/");
                            $('#signinresponse').html("");
                            $('#signinsuccess').show();
                            $('#signinmodal').modal('hide');
                            $('#signinsuccess').html("<div class='alert alert-success' role='alert' id='fixedtopalert'>Sign in Successfully.</div>");
                            window.setTimeout(function() {
                                $("#fixedtopalert").fadeTo(500, 0).slideUp(500, function() {
                                    $(this).remove();
                                    $('#signinsuccess').remove();
                                });
                            }, 4000);
                        }
                    }
                });

            });
        });
    </script>

    @if(!empty(Session::get('error_code')) && Session::get('error_code') == 5)
    <script>
        $(function() {
            $('#signinmodal').modal('show');
        });
    </script>
    @endif

    <section class="script">
        @yield('script')
    </section>
</body>

</html>