@extends('admin.layout.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('publikasi.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama_file</label>
                    <input type="text" name="nama_file" class="form-control" id="exampleInputEmail1" placeholder="masukan judul">
                    <input type="hidden" name="tanggal" value="{{date('d,m,Y')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">jenis</label>
                    <input type="text" name="jenis" class="form-control" id="exampleInputEmail1" placeholder="masukan judul">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="tanggal" value="{{date('d,m,Y')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">isi file</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">deskripsi</label>
                    <textarea name="deskripsi" id="" cols="30" rows="10"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
    <!-- /.content -->
  </div>

@endsection