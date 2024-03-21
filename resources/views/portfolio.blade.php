<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - Sonzie</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/1.png') }}" rel="icon">
  {{-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> --}}

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Personal
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/personal-free-resume-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <main id="main">

    <!-- ======= Portfolio Details ======= -->
    <div id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">

          <div class="col-lg-8">
            <h2 class="portfolio-title">{{ $portfolio['portfolio-title'] }}</h2>

            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image1) }}" alt="">
                </div>

                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image2) }}" alt="">
                </div>

                @isset($portfolio->image3)
                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image3) }}" alt="">
                </div>
                @endisset

                @isset($portfolio->image4)
                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image4) }}" alt="">
                </div>
                @endisset

                @isset($portfolio->image5)
                <div class="swiper-slide">
                  <img src="{{ asset($portfolio->image5) }}" alt="">
                </div>
                @endisset

              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>

          <div class="col-lg-4 portfolio-info">
            <h3>Project information</h3>
            <ul>
              <li><strong>Category</strong>: Web App</li>
              <li><strong>Client</strong>:<a href="{{ $portfolio['portfolio-client-url'] }}"> {{ $portfolio['portfolio-client'] }}</a></li>
              <li><strong>Project date</strong>: {{ $portfolio['portfolio-date-month'] }}, {{ $portfolio['portfolio-date-year'] }}</li>
              <li><strong>Project URL</strong>: <a href="{{ $portfolio['portfolio-url'] }}">{{ $portfolio['portfolio-url-name'] }}</a></li>
              <li><strong>Project tech</strong>: {{ $portfolio['tech'] }}</li>
            </ul>

            <p>
              {{ $portfolio['portfolio-desc'] }}
            </p>
          </div>

        </div>

      </div>
    </div><!-- End Portfolio Details -->

  </main><!-- End #main -->

  <div class="credits">
    <img src="{{ asset('img/1-removebg-preview.png') }}" alt="" class="logo-footer">
  </div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  {{-- <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script> --}}

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>