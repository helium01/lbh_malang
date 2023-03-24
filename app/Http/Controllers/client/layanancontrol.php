<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\tentang;
use App\Models\pengumuman;
use App\Models\berita;
use App\Models\publikasi;
use App\Models\layanan;
use App\Models\dokumen;
use App\Models\pengajuanlayanan;
use Response;

class layanancontrol extends Controller
{
    public function __construct()
    {
        $profil=profil::limit(1);
        $tentang=tentang::limit(1);
    }
    public function index(){
        $profil=profil::limit(1)->get();
        $tentang=tentang::limit(1)->get();
        $dokumen=dokumen::limit(1)->get();
        $pengumuman=pengumuman::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $berita=berita::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        $publikasi=publikasi::orderByRaw('updated_at - created_at DESC')->limit(4)->get();
        return view('client.layanan_hukum',compact('profil','tentang','pengumuman','berita','publikasi','dokumen'));
    }
    public function formlayanan()
    {
        $tentang=tentang::limit(1)->get();
        $profil=profil::limit(1)->get();
        // $layanan=layanan::all();
        return view('client.formlayanan',compact('tentang','profil'));
    }

    public function download()
    {
        $dokumen=dokumen::limit(1)->get();
        foreach($dokumen as $d){
            $file=public_path('file/').$d->nama_dokumen;
        }
        dd($file);
        return Response::download($file);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storelayanan(Request $request)
    {
        $layanan=layanan::create($request->all());
        if($request->hasFile('identitas')){
            $request->file('identitas')->move('identitas/',$request->file('identitas')->getClientOriginalName());
            $layanan->identitas=$request->file('identitas')->getClientOriginalName();
            $layanan->save();
        }
        if($request->hasFile('keterangan_tidak_mampu')){
            $request->file('keterangan_tidak_mampu')->move('keterangan_tidak_mampu/',$request->file('keterangan_tidak_mampu')->getClientOriginalName());
            $layanan->keterangan_tidak_mampu=$request->file('keterangan_tidak_mampu')->getClientOriginalName();
            $layanan->save();
        }
        return redirect('/client/layanan')->with('data layanan berhasil di tambah');
    } 
    public function create()
    {
        $tentang=tentang::limit(1)->get();
        $profil=profil::limit(1)->get();
        // $pengajuanlayanan=pengajuanlayanan::all();
        return view('client.layananupload',compact('tentang','profil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $pengajuanlayanan=pengajuanlayanan::create($request->all());
        if($request->hasFile('data_pengajuan')){
            // dd($request);
            $request->file('data_pengajuan')->move('file/',$request->file('data_pengajuan')->getClientOriginalName());
            $pengajuanlayanan->data_pengajuan=$request->file('data_pengajuan')->getClientOriginalName();
            $pengajuanlayanan->save();
        }
        if($request->hasFile('ktp')){
            // dd($request);
            $request->file('ktp')->move('foto/',$request->file('ktp')->getClientOriginalName());
            $pengajuanlayanan->ktp=$request->file('ktp')->getClientOriginalName();
            $pengajuanlayanan->save();
        }
        if($request->hasFile('bukti')){
            // dd($request);
            $request->file('bukti')->move('foto/',$request->file('bukti')->getClientOriginalName());
            $pengajuanlayanan->bukti=$request->file('bukti')->getClientOriginalName();
            $pengajuanlayanan->save();
        }
        return redirect('/client/layanan')->with('data pengajuanlayanan berhasil di tambah');
    }
}
