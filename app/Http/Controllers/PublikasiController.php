<?php

namespace App\Http\Controllers;

use App\Models\publikasi;
use Illuminate\Http\Request;
use Response;

class PublikasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $publikasi=publikasi::simplePaginate(15);
        return view('admin.publikasi.home',compact('publikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $publikasi=publikasi::all();
        return view('admin.publikasi.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publikasi=publikasi::create($request->all());
        // if($request->hasFile('foto')){
        //     dd($request);
            $request->file('foto')->move('file/',$request->file('foto')->getClientOriginalName());
            $publikasi->foto=$request->file('foto')->getClientOriginalName();
            $publikasi->save();
        // }
        return redirect('/publikasi')->with('data publikasi berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function show(publikasi $publikasi)
    {
        return view('client.publikasi',compact('publikasi'));
    }
    public function download(publikasi $publikasi)
    {
        $file=public_path('file/').$publikasi->foto;
        return Response::download($file);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function edit(publikasi $publikasi)
    {
        return view('admin.publikasi.edit',compact('publikasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, publikasi $publikasi)
    {
        $publikasi->update($request->all());
        if($request->hasFile('foto')){
            $request->file('foto')->move('files/',$request->file('foto')->getClientOriginalName());
            $publikasi->foto=$request->file('foto')->getClientOriginalName();
            $publikasi->save();
        }else{
            unset($publikasi['foto']);
        }
        return redirect('/publikasi')->with('data publikasi berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\publikasi  $publikasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(publikasi $publikasi)
    {
        $publikasi->delete();
        return redirect('/publikasi')->with('data publikasi berhasil di hapus');

    }
}
