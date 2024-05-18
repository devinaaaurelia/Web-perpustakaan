<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/anggota', 'App\Http\Controllers\AnggotaController@index');  
Route::post('/anggota/create', 'App\Http\Controllers\AnggotaController@create');
Route::get('/anggota/{kode_anggota}/edit', 'App\Http\Controllers\AnggotaController@edit');
Route::post('/anggota/{kode_anggota}/update', 'App\Http\Controllers\AnggotaController@update');
Route::get('/anggota/{kode_anggota}/delete', 'App\Http\Controllers\AnggotaController@delete');
Route::get('/buku', 'App\Http\Controllers\BukuController@index');
Route::post('/buku/create', 'App\Http\Controllers\BukuController@create');
Route::get('/buku/{kode_buku}/edit', 'App\Http\Controllers\BukuController@edit');
Route::post('/buku/{kode_buku}/update', 'App\Http\Controllers\BukuController@update');
Route::get('/buku/{kode_buku}/delete', 'App\Http\Controllers\BukuController@delete');
Route::get('/laporan', 'App\Http\Controllers\LaporanController@index');
Route::post('/laporan/cetak', 'App\Http\Controllers\LaporanController@cetak');
