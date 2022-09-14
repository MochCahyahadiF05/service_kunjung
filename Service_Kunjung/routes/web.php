<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MekanikController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LaporanController;
use App\Http\Middleware\cekLevel;
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
    return view('user.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// test template
Route::get('/',function(){
    return view('user.index');
});
Route::group(['prefix' => '', 'middleware' => ['auth']],function () {
        Route::resource('barang', BarangController::class);
        Route::resource('mekanik', MekanikController::class);
        Route::resource('service', ServiceController::class);
        Route::resource('laporan', LaporanController::class);

    });

           
