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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomepageController@index');
Route::get('/about', 'HomepageController@about');
Route::get('/kontak', 'HomepageController@kontak');
Route::get('/kategori', 'HomepageController@kategori');
Route::get('/kategori/{slug}', 'HomepageController@produkperkategori');
Route::get('/produk', 'HomepageController@produk');
Route::get('/produk/{slug}', 'HomepageController@produkdetail');

Route::group(['prefix' => 'admin'], function() {
  Route::get('/', 'DashboardController@index');
  // route kategori
  Route::resource('kategori', 'KategoriController');

  Route::resource('produk', 'ProdukController');
});