<?php

use App\Http\Controllers\Admin\PendaftarController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\SiswaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::prefix('/siswa')->name('siswa.')->group(function () {
    Route::get('/index', [SiswaController::class, 'index'])->name('index');
    Route::post('/store', [SiswaController::class, 'store'])->name('store');
    Route::get('/print/{id}', [PrintController::class, 'index'])->name('print');
});

Route::prefix('/admin')->name('admin.')->group(function () {
    Route::get('/index', [PendaftarController::class, 'index'])->name('index');
    Route::get('/edit/{id}', [PendaftarController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [PendaftarController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PendaftarController::class, 'destroy'])->name('destroy');
    Route::get('/print/{id}', [PendaftarController::class, 'print'])->name('print');
    Route::get('/print', [PendaftarController::class, 'printSemua'])->name('printSemua');
});
