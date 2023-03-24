@extends('client.layout.core')
@section('pengumuman')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1>pengumuman</h1>
          <ol>
            <li>pengumuman</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    @foreach($pengumumanup as $br)
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper align-items-center" style="transform: translate3d(-1232px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-1d2b1b1be48b642f" aria-live="off">
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"  role="group" aria-label="3 / 3">
                  <img src="{{asset('foto/'.$br->foto)}}" width="100" height="400" alt="">
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="0"  role="group" aria-label="1 / 3">
                  <img src="{{asset('foto/'.$br->foto)}}" width="100" height="400" alt="">
                </div>

                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"  role="group" aria-label="2 / 3">
                  <img src="{{asset('foto/'.$br->foto)}}" width="100" height="400" alt="">
                </div>

                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"  role="group" aria-label="3 / 3">
                  <img src="{{asset('foto/'.$br->foto)}}" width="100" height="400" alt="">
                </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"  role="group" aria-label="1 / 3">
                  <img src="{{asset('foto/'.$br->foto)}}" width="100" height="400" alt="">
                </div></div>
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>pengumuman Terbaru</h3>
              <ul>
                <li><strong>Judul</strong>: {{$br->judul}}</li>
                <li><strong>Tanggal</strong>: {{$br->tanggal}}</li>
                <li><strong>Author</strong>: {{$br->author}}</li>
                <li><strong>Penerbit</strong>: <a href="#">LBH Malang</a></li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Deskripsi</h2>
              <p>
                {{substr($br->deskripsi,0,300)}}
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

    <section id="team" class="team">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
          <hr><h1>pengumuman</h1><hr>
        </div>

        <div class="row">
          @foreach($pengumuman as $ber)
          <div class="col-lg-6 col-md-6">
            <div class="member aos-init aos-animate" data-aos="fade-up">
              <div class="pic"><img src="{{asset('foto/'.$ber->foto)}}" width="300" height="300" alt=""></div>
              <div class="member-info">
                <h4>{{$ber->judul}}</h4>
                <span>{{substr($ber->deskripsi,0,10)}}</span>
                <div class="social">
                  <a href="">{{$ber->tanggal}}</i>| {{$ber->author}}</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          
        </div>

      </div>
    </section>
  @endforeach
  </main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection