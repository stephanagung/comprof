<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\C_ProdukController;
use App\Http\Controllers\C_DataProdukController;
use App\Http\Controllers\C_FasilitasController;
use App\Http\Controllers\C_DataFasilitasController;
use App\Http\Controllers\C_KarirController;
use App\Http\Controllers\C_DataKarirController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route halaman index*/
Route::get('/', function () {
    return view('index');
});

/* Route halaman tentang kami*/
Route::get('/tentang-kami', function () {
    return view('tentang-kami');
});

/* Route halaman produk*/
Route::get('/produk', [C_ProdukController::class, 'index'])->name('produk.index');

/* Route halaman fasilitas*/
Route::get('/fasilitas', [C_FasilitasController::class, 'index'])->name('fasilitas.index');

/* Route halaman media*/
Route::get('/media', function () {
    return view('media');
});

/* Route halaman karir*/
Route::get('/karir', [C_KarirController::class, 'index'])->name('karir');

/* Route halaman kontak*/
Route::get('/kontak', function () {
    return view('kontak');
});

Route::get('/form_produk', [C_DataProdukController::class, 'index']);
Route::post('/produk/store', [C_DataProdukController::class, 'store'])->name('produk.store');
Route::put('/produk/update', [C_DataProdukController::class, 'update'])->name('produk.update');
Route::delete('/produk/destroy', [C_DataProdukController::class, 'destroy'])->name('produk.destroy');
Route::get('/produk/preview/{nama_produk}', [C_DataProdukController::class, 'previewFotoByNama'])->name('produk.preview');
Route::get('/produk/download/{nama_produk}', [C_DataProdukController::class, 'downloadFotoByNama'])->name('produk.download');


Route::get('/form_fasilitas', [C_DataFasilitasController::class, 'index'])->name('form_fasilitas.index');
Route::post('/fasilitas/store', [C_DataFasilitasController::class, 'store'])->name('fasilitas.store');
Route::put('/fasilitas/update', [C_DataFasilitasController::class, 'update'])->name('fasilitas.update');
Route::delete('/fasilitas/destroy', [C_DataFasilitasController::class, 'destroy'])->name('fasilitas.destroy');

Route::get('/form_karir', [C_DataKarirController::class, 'index'])->name('form_karir');
Route::post('/loker/store', [C_DataKarirController::class, 'store'])->name('loker.store');
Route::put('/loker/update', [C_DataKarirController::class, 'update'])->name('loker.update');
Route::delete('/loker/destroy', [C_DataKarirController::class, 'destroy'])->name('loker.destroy');
Route::get('/loker/{id}/detail', [C_DataKarirController::class, 'detail'])->name('loker.detail');

//Tingkat Pendidikan
Route::post('/tingkat-pendidikan/store', [C_DataKarirController::class, 'storeTingkatPendidikan'])->name('tingkatPendidikan.store');
Route::put('/tingkat-pendidikan/update', [C_DataKarirController::class, 'updateTingkatPendidikan'])->name('tingkatPendidikan.update');
Route::delete('/tingkat-pendidikan/destroy', [C_DataKarirController::class, 'destroyTingkatPendidikan'])->name('tingkatPendidikan.destroy');

// Deskripsi Pekerjaan
Route::post('/deskripsi-pekerjaan/store', [C_DataKarirController::class, 'storeDeskripsiPekerjaan'])->name('deskripsiPekerjaan.store');
Route::put('/deskripsi-pekerjaan/update', [C_DataKarirController::class, 'updateDeskripsiPekerjaan'])->name('deskripsiPekerjaan.update');
Route::delete('/deskripsi-pekerjaan/destroy', [C_DataKarirController::class, 'destroyDeskripsiPekerjaan'])->name('deskripsiPekerjaan.destroy');

// Dokumen Persyaratan
Route::post('/dokumen-persyaratan/store', [C_DataKarirController::class, 'storeDokumenPersyaratan'])->name('dokumenPersyaratan.store');
Route::put('/dokumen-persyaratan/update', [C_DataKarirController::class, 'updateDokumenPersyaratan'])->name('dokumenPersyaratan.update');
Route::delete('/dokumen-persyaratan/destroy', [C_DataKarirController::class, 'destroyDokumenPersyaratan'])->name('dokumenPersyaratan.destroy');

