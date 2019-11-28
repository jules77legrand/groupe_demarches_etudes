<?php
//controller

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Filierescontroller extends Controller
{
    public function index(){
        return"je suis la page index";
    }
}
/*
Route::get("/Filieres", "Filierescontroller@index");

Route::get("/Filieres", "Filierescontroller@index");

Route::get("/Filieres/{id}", "Filierescontroller@show");
*/

