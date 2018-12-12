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

//admin
Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
    Route::get('/wisata', 'AdminController@wisata')->name('admin.wisata');
    Route::get('/wisata/tambah', 'AdminController@tambahWisata')->name('admin.tambahWisata');
    Route::get('/wisata/{id}/edit', 'AdminController@editWisata')->name('admin.editWisata');
    Route::post('/wisata', 'AdminController@storeWisata')->name('admin.storeWisata');
    Route::match(['put', 'patch'], '/wisata/{id}/update', 'AdminController@updateWisata')->name('admin.updateWisata');
    Route::delete('/wisata/{id}', 'AdminController@destroyWisata')->name('admin.destroyWisata');
});

Route::get('kategori/{id}/{slug}', 'KategoriController@show');

Route::get('wisata/{id}/{slug}', 'WisataController@show');

Route::get('artikel/{id}/{slug}', 'ArtikelController@show')->name('artikel.show');
Route::post('artikel', 'ArtikelController@store')->name('artikel.store')->middleware('auth');

Route::post('artikel/{id}/{uid}/comment', 'ArtikelController@comment')->name('artikel.comment');

Route::post('artikel/{id}/like', 'ArtikelController@like')->name('artikel.like');
Route::post('artikel/{id}/dislike', 'ArtikelController@dislike')->name('artikel.dislike');

Route::get('create/{artikel}', 'ArtikelController@create')->name('artikel.create')->middleware('auth');

Route::get('/wisata', function () {
    return view('wisata');
});
Route::get('/kategori', function () {
    return view('kategori');
});

Route::get('profile/{profile}', 'UserController@show')->name('profile.show');
Route::resource('profile', 'UserController')->except([
    'show'
]);   

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
