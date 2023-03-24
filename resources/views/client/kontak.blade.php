@extends('client.layout.core')
@section('berita')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">

    <div class="container">
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
    </section>
    </div>
  </main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection