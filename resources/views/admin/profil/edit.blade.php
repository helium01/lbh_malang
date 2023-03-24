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
              
              <form method="post" action="{{route('profil.update',$profil->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama</label>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" placeholder="masukan nama lbh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">moto</label>
                    <input type="text" name="moto" class="form-control" id="exampleInputEmail1" placeholder="masukan nama lbh">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">logo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="logo" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">akun twitter</label>
                    <input type="text" name="ak_twitter" class="form-control" id="exampleInputEmail1" placeholder="masukan nama akun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">akun facebook</label>
                    <input type="text" name="ak_facebook" class="form-control" id="exampleInputEmail1" placeholder="masukan nama akun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">akun youtube</label>
                    <input type="text" name="ak_youtube" class="form-control" id="exampleInputEmail1" placeholder="masukan nama akun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">akun instagram</label>
                    <input type="text" name="ak_instagram" class="form-control" id="exampleInputEmail1" placeholder="masukan nama akun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">alamat</label>
                    <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="masukan nama akun">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">no telp wa</label>
                    <input type="text" name="telp" class="form-control" id="exampleInputEmail1" placeholder="masukan no wa">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">background_1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bg_1" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">background_2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bg_2" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">background_3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="bg_3" class="custom-file-input" id="exampleInputFile">
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
  </div>

@endsection