<?php

namespace App\Http\Controllers;

use App\Models\profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $profil=profil::simplePaginate(15);
        return view('admin.profil.home',compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $profil=profil::all();
        return view('admin.profil.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profil=profil::create($request->all());
        if($request->hasFile('logo')){
            $request->file('logo')->move('logo/',$request->file('logo')->getClientOriginalName());
            $profil->logo=$request->file('logo')->getClientOriginalName();
            $profil->save();
        }
        if($request->hasFile('bg_1')){
            $request->file('bg_1')->move('bg_1/',$request->file('bg_1')->getClientOriginalName());
            $profil->bg_1=$request->file('bg_1')->getClientOriginalName();
            $profil->save();
        }
        if($request->hasFile('bg_2')){
            $request->file('bg_2')->move('bg_2/',$request->file('bg_2')->getClientOriginalName());
            $profil->bg_2=$request->file('bg_2')->getClientOriginalName();
            $profil->save();
        }
        if($request->hasFile('bg_3')){
            $request->file('bg_3')->move('bg_3/',$request->file('bg_3')->getClientOriginalName());
            $profil->bg_3=$request->file('bg_3')->getClientOriginalName();
            $profil->save();
        }
        return redirect('/profil')->with('data profil berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(profil $profil)
    {
        return view('client.profil',compact('profil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit(profil $profil)
    {
        return view('admin.profil.edit',compact('profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profil $profil)
    {
        $profil->update($request->all());
        if($request->hasFile('logo')){
            $request->file('logo')->move('logo/',$request->file('logo')->getClientOriginalName());
            $profil->logo=$request->file('logo')->getClientOriginalName();
            $profil->save();
        }else{
            unset($profil['logo']);
        }
        if($request->hasFile('bg_1')){
            $request->file('bg_1')->move('bg_1/',$request->file('bg_1')->getClientOriginalName());
            $profil->bg_1=$request->file('bg_1')->getClientOriginalName();
            $profil->save();
        }else{
            unset($profil['bg_1']);
        }
        if($request->hasFile('bg_2')){
            $request->file('bg_2')->move('bg_2/',$request->file('bg_2')->getClientOriginalName());
            $profil->bg_2=$request->file('bg_2')->getClientOriginalName();
            $profil->save();
        }else{
            unset($profil['bg_2']);
        }
        if($request->hasFile('bg_3')){
            $request->file('bg_3')->move('bg_3/',$request->file('bg_3')->getClientOriginalName());
            $profil->bg_3=$request->file('bg_3')->getClientOriginalName();
            $profil->save();
        }else{
            unset($profil['bg_3']);
        }
        return redirect('/profil')->with('data profil berhasil di ubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy(profil $profil)
    {
        $profil->delete();
        return redirect('/profil')->with('data profil berhasil di hapus');

    }
}
