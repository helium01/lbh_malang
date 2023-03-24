@extends('client.layout.core')
@section('publikasi')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h1>publikasi</h1>
          <ol>
            <li>publikasi</li>
          </ol>
        </div>

      </div>
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    @foreach($publikasiup as $br)
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper align-items-center" style="transform: translate3d(-1232px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-1d2b1b1be48b642f" aria-live="off">
              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next" data-swiper-slide-index="2"  role="group" >
              <iframe src="{{asset('foto/'.$br->foto)}}" height="100%" width="100%" frameborder="1"></iframe>    
              
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1"  role="group" aria-label="1 / 3">
                <iframe src="{{asset('foto/'.$br->foto)}}" height="100%" width="100%" frameborder="1"></iframe>  
                
                </div>

                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="1"  role="group" aria-label="1 / 3">
                <iframe src="{{asset('foto/'.$br->foto)}}" height="100%" width="100%" frameborder="1"></iframe>  
                
                </div>

                <div class="swiper-slide swiper-slide-next" data-swiper-slide-index="2"  role="group" aria-label="1 / 3">
                <iframe src="{{asset('foto/'.$br->foto)}}" height="100%" width="100%" frameborder="1"></iframe>  
                
                </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev" data-swiper-slide-index="0"  role="group" aria-label="1 / 3">
              <iframe src="{{asset('foto/'.$br->foto)}}" height="100%" width="100%" frameborder="1"></iframe>    
              
                </div></div>
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 2" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>publikasi Terbaru</h3>
              <h4 class="title">Nama Dokumen : <a href="">{{$br->nama_file}}</a></h4>
              <p class="description">Deskripsi : {{substr($br->deskripsi,0,30)}}</p>
                        <a href="/file/{{$br->foto}}" target="_blank" class="btn btn-block btn-info"> buka dokumen</a>
                        <a href="{{route('publikasi.download.client',$br->id)}}" target="_blank" class="btn btn-block btn-info"> download dokumen</a>
            </div>
            </div>
            
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

   

        <section id="services" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-in" data-aos-delay="100">
          <h2>Publikasi</h2><hr>
          

        <div class="row">
          @foreach($publikasi as $pb)
          <div class="col-md-6 col-lg-6 d-flex align-items-stretch mb-5 mb-lg-0">
          <a href="#">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><iframe src="{{asset('file/'.$pb->foto)}}" height="100%" width="100%" frameborder="0"></iframe></div>
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