<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class layanan extends Model
{
    use HasFactory;
    protected $table='layanan_hukums';
    protected $fillable=[
        'nama_lengkap',
        'nama_panggilan',
        'ttl',
        'alamat',
        'kecamatan',
        'kabupaten',
        'provinsi',
        'telp',
        'email',
        'kelamin',
        'umur',
        'agama',
        'kewarganegaraan',
        'status',
        'pendidikan',
        'golongan_darah',
        'identitas',
        'pekerjaan',
        'jumlah_anak',
        'jumlah_tanggungan',
        'status_tempat_tinggal',
        'harta_yang_dimiliki',
        'pertanyaan_ke_lbh',
        'pengajuan_lbh',
        'isi_masalah',
        'permohonan_atas_nama',
        'maksud_permohonan',
        'keterangan_tidak_mampu',
        'tanggal',
    ];
}
