<?php

namespace App\Http\Controllers;

use App\Models\pengacara;
use Illuminate\Http\Request;

class PengacaraController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $pengacara=pengacara::simplePaginate(15);
        return view('admin.pengacara.home',compact('pengacara'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $pengacara=pengacara::all();
        return view('admin.pengacara.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengacara=pengacara::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $pengacara->foto=$request->file('foto')->getClientOriginalName();
            $pengacara->save();
        }
        return redirect('/pengacara')->with('data pengacara berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pengacara  $pengacara
     * @return \Illuminate\Http\Response
     */
    public function show(pengacara $pengacara)
    {
        return view('client.pengacara',compact('pengacara'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pengacara  $pengacara
     * @return \Illuminate\Http\Response
     */
    public function edit(pengacara $pengacara)
    {
        return view('admin.pengacara.edit',compact('pengacara'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pengacara  $pengacara
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pengacara $pengacara)
    {
        $pengacara->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $pengacara->foto=$request->file('foto')->getClientOriginalName();
            $pengacara->save();
        }else{
            unset($pengacara['foto']);
        }
        return redirect('/pengacara')->with('data pengacara berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pengacara  $pengacara
     * @return \Illuminate\Http\Response
     */
    public function destroy(pengacara $pengacara)
    {
        $pengacara->delete();
        return redirect('/pengacara')->with('data pengacara berhasil di hapus');

    }
}
