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
    return view('ola');
});

//Route::get('saudacao/ola','SaudacaoController@ola');

Route::get('/saudacao', function () {
    return view('saudacao');
});


Route::get('/editoras','EditoraController@index'); //@index nome do metodo no controller
