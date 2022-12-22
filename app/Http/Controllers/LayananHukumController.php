<?php

namespace App\Http\Controllers;

use App\Models\layanan_hukum;
use Illuminate\Http\Request;

class LayananHukumController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $layanan_hukum=layanan_hukum::all();
        return view('admin.layanan_hukum.home',compact('layanan_hukum'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $layanan_hukum=layanan_hukum::all();
        return view('admin.layanan_hukum.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $layanan_hukum=layanan_hukum::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $layanan_hukum->foto=$request->file('foto')->getClientOriginalName();
            $layanan_hukum->save();
        }
        return redirect('/layanan_hukum')->with('data layanan_hukum berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\layanan_hukum  $layanan_hukum
     * @return \Illuminate\Http\Response
     */
    public function show(layanan_hukum $layanan_hukum)
    {
        $layanan_hukum=layanan_hukum::all($bertia);
        return view('client.layanan_hukum',compact('layanan_hukum'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\layanan_hukum  $layanan_hukum
     * @return \Illuminate\Http\Response
     */
    public function edit(layanan_hukum $layanan_hukum)
    {
        $layanan_hukum=layanan_hukum::find($layanan_hukum);
        return view('admin.layanan_hukum.edit',compact('layanan_hukum'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\layanan_hukum  $layanan_hukum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, layanan_hukum $layanan_hukum)
    {
        $layanan_hukum=layanan_hukum::find($layanan_hukum);
        $layanan_hukum->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $layanan_hukum->foto=$request->file('foto')->getClientOriginalName();
            $layanan_hukum->save();
        }else{
            unset($foto['foto']);
        }
        return redirect('/layanan_hukum')->with('data layanan_hukum berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\layanan_hukum  $layanan_hukum
     * @return \Illuminate\Http\Response
     */
    public function destroy(layanan_hukum $layanan_hukum)
    {
        $layanan_hukum=layanan_hukum::find($layanan_hukum);
        $layanan_hukum->destroy();
        return redirect('/layanan_hukum')->with('data layanan_hukum berhasil di hapus');

    }
}
