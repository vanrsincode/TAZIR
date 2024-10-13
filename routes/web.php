<?php

use App\Http\Controllers\Component\DataTableController;
use App\Http\Controllers\LevelController;
use Illuminate\Support\Facades\Route;

/*
|kelas-madrasahkelas-madrasah----------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::controller(DataTableController::class)->group(function() {
    Route::get('dataLevel', 'dataTableLevel');
});

Route::get('/', function () {
    return view('admin-panel.page.dashboard.index');
})->name('dashboard');

Route::get('izin', function () {
    return view('admin-panel.page.data-sistem.izin.index');
})->name('izin.index');

Route::controller(LevelController::class)->group(function() {
    Route::get('level-pelanggaran', 'index')->name('level-pelanggaran.index');
    Route::get('level-pelanggaran/{id}', 'show')->name('level-pelanggaran.show');
    Route::post('level-pelanggaran', 'store')->name('level-pelanggaran.store');
    Route::post('level-pelanggaran/{id}', 'update')->name('level-pelanggaran.update');
    Route::post('level-pelanggaran/del/{id}', 'destroy')->name('level-pelanggaran.destroy');
});

Route::get('kelas-madrasah', function () {
    return view('admin-panel.page.data-sistem.kelas-madrasah.index');
})->name('kelas-madrasah.index');

Route::get('klasifikasi-violasi', function () {
    return view('admin-panel.page.data-sistem.klasifikasi-violasi.index');
})->name('klasisfikasi-violasi.index');

Route::get('log-aktivitas.index', function () {
    return view('admin-panel.page.aktivitas.log-aktivitas.index');
})->name('log-aktivitas.index');


Route::get('perizinan.index', function () {
    return view('admin-panel.page.perizinan.index');
})->name('perizinan.index');
Route::get('input-izin', function () {
    return view('admin-panel.page.perizinan.input');
})->name('perizinan.create');


Route::get('input-pelanggaran', function () {
    return view('admin-panel.page.pelanggaran.input');
})->name('pelanggaran.create');

Route::get('harian.index', function () {
    return view('admin-panel.page.pelanggaran.harian.index');
})->name('harian.index');
Route::get('bulanan.index', function () {
    return view('admin-panel.page.pelanggaran.bulanan.index');
})->name('bulanan.index');

Route::get('data-pengguna', function () {
    return view('admin-panel.page.data-pengguna.index');
})->name('data-pengguna.index');

Route::get('data-santri', function () {
    return view('admin-panel.page.data-santri.index');
})->name('data-santri.index');

Route::get('detail-santri', function () {
    return view('admin-panel.page.data-santri.detail.index');
})->name('data-santri.detail.index');

