<?php

/*
| Web Routes
*/

Route::get('/', function () {
    return view('bienvenido');
});

Route::resource('usuario', 'UserController');

//Route::post('user', 'UserController@store');

//Route::get('/usuarios', 'UserController@index');
//Route::resource ('usuario','ContadoresController');

//EJEMPLO PARA PASAR UN PARAMETRO DINAMICO solo numerico
//Route:: get('/usuarios/{id}', 'UserController@show')->where(['id' => '[\d]+']);

