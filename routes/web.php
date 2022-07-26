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
})->name("home");

Route::get('/about_us', function (){

    $utente = [
        'name' => 'Mario',
        'surname' => 'Rossi',
        'role'=>'user',
    ];
    
    $prodotti= [
        'prodotto1' => 'pane',
        'prodotto2'=>'pasta',
    ];


    return view("about_us",[
        "user" => $utente,
        "products" => $prodotti,
    ]);
})->name("about_us");

Route::get("/products", function (){
    $prodotti = config("pasta");

    return view("prodotti", [
        "prodotti"=>$prodotti
    ]);

    
});