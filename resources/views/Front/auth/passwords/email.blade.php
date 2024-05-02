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

    <!-- welcome  :) -->


    <!-- start loading -->

    <!-- end lodding -->


    <!-- welcome -->

    <div class="body_page  d-flex flex-column justify-content-between">




        <!-- start app ====
        ===============================
        ================================
        ============== --
        -->
        <main id="app">
            <!-- start login ====  -->
            <section class="aosh-page">
                <div class="form-aosh">
                    <div class="main-form-aosh">
                        <div class="logo-aosh">
                            <a href="index.html">
                                <img src="{{ asset('assets/front/images/logo.png') }}" alt="">
                            </a>
                        </div>
                        <h2>نسيت كلمة المرور</h2>
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf
                            <p> يمكنك تغيير كلمة المرور من خلال البريد الالكتروني </p>
                            <div class="input-form">
                                <label for=""> البريد الالكتروني </label>
                                <input type="email" placeholder=" البريد الالكتروني" class="form-control"
                                    name="email" value="{{ old('email') }}">
                                @error('email')
                                    <p style="color:red">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="btn-aosh">
                                <button type="submit" class="ctm-btn w-100 mt-4">تأكيد </button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="bg-aosh-page">
                    <img src="{{ asset('assets/front/images/image.jpg') }}" alt="">
                </div>
            </section>
            <!-- end login ==== -->
        </main>

        <!-- end app ====
=============================
==================================
==================== -->

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
