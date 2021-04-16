<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [SiswaController::class, 'home'])->name('home');

Route::prefix('/siswa')->name('siswa.')->group(function () {
    Route::get('/index', [SiswaController::class, 'index'])->name('index');
    Route::get('/create', [SiswaController::class, 'create'])->name('create');
    Route::post('/store', [SiswaController::class, 'store'])->name('store');
    Route::get('/edit/{id}', [SiswaController::class, 'edit'])->name('edit');
    Route::put('/update/{id}', [SiswaController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [SiswaController::class, 'destroy'])->name('destroy');
});
