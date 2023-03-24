<?php

namespace App\Http\Controllers;

use App\Models\berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
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
        $berita=berita::simplePaginate(15);
        return view('admin.berita.home',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $berita=berita::all();
        return view('admin.berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $berita=berita::create($request->all());
        if($request->hasFile('foto')){
            // dd($request);
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $berita->foto=$request->file('foto')->getClientOriginalName();
            $berita->save();
        }
        return redirect('/berita')->with('data berita berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(berita $berita)
    {
        $berita=berita::all($bertia);
        return view('client.berita',compact('berita'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(berita $berita)
    {
        return view('admin.berita.edit',compact('berita'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, berita $berita)
    {
        $berita->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $berita->foto=$request->file('foto')->getClientOriginalName();
            $berita->save();
        }else{
            unset($berita['foto']);
        }
        return redirect('/berita')->with('data berita berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(berita $berita)
    {
        $berita->delete();
        return redirect('/berita')->with('data berita berhasil di hapus');

    }
}
