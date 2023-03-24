<?php

namespace App\Http\Controllers;

use App\Models\pengumuman;
use Illuminate\Http\Request;

class PengumumanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pengumuman=pengumuman::simplePaginate(15);
        return view('admin.pengumuman.home',compact('pengumuman'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pengumuman=pengumuman::all();
        return view('admin.pengumuman.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengumuman=pengumuman::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $pengumuman->foto=$request->file('foto')->getClientOriginalName();
            $pengumuman->save();
        }
        return redirect('/pengumuman')->with('data pengumuman berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function show(pengumuman $pengumuman)
    {
        return view('client.pengumuman',compact('pengumuman'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function edit(pengumuman $pengumuman)
    {
        return view('admin.pengumuman.edit',compact('pengumuman'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengumuman $pengumuman)
    {
        $pengumuman->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $pengumuman->foto=$request->file('foto')->getClientOriginalName();
            $pengumuman->save();
        }else{
            unset($pengumuman['foto']);
        }
        return redirect('/pengumuman')->with('data pengumuman berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengumuman  $pengumuman
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengumuman $pengumuman)
    {
        $pengumuman->delete();
        return redirect('/pengumuman')->with('data pengumuman berhasil di hapus');

    }
}
