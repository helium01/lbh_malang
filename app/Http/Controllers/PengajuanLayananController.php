<?php

namespace App\Http\Controllers;

use App\Models\pengajuanlayanan;
use Illuminate\Http\Request;

class PengajuanLayananController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengajuanlayanan=pengajuanlayanan::simplePaginate(15);
        return view('admin.pengajuanlayanan.home',compact('pengajuanlayanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pengajuanlayanan=pengajuanlayanan::all();
        return view('admin.pengajuanlayanan.tambah');
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
        return redirect('/pengajuanlayanan')->with('data pengajuanlayanan berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengajuanlayanan  $pengajuanlayanan
     * @return \Illuminate\Http\Response
     */
    public function show(pengajuanlayanan $pengajuanlayanan)
    {
        $pengajuanlayanan=pengajuanlayanan::all($bertia);
        return view('client.pengajuanlayanan',compact('pengajuanlayanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengajuanlayanan  $pengajuanlayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(pengajuanlayanan $pengajuanlayanan)
    {
        return view('admin.pengajuanlayanan.edit',compact('pengajuanlayanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengajuanlayanan  $pengajuanlayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengajuanlayanan $pengajuanlayanan)
    {
        $pengajuanlayanan->update($request->all());
        if($request->hasFile('data_pengajuan')){
            $request->file('data_pengajuan')->move('file/',$request->file('data_pengajuan')->getClientOriginalName());
            $pengajuanlayanan->data_pengajuan=$request->file('data_pengajuan')->getClientOriginalName();
            $pengajuanlayanan->save();
        }else{
            unset($pengajuanlayanan['data_pengajuan']);
        }
        if($request->hasFile('ktp')){
            // dd($request);
            $request->file('ktp')->move('foto/',$request->file('ktp')->getClientOriginalName());
            $pengajuanlayanan->ktp=$request->file('ktp')->getClientOriginalName();
            $pengajuanlayanan->save();
        }else{
            unset($pengajuanlayanan['ktp']);
        }
        if($request->hasFile('bukti')){
            // dd($request);
            $request->file('bukti')->move('foto/',$request->file('bukti')->getClientOriginalName());
            $pengajuanlayanan->bukti=$request->file('bukti')->getClientOriginalName();
            $pengajuanlayanan->save();
        }else{
            unset($pengajuanlayanan['bukti']);
        }
        return redirect('/pengajuanlayanan')->with('data pengajuanlayanan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengajuanlayanan  $pengajuanlayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengajuanlayanan $pengajuanlayanan)
    {
        $pengajuanlayanan->delete();
        return redirect('/pengajuanlayanan')->with('data pengajuanlayanan berhasil di hapus');

    }
}
