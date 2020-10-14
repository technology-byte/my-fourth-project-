<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class form extends Controller
{ 
   public function __construct(){
       $this->middleware('TestMiddleware')->except('getdata'); 
   }

   public function  getform (){
       return view('form');
   }
   public function getdata (Request $request){

    return view('about',$request);

}
}
