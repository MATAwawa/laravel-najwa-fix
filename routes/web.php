<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;

Route::get('/', function () {
    return redirect()->route('pelanggan.index');
});

Route::get('/dashboard', function () {
    return redirect()->route('pelanggan.index');
})->name('dashboard');

Route::resource('pelanggan', PelangganController::class);