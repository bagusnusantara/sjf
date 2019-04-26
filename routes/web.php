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
Route::post('/pengajuanpembeliandtl', 'PengajuanPembelianController@storeDetail');
// Route::get('/pengajuanpembelian/{id}/show', 'PengajuanPembelianController@showDetail');
// Route::get('/pengajuanpembelian/{id}/edit', 'PengajuanPembelianController@editDetail');
// Route::match(['put','patch'],'/karyawan/{id}/update', 'PengajuanPembelianController@updateDetail');
// Route::get('/pengajuanpembelian/{id}/delete', 'PengajuanPembelianController@destroyDetail');

//LAPORAN
Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/outletAll', 'LaporanController@indexOutletAll');
Route::get('/laporan/outlet1', 'LaporanController@indexOutlet1');
Route::get('/laporan/outlet2', 'LaporanController@indexOutlet2');

//Stok Barang
Route::resource('/StokBarang','StokBarangController');
//Item Barang
Route::resource('/itemplanning','ItemPlanningController');
//home
Route::get('/home', 'HomeController@index')->name('home');

//Penerimaan PO
//header
Route::get('/penerimaanPO', 'PenerimaanPOController@indexPO');
Route::get('/penerimaanPO/{id}/show', 'PenerimaanPOController@showPO');
Route::get('/penerimaanPO/create', 'PenerimaanPOController@createHeader');
// Route::post('/pengajuanpembelian', 'PengajuanPembelianController@storeHeader');

// Route::get('/pengajuanpembelian/{id}/edit', 'PengajuanPembelianController@editHeader');
// Route::match(['put','patch'],'/karyawan/{id}/update', 'PengajuanPembelianController@updateHeader');
// Route::get('/pengajuanpembelian/{id}/delete', 'PengajuanPembelianController@destroyHeader');


//TotalPerTanggal
Route::post('/getdatapendapatan/tanggal', 'DashboardController@getPendapatanPerTanggal');
Route::post('/getdatapendapatan/jam', 'DashboardController@getPendapatanPerJam');
Route::post('/getdatapendapatan/tipeservis', 'DashboardController@getPendapatanPerTipeServis');
