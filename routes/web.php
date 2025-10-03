<?php

//use Illuminate\Support\Facades\Route;
use Illuminate\support\facades\DB;
use App\Http\Controllers\MahasiswaController;

// Route::resource('mahasiswa', MahasiswaController::class);

// Route::get('/', function () {
//     return view('welcome');
// });

// // Insert data mahasiswa
// Route::get('/insert', function () {
//     DB::table('mahasiswa')->insert([
//         'nama' => 'Cheryl Aurellya',
//         'nim' => '11223344',
//         'jurusan' => 'Teknik Komputer',
//         'created_at' => now(),
//         'updated_at' => now(),
//     ]);

//     return "Data berhasil ditambahkan!";
// });

// // Ambil semua data mahasiswa
// Route::get('/mahasiswa', function () {
//     $mahasiswa = DB::table('mahasiswa')->get();
//     return response()->json($mahasiswa);
// });

Route::get('/insert', [MahasiswaController::class, 'insertData']);
Route::get('/mahasiswa', [MahasiswaController::class, 'getData']);
