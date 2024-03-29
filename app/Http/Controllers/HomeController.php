<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profil;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $profil;
    public function __construct()
    {
        $this->profil=profil::limit(1)->get();
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.home');
    }
}
