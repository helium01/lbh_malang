@extends('admin.layout.template')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data layanan</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                    <div class="col-sm-12 col-md-6">
                      <div class="dt-buttons btn-group flex-wrap">
                        <a class="btn btn-primary buttons-copy buttons-html5" tabindex="0" href="{{route('layanan.create')}}"><span>tambah data layanan</span></a> 
                        <!-- <button class="btn btn-secondary buttons-csv buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>CSV</span></button> 
                        <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button> 
                        <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button> 
                        <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>  -->
                        <!-- <div class="btn-group">
                          <button class="btn btn-secondary buttons-collection dropdown-toggle buttons-colvis" tabindex="0" aria-controls="example1" type="button" aria-haspopup="true"><span>Column visibility</span><span class="dt-down-arrow"></span></button>
                        </div>  -->
                      </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                      <div id="example1_filter" class="dataTables_filter">
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1"></label>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                  <thead>
                  <tr>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">No</th>
                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">Nama Lengkap</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending">Nama Panggilan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending">TTL</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Alamat</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Kecamatan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">kabupaten</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">provinsi</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">telepon</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">email</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">kelamin</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">umur</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">agama</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">kewarganegaraan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">status</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">pendidikan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">jolongan darah</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">identitas</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">pekerjaan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">jumlah anak</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">jumlah tanggungan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">status tempat tinggal</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">harta yang di miliki</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">pertanyaan ke lbh</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">pengajuan lbh</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">isi masalah</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">permohonan aras nama</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">maksud permohonan</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">keterangan tidak mampu</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">tanggal</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">opsi</th>
                  </tr>
                  </thead>
                  <tbody>
                    @php
                    $no=0;
                    @endphp
                    @foreach($layanan as $dt)
                  <tr class="odd"> 
                    <td class="dtr-control sorting_1" tabindex="0">{{$no+=1}}</td>
                    <td class="dtr-control sorting_1" tabindex="0">{{$dt->nama_lengkap}}</td>
                    <td>{{$dt->nama_panggilan}}</td>
                    <td>{{$dt->ttl}}</td>
                    <td>{{$dt->alamat}}</td>
                    <td>{{$dt->kecamatan}}</td>
                    <td>{{$dt->kabupaten}}</td>
                    <td>{{$dt->provinsi}}</td>
                    <td>{{$dt->telp}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->kelamin}}</td>
                    <td>{{$dt->umur}}</td>
                    <td>{{$dt->agama}}</td>
                    <td>{{$dt->kewarganrgaraan}}</td>
                    <td>{{$dt->status}}</td>
                    <td>{{$dt->pendidikan}}</td>
                    <td>{{$dt->golongan_darah}}</td>
                    <td><img src="{{asset('foto/'.$dt->identitas)}}" alt=""></td>
                    <td>{{$dt->pekerjaan}}</td>
                    <td>{{$dt->jumlah_anak}}</td>
                    <td>{{$dt->jumlah_tanggungan}}</td>
                    <td>{{$dt->status_tempat_tinggal}}</td>
                    <td>{{$dt->harta_yang_dimiliki}}</td>
                    <td>{{$dt->pertanyaan_ke_lbh}}</td>
                    <td>{{$dt->pengajuan_lbh}}</td>
                    <td>{{$dt->isi_masalah}}</td>
                    <td>{{$dt->permohonan_atas_nama}}</td>
                    <td>{{$dt->maksud_permohonan}}</td>
                    <td><img src="{{asset('foto/'.$dt->keterangan_tidak_mampu)}}" width="300" alt="foto lbh malang"></td>
                    <td>{{$dt->tanggal}}</td>
                    <td>
                        <a href="{{route('layanan.edit',$dt->id)}}" class="btn btn-block btn-primary"> edit</a>
                        <a href="{{route('layanan.destroy',$dt->id)}}" class="btn btn-block btn-danger"> hapus</a>
                    </td>
                  </tr> 
                  @endforeach
                </tbody>
                <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 ">
                  {{$layanan->links()}}
                </ul>
              </div>
            </div>
              <!-- /.card-body -->
            </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

  <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection