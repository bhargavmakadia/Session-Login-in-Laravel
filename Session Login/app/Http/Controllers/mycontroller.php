<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class mycontroller extends Controller
{
    public function login(){

        return view("login");

    }
    public function process(request $request){

        $txt1 = $request->input('txt1');
        Session::put("txt1", $txt1);
        $getsssion = Session::get("txt1", $txt1);

        return view("home",["sessionmsg" => $getsssion]);

    }
    public function destroySession(){

        Session::flush();
        return view("login");

    }

}
