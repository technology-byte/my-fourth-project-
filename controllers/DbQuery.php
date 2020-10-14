<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DbQuery extends Controller
{
    public function show(){
    
      

      DB::table('departments')->truncate(); 

      // $data =  DB::table('jobs')     ->get()->DD(); 
    
      echo "<pre>"; 
    print_r($data); 
    echo "</pre>";  


    }
}
