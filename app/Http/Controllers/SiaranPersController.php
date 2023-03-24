<?php

namespace App\Http\Controllers;

use App\Models\siaranpers;
use Illuminate\Http\Request;

class SiaranPersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $siaranpers=siaranpers::simplePaginate(15);
        return view('admin.siaranpers.home',compact('siaranpers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $siaranpers=siaranpers::all();
        return view('admin.siaranpers.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siaranpers=siaranpers::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $siaranpers->foto=$request->file('foto')->getClientOriginalName();
            $siaranpers->save();
        }
        return redirect('/siaranpers')->with('data siaranpers berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\siaranpers  $siaranpers
     * @return \Illuminate\Http\Response
     */
    public function show(siaranpers $siaranpers)
    {
        return view('client.siaranpers',compact('siaranpers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\siaranpers  $siaranpers
     * @return \Illuminate\Http\Response
     */
    public function edit(siaranpers $siaranpers)
    {
        return view('admin.siaranpers.edit',compact('siaranpers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\siaranpers  $siaranpers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, siaranpers $siaranpers)
    {
        $siaranpers->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $siaranpers->foto=$request->file('foto')->getClientOriginalName();
            $siaranpers->save();
        }else{
            unset($foto['foto']);
        }
        return redirect('/siaranpers')->with('data siaranpers berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\siaranpers  $siaranpers
     * @return \Illuminate\Http\Response
     */
    public function destroy(siaranpers $siaranpers)
    {
        $siaranpers->delete();
        return redirect('/siaranpers')->with('data siaranpers berhasil di hapus');

    }
}
