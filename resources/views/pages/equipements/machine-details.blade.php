<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>DevFolio Bootstrap Portfolio Template - Portfolio Details</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Vendor CSS Files -->
  <link href="{{URL('css/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{URL('css/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{URL('css/assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: DevFolio - v4.10.0
  * Template URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>


<body>

  <!-- ======= Header ======= -->



  <header id="header" class="fixed-top">
    @include('partitions.header')
    <div class="container d-flex align-items-center justify-content-between">

      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    </div>
  </header><!-- End Header -->



  <main id="main">
    <h1>Machines</h1>
    <!-- ======= Portfolio Details Section ======= -->
    @php
      $var = $machine->rep_images;
      $imagePath = str_replace('\\', '/', $var);
      $imagePath = preg_replace('/\/+/', '/', $imagePath);
      $imagePath = trim($imagePath, "[]");
      $imagePath = trim($imagePath, '""');
    @endphp
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide mt-5">
                  <img src="{{URL('storage/'.$imagePath)}}" alt="">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-7">
            <div class="portfolio-info">
              <h3>{{ $machine->label }}</h3>
              <ul>
                <li><strong>Designation</strong> : {{ $machine->designation }}</li>
                <li><strong>Statu</strong> : {{ $machine->Statu}}</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Description </h2>
              <p>
              {{ $machine->description }}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('partitions.footer')

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{URL('css/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{URL('css/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{URL('css/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{URL('css/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{URL('css/assets/vendor/typed.js/typed.min.js')}}"></script>
  <script src="{{URL('css/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{URL('css/assets/js/main.js')}}"></script>

</body>

</html>