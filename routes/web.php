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
Route::GET('/dokumen/search', 'DokumenController@search');
Route::GET('/uploadedfile', 'DokumenController@uploadedfile');

Route::resource('dokumen', 'DokumenController');
Route::resource('kategori', 'KategoriController');
Auth::routes();

Route::get('/', function () {
    return view('auth/login');
});