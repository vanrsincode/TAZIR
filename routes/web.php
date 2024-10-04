<?php

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

Route::get('/', function () {
    return view('admin-panel.page.dashboard.index');
})->name('dashboard');

Route::get('izin', function () {
    return view('admin-panel.page.data-sistem.izin.index');
})->name('izin.index');

Route::get('level-pelanggaran', function () {
    return view('admin-panel.page.data-sistem.level-pelanggaran.index');
})->name('level-pelanggaran.index');

Route::get('kelas-madrasah', function () {
    return view('admin-panel.page.data-sistem.kelas-madrasah.index');
})->name('kelas-madrasah.index');

Route::get('klasifikasi-violasi', function () {
    return view('admin-panel.page.data-sistem.klasifikasi-violasi.index');
})->name('klasisfikasi-violasi.index');

Route::get('log', function () {
    return view('admin-panel.page.data-sistem.log.index');
})->name('log.index');

Route::get('perizinan.index', function () {
    return view('admin-panel.page.perizinan.index');
})->name('perizinan.index');
Route::get('input-izin', function () {
    return view('admin-panel.page.perizinan.input');
})->name('perizinan.create');

Route::get('data-pengguna', function () {
    return view('admin-panel.page.data-pengguna.index');
})->name('data-pengguna.index');

Route::get('data-santri', function () {
    return view('admin-panel.page.data-santri.index');
})->name('data-santri.index');
