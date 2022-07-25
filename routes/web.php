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
    return view('welcome in my page');
})->name("home");

Route::get('/', function (){

    $utente = [
        'name' => 'Mario',
        'surname' => 'Rossi',
        'role'=>'user',
    ];
    
    $prodotti= [
        'prodotto1' => 'pane',
        'prodotto2'=>'pasta',
    ];


    return view("home",[
        "user" => $utente,
        "products" => $prodotti,
    ]);
})->name("about_us");