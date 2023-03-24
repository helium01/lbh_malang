@extends('client.layout.core')
@section('berita')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
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
    </section><!-- Breadcrumbs Section -->

    <!-- ======= Portfolio Details Section ======= -->
    <!-- End Portfolio Details Section -->
    @if($berita->count() !=0)
    <section id="team" class="team">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
          <hr><h1>Berita</h1><hr>
        </div>

        <div class="row">
          @foreach($berita as $ber)
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
    @else
    @endif
    @if($pengumuman->count() !=0)
    <section id="team" class="team">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
          <hr><h1>Pengumuman</h1><hr>
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
    @else
    @endif
    @if($publikasi->count() !=0)
    <section id="team" class="team">
      <div class="container">

        <div class="section-title aos-init aos-animate" data-aos="fade-in" data-aos-delay="100">
          <hr><h1>Publikasi</h1><hr>
        </div>

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
    @else
    @endif
    @if($pengumuman->count()==0 || $berita->count()==0 || $publikasi->count()==0)
    <h1>Mohon maaf data tidak di temukan terimakasih</h1>
    @endif
  </main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection