<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\MahasiswaController;



// 1. Menampilkan Daftar Mahasiswa (INDEX/getData)
Route::get('/mahasiswa', [MahasiswaController::class, 'getData'])->name('mahasiswa.index');


// 2. Menampilkan Form Tambah Mahasiswa (CREATE)
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');


// 3. Menyimpan Data Mahasiswa (STORE)

Route::post('/mahasiswa', [MahasiswaController::class, 'store'])->name('mahasiswa.store');






