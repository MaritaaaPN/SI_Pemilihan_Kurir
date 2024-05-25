<?php

use App\Http\Controllers\PengirimanController;

use App\Http\Controllers\KurirController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('/kurir/export-pdf', [KurirController::class, 'export_pdf'])->name('kurir.export-pdf');
Route::resource('/kurir', KurirController::class);

Route::get('/pengiriman/export-pdf', [PengirimanController::class, 'export_pdf'])->name('pengiriman.export-pdf');
Route::resource('/pengiriman', PengirimanController::class);
