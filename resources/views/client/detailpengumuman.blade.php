@extends('client.layout.core')
@section('pengumuman')
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
          {{$te->tentang_kami}}
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