<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="عقارات السعودية" />
    <meta name="description"content="عقارات السعودية" />
    <meta name="author" content="عقارات السعودية" />
    <meta name="viewport" content="عقارات السعودية" />
    @include('Admin.layouts.head')
</head>

<body>

    <div class="wrapper">

        <!--=================================
 preloader -->

        <div id="pre-loader">
            <img src="{{ asset('assets/images/pre-loader/loader-01.svg') }}" alt="">
        </div>

        <!--=================================
 preloader -->

        @include('Admin.layouts.main-header')

        @include('Admin.layouts.main-sidebar')

        <!--=================================
 Main content -->
        <!-- main-content -->
        <div class="content-wrapper">

            @yield('page-header')

            @yield('content')

            <!--=================================
 wrapper -->

            <!--=================================
 footer -->

            @include('Admin.layouts.footer')
        </div><!-- main content wrapper end-->
    </div>
    </div>
    </div>

    <!--=================================
 footer -->

    @include('Admin.layouts.footer-scripts')

</body>

</html>
