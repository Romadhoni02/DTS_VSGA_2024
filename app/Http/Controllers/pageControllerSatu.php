<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerSatu extends Controller
{
    //
    public function index(){
        return view('welcome');
    }

    public function satu(){
        $arrBuah =["pisang","rambutan","Duku","jambu"];
        return view('pasarBuah')->with('pasarBuah', $arrBuah);
    }
}
