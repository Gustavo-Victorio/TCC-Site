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

Route::get('/artistas', function () {
    return view('artistas');
});

Route::get('/estilos', function () {
    return view('estilos');
});

Route::get('/rodape', function () {
    return view('rodape');
});

Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/tarsila', function () {
    return view('tarsila');
});

Route::get('/candido', function () {
    return view('candido');
});

Route::get('/rodin', function () {
    return view('rodin');
});

Route::get('/picasso', function () {
    return view('picasso');
});



Route::get('/pintura', function () {
    return view('pintura');
});

Route::get('/musica', function () {
    return view('musica');
});

Route::get('/teatro', function () {
    return view('teatro');
});

Route::get('/artesanato', function () {
    return view('artesanato');
});

Route::get('/fotografia', function () {
    return view('fotografia');
});

Route::get('/danca', function () {
    return view('danca');
});