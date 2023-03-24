<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;

class pengacaracontrol extends Controller
{
    public function __construct()
    {
        $profil=profil::limit(1);
        $tentang=tentang::limit(1);
    }
    public function index(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        return view('client.pengacara',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
}
