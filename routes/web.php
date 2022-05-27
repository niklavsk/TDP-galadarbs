<?php

use Illuminate\Support\Facades\App;
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

Route::redirect('/', '/lv');

Route::group(['prefix' => '{language}'], function () {
    //Localization

    Route::get('/language/lv', function () {
        App::setLocale('lv');

        return redirect()->route('home', app()->getLocale());
    })->name('languageLv');

    Route::get('/language/en', function () {
        App::setLocale('en');

        return redirect()->route('home', app()->getLocale());
    })->name('languageEn');

    //Pages

    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::get('/pasteiga', function () {
        return view('pasteiga');
    })->name('pasteiga');

    Route::get('/gaidisana', function () {
        return view('gaidisana');
    })->name('gaidisana');

    Route::get('/brauciens', function () {
        return view('brauciens');
    })->name('brauciens');

    Route::get('/skatlogs', function () {
        return view('skatlogs');
    })->name('skatlogs');

    Route::get('/galastacija', function () {
        return view('galastacija');
    })->name('galastacija');

    Route::get('/krustojums', function () {
        return view('krustojums');
    })->name('krustojums');

    Route::get('/durvis', function () {
        return view('durvis');
    })->name('durvis');
});
