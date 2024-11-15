<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

use App\Http\Controllers\InputController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\PerhitunganController;
use App\Http\Controllers\LainnyaController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/about', function () {
    return view('about');
});

Route::get('/location', function () {
    return view('location');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/order', function () {
    return view('order');
});

Route::get('/index1', function () {
    return view('index1');
});

Route::middleware('auth')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Data Routes
Route::get('/data/menu', [DataController::class, 'menu'])->name('data.menu');
Route::get('/data/bahan', [DataController::class, 'bahan'])->name('data.bahan');
Route::get('/data/pemasok', [DataController::class, 'pemasok'])->name('data.pemasok');
Route::get('/data/karyawan', [DataController::class, 'karyawan'])->name('data.karyawan');
Route::get('/data/inventaris', [DataController::class, 'inventaris'])->name('data.inventaris');
Route::get('/data/penjualan', [DataController::class, 'penjualan'])->name('data.penjualan');


// Input Routes
Route::get('/input/menu', [InputController::class, 'menu'])->name('input.menu');
Route::post('/input/menu', [InputController::class, 'submitMenu'])->name('input.menu.submit');

// Route::get('/input/menu', [InputController::class, 'menu'])->name('input.menu');
Route::get('/input/bahan', [InputController::class, 'bahan'])->name('input.bahan');
Route::get('/input/pemasok', [InputController::class, 'pemasok'])->name('input.pemasok');
Route::get('/input/karyawan', [InputController::class, 'karyawan'])->name('input.karyawan');
Route::get('/input/inventaris', [InputController::class, 'inventaris'])->name('input.inventaris');
Route::get('/input/penjualan', [InputController::class, 'penjualan'])->name('input.penjualan');


// Perhitungan Route
Route::get('/perhitungan/processing', [PerhitunganController::class, 'processing'])->name('perhitungan.processing');

// Lainnya Route
Route::get('/lainnya/more', [LainnyaController::class, 'more'])->name('lainnya.more');

require __DIR__ . '/auth.php';
