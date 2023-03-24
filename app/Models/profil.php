<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profil extends Model
{
    use HasFactory;
    protected $fillable=[
        'nama',
        'moto',
        'deskripsi',
        'logo',
        'ak_twitter',
        'ak_facebook',
        'ak_youtube',
        'ak_instagram',
        'alamat',
        'email',
        'telp',
        'bg_1',
        'bg_2',
        'bg_3'
    ];
}
