<?php

namespace App\Http\Controllers;
use Illuminate\support\Facades\View;
use Illuminate\Http\Request;

class Homecontroller extends Controller
{
    //actions
    public function index(){
       return view('front.index'); 
    }

    public function show( $name='defult'){

        if(! view::exists("front.pages.$name")){
            abort(404);
        }

        return view("front.pages.$name");

      
  
    
}
}