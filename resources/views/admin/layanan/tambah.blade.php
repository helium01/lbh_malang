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
              <form method="post" action="{{route('layanan.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama_lengkap</label>
                    <input type="text" name="nama_lengkap" class="form-control" id="exampleInputEmail1" placeholder="masukan nama lengkap">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">nama_panggilan</label>
                    <input type="text" name="nama_panggilan" class="form-control" id="exampleInputEmail1" placeholder="masukan nama panggilan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">tempat tanggal lahir</label>
                    <input type="text" name="ttl" class="form-control" id="exampleInputEmail1" placeholder="contoh: malang, 20 mei 2000">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="masukan alamat anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">kecamatan</label>
                    <input type="text" name="kecamatan" class="form-control" id="exampleInputEmail1" placeholder="masukan kecamatan">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">kabupaten</label>
                    <input type="text" name="kabupaten" class="form-control" id="exampleInputEmail1" placeholder="masukan kabupaten">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">provinsi</label>
                    <input type="text" name="provinsi" class="form-control" id="exampleInputEmail1" placeholder="masukan provinsi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">no telp (whatsapp)</label>
                    <input type="text" name="telp" class="form-control" id="exampleInputEmail1" placeholder="contoh: 0871234567">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="masukan email">
                  </div>
                  <div class="form-group">
                        <label>jenis kelamin</label>
                        <select class="form-control" name="kelamin">
                          <option value="laki-laki">laki-laki</option>
                          <option value="perempuan">perempuan</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">umur</label>
                    <input type="text" name="umur" class="form-control" id="exampleInputEmail1" placeholder="masukan umur anda">
                  </div>
                  <div class="form-group">
                        <label>agama</label>
                        <select class="form-control" name="agama">
                          <option value="islam">islam</option>
                          <option value="kristen">kristen</option>
                          <option value="katolik">katolik</option>
                          <option value="hindu">hindu</option>
                          <option value="budha">budha</option>
                          <option value="konghucu">konghucu</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">kewarganegaraan</label>
                    <input type="text" name="kewarganegaraan" class="form-control" id="exampleInputEmail1" placeholder="contoh : indonesia">
                  </div>
                  <div class="form-group">
                        <label>status pernikahan</label>
                        <select class="form-control" name="status">
                          <option value="belum_menikah">belum menikah</option>
                          <option value="sudah_menikah">sudah menikah</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">pendidikan</label>
                    <input type="text" name="pendidikan" class="form-control" id="exampleInputEmail1" placeholder="contoh : smp">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">golongan darah</label>
                    <input type="text" name="golongan darah" class="form-control" id="exampleInputEmail1" placeholder="apabula tidak mengetahui -">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">identitas</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="identitas" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">pekerjaan</label>
                    <input type="text" name="pekerjaan" class="form-control" id="exampleInputEmail1" placeholder="apabula tidak mengetahui -">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">jumlah anak</label>
                    <input type="text" name="jumlah_anak" class="form-control" id="exampleInputEmail1" placeholder="apabula tidak memiliki -">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">jumlah tanggungan</label>
                    <input type="text" name="jumlah_tanggungan" class="form-control" id="exampleInputEmail1" placeholder="contoh : 2orang tua + 1 anak = 3">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">status tempat tinggal</label>
                    <input type="text" name="status_tempat_tinggal" class="form-control" id="exampleInputEmail1" placeholder="contoh :milik sendiri">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">harta yang dimiliki</label>
                    <input type="text" name="harta_yang_dimiliki" class="form-control" id="exampleInputEmail1" placeholder="contoh : rumah tanah">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">pertanyaan ke lbh</label>
                    <textarea name="pertanyaan_ke_lbh" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">pengajuan lbh</label>
                    <textarea name="pengajuan_lbh" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">isi masalah</label>
                    <textarea name="isi_masalah" class="form-control" id="" cols="30" rows="10"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">permohonan atas nama</label>
                    <input type="text" name="permohonan_atas_nama" class="form-control" id="exampleInputEmail1" placeholder="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">maksud permohonan</label>
                    <input type="text" name="maksud_permohonan" class="form-control" id="exampleInputEmail1" placeholder="">
                    <input type="hidden" name="tanggal" value="{{date('d,m,Y')}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">surat keterangan tidak mampu</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="keterangan_tidak_mampu" class="custom-file-input" id="exampleInputFile">
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