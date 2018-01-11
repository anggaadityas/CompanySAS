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
Auth::routes();
	
Route::get('/','CompanyController@home');

Route::get('/home','CompanyController@home');

Route::get('/visimisi','CompanyController@visimisi');

Route::get('/galeri','CompanyController@galeri');

Route::get('/artikel','CompanyController@artikel');

Route::get('/tahapan-proses-karyawan','CompanyController@tpk');

Route::get('/karir','CompanyController@karir');

Route::get('/kontak','CompanyController@kontak');

Route::get('/{slug}','CompanyController@detailartikel')->where('slug','[\w\d\-\_]+');
