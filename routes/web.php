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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('homepage');
});
Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/kategori', function () {
    return view('kategori');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
