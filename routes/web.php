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
    return view('dashboard');
});

Route::get('/form', function () {
    return view('form');
});

Route::get('/index', function () {
    return view('index');
});

//Route::resource('mahasiswa','Mahasiswa');
//Route::resource('user','User');
//Route::resource('file','File');
Route::resource('barang','Barang');
Route::resource('pembeli','Pembeli');
Route::resource('penjualan','Penjualan');
Route::resource('pembeli','Pembeli');
Route::resource('suplier','Suplier');




