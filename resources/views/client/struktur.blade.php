@extends('client.layout.core')
@section('tentang')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">
<br>
 <div class="container pb-5">
    @foreach($tentang as $te)
        <h1 class="font-weight-bold">Tentang Kami</h1>
        <hr>
        <p>
            <img src="{{asset('foto/'.$te->struktur_organisasi)}}" width="1600" alt="">
        </p>
  </div>
@endforeach  
</main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection