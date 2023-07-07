<header>
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-md-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="header-info-right d-flex justify-content-end">
                            <ul class="header-social">
                                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" href="#"><i
                                            class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Twitter" href="#"><i
                                            class="fa-brands fa-twitter"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Discord" href="#"><i
                                            class="fa-brands fa-discord"></i></a></li>
                                <li><a data-toggle="tooltip" data-placement="top" title="Reddit" href="#"><i
                                            class="fa-brands fa-reddit-alien"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-mid d-none d-md-block">
                <div class="container">
                    <div class="row d-flex align-items-center">
                        <div class="col-xl-3 col-lg-3 col-md-3">
                            <div class="logo">
                                <a href="{{ route('frontend_default_page') }}"><img src="{{ asset('template/assets/img/logo/logo.png') }}" alt></a>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9">
                            <div class="header-banner f-right ">
                                <img src="assets/img/app/app.jpg" alt>
                                <div class="app_overlay">
                                    <ul class="d-flex flex-wrap justify-content-between">
                                        <li class="mr-1"><a href="#">
                                                <img class="w-100" src="assets/img/app/app1.png" alt>
                                            </a></li>
                                        <li class="ml-1"><a href="#">
                                                <img class="w-100" src="assets/img/app/app2.png" alt>
                                            </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-10 col-lg-8 col-md-12 header-flex">

                            <div class="sticky-logo">
                                <a href="index-2.html"><img src="assets/img/logo/logo.png" alt></a>
                            </div>

                            <div class="main-menu d-none d-md-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="index-2.html">Home</a></li>
                                        <li><a href="genres.html">Genres</a></li>
                                        <li><a href="manga_all.html">Latest Manga</a></li>
                                        <li><a href="blog.html">Blog</a></li>
                                        <li><a class="js-show-modal1" href="#"><i class="fa-regular fa-user"></i>
                                                Login/Sign Up</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3 col-xl-2 col-md-12 d-flex justify-content-center">
                            <ul class="top-info d-flex flex-wrap text-center text-md-center ">
                                <li class="js-show-modal-search"><i class="fa-solid fa-magnifying-glass"></i>
                                    <p class="info-text">Search Manga</p>
                                </li>
                            </ul>

                        </div>

                    </div>


                    <div class="modal-search-header flex-c-m trans-04 js-hide-modal-search">
                        <div class="container-search-header">
                            <button class="flex-c-m btn-hide-modal-search trans-04 js-hide-modal-search">
                                <img src="{{ asset('template/assets/img/icon/icon-close.png') }}" alt="CLOSE">
                            </button>
                            <form class="wrap-search-header flex-w p-l-15">
                                <button class="flex-c-m trans-04">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </button>
                                <input class="plh3" type="text" name="search" placeholder="Search...">
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="mobile_menu d-block d-md-none"></div>
                </div>
            </div>
        </div>
    </div>

</header>
