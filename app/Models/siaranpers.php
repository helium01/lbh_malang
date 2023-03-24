<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siaranpers extends Model
{
    use HasFactory;
    protected $table='siaran_pers';
    protected $fillable=[
        'judul',
        'author',
        'tanggal',
        'foto',
        'deskripsi'
    ];
}
