<!DOCTYPE html>
<html lang="en">
<head>
    <title>ITS RENT</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.png')}}"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/themify/themify-icons.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('fonts/elegant-font/html-css/style.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animate/animate.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/css-hamburgers/hamburgers.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/animsition/css/animsition.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/select2/select2.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/slick/slick.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('vendor/noui/nouislider.min.css')}}">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/main.css')}}">
    <!--===============================================================================================-->
</head>
<body class="animsition">

    <!-- Header -->
    <header class="header1">
        <!-- Header desktop -->
        <div class="container-menu-header">
            <div class="topbar">
            </div>

            <div class="wrap_header">
                <!-- Logo -->
                <a href="{{ url('/') }}" class="logo">
                    <img src="images/icons/logo.png" alt="IMG-LOGO">
                </a>

                <!-- Menu -->
                <div class="wrap_menu">
                </div>

                <!-- Header Icon -->
                <div class="header-icons">
                    @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            <img src="images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </div>
        </div>
    </div>


            <!-- <div class="wrap_header">



            </div> -->

            <!-- Menu Mobile -->
            <div class="wrap-side-menu" >
                <nav class="side-menu">
                    <ul class="main-menu">
                        <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                            <span class="topbar-child1">
                                Free shipping for standard order over $100
                            </span>
                        </li>

                        <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                            <div class="topbar-child2-mobile">
                                <span class="topbar-email">
                                    fashe@example.com
                                </span>

                                <div class="topbar-language rs1-select2">
                                    <select class="selection-1" name="time">
                                        <option>USD</option>
                                        <option>EUR</option>
                                    </select>
                                </div>
                            </div>
                        </li>

                        <li class="item-topbar-mobile p-l-10">
                            <div class="topbar-social-mobile">
                                <a href="#" class="topbar-social-item fa fa-facebook"></a>
                                <a href="#" class="topbar-social-item fa fa-instagram"></a>
                                <a href="#" class="topbar-social-item fa fa-pinterest-p"></a>
                                <a href="#" class="topbar-social-item fa fa-snapchat-ghost"></a>
                                <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                            </div>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Homepage V1</a></li>
                                <li><a href="home-02.html">Homepage V2</a></li>
                                <li><a href="home-03.html">Homepage V3</a></li>
                            </ul>
                            <i class="arrow-main-menu fa fa-angle-right" aria-hidden="true"></i>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="product.html">Shop</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="product.html">Sale</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="cart.html">Features</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="blog.html">Blog</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="about.html">About</a>
                        </li>

                        <li class="item-menu-mobile">
                            <a href="contact.html">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>

        <section>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">{{ __('Login') }}</div>

                            <div class="card-body">
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                            @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <!-- div class="form-group row">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div> -->

                                    <div class="form-group row">
                                        <div class="col-md-6 offset-md-6 text-md-right">
                                            <button type="submit" class="btn btn-primary ">
                                                {{ __('Login') }}
                                            </button>
                                        </div>
                                        <div class="col-md-6 offset-md-6">

                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/jquery/jquery-3.2.1.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/animsition/js/animsition.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/popper.js') }}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/select2/select2.min.js') }}"></script>
        <script type="text/javascript">
            $(".selection-1").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect1')
            });

            $(".selection-2").select2({
                minimumResultsForSearch: 20,
                dropdownParent: $('#dropDownSelect2')
            });
        </script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/moment.min.js') }}"></script>
        <script type="text/javascript" src="{{URL::asset('vendor/daterangepicker/daterangepicker.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/slick/slick.min.js') }}"></script>
        <script type="text/javascript" src="{{URL::asset('js/slick-custom.js') }}"></script>
        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/sweetalert/sweetalert.min.js') }}"></script>
        <script type="text/javascript">
            $('.block2-btn-addcart').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to cart !", "success");
                });
            });

            $('.block2-btn-addwishlist').each(function(){
                var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
                $(this).on('click', function(){
                    swal(nameProduct, "is added to wishlist !", "success");
                });
            });
        </script>

        <!--===============================================================================================-->
        <script type="text/javascript" src="{{URL::asset('vendor/noui/nouislider.min.js')}}"></script>
        <script type="text/javascript">
        /*[ No ui ]
        ===========================================================*/
        var filterBar = document.getElementById('filter-bar');

        noUiSlider.create(filterBar, {
            start: [ 50, 200 ],
            connect: true,
            range: {
                'min': 50,
                'max': 200
            }
        });

        var skipValues = [
        document.getElementById('value-lower'),
        document.getElementById('value-upper')
        ];

        filterBar.noUiSlider.on('update', function( values, handle ) {
            skipValues[handle].innerHTML = Math.round(values[handle]) ;
        });
    </script>
    <!--===============================================================================================-->
    <script src="{{URL::asset('js/main.js') }}"></script>
</body>
</html>

