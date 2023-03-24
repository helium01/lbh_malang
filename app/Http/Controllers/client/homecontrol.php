<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;

class homecontrol extends Controller
{
   
    public function index(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        return view('client.home',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
    public function kontak(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        return view('client.kontak',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
    public function cari(Request $request){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        
        $pengumuman=pengumuman::where('judul','like','%'.$request->cari.'%')->orderByRaw('updated_at - created_at DESC')->get();
        $berita=berita::where('judul','like','%'.$request->cari.'%')->orderByRaw('updated_at - created_at DESC')->get();
        $publikasi=publikasi::where('nama_file','like','%'.$request->cari.'%')->orderByRaw('updated_at - created_at DESC')->get();
        return view('client.cari',compact('profil','tentang','pengumuman','berita','publikasi'));
    }
}
