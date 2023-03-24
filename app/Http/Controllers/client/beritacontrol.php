<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;

class beritacontrol extends Controller
{
    public function __construct()
    {
        $profil=profil::limit(1);
        $tentang=tentang::limit(1);
    }
    public function index(){

        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $beritaup=berita::orderByRaw('updated_at - created_at DESC')->limit(1)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->get();
        return view('client.berita',compact('profil','tentang','beritaup','berita'));
    }
    public function detail($id){

        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $beritaup=berita::orderByRaw('updated_at - created_at DESC')->limit(1)->get();
        $berita=berita::find($id)->get();
        return view('client.detailberita',compact('profil','tentang','beritaup','berita'));
    }
}
