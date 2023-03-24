<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;

class tentangcontrol extends Controller
{
    public function __construct()
    {
    }
    public function index(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC');
        $berita=berita::orderByRaw('updated_at - created_at DESC');
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC');
        return view('client.tentang_kami',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
    public function visimisi(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC');
        $berita=berita::orderByRaw('updated_at - created_at DESC');
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC');
        return view('client.visi_misi',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
    public function struktur(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC');
        $berita=berita::orderByRaw('updated_at - created_at DESC');
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC');
        return view('client.struktur',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
}
