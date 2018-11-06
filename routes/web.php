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

Route::get('/base', function () {
    return view('homepage');
});
Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/artikel', function () {
    return view('artikel');
});
