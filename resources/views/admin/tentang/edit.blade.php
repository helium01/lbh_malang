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
              
              <form method="post" action="{{route('tentang.update',$tentang->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">tentang kami</label>
                    <input type="text" name="tentang_kami" class="form-control" id="exampleInputEmail1" placeholder="masukan judul">
                  </div>
                  <div class="form-group">
                    <input type="hidden" name="author" value="{{Auth::user()->name}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                    <input type="hidden" name="tanggal" value="{{date('d,m,Y')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">struktur organisasi</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="struktur_organisasi" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">visi</label>
                    <textarea name="visi" id="" cols="30" rows="10" class="form-control" ></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">misi</label>
                    <textarea name="misi" id="" cols="30" rows="10" class="form-control" ></textarea>
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