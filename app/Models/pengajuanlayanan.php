<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengajuanlayanan extends Model
{
    use HasFactory;
    protected $table='pengajuan_layanans';
    protected $fillable=[
        'nama',
        'email',
        'no_wa',
        'data_pengajuan',
        'ktp',
        'bukti'
    ];
}
