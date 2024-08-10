<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerSatu extends Controller{
    //
    public function index(){
        return view('welcome');
    }

    public function satu(){
        $arrbuah=["pisang","rambutan","Duku","jambu"];
        return view('pasarBuah')->with('pasarBuah', $arrbuah);
    }
}

?>