<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
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

Route::middleware('guest')->group(function () {
    Route::get('/', [Controller::class, 'userHome']);

    Route::get('/home', function () {
        return view('landing_page');
    })->name('home');
    Route::get('/user-laporan', [Controller::class, 'userLaporan'])->name('user-laporan');
    Route::post('/tambah-laporan', [Controller::class, 'tambahLaporan']);
    Route::get('/user-pengajuan', [Controller::class, 'userPengajuan'])->name('user-pengajuan');
    Route::post('/tambah-pengajuan', [Controller::class, 'tambahPengajuan']);
    Route::get('/user-aset', [Controller::class, 'userAset'])->name('user-aset');
    Route::get('/aset/{i}', [Controller::class, 'showAset']);

    Route::get('/login-admin', function () {
        return view('login-admin');
    })->name('login-admin');
    Route::post('/submit-admin', [AdminController::class, 'submitAdmin']);
});

Route::middleware('admin')->group(function () {

    Route::get('/admin-laporan', [AdminController::class, 'adminLaporan'])->name('admin-laporan');
    Route::post('/edit-laporan', [AdminController::class, 'editLaporan']);
    Route::get('/admin-pengajuan', [AdminController::class, 'adminPengajuan'])->name('admin-pengajuan');
    Route::post('/edit-pengajuan', [AdminController::class, 'editPengajuan']);
    Route::get('/logout-admin', [AdminController::class, 'logoutAdmin']);
});
