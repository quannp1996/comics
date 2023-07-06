<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from yae.hifive03.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:31:48 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Truyện Tranh</title>
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
                                        data-content="Email has a invalid format" class="form-control"
                                        name="email" id="email">
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
                                        <li class="goo"><a href="#"><i
                                                    class="fa-brands fa-google"></i></a>
                                        </li>
                                        <li class="fac"><a href="#"><i
                                                    class="fa-brands fa-facebook-f"></i></a></li>
                                        <li class="twi"><a href="#"><i
                                                    class="fa-brands fa-twitter"></i></a>
                                        </li>
                                        <li class="ins"><a href="#"><i
                                                    class="fa-brands fa-instagram"></i></a></li>
                                        <li class="pat"><a href="#"><i
                                                    class="fa-brands fa-patreon"></i></a>
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

    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    <script src="{{ asset('template/assets/js/vendor/jquery-3.6.0.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/bootstrap.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>
    <script src="{{ asset('template/assets/js/popper.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.slicknav.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/slick.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/form_validation.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>
    <script type="7276df2cb977e01a61aedecd-text/javascript">
        $(document).ready(function () {
            $("#form").xvalidation({
                theme: "materialize"
            });
            $("#form").submit(function (evt) {
                evt.preventDefault();
                evt.stopPropagation();
                if ($("#form").data().xvalidation.methods.validate()) {
                    swal("Thanks!", "We Will Contact You Soon", "success");
                }
                return false;
            });
        });
    </script>

    <script src="{{ asset('template/assets/js/star-rating.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/fontawsome.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.magnific-popup.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/acmeticker.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/jquery.scrollUp.min.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>

    <script src="{{ asset('template/assets/js/main.js') }}" type="7276df2cb977e01a61aedecd-text/javascript"></script>
    <script src="{{ asset('template/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js') }}"
        data-cf-settings="7276df2cb977e01a61aedecd-|49" defer></script>
    {{-- <script>
        (function() {
            var js =
                "window['__CF$cv$params']={r:'7d7766116da80f04',m:'KJx6W4ryrh_REEycjTlXScmh84u7akFXzJp81NDBz9c-1686796306-0-AcEHADMR0wf2jkmwppGHBfO9G8JiWhLiSHgNSPrI5jNF'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='cdn-cgi/challenge-platform/h/g/scripts/jsd/6cdb09c9/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";
            var _0xh = document.createElement('iframe');
            _0xh.height = 1;
            _0xh.width = 1;
            _0xh.style.position = 'absolute';
            _0xh.style.top = 0;
            _0xh.style.left = 0;
            _0xh.style.border = 'none';
            _0xh.style.visibility = 'hidden';
            document.body.appendChild(_0xh);

            function handler() {
                var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;
                if (_0xi) {
                    var _0xj = _0xi.createElement('script');
                    _0xj.nonce = '';
                    _0xj.innerHTML = js;
                    _0xi.getElementsByTagName('head')[0].appendChild(_0xj);
                }
            }
            if (document.readyState !== 'loading') {
                handler();
            } else if (window.addEventListener) {
                document.addEventListener('DOMContentLoaded', handler);
            } else {
                var prev = document.onreadystatechange || function() {};
                document.onreadystatechange = function(e) {
                    prev(e);
                    if (document.readyState !== 'loading') {
                        document.onreadystatechange = prev;
                        handler();
                    }
                };
            }
        })();
    </script> --}}

    <script>
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('fa037a4bac2cb6548e51', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('notification_home');
        channel.bind('App\\Ship\\Events\\PusherHomeNotication', function(data) {
            $('.acme-news-ticker').removeClass('d-none');
            $('.acme-news-ticker span#notification_home').text(data.message);
            $('.my-news-ticker').AcmeTicker({
                type: 'marquee',
                /*horizontal/horizontal/Marquee/type*/
                direction: 'left',
                /*up/down/left/right*/
                speed: 0.09,
                /*true/false/number*/
                /*For vertical/horizontal 600*/ /*For marquee 0.05*/ /*For typewriter 50*/
                controls: {
                    toggle: $('.acme-news-ticker-pause'),
                    /*Can be used for horizontal/horizontal/typewriter*/
                    /*not work for marquee*/
                }
            });
            setTimeout(() => {
                $('.acme-news-ticker').addClass('d-none')
            }, 10000);
        });
    </script>
</body>

<!-- Mirrored from yae.hifive03.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 Jun 2023 02:33:24 GMT -->

</html>
