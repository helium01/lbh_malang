<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tentang extends Model
{
    use HasFactory;
    protected $fillable=[
        'tentang_kami',
        'visi',
        'misi',
        'struktur_organisasi',
    ];
}
