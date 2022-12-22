<?php

namespace App\Http\Controllers;

use App\Models\donasi;
use Illuminate\Http\Request;

class DonasiController extends Controller
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
        $donasi=donasi::all();
        return view('admin.donasi.home',compact('donasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $donasi=donasi::all();
        return view('admin.donasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donasi=donasi::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $donasi->foto=$request->file('foto')->getClientOriginalName();
            $donasi->save();
        }
        return redirect('/donasi')->with('data donasi berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function show(donasi $donasi)
    {
        $donasi=donasi::all($bertia);
        return view('client.donasi',compact('donasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function edit(donasi $donasi)
    {
        $donasi=donasi::find($donasi);
        return view('admin.donasi.edit',compact('donasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, donasi $donasi)
    {
        $donasi=donasi::find($donasi);
        $donasi->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $donasi->foto=$request->file('foto')->getClientOriginalName();
            $donasi->save();
        }else{
            unset($foto['foto']);
        }
        return redirect('/donasi')->with('data donasi berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\donasi  $donasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(donasi $donasi)
    {
        $donasi=donasi::find($donasi);
        $donasi->destroy();
        return redirect('/donasi')->with('data donasi berhasil di hapus');

    }
}
