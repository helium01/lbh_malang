<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layanan_hukums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nama_pnggilsn');
            $table->string('ttl');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kabupaten');
            $table->string('profinsi');
            $table->string('telp');
            $table->string('email');
            $table->string('kelamin');
            $table->string('umur');
            $table->string('agama');
            $table->string('kewarganegaraan');
            $table->string('status');
            $table->string('pendidikan');
            $table->string('golongan_darah');
            $table->string('identitas');
            $table->string('pekerjaan');
            $table->string('jumlah_anak');
            $table->string('jumlah_tanggungan');
            $table->string('status_tempat_tinggal');
            $table->string('harta_yang_dimiliki');
            $table->string('pertanyaan_ke_lbh');
            $table->string('pengajuan_lbh');
            $table->text('isi_masalah');
            $table->string('permohonan_atas_nama');
            $table->string('maksud_permohonan');
            $table->string('keterangan_tidak_mampu');
            $table->string('tanggal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('layanan_hukums');
    }
};
