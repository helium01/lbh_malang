<?php

namespace App\Http\Controllers;

use App\Models\siaran_pers;
use Illuminate\Http\Request;

class SiaranPersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $siaran_pers=siaran_pers::all();
        return view('admin.siaran_pers.home',compact('siaran_pers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $siaran_pers=siaran_pers::all();
        return view('admin.siaran_pers.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siaran_pers=siaran_pers::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $siaran_pers->foto=$request->file('foto')->getClientOriginalName();
            $siaran_pers->save();
        }
        return redirect('/siaran_pers')->with('data siaran_pers berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siaran_pers  $siaran_pers
     * @return \Illuminate\Http\Response
     */
    public function show(siaran_pers $siaran_pers)
    {
        $siaran_pers=siaran_pers::all($bertia);
        return view('client.siaran_pers',compact('siaran_pers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siaran_pers  $siaran_pers
     * @return \Illuminate\Http\Response
     */
    public function edit(siaran_pers $siaran_pers)
    {
        $siaran_pers=siaran_pers::find($siaran_pers);
        return view('admin.siaran_pers.edit',compact('siaran_pers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siaran_pers  $siaran_pers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siaran_pers $siaran_pers)
    {
        $siaran_pers=siaran_pers::find($siaran_pers);
        $siaran_pers->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $siaran_pers->foto=$request->file('foto')->getClientOriginalName();
            $siaran_pers->save();
        }else{
            unset($foto['foto']);
        }
        return redirect('/siaran_pers')->with('data siaran_pers berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siaran_pers  $siaran_pers
     * @return \Illuminate\Http\Response
     */
    public function destroy(siaran_pers $siaran_pers)
    {
        $siaran_pers=siaran_pers::find($siaran_pers);
        $siaran_pers->destroy();
        return redirect('/siaran_pers')->with('data siaran_pers berhasil di hapus');

    }
}
