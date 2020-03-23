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
    return view('pages.home');
});

Route::get('/login', function(){
    return view('pages.login');
});

Route::get('/dashboard', function(){
    return view('students.dashboard');
});

Route::get('/viewLesson', function(){
    return view('students.viewLesson');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
