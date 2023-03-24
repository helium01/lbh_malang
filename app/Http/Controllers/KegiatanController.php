<?php

namespace App\Http\Controllers;

use App\Models\kegiatan;
use Illuminate\Http\Request;

class KegiatanController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $kegiatan=kegiatan::simplePaginate(15);
        return view('admin.kegiatan.home',compact('kegiatan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $kegiatan=kegiatan::all();
        return view('admin.kegiatan.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kegiatan=kegiatan::create($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $kegiatan->foto=$request->file('foto')->getClientOriginalName();
            $kegiatan->save();
        }
        return redirect('/kegiatan')->with('data kegiatan berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(kegiatan $kegiatan)
    {
        return view('client.kegiatan',compact('kegiatan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(kegiatan $kegiatan)
    {
        return view('admin.kegiatan.edit',compact('kegiatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kegiatan $kegiatan)
    {
        $kegiatan->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('foto/',$request->file('foto')->getClientOriginalName());
            $kegiatan->foto=$request->file('foto')->getClientOriginalName();
            $kegiatan->save();
        }else{
            unset($kegiatan['foto']);
        }
        return redirect('/kegiatan')->with('data kegiatan berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(kegiatan $kegiatan)
    {
        $kegiatan->delete();
        return redirect('/kegiatan')->with('data kegiatan berhasil di hapus');

    }
}
