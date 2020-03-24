<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('pages.landing');
})->middleware('guest')->name('landing');

Auth::routes();

Route::get('/home', 'DashboardController@index')->middleware('auth')->name('home');
