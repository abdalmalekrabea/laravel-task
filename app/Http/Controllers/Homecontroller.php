<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //actions
    public function index(){
       return view('front.index'); 
    }

    public function show( $name='defult'){
        return view("front.pages.$name");
    }
    
}
