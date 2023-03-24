@extends('client.layout.core')
@section('berita')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <br>
    <div class="container pb-5">
        <h1 class="font-weight-bold">Profil Pengacara Publik </h1>
        <hr>
        <section id="portfolio-details" class="portfolio-details">
      <div class="container">
        @foreach($pengacara as $p)
        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
              <div class="swiper-wrapper align-items-center" style="transform: translate3d(-1848px, 0px, 0px); transition-duration: 0ms;" id="swiper-wrapper-e25c410fbc6e7267f" aria-live="off"><div class="swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active" data-swiper-slide-index="2" style="width: 616px;" role="group" aria-label="3 / 3">
                  <img src="{{asset('foto/'.$p->foto)}}" width="300" height="600" alt="">
                </div>

                <div class="swiper-slide swiper-slide-duplicate-next" data-swiper-slide-index="0" style="width: 616px;" role="group" aria-label="1 / 3">
                  <img src="{{asset('foto/'.$p->foto)}}" width="300" height="600" alt="">
                </div>

                <div class="swiper-slide swiper-slide-prev" data-swiper-slide-index="1" style="width: 616px;" role="group" aria-label="2 / 3">
                  <img src="{{asset('foto/'.$p->foto)}}" width="300" height="600" alt="">
                </div>

                <div class="swiper-slide swiper-slide-active" data-swiper-slide-index="2" style="width: 616px;" role="group" aria-label="3 / 3">
                  <img src="{{asset('foto/'.$p->foto)}}" width="300" height="600" alt="">
                </div>

              <div class="swiper-slide swiper-slide-duplicate swiper-slide-next" data-swiper-slide-index="0" style="width: 616px;" role="group" aria-label="1 / 3">
                  <img src="{{asset('foto/'.$p->foto)}}" width="300" height="600" alt="">
                </div></div>
              <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
            <div class="portfolio-description">
              <h2>{{$p->nama}}</h2>
              <p>
                {{$p->biografi}}
              </p>
            </div>
          </div>

        </div>
        <hr>
@endforeach
      </div>
    </section>
        </div>
  </main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection