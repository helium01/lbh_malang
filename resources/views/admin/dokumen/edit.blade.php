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
              
              <form method="post" action="{{route('dokumen.update',$dokumen->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Dokumen</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="nama_dokumen" class="custom-file-input" id="exampleInputFile">
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