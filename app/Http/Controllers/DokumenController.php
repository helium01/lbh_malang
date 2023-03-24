<?php

namespace App\Http\Controllers;

use App\Models\dokumen;
use Illuminate\Http\Request;

class DokumenController extends Controller
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
        $dokumen=dokumen::simplePaginate(15);
        return view('admin.dokumen.home',compact('dokumen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $dokumen=dokumen::all();
        return view('admin.dokumen.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $dokumen=dokumen::create($request->all());
        if($request->hasFile('nama_dokumen')){
            // dd($request);
            $request->file('nama_dokumen')->move('foto/',$request->file('nama_dokumen')->getClientOriginalName());
            $dokumen->nama_dokumen=$request->file('nama_dokumen')->getClientOriginalName();
            $dokumen->save();
        }
        return redirect('/dokumen')->with('data dokumen berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function show(dokumen $dokumen)
    {
        $dokumen=dokumen::all($bertia);
        return view('client.dokumen',compact('dokumen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function edit(dokumen $dokumen)
    {
        return view('admin.dokumen.edit',compact('dokumen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, dokumen $dokumen)
    {
        $dokumen->update($request->all());
        if($request->hasFile('nama_dokumen')){
            $request->file('nama_dokumen')->move('foto/',$request->file('nama_dokumen')->getClientOriginalName());
            $dokumen->nama_dokumen=$request->file('nama_dokumen')->getClientOriginalName();
            $dokumen->save();
        }else{
            unset($dokumen['nama_dokumen']);
        }
        return redirect('/dokumen')->with('data dokumen berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\dokumen  $dokumen
     * @return \Illuminate\Http\Response
     */
    public function destroy(dokumen $dokumen)
    {
        $dokumen->delete();
        return redirect('/dokumen')->with('data dokumen berhasil di hapus');

    }
}
