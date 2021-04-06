<?php

use App\Http\Controllers\BpsFrameController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\PublikasiController;
use App\Models\Publikasi;

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

Route::get('/', ['page' => 'page', 'search' => 'search', 'domain' => 'domain', KatalogController::class, 'katalog'], function () {
});
Route::get('/katalog',  ['page' => 'page', 'search' => 'search', 'domain' => 'domain', 'halaman' => 'halaman', KatalogController::class, 'katalog'], function () {
})->where(['page' => '[0-9]+']);
Route::get('/detailpub', ['id' => 'id', DetailController::class, 'detail']);
Route::get('/tentang', [PagesController::class, 'home']);
Route::get('bpsframe/bpsri', [BpsFrameController::class, 'bpsri']);
Route::get('bpsframe/bpssumsel', [BpsFrameController::class, 'bpssumsel']);

Route::get('/admin', [AdminController::class, 'loginview'])->name('publikasi.index');
Route::post('/login', [AdminController::class, 'login']);
Route::get('/logout', [AdminController::class, 'logout']);

Route::get('/publikasi/{id}/edit', [PublikasiController::class, 'edit']);
Route::post('/publikasi/store', [PublikasiController::class, 'store']);
Route::delete('/publikasi/{id}', [PublikasiController::class, 'destroy']);
