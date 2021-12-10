<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/beranda', function () {
//     return view('beranda');
// });

Route::get('/pesanan', function () {
    return view('pesanan');
});

Route::get('/Daftar menu', function () {
    return view(' Daftar menu');
});

Route::get('/login', function () {
    return view('login');

});

Route::get('/produk-detail', function () {
    return view('produk-detail');

    

});

// Auth::routes();

Route::get('/beranda', [HomeController::class, 'index']);

Route::get('/logout', 'Auth\LoginController@logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route:: get('/send-wa',function  () {
    return view('send-wa');

});




