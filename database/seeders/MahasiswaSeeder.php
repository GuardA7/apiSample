<?php

namespace Database\Seeders;

use App\Models\Mahasiswa;
use Illuminate\Database\Seeder;

class MahasiswaSeeder extends Seeder
{
    public function run()
    {
        $mahasiswas = [
            ['nama' => 'Budi Santoso', 'nim' => '12345678', 'jenis_kelamin' => 'L', 'jurusan_id' => 1, 'prodi_id' => 1, 'kelas_id' => 1],
            ['nama' => 'Siti Aminah', 'nim' => '87654321', 'jenis_kelamin' => 'P', 'jurusan_id' => 1, 'prodi_id' => 1, 'kelas_id' => 2],
            ['nama' => 'Andi Wijaya', 'nim' => '12344321', 'jenis_kelamin' => 'L', 'jurusan_id' => 2, 'prodi_id' => 3, 'kelas_id' => 5],
            ['nama' => 'Nurul Hidayah', 'nim' => '43211234', 'jenis_kelamin' => 'P', 'jurusan_id' => 3, 'prodi_id' => 5, 'kelas_id' => 7],
        ];

        foreach ($mahasiswas as $mahasiswa) {
            Mahasiswa::create($mahasiswa);
        }
    }
}
