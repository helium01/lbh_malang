<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;
use Symfony\Component\HttpFoundation\Response;
class donasicontrol extends Controller
{
    public function __construct()
    {
        $profil=profil::limit(1);
        $tentang=tentang::limit(1);
    }
    public function index(){
        $snapToken=0;
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        return view('client.donasi',compact('profil','tentang','pengumuman','berita','publikasi','snapToken'));
    }
    public function bayar(Request $request){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        \Midtrans\Config::$serverKey = 'Mid-server-hFJC82v36iXD1oEaqffBHIH6';
// Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
\Midtrans\Config::$isProduction = true;
// Set sanitization on (default)
\Midtrans\Config::$isSanitized = true;
// Set 3DS transaction for credit card to true
\Midtrans\Config::$is3ds = true;

$params = array(
    'transaction_details' => array(
        'order_id' => rand(),
        'gross_amount' => $request->nominal,
    ),
    'customer_details' => array(
        'first_name' => $request->nama,
        'email' => $request->email,
        'phone' => $request->no_telp,
    ),
);
if(Response::HTTP_OK){
    $snapToken = \Midtrans\Snap::getSnapToken($params);
            return view('client.donasi',compact('profil','tentang','pengumuman','berita','publikasi','snapToken'));
        }

else{
    dd('ok');
}
}
}