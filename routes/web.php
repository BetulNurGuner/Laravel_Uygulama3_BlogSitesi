<?php

use Illuminate\Support\Facades\Route;

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

/*
Route::get('/', function () {
    return view('front.homepage');
});
*/


//BACK ROUTES - ADMİN PANEL
Route::get('admin/panel','App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');
Route::get('admin/giris','App\Http\Controllers\Back\AuthController@login')->name('admin.login');
Route::post('admin/giris','App\Http\Controllers\Back\AuthController@loginPost')->name('admin.login.post');
Route::get('admin/cikis','App\Http\Controllers\Back\AuthController@logout')->name('admin.logout');

//FRONT ROUTES
Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact'); 
//sabit verilen url ler yukarıda olmalı yoksa {sayfa} içinde arayıp bulamıyor yoksa.
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
//Farklı metodlar olduğu için get ve post ikisinde de iletisim yolunu kullanabilirim.
Route::get('/kategori/{category}', 'App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');
