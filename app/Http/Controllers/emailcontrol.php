<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\LbhmalangMail;
class emailcontrol extends Controller
{
    //
    public $pesan,$subjek,$nama,$email;
    public function kirim(Request $request){
        $this->email=$request->email;
        $this->subjek=$request->subject;
        $this->nama=$request->name;
        $this->pesan=$request->message;
        Mail::to("lbhposmalang19@gmail.com")->send(new LbhmalangMail($request));
        return redirect('/');

    }
}
