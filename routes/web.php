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

/* Böyle hepsinin basına admin yazmak yerine grup yap. Route prefix kullan. Aynı şekilde sondaki namelerde de hep admin. ile başlıyor. Onu da grup tanımla.
Route::get('admin/panel','App\Http\Controllers\Back\Dashboard@index')->name('admin.dashboard');
Route::get('admin/giris','App\Http\Controllers\Back\AuthController@login')->name('admin.login');
Route::post('admin/giris','App\Http\Controllers\Back\AuthController@loginPost')->name('admin.login.post');
Route::get('admin/cikis','App\Http\Controllers\Back\AuthController@logout')->name('admin.logout');
*/

//Bu 2 Route u aşagıdaki gruba dahil etmedim çünkü aşagıdaki grupta middleware var login den sonrakiler için grup kullanılabilir. 
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function()
{
    //middleware ile login olduysa tekrar login sayfasına üst bardan gitmeye çalışsa bile panele yönlendir.
    Route::get('giris','App\Http\Controllers\Back\AuthController@login')->name('login');
    Route::post('giris','App\Http\Controllers\Back\AuthController@loginPost')->name('login.post');
    
});

//Bu admin ile ilgili tüm işlemlere admin girişi yapan kişiler görmeli yani bunu da group ta middleware katmanı kullanıcam. 
//Hepsine tek tek yazmaya gerek yok, middleware ı direk route group ta yaz hepsinde gecerli olsun.
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function()
{
    //middleware ile admin değilse tekrar login sayfasına gönder üstteki bardan /admin/panel yazarak girmeye çalışsa bile login sayfasına gönder.
Route::get('panel','App\Http\Controllers\Back\Dashboard@index')->name('dashboard');
Route::get('cikis','App\Http\Controllers\Back\AuthController@logout')->name('logout');
});



//FRONT ROUTES
Route::get('/iletisim','App\Http\Controllers\Front\Homepage@contact')->name('contact'); 
//sabit verilen url ler yukarıda olmalı yoksa {sayfa} içinde arayıp bulamıyor yoksa.
Route::post('/iletisim','App\Http\Controllers\Front\Homepage@contactpost')->name('contact.post');
//Farklı metodlar olduğu için get ve post ikisinde de iletisim yolunu kullanabilirim.
Route::get('/kategori/{category}', 'App\Http\Controllers\Front\Homepage@category')->name('category');
Route::get('/','App\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/{category}/{slug}','App\Http\Controllers\Front\Homepage@single')->name('single');
Route::get('/{sayfa}','App\Http\Controllers\Front\Homepage@page')->name('page');
