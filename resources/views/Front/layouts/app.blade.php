<!DOCTYPE html>
<html lang="ar">

<head>
    <title>عقارات السعودية </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content=" website" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="shortcut icon" href="{{ asset('assets/front/images/logo-w.png') }}">
    <meta name="msapplication-TileColor" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.xyz/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/lightgallery-bundle.min.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/front/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/general.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/footer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front/css/ar.css') }}">
    {{-- Toster --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>

    <!-- welcome -->
    <div class="body_page  d-flex flex-column justify-content-between">
        <!-- start header =====
        ============ -->
        <header class="header active">
            <div class="top-par">
                <div class="main-container">
                    <div class="logo">
                        <img src="{{ asset('assets/front/images/logo.png') }}" alt="">
                    </div>

                    <div class="element">
                        <ul>
                            <li><a href="{{ route('home') }}"> الرئيسيه </a></li>
                            <li><a href="aboutus.html"> نبذه عنا </a></li>
                            <li><a href="categories.html">الاقسام </a></li>
                            <li><a href="products.html"> العقارات </a></li>
                            <li><a href="{{ route('contacts.index') }}"> تواصل معنا </a></li>
                        </ul>
                    </div>

                    <div class="icon-top-par">
                        @auth('web')
                            <a href="add-ads.html" class="ctm-btn add-header"> اضافة اعلان </a>
                            <a href="{{ route('profile.index') }}" class="profile-header"> <i class="bi bi-person"></i>
                            </a>
                            <a href="chat.html" class="chat-header"><i class="bi bi-chat-dots"></i> </a>
                        @else
                            <a href="{{ route('login') }}" class="ctm-btn btn-icon-par"> ابدأ الان </a>
                        @endauth
                        <div class="menu-div">
                            <div class="content" id="times-ican">
                                <a href="#" title="Navigation menu" class="navicon" aria-label="Navigation">
                                    <span class="navicon__item"></span>
                                    <span class="navicon__item"></span>
                                    <span class="navicon__item"></span>
                                    <span class="navicon__item"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @yield('breadcrumb-header')
        </header>
        <!-- end header =====
        ============== -->
        <!-- start app ====
        ===============================
        ================================
        ============== --
        -->
        @yield('content')
        <!-- end app ====
        =============================
        ==================================
        ==================== -->

        <!-- start footer ==============================
        ============================== -->
        <footer>
            <div class="footer">
                <div class="newsletter">
                    <div class="main-container">
                        <div class="title-center">
                            <h2>تابع اخر الاخبار</h2>
                        </div>
                        <div class="input-newsletter">
                            <form action="">
                                <input type="text" class="form-control" placeholder="عنوان البريد الالكتروني"
                                    name="email">
                                <button>اشترك</button>
                            </form>
                        </div>

                    </div>
                </div>
                <div class="main-container">
                    <div class="row align-items-center">
                        <div class="col-lg-3">
                            <a href="">
                                <div class="logo-footer">
                                    <img src="{{ asset('assets/front/images/logo-w.png') }}" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-6">
                            <div class="element-footer">
                                <ul>
                                    <li><a href="index.html"> الرئيسيه </a></li>
                                    <li><a href="aboutus.html"> نبذه عنا </a></li>
                                    <li><a href="categories.html">الاقسام </a></li>
                                    <li><a href="products.html"> العقارات </a></li>
                                    <li><a href="contactus.html"> تواصل معنا </a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="media-footer">
                                <ul>
                                    <li><a href=""> <i class="fab fa-facebook-f"></i> </a></li>
                                    <li><a href=""> <i class="fab fa-instagram"></i> </a></li>
                                    <li><a href=""> <i class="fab fa-twitter"></i> </a></li>
                                    <li><a href=""> <i class="fab fa-snapchat-ghost"></i> </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer=========================
        ===========================  -->

        <!-- start menu responsive ===
        ======== -->
        <div class="bg_menu ">
        </div>
        <div class="menu_responsive" id="menu-div">

            <div class="element_menu_responsive">
                <ul>
                    <li><a href="{{ route('home') }}"> الرئيسيه </a></li>
                    <li><a href="aboutus.html"> نبذه عنا </a></li>
                    <li><a href="categories.html">الاقسام </a></li>
                    <li><a href="products.html"> العقارات </a></li>
                    <li><a href="{{ route('contacts.index') }}"> تواصل معنا </a></li>
                </ul>
            </div>


            <div class="btns_menu_responsive">
                @auth
                    <a href="add-ads.html" class="ctm-btn w-100"> اضافة اعلان </a>
                @else
                    <a href="{{ route('login') }}" class="ctm-btn w-100"> ابدأ الان </a>
                @endauth
            </div>

            <div class="remove-mune">
                <span></span>
            </div>




        </div>
        <!-- end menu responsive ===
            ======== -->
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/front/js/bootstrap.min.js') }}"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="{{ asset('assets/front/js/anime.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/lightgallery.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/392319d0e8.js" crossorigin="anonymous"></script>
    <script src="{{ asset('assets/front/js/otp.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    @stack('js')
    {{-- Toster --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (session('success'))
        <script>
            toastr.success("{{ session('success') }}");
        </script>
    @endif
    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif



</body>
<!-- end-body
    =================== -->

</html>
