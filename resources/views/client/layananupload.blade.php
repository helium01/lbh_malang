@extends('client.layout.core')
@section('berita')
active
@endsection
@section('content')
 <!-- ======= Hero Section ======= -->
 <main id="main">
    <br>
    <hr>
    <div class="container mt-4">
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">upload data diri anda</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('pengajuanlayanan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Wa</label>
                    <input type="text" name="no_wa" class="form-control" id="exampleInputEmail1" ">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Data Pengajuan</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="data_pengajuan" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">KTP</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="ktp" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Bukti Transfer / surat keterangan tidak mampu</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bukti" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
  </div><hr><br><br><br>
 
  </main><!-- End #main -->
@endsection