<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller{
    //
    public function hello(){
        return('Hello World');
    }
    public function greeting(){
        return view('blog.helloo', ['name'=>'Andi']);
    }
}

?>