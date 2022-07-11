<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

Route::get('/ikan', [App\Http\Controllers\IkanController::class, 'index'])->name('ikan')->middleware('auth');
Route::get('/ikan/create', [App\Http\Controllers\IkanController::class, 'create'])->name('ikan')->middleware('auth');
Route::post('/ikan/store', [App\Http\Controllers\IkanController::class, 'store'])->name('ikan')->middleware('auth');
Route::get('/ikan/edit/{id}', [App\Http\Controllers\IkanController::class, 'edit'])->name('ikan')->middleware('auth');
Route::post('/ikan/update/{id}', [App\Http\Controllers\IkanController::class, 'update'])->name('ikan')->middleware('auth');
Route::get('/ikan/delete/{id}', [App\Http\Controllers\IkanController::class, 'destroy'])->name('ikan')->middleware('auth');

Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create'])->name('pelanggan')->middleware('auth');
Route::post('/pelanggan/store', [App\Http\Controllers\PelangganController::class, 'store'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/edit/{id}', [App\Http\Controllers\PelangganController::class, 'edit'])->name('pelanggan')->middleware('auth');
Route::post('/pelanggan/update/{id}', [App\Http\Controllers\PelangganController::class, 'update'])->name('pelanggan')->middleware('auth');
Route::get('/pelanggan/delete/{id}', [App\Http\Controllers\PelangganController::class, 'destroy'])->name('pelanggan')->middleware('auth');

Route::get('/pesanan', [App\Http\Controllers\PesananController::class, 'index'])->name('pesanan')->middleware('auth');
Route::get('/pesanan/create', [App\Http\Controllers\PesananController::class, 'create'])->name('pesanan')->middleware('auth');
Route::get('/pesanan/update/{id}', [App\Http\Controllers\PesananController::class, 'update'])->name('pesanan')->middleware('auth');
Route::post('/pesanan/store', [App\Http\Controllers\PesananController::class, 'store'])->name('pesanan')->middleware('auth');
Route::get('/pesanan/delete/{id}', [App\Http\Controllers\PesananController::class, 'destroy'])->name('pesanan')->middleware('auth');
