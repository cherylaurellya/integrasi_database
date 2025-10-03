<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MahasiswaSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('mahasiswa')->insert([
            [
                'nama' => 'Cheryl Aurellya',
                'email' => 'aurel@gmail.com',
                'nim' => '12345678',
                'jurusan' => 'Informatika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Leni Marlina',
                'email' => 'leni@gmail.com',
                'nim' => '87654321',
                'jurusan' => 'Sistem Informasi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}