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

Route::get('/admin', 'AdminController@index');
Route::get('/izindiajukan', 'IzinDiajukan@index');
Route::get('/izindone', 'IzinDone@index');
Route::get('/cutidiajukan', 'CutiDiajukan@index');
Route::get('/cutidone', 'CutiDone@index');
Route::get('/tambahkaryawan', 'TambahKaryawan@index');
Route::get('/datakaryawan', 'DataKaryawan@index');
