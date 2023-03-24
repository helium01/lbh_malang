@extends('client.layout.core')
@section('home')
active
@endsection
@section('header')
header-transparent
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
  @foreach($profil as $pr)
    <div class="hero-container" style="background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url('/bg_1/{{$pr->bg_1}}') top center;" data-aos="fade-up">
      <h1>selamat datang di {{$pr->nama}}</h1>
      <h2>{{$pr->moto}}</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
    @endforeach
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
      <section class="content">
        <div class="container-fluid">
            <h2 class="text-center display-4">Cari Artikel</h2>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <form action="{{route('client.cari')}}" method="get">
                      @csrf
                        <div class="input-group">
                            <input type="search" name="cari" class="form-control form-control-lg" placeholder="cari di sini">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-primary">
                                    cari
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <br><br>
        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-up">
            <div class="content">
              @foreach($profil as $pr)
              <h3>{{$pr->nama}}</h3>
              @endforeach
              @foreach($tentang as $tn)
              <p>
               {{substr($tn->tentang_kami,0,100)}}
              </p>
              @endforeach
              <a href="/client/tentang" class="about-btn">tentang <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <h3>Informasi Terbaru</h3><hr>
                @foreach($pengumuman as $pe)
                <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-receipt"></i>
                  <h4>{{substr($pe->judul,0,10)}}</h4>
                  <p>{{substr($pe->deskripsi,0,25)}}</p>
                </div>
                @endforeach
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Berita</h2><hr>
          

        <div class="row">
          @foreach($berita as $br)
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="#">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><img src="{{asset('foto/'.$br->foto)}}" width="400" height="300" alt=""></div>
              <h4 class="title"><a href="">{{$br->judul}}</a></h4>
              <p class="description">{{substr($br->deskripsi,0,30)}}</p>
            </div>
          </a>
          </div>
          @endforeach
        </div>

      </div>
    </section>
    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Publikasi</h2><hr>
          

        <div class="row">
          @foreach($publikasi as $pb)
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="#">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><iframe src="{{asset('file/'.$pb->foto)}}" width="300" frameborder="0"></iframe></div>
              <h4 class="title"><a href="">{{$pb->nama_file}}</a></h4>
              <p class="description">{{substr($pb->deskripsi,0,30)}}</p>
                        <a href="/file/{{$pb->foto}}" target="_blank" class="btn btn-block btn-info"> buka dokumen</a>
                        <a href="{{route('publikasi.download.client',$pb->id)}}" target="_blank" class="btn btn-block btn-info"> download dokumen</a>
            </div>
          </a>
          </div>
          @endforeach
        </div>

      </div>
    </section>

    <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>layanan</h2><hr>
          @foreach($profil as $pr)
          <p>{{$pr->deskripsi}}</p>
          @endforeach
          <br>
          <a class="btn btn-primary" href="#" >memohon bantuan hukum <i class="bx bx-chevron-right"></i></a>
        </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Counts Section ======= -->
    <!-- End Counts Section -->

    <!-- ======= Cta Section ======= -->
    <!-- End Cta Section -->

    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>kontak</h2>
      @foreach($profil as $pr)
          <p>{{$pr->moto}}</p>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Lokasi : </h3>
              <p>{{$pr->alamat}}</p>
            </div>
          </div>
     
          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{$pr->email}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>{{$pr->telp}}</p>
            </div>
          </div>
          @endforeach
        </div>

        <div class="row">

          <div class="col-lg-6 ">
          <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=lbh malang jl kembang&t=&z=10&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br><style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style><a href="https://embedgooglemap.2yu.co/">html embed google map</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:100%;width:100%;}</style></div></div>
          </div>

          <div class="col-lg-6">
            <form action="/kirim/email" method="post">
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <!-- <div class="loading">Loading</div> -->
                <!-- <div class="error-message"></div> -->
                <!-- <div class="sent-message">Your message has been sent. Thank you!</div> -->
              </div>
              <button type="submit" class="btn btn-primary">kirim email</button>
            </form>
          </div>
          

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection