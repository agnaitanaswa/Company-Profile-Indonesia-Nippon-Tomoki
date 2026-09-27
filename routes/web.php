<?php

use App\Http\Controllers\Controllers;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controllers::class, 'beranda'])->name('beranda');

Route::get('/tentang-kami', [Controllers::class, 'tentangKami'])->name('tentang-kami');

Route::get('/layanan', [Controllers::class, 'layanan'])->name('layanan');

Route::get('/kontak', [Controllers::class, 'kontak'])->name('kontak');

Route::get('/konsultasi-gratis', [Controllers::class, 'konsultasiGratis'])->name('konsultasi-gratis');