@extends('client.layout.core')
@section('donasi')
active
@endsection
@section('content')
@section('bayar')
<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- @TODO: replace SET_YOUR_CLIENT_KEY_HERE with your client key -->
    <script type="text/javascript"
      src="https://app.sandbox.midtrans.com/snap/snap.js"
      data-client-key="{{$snapToken}}"></script>
@endsection
 <!-- ======= Hero Section ======= -->
 @foreach($profil as $pr)
 <section id="hero">
  
    <div class="hero-container" style="background: linear-gradient(rgba(55, 142, 181, 0.5), rgba(55, 142, 181, 0.2)), url('https://dl.kaskus.id/25.media.tumblr.com/tumblr_m8ckxvlNEi1ql1f2ko1_1280.png') top center;" data-aos="fade-up">
      <h1>Donasi</h1>
      <h2>{{$pr->moto}}</h2>
      <a href="#about" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
    </div>
  </section><!-- End Hero -->
@endforeach
  <main id="main">
    <section id="contact" class="contact section-bg">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8">
            <form action="{{route('donasi.bayar')}}" method="post" role="form" >
              @csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="nama" placeholder="masukan nama" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="masukan email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="no_telp" id="subject" placeholder="No telp anda" required="">
              </div>
          
          </div>
          <div class="col-lg-4">
              <div class="row">
                <div class="form-group ">
                  <input type="number" name="nominal" class="form-control" id="donasi" placeholder="masukan nominal contoh:100000" required="">
                </div>
              </div>
              <div class="text-center mt-3"><button type="submit">Donasikan</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    @if($snapToken!=0)
    <div id="pay-button"></div>
    <script src="https://app.midtrans.com/snap/snap.js" data-client-key="{{ config('midtrans.client_key') }}"></script>
    </script>
        <script type="text/javascript">
                // SnapToken acquired from previous step
                snap.pay('{{$snapToken}}', {
                    // Optional
                    onSuccess: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onPending: function(result){
                        document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    },
                    // Optional
                    onError: function(result){
                      document.getElementById('result-json').innerHTML += JSON.stringify(result, null, 2);
                    }
                });
            
        </script>
    @else
      @endif
    </script>
  </main><!-- End #main -->
@endsection