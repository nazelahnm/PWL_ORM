<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Http\Request;

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
});
Route::resource('mahasiswa', MahasiswaController::class);
Route::get('/search', [MahasiswaController::class, 'search'])->name('search');
Route::get('/mahasiswa/nilai/{mahasiswa}', [MahasiswaController::class, 'mhsMatkul'])->name('nilai');

use App\Http\Controllers\ArticleController;
Route::resource('articles', ArticleController::class);
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::get('/mahasiswa/cetakpdf/{mahasiswa}', [MahasiswaController::class, 'cetak_pdf'])->name('nilai_pdf');

Route::get('/transaksi/cetak_pdf', [TransaksiController::class, 'cetak_pdf']);
Route::get('/jenisSapi/cetak_pdf', [JenisSapiController::class, 'cetak_pdf'])->name('jenisSapi_pdf');;