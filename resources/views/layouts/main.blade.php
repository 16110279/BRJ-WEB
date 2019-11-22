<!doctype html>
<html lang="en">

<head>
    <title> @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/web/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/web/css/bootstrap.min.css">
    <link rel="stylesheet" href="/web/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/web/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="/web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/web/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/web/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/web/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="/web/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


    <div class="site-wrap" id="home-section">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>



        <header class="site-navbar site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center position-relative">

                    <div class="col-3 ">
                        <div class="site-logo">
                            <a href="index.html"><strong>Bikinrumah</strong>Jogja </a>
                        </div>
                    </div>

                    <div class="col-9  text-right">


                        <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>



                        <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav ml-auto ">
                                <li class="active"><a href="{{ url('/')}}" class="nav-link">Home</a></li>
                                <li><a href="#" class="nav-link">Tentang Kami</a></li>
                                <li><a href="#" class="nav-link">Layanan</a></li>
                                <li><a href="#" class="nav-link">Proyek</a></li>
                                <li><a href="#" class="nav-link">Hubungi Kami</a></li>
                                <li><a href="{{ url('/login') }}" class="nav-link">Login</a></li>

                            </ul>
                        </nav>
                    </div>


                </div>
            </div>

        </header>

        @yield('container')

        <footer class="site-footer">
            <div class="container">

                <div class="row pt-5 mt-5 text-center">
                    <div class="col-md-12">
                        <div class="border-top pt-5">
                            <p>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div>

    <script src="/web/js/jquery-3.3.1.min.js"></script>
    <script src="/web/js/popper.min.js"></script>
    <script src="/web/js/bootstrap.min.js"></script>
    <script src="/web/js/owl.carousel.min.js"></script>
    <script src="/web/js/jquery.sticky.js"></script>
    <script src="/web/js/jquery.waypoints.min.js"></script>
    <script src="/web/js/jquery.animateNumber.min.js"></script>
    <script src="/web/js/jquery.fancybox.min.js"></script>
    <script src="/web/js/jquery.easing.1.3.js"></script>
    <script src="/web/js/bootstrap-datepicker.min.js"></script>
    <script src="/web/js/aos.js"></script>

    <script src="/web/js/main.js"></script>

</body>

</html>