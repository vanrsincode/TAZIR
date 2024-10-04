<?php

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

Route::get('admin-dashboard', function () {
    return view('admin-panel.page.dashboard.index');
})->name('dashboard');

Route::get('santri', function () {
    return view('admin-panel.page.santri.index');
})->name('santri');

Route::get('pengguna', function () {
    return view('admin-panel.page.pengguna.index');
})->name('pengguna');

Route::get('/perizinan', function () {
    return view('admin-panel.page.perizinan.index');
});
