@extends('client.layout.core')
@section('layanan')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <section id="hero">
  
    <div class="hero-container" style="background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url('https://dl.kaskus.id/25.media.tumblr.com/tumblr_m8ckxvlNEi1ql1f2ko1_1280.png') top center;" data-aos="fade-up">
      <h1>selamat datang di lbh malang</h1>
      <h2>lembaga bantuan hukum malang</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->

  <main id="main">
  <section id="contact" class="contact section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Bantuan Hukum</h2>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="php-email-form">

                        <div class="text-center">
                            <p>isikan formulir langsung</p>
                        </div>
                        <div class="text-center">
                            
                                <a href="{{route('client.formlayanan')}}" class="delete btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download file">isi formulir</i></a>
                            
                        </div>
                        <br>
                        
                    </div>
                </div>
                <div class="row mt-5 justify-content-center">
                    <div class="php-email-form">

                        <div class="text-center">
                            <p>Silakan download formulir dibawah</p>
                        </div>
                        <div class="text-center">
                            @foreach($dokumen as $d)
                                <a href="{{route('client.download')}}" class="delete btn btn-sm btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Download file">download file</i></a>
                            @endforeach
                        </div>
                        <br>
                        <div class="text-center">
                            <p>Isi formulir tersebut</p>
                        </div>
                        <div class="text-center">
                            <p>Lalu upload di tombol dibawah ini!</p>
                        </div>
                        <br>
                        <a href="{{route('pengajuanlayanan.create')}}" >
                            <div class=" text-center" name="submit" return=""><button type="submit">UPLOAD</button>
                            </div>
                        </a>
                    </div>
                </div>

            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-lg-10">



                </div>

            </div>
    </div>
    </section>
  </main><!-- End #main -->
@endsection