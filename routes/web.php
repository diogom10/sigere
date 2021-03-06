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

Route::any('/login','Login@setLogin');
Route::any('/getLogin','Login@getLogin');
Route::any('/Cadastro ','Login@setCadastro');
Route::any('/home','Home@homeUser');
Route::any('/logout','Home@logout');
Route::any('/getEnergia','Home@getEnergia');
Route::any('/setEnergia','Home@setEnergia');
