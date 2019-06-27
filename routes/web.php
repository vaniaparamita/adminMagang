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

Route::get('/welcomeDepartemen', function () {
    return view('welcomeDepartemen');
});

Route::get('/admin', 'AdminController@index');
Route::get('/izindiajukan', 'IzinDiajukan@index');
Route::get('/izindone', 'IzinDone@index');
Route::get('/cutidiajukan', 'CutiDiajukan@index');
Route::get('/cutidone', 'CutiDone@index');
Route::get('/tambahkaryawan', 'TambahKaryawan@index');
Route::get('/datakaryawan', 'DataKaryawan@index');

Route::get('/admin2', 'Admin2Controller@index');
Route::get('/izindiajukan2', 'IzinDiajukan2@index');
Route::get('/izindone2', 'IzinDone2@index');
Route::get('/cutidiajukan2', 'CutiDiajukan2@index');
Route::get('/cutidone2', 'CutiDone2@index');
Route::get('/datakaryawan2', 'DataKaryawan2@index');