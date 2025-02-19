<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Web Profile - Bagus Nur Solayman</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/public/assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/public/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('assets/public/css/style.css') }}" rel="stylesheet" />
  </head>

  <body>
    <i class="bi bi-list mobile-nav-toggle d-lg-none"></i>
    <header id="header" class="d-flex flex-column justify-content-center">
      <nav id="navbar" class="navbar nav-menu">
        <ul>
          <li>
            <a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a>
          </li>
          <li>
            <a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a>
          </li>
          <li>
            <a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a>
          </li>
          <li>
            <a href="{{ route('login') }}" class="nav-link scrollto"><i class="bx bx-key"></i> <span>Login</span></a>
          </li>
        </ul>
      </nav>
    </header>


    @yield('content')

    <footer id="footer">
      <div class="container">
        <h3>Brandon Johnson</h3>
        <p>
          Et aut eum quis fuga eos sunt ipsa nihil. Labore corporis magni
          eligendi fuga maxime saepe commodi placeat.
        </p>
        <div class="social-links">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
        <div class="copyright">
          &copy; Copyright <strong><span>MyResume</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          Designed by Bagus Nur Solayman
        </div>
      </div>
    </footer>

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>

    <script src="{{ asset('assets/public/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/typed.js/typed.umd.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/public/assets/vendor/php-email-form/validate.js') }}"></script>

    <script src="{{ asset('assets/public/js/main.js') }}"></script>
  </body>

</html>
