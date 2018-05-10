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

//Route::get('/', function () {
//    return view('auth.login');
//});
//Route::get('usuario/{id?}', 'Usuario\UsuarioController@show');

//Route::get('user/{id?}', 'UserController@show');

Auth::routes();

Route::get('/', 'IniciaLoginController@index')->name('inicia_login');

Route::get('/home', 'HomeController@index')->name('home');

