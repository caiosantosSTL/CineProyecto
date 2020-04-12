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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// rotas de pagina *************************************
Route::get('golistpeli', function(){
    return view('/lista-pelicula');
});

Route::get('golistsalahora', function(){
    return view('/lista-sala-hora');
});

Route::get('gobutacas', function(){
    return view('/butacas');
});

// end rotas de pagina *************************************