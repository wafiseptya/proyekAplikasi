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

Route::resource('/', 'HomepageController')->only([
    'index'
]);

Route::get('kategori/{id}/{slug}', 'KategoriController@show');

Route::get('wisata/{id}/{slug}', 'WisataController@show');

Route::get('artikel/{id}/{slug}', 'ArtikelController@show');

Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('/profile', function () {
    return view('profile');
});
Route::get('/artikel', function () {
    return view('artikel');
});
Route::get('/makeArtikel', function () {
    return view('makeArtikel');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
