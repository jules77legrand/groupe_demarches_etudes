<?php

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
Route ::get('/Filieres',function() {
     return "suis la filiere";
});
   
Route::get('/Filieres',"Filierescontroller@index");

Route::get('/Fileres/{id}',function($id)
{
    return "je suis la filiere $id"; // 
});
Route::get("/","Homecontroller@index");
