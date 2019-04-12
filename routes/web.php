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

//Landing to auth
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
//Dashboard
Route::get('/dashboard', 'DashboardController@getDashboard');
Route::post('/filterdata', 'DashboardController@getFilteredData');

//Pengajuan Pembelian
//header
Route::get('/pengajuanpembelian', 'PengajuanPembelianController@indexHeader');
Route::get('/pengajuanpembelian/create', 'PengajuanPembelianController@createHeader');
Route::post('/pengajuanpembelian', 'PengajuanPembelianController@storeHeader');
Route::get('/pengajuanpembelian/{id}/show', 'PengajuanPembelianController@showHeader');
Route::get('/pengajuanpembelian/{id}/edit', 'PengajuanPembelianController@editHeader');
Route::match(['put','patch'],'/karyawan/{id}/update', 'PengajuanPembelianController@updateHeader');
Route::get('/pengajuanpembelian/{id}/delete', 'PengajuanPembelianController@destroyHeader');
//detail
// Route::get('/pengajuanpembelian', 'PengajuanPembelianController@indexDetail');
Route::get('/pengajuanpembelian/{id}/createdetail', 'PengajuanPembelianController@createDetail');
// Route::post('/pengajuanpembelian', 'PengajuanPembelianController@storeDetail');
// Route::get('/pengajuanpembelian/{id}/show', 'PengajuanPembelianController@showDetail');
// Route::get('/pengajuanpembelian/{id}/edit', 'PengajuanPembelianController@editDetail');
// Route::match(['put','patch'],'/karyawan/{id}/update', 'PengajuanPembelianController@updateDetail');
// Route::get('/pengajuanpembelian/{id}/delete', 'PengajuanPembelianController@destroyDetail');

//home
Route::get('/home', 'HomeController@index')->name('home');
