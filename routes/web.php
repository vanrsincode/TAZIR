<?php

use App\Http\Controllers\Component\DataTableController;
use App\Http\Controllers\Component\Select2Controller;
use App\Http\Controllers\IzinController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\SantriController;
use App\Http\Controllers\ViolasiController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
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

Route::controller(Select2Controller::class)->group(function () {
    Route::get('selectLevel', 'getSelectLevel');
    Route::get('selectKelas', 'getSelectKelas');
});
Route::controller(DataTableController::class)->group(function() {
    Route::get('dataLevel', 'dataTableLevel');
    Route::get('dataKelas', 'dataTableKelas');
    Route::get('dataIzin', 'dataTableIzin');
    Route::get('dataViolasi', 'dataTableViolasi');
    Route::get('dataSantri/{id}', 'dataTableSantri');
});

Route::get('/', function () {
    return view('admin-panel.page.dashboard.index');
})->name('dashboard');

Route::controller(LoginController::class)->group(function() {
    Route::get('login', 'index')->name('login.loginadmin');
    Route::get('data-santri/{id}', 'show')->name('data-santri.show');
    Route::post('data-santri', 'store')->name('data-santri.store');
    Route::post('data-santri/{id}', 'update')->name('data-santri.update');
    Route::post('data-santri/del/{id}', 'destroy')->name('data-santri.destroy');
});

Route::controller(SantriController::class)->group(function() {
    Route::get('data-santri', 'index')->name('data-santri.index');
    Route::get('data-santri/{id}', 'show')->name('data-santri.show');
    Route::post('data-santri', 'store')->name('data-santri.store');
    Route::post('data-santri/{id}', 'update')->name('data-santri.update');
    Route::post('data-santri/del/{id}', 'destroy')->name('data-santri.destroy');
});

Route::controller(IzinController::class)->group(function() {
    Route::get('izin', 'index')->name('izin.index');
    Route::get('izin/{id}', 'show')->name('izin.show');
    Route::post('izin', 'store')->name('izin.store');
    Route::post('izin/{id}', 'update')->name('izin.update');
    Route::post('izin/del/{id}', 'destroy')->name('izin.destroy');
});

Route::controller(LevelController::class)->group(function() {
    Route::get('level-pelanggaran', 'index')->name('level-pelanggaran.index');
    Route::get('level-pelanggaran/{id}', 'show')->name('level-pelanggaran.show');
    Route::post('level-pelanggaran', 'store')->name('level-pelanggaran.store');
    Route::post('level-pelanggaran/{id}', 'update')->name('level-pelanggaran.update');
    Route::post('level-pelanggaran/del/{id}', 'destroy')->name('level-pelanggaran.destroy');
});

Route::controller(KelasController::class)->group(function() {
    Route::get('kelas-madrasah', 'index')->name('kelas-madrasah.index');
    Route::get('kelas-madrasah/{id}', 'show')->name('kelas-madrasah.show');
    Route::post('kelas-madrasah', 'store')->name('kelas-madrasah.store');
    Route::post('kelas-madrasah/{id}', 'update')->name('kelas-madrasah.update');
    Route::post('kelas-madrasah/del/{id}', 'destroy')->name('kelas-madrasah.destroy');
});

Route::controller(ViolasiController::class)->group(function() {
    Route::get('klasifikasi-violasi', 'index')->name('klasifikasi-violasi.index');
    Route::get('klasifikasi-violasi/{id}', 'show')->name('klasifikasi-violasi.show');
    Route::post('klasifikasi-violasi', 'store')->name('klasifikasi-violasi.store');
    Route::post('klasifikasi-violasi/{id}', 'update')->name('klasifikasi-violasi.update');
    Route::post('klasifikasi-violasi/del/{id}', 'destroy')->name('klasifikasi-violasi.destroy');
});

Route::controller(SantriController::class)->group(function() {
    Route::get('data-santri', 'index')->name('data-santri.index');
    Route::get('data-santri/{id}', 'show')->name('data-santri.show');
    Route::post('data-santri', 'store')->name('data-santri.store');
    Route::post('data-santri/{id}', 'update')->name('data-santri.update');
    Route::post('data-santri/del/{id}', 'destroy')->name('data-santri.destroy');
});

Route::get('detail-santri', function () {
    return view('admin-panel.page.data-santri.detail.index');
})->name('data-santri.detail.index');

Route::get('/file/{folder}/{filename}', function ($folder, $filename) {
    $path = storage_path('app/public/' . $folder . '/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});

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