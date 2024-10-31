<?php

namespace Database\Seeders;

use App\Models\Prodi;
use Illuminate\Database\Seeder;

class ProdiSeeder extends Seeder
{
    public function run()
    {
        $prodis = [
            ['nama_prodi' => 'Sistem Informasi', 'jurusan_id' => 1],
            ['nama_prodi' => 'Teknik Komputer', 'jurusan_id' => 1],
            ['nama_prodi' => 'Teknik Listrik', 'jurusan_id' => 2],
            ['nama_prodi' => 'Teknik Elektronika', 'jurusan_id' => 2],
            ['nama_prodi' => 'Manajemen Keuangan', 'jurusan_id' => 3],
            ['nama_prodi' => 'Manajemen Pemasaran', 'jurusan_id' => 3],
        ];

        foreach ($prodis as $prodi) {
            Prodi::create($prodi);
        }
    }
}
