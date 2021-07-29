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

Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact'); 
//sabit verilen url ler yukarıda olmalı yoksa {sayfa} içinde arayıp bulamıyor yoksa.
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
//Farklı metodlar olduğu için get ve post ikisinde de iletisim yolunu kullanabilirim.
Route::get('/kategori/{category}', 'App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');
