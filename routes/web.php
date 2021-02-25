<?php

use App\Http\Controllers\BpsFrameController;
use App\Http\Controllers\DetailController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

use App\Http\Controllers\KatalogController;


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

// Route::get('/', function () {
//     return view('index');
// });
// Route::get('/bombom', function () {
//     return view('index');
// });

// Route::get('/', "PagesController@home");
Route::get('/', [KatalogController::class, 'katalog'], function () {
});
Route::get('/katalog',  ['page' => 'page', 'search' => 'search', KatalogController::class, 'katalog'], function () {
})->where(['page' => '[0-9]+']);
Route::get('/detailpub', ['id' => 'id', DetailController::class, 'detail']);
// Route::get('katalog/search/{search?}/{page?}',  [KatalogController::class, 'search'], function () {
// });
Route::get('/tentang', [PagesController::class, 'home']);
Route::get('bpsframe/bpsri', [BpsFrameController::class, 'bpsri']);
Route::get('bpsframe/bpssumsel', [BpsFrameController::class, 'bpssumsel']);
