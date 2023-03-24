<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LBH Pos Malang - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  @foreach($profil as $p)
  <link href="{{asset('foto/'.$p->logo)}}" rel="icon">
  @endforeach
  <link href="{{asset('client')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    @yield('bayar')
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('client')}}/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="{{asset('client')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('client')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('client')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('client')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('client')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('client')}}/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Squadfree - v4.11.0
  * Template URL: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body >
  

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top @yield('header')">
    <div class="container d-flex align-items-center justify-content-between position-relative">

      <div class="logo">
        @foreach($profil as $pr)
        
        <h1 class="text-light"><a href="/"><img src="{{asset('logo/'.$pr->logo)}}" alt=""> | <span>{{$pr->nama}}</span></a></h1>
        @endforeach
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{asset('client')}}/assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link  @yield('home')" href="/">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('client.visi.misi')}}">Visi-Misi</a></li>
              <li><a href="/client/profil">Profil Pengacara</a></li>
              <li><a href="/client/struktur">Struktur Organiasai</a></li>
              <li><a href="/client/tentang">Tentang</a></li>
            </ul>
          </li>
          <li><a class="nav-link  @yield('berita')" href="/client/berita">Informasi</a></li>
          <li><a class="nav-link  @yield('publikasi')" href="/client/publikasi">Publikasi</a></li>
          <li><a class="nav-link  @yield('donasi')" href="/client/donasi">Donasi</a></li>
          <li><a class="nav-link  @yield('layanan')" href="/client/layanan">Layanan Hukum</a></li>
          <li><a class="nav-link  @yield('pengumuman')" href="/client/pengumuman">Pengumuman</a></li>
         
          
          <li><a class="nav-link  @yield('contact')" href="{{route('client.kontak')}}">Hubungi Kami</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
@yield('content')
  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          @foreach($profil as $pr)
          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>{{$pr->nama}}</h3>
              <p class="pb-3"><em>{!! $pr->moto !!}</em></p>
              <p>
                {{$pr->alamat}}<br><br>
                <strong>Phone:</strong> {{$pr->telp}}<br>
                <strong>Email:</strong> {{$pr->email}}<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://twitter.com/{{$pr->ak_twitter}}" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="https://www.facebook.com/{{$pr->ak_facebook}}" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://www.instagram.com/{{$pr->ak_instagram}}" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
              </div>
            </div>
          </div>
@endforeach
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu 1</h4>
            <ul>
              <li><a class="bx bx-chevron-right " href="/">Home</a></li>
          <li><a class="bx bx-chevron-right" href="/client/berita">berita</a></li>
          <li><a class="bx bx-chevron-right" href="/client/donasi">donasi</a></li>
          <li><a class="bx bx-chevron-right " href="/client/layanan">layanan</a></li>
          <li><a class="bx bx-chevron-right " href="/client/pengumuman">pengumuman</a></li>
          <li ><a class="bx bx-chevron-right" href="#">tentang </a>
          </li>
            </ul>
          </div>
          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Menu 2</h4>
            <ul>
              <li><a class="bx bx-chevron-right" href="#">visi</a></li>
              <li><a class="bx bx-chevron-right" href="#">misi</a></li>
              <li><a class="bx bx-chevron-right" href="/client/profil">profil Pengacara</a></li>
              <li><a class="bx bx-chevron-right" href="/client/tentang">tentang</a></li>
           
            </ul>
          </div>
          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Cari Artikel</h4>
            <p>Cari berita LBH Malang</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="cari">
            </form>

          </div>
         

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>lbh malang</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/squadfree-free-bootstrap-template-creative/ -->
        
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('client')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('client')}}/assets/vendor/aos/aos.js"></script>
  <script src="{{asset('client')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('client')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('client')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('client')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('client')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('client')}}/assets/js/main.js"></script>

</body>

</html>