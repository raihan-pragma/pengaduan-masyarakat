<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sipemdekar - Daftar Pengaduan</title>
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

  <!-- =======================================================
  * Template Name: Bootslander - v4.10.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >

    <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
    <div class="">
        <nav id="navbar" class="navbar">
            <ul>
                {{-- <h1><a href="#hero"><span>Pemaso</span></a></h1> --}}
                <!-- Uncomment below if you prefer to use an image logo -->
                <li><a href="/home"><img src="assets/img/logo2.png" height="50px"></a></li>
                <li><a class="nav-link scrollto" href="/home">Home</a></li>
            </ul>
            
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
        <nav id="navbar" class="navbar">
        <ul>
          @if (Route::has('login'))
            @auth
              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
              </form>
          @else
            <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @endauth
          @endif
        </ul>
        </nav>
    </div>
</header><!-- End Header -->

<!-- ======= Hero Section ======= -->
<section id="hero" >
  <div class="row justify-content-center">
    <div class="col-md-12">
      <div class="card mb-4">
        <div class="card-body">
          <h4 class="card-title">Daftar Selesai</h4>
          <table class="table table-striped container">
            <thead>
              <th scope="col" class="text-center">Tanggal Pengaduan</th>
              <th scope="col" class="text-center">Pengaduan</th>
              <th scope="col" class="text-center">Tempat Kejadian</th>
              <th scope="col" class="text-center">Tanggapan</th>
              <th scope="col" class="text-center">Foto Kejadian</th>
              <th scope="col" class="text-center">Status</th>
            </thead>   
            <tbody>
              {{-- @if ($pengaduan2->count() > 0) --}}
              @foreach ($dtPengaduan as $item)
              @if ($item->status == 'selesai')
              <tr>
                <td class="text-center">{{ $item->created_at }}</td>
                <td class="text-center">{{ $item->isi }}</td>
                <td class="text-center">{{ $item->lokasi }}</td>
                <td class="text-center">{{ $item->tanggapan}}</td>
                <td class="text-center"><img src="{{ asset('/storage/' . $item->lampiran)}} " width="100px"></td>
                <td class="text-center">
                    <button class="btn btn-success" style="width: 100px">{{ $item->status }}</button>
                  </td>
                @endif
              @endforeach
              </tr> 
            </tbody>
          </table> 
        </div>
      </div>
    </div>  
  </div>
</section><!-- End Hero -->
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
  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>