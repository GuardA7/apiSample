<?php

namespace Database\Seeders;

use App\Models\Kelas;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasList = [
            ['nama_kelas' => 'SI-1A', 'prodi_id' => 1],
            ['nama_kelas' => 'SI-1B', 'prodi_id' => 1],
            ['nama_kelas' => 'TK-1A', 'prodi_id' => 2],
            ['nama_kelas' => 'TK-1B', 'prodi_id' => 2],
            ['nama_kelas' => 'TL-1A', 'prodi_id' => 3],
            ['nama_kelas' => 'TL-1B', 'prodi_id' => 3],
            ['nama_kelas' => 'MK-1A', 'prodi_id' => 5],
            ['nama_kelas' => 'MK-1B', 'prodi_id' => 5],
        ];

        foreach ($kelasList as $kelas) {
            Kelas::create($kelas);
        }
    }
}
