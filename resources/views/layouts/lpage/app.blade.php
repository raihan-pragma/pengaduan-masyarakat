<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sipemdekar - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/sipemdekar.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

  <!-- =======================================================
  * Template Name: Bootslander - v4.10.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Header Section ======= -->
    @include('layouts.lpage.navbar')
    <!-- ======= Hero Section ======= -->
    <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1><span>Sistem Pengaduan Masyarakat Desa Cimekar</span></h1>
            <h2>Sampaikan laporan pengaduan anda secara online</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Tentang Kami</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="assets/img/hero.png" class="img-fluid" alt="">
        </div>
      </div>
    </div>

    {{-- <svg class="hero" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg> --}}

    </section><!-- End Hero -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" "fade-right">
            {{-- <a href="https://www.youtube.com/watch?v=StpBR2W8G5A" class="glightbox play-btn mb-4"></a> --}}
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" "fade-left">
            <h3>Sistem Pengaduan Masyarakat Desa Cimekar</h3>
            <p>Sipemdekar adalah Sistem Pengaduan Masyarakat secara online yang bertujuan untuk
                mempermudah laporan atau aspirasi yang ingin disampaikan masyarakat kepada Desa Cimekar
            </p>

            <div class="icon-box" "zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-user"></i></div>
              <h4 class="title"><a href="#pengaduan">Menulis Pengaduan</a></h4>
              <p class="description">Anda bisa menuliskan aspirasi atau pengaduan yang ingin anda sampaikan melalui website Sipemdekar kepada desa cimekar secara online</p>
            </div>

            <div class="icon-box" "zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-notepad"></i></div>
              <h4 class="title"><a href="/pengaduan">Melihat Daftar Pengaduan</a></h4>
              <p class="description">Anda dapat melihat aspirasi atau pengaduan yang di sampaikan Masyarakat</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

     <!-- ======= Pengaduan Section ======= -->
     {{-- <section id="pengaduan" class="pengaduan">
      <div class="container-fluid mb-4">
        <div class="row justify-content-center">
          <div class="col-md-8 mx-4" "fade" style="background-color: #7ceec6">
            <form action="" class="mx-5" method="">
              @csrf
              <div class="my-4 mx-4">
              <div class="row py-3">
                <h3>Sampaikan Laporan Anda!</h3>
              </div> 
              
              <div class="col py-3">
                <div class="col-md-12">
                  <input type="text" class="form-control bg-light" placeholder="Ketik Judul Laporan">
                </div>
              </div>

              <div class="col py-3">
                <div class="col-md-12">
                  <textarea placeholder="Ketik Isi Laporan" class="form-control bg-light" rows="4"></textarea>
                </div>
              </div>

                <div class="col py-3">
                  <label for="">Tanggal Pengaduan</label>
                  <div class="col-md-12 input-group date">
                    <input type="date" class="form-control input-doi bg-light" placeholder="Pilih Tanggal Kejadian">
                  </div>
                </div>

                <div class="col py-3">
                  <label for="">Tempat kejadian</label>
                  <div class="col-md-12">
                    <input type="text" class="form-control bg-light" placeholder="Ketik Tempat Kejadian">
                  </div>
                </div>

                <div class="col py-3">
                  <label for="">Upload Lampiran</label>
                  <div class="col-md-12">
                    <input type="file" class="form-control bg-light">
                  </div>
                </div>

                {{-- <div class="col py-3">
                  @if (Route::has('login'))
                @auth --}}
                    {{-- <button type="button" ><a href="/pengaduan">Kirim</a> </button>
                @else --}}
                    {{-- <button type="button" > <a href="{{ route('login') }}">Kirim</a> </button> --}}
                {{-- @endauth
                @endif --}}
                </div>
              </div>
            </form>
          </div>
        </div>

      </div>
    </section><!-- End Pengaduan Section --> --}}

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sipemdekar</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        {{-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> --}}
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

</body>

</html>