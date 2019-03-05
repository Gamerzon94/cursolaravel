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

Route::get('/', ['as' => 'home', function () {
    return view('home');
}]);

Route::get('/contacto',['as' => 'contacto', function (){
    return view('contacto');
}]);

Route::get('/saludo/{nombre?}',['as' => 'saludo', function ($nombre = "Invitado"){
    //return view('saludo', ['nombre' => $nombre]);
    //return view('saludo')->with(['nombre'=>$nombre]);
    $html = "<h2>Contenido HTML</h2>";
    $consolas = [
        "XBOX ONE",
        "Play Station 4",
        "Nintendo Switch"
    ];
    $celulares = [
    ];
    return view('saludo', compact('nombre','html','consolas','celulares'));
}])->where('nombre',"[A-Za-z]+");

Route::get('urls',function(){
    return view('home');
});