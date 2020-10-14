<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class bookController extends Controller
{   
    function show($name="defalut_name",$age="default_age"){
        $data =[ 'name' => $name, 'age' => $age];   
        return view("about",$data) ; 
    }

        function __invoke(){
            return view("error") ; 
        }
}
