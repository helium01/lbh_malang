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
        <h1 class="font-weight-bold">Visi dan Misi</h1>
        <hr>
        <p class="MsoNormal" style="text-align: justify; margin-left: 0in; text-indent: -0.35pt; line-height: normal;">
        <span style="font-size: 12pt; font-family: Helvetica;">@foreach($profil as $p){{$p->nama}} @endforeach bersama-sama dengan komponen-koponen
masyarakat berhasrat kuat dan akan berupaya sekuat tenaga agar di masa depan
dapat:&nbsp;
</span>
<span style="font-size: 12pt; font-family: " source="" sans="" pro",="" sans-serif;"=""><o:p></o:p></span></p>
<p>{!! nl2br($te->visi) !!}</p>
<span style="font-size: 12pt; font-family: Helvetica;" arial",sans-serif"="">Agar Visi tersebut di atas dapat terwujud, @foreach($profil as $p){{$p->nama}} @endforeach akan melaksanakan seperangkat kegiatan misi berikut ini:</span><span style="font-size: 12pt; font-family: Arial, sans-serif;"><o:p></o:p></span></p>
<p >{!! nl2br($te->misi) !!}</p>

  </div>
@endforeach  
</main>
    <br>
    <br>
    <br>
    <br>
  </main><!-- End #main -->
@endsection