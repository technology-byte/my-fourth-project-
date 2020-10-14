<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home/{id}/{num}',function($id,$num){
//     return  "home $id , $num"; 
// });
// 'App\Http\Controllers\bookController'
Route::get("/getform",'App\Http\Controllers\DbQuery@show');
// Route::post("/getdata",'App\Http\Controllers\form@getdata');


