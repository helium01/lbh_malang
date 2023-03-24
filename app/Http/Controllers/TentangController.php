<?php

namespace App\Http\Controllers;

use App\Models\tentang;
use Illuminate\Http\Request;

class TentangController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $tentang=tentang::simplePaginate(15);
        return view('admin.tentang.home',compact('tentang'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $tentang=tentang::all();
        return view('admin.tentang.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tentang=tentang::create($request->all());
        if($request->hasFile('struktur_organisasi')){
            $request->file('struktur_organisasi')->move('struktur_organisasi/',$request->file('struktur_organisasi')->getClientOriginalName());
            $tentang->struktur_organisasi=$request->file('struktur_organisasi')->getClientOriginalName();
            $tentang->save();
        }
        return redirect('/tentang')->with('data tentang berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function show(tentang $tentang)
    {
        return view('client.tentang',compact('tentang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function edit(tentang $tentang)
    {
        return view('admin.tentang.edit',compact('tentang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tentang $tentang)
    {
        $tentang->update($request->all());
        if($request->hasFile('struktur_organisasi')){
            $request->file('struktur_organisasi')->move('struktur_organisasi/',$request->file('struktur_organisasi')->getClientOriginalName());
            $tentang->struktur_organisasi=$request->file('struktur_organisasi')->getClientOriginalName();
            $tentang->save();
        }else{
            unset($tentang['struktur_organisasi']);
        }
        return redirect('/tentang')->with('data tentang berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tentang  $tentang
     * @return \Illuminate\Http\Response
     */
    public function destroy(tentang $tentang)
    {
        $tentang->delete();
        return redirect('/tentang')->with('data tentang berhasil di hapus');

    }
}
