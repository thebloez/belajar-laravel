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
});

Route::get('/halo',function (){
    return "Hallo From Router Laravel";
});

Route::get('blog', function(){
    return view('blog');
});

Route::get('dosen', 'DosenController@index');

Route::get('dosen/lain', 'DosenController@methodLain');

Route::get('pegawai', 'Pegawai@index');

Route::get('formulir', 'FormulirController@formulir');

Route::get('formulir/proses', 'FormulirController@proses');



