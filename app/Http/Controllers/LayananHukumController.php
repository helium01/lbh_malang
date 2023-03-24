<?php

namespace App\Http\Controllers;

use App\Models\layanan;
use Illuminate\Http\Request;

class LayananHukumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $layanan=layanan::simplePaginate(15);
        return view('admin.layanan.home',compact('layanan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $layanan=layanan::all();
        return view('admin.layanan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        return redirect('/layanan')->with('data layanan berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function show(layanan $layanan)
    {
        return view('client.layanan',compact('layanan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan $layanan)
    {
        return view('admin.layanan.edit',compact('layanan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layanan $layanan)
    {
        $layanan->update($request->all());
        if($request->hasFile('identitas')){
            $request->file('identitas')->move('identitas/',$request->file('identitas')->getClientOriginalName());
            $layanan->identitas=$request->file('identitas')->getClientOriginalName();
            $layanan->save();
        }else{
            unset($layanan['identitas']);
        }
        if($request->hasFile('keterangan_tidak_mampu')){
            $request->file('keterangan_tidak_mampu')->move('keterangan_tidak_mampu/',$request->file('keterangan_tidak_mampu')->getClientOriginalName());
            $layanan->keterangan_tidak_mampu=$request->file('keterangan_tidak_mampu')->getClientOriginalName();
            $layanan->save();
        }else{
            unset($layanan['keterangan_tidak_mampu']);
        }
        return redirect('/layanan')->with('data layanan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan  $layanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan $layanan)
    {
        $layanan->delete();
        return redirect('/layanan')->with('data layanan berhasil di hapus');

    }
}
