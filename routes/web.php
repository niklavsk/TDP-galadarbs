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
    return view('home');
});

Route::get('/pasteiga', function () {
    return view('pasteiga');
});

Route::get('/gaidisana', function () {
    return view('gaidisana');
});

Route::get('/brauciens', function () {
    return view('brauciens');
});

Route::get('/skatlogs', function () {
    return view('skatlogs');
});

Route::get('/galastacija', function () {
    return view('galastacija');
});

Route::get('/krustojums', function () {
    return view('krustojums');
});

Route::get('/durvis', function () {
    return view('durvis');
});
