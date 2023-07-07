<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yae.hifive03.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:31:48 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyện Tranh</title>
    <style> 
        :root {
            --brand: #f27fb5;
        }
    </style>
    <link rel="icon" href="{{ asset('template/assets/img/logo/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/acmeticker.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/star-rating.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
</head>

<body>
    <!-- Hiệu ứng Lá Đào rơi -->
    <div class="wrap">
        <canvas id="sakura"></canvas>
    </div>

    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('template/assets/img/logo/preloader.png') }}" alt>
                </div>
            </div>
        </div>
    </div>

    <x-header-menu></x-header-menu>
    @yield('content')
    <x-footer-menu></x-footer-menu>

    @if (!auth('customer')->check())
        <div class="wrap-modal1 js-modal1 p-t-60 p-b-20">
            <div class="overlay-modal1 js-hide-modal1"
                style="background: url({{ asset('template/assets/img/manga_banner/log.jpg') }}) fixed no-repeat center/cover  ;">
            </div>
            <div class="container">
                <div class="bg0 p-t-60 p-b-30 p-lr-15-lg how-pos3-parent">
                    <button class="how-pos3 hov3 trans-04 js-hide-modal1">
                        <i class="fa-solid fa-xmark"></i>
                    </button>
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <form id="form" novalidate action="#" method="post">
                                <div class="tit_form">
                                    <h3>Join Yae Manga House Now</h3>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email
                                        address</label>
                                    <input type="email" data-validation="email"
                                        data-content="Email has a invalid format" class="form-control" name="email"
                                        id="email">
                                    <div class="form_text">We'll never share
                                        your email with anyone else.</div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                <button type="submit" class="modal_btn text-center">Submit</button>
                                <div class="form_icons">
                                    <div class="icon_tit">Sign in with social account</div>
                                    <ul class="d-flex flex-wrap text-center justify-content-center ">
                                        <li class="goo"><a href="#"><i class="fa-brands fa-google"></i></a>
                                        </li>
                                        <li class="fac"><a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                                        </li>
                                        <li class="twi"><a href="#"><i class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li class="ins"><a href="#"><i class="fa-brands fa-instagram"></i></a>
                                        </li>
                                        <li class="pat"><a href="#"><i class="fa-brands fa-patreon"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <script src="{{ asset('/js/libraries/vue_dev.js') }}" type="text/javascript"></script>

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>

    <script src="{{ asset('template/assets/js/vendor/jquery-3.6.0.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/bootstrap.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/popper.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.slicknav.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/slick.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/form_validation.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/star-rating.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/fontawsome.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.magnific-popup.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/acmeticker.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.scrollUp.min.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/assets/js/main.js') }}" type="text/javascript"></script>

    <script src="{{ asset('template/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="|49" defer></script>

    @stack('js_bot_all')
</body>

</html>
