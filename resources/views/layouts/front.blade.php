<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Your description">
    <meta name="author" content="Your name">

    <!-- OG Meta Tags (Facebook, Twitter, LinkedIn) -->
    <meta property="og:site_name" content="" />
    <meta property="og:site" content="" />
    <meta property="og:title" content="" />
    <meta property="og:description" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta name="twitter:card" content="summary_large_image">

    <!-- Webpage Title -->
    <title>Mahmoud-Ebrahim</title>

    <!-- Stylesheets -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;1,400&family=Poppins:wght@600&display=swap"
        rel="stylesheet">
    <link href="{{ asset('front/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/fontawesome-all.css') }}" rel="stylesheet">
    <link href="{{ asset('front/css/styles.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('front/images/صورتي خلفيه بيضه.jpg') }}">
</head>

<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <!-- Brand -->
            <h6 class="nav-link text-white">Mahmoud-Ebrahim</h6>

            <!-- Toggler -->
            <button class="navbar-toggler p-0 border-0" type="button" data-toggle="offcanvas">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Links -->
            <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
                <ul class="navbar-nav ml-auto">

                    <!-- Admin Dashboard Link -->
                    @if (Auth::check() && Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="nav-link page-scroll" href="{{ route('dashboard.index') }}">
                                لوحة التحكم <span class="sr-only">(current)</span>
                            </a>
                        </li>
                    @endif

                    <!-- Main Navigation Links -->
                    <li class="nav-item">
                        <a class="nav-link">{{ Auth::user()->name ?? '' }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#header">الرئيسية <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#about">نبذة عني</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">المهارات</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#projects">المشاريع</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">تواصل</a>
                    </li>

                    <!-- Authentication Dropdown -->
                    <li class="nav-item dropdown mx-2">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">التسجيل</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item page-scroll" href="{{ route('login') }}">تسجيل الدخول</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item page-scroll" href="{{ route('register') }}">انشاء الحساب</a>
                            <div class="dropdown-divider"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item page-scroll">
                                    <i class="fas fa-sign-out-alt me-2"></i> تسجيل الخروج
                                </button>
                            </form>
                        </div>
                    </li>
                </ul>

                <span class="fa-stack">
                    <a href="https://www.linkedin.com/in/mahmoud-ebrahim-347057277" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-linkedin-in fa-stack-1x"></i>
                    </a>
                </span>

                <span class="fa-stack">
                    <a href="https://github.com/MahmoudEbrahimmm" target="_blank">
                        <i class="fas fa-circle fa-stack-2x"></i>
                        <i class="fab fa-github fa-stack-1x"></i>
                    </a>
                </span>

                <!-- Flash Messages -->
                @if (session('success'))
                    <div class="alert alert-success mt-3">
                        {{ session('success') }}
                    </div>
                @endif
            </div> <!-- end of container -->
    </nav>
    <!-- end of navigation -->

    <!-- Main Content -->
    @yield('content')

    <!-- Footer -->
    <footer class="footer bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="social-container">

                        <span class="fa-stack">
                            <a href="https://www.facebook.com/mahmoud.ebrahim.563549" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-facebook-f fa-stack-1x"></i>
                            </a>
                        </span>


                        <span class="fa-stack">
                            <a href="https://www.linkedin.com/in/mahmoud-ebrahim-347057277" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-linkedin-in fa-stack-1x"></i>
                            </a>
                        </span>


                        <span class="fa-stack">
                            <a href="https://wa.me/201004976135" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-whatsapp fa-stack-1x"></i>
                            </a>
                        </span>


                        <span class="fa-stack">
                            <a href="https://github.com/MahmoudEbrahimmm" target="_blank">
                                <i class="fas fa-circle fa-stack-2x"></i>
                                <i class="fab fa-github fa-stack-1x"></i>
                            </a>
                        </span>


                    </div> <!-- end of social-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </footer>
    <!-- end of footer -->

    <!-- Copyright -->
    <div class="copyright bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p class="p-small">
                        &copy; <a class="no-line" href="#your-link">Mahmoud-Ebrahim</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- end of copyright -->

    <!-- Scripts -->
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('front/js/scripts.js') }}"></script>
</body>

</html>
