<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function insertData()
    {
        DB::table('mahasiswa')->insert([
            'nama' => 'Aurell',
            'email' => 'aurell@gmail.com',
            'nim' => '123490',
            'jurusan' => 'Teknik Informatika',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return "Data berhasil ditambahkan!";
    }

    public function getData()
{
    $mahasiswa = DB::table('mahasiswa')->get();
    return view('mahasiswa.index', compact('mahasiswa'));
}
}