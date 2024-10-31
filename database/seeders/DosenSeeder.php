<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    public function run()
    {
        $dosens = [
            ['nama' => 'Dr. Suryadi, M.Kom', 'nidn' => '0011223344', 'jenis_kelamin' => 'L', 'jurusan_id' => 1],
            ['nama' => 'Dr. Endang Wahyuni, M.T', 'nidn' => '5566778899', 'jenis_kelamin' => 'P', 'jurusan_id' => 2],
            ['nama' => 'Dr. Agus Supriyadi, M.M', 'nidn' => '9988776655', 'jenis_kelamin' => 'L', 'jurusan_id' => 3],
        ];

        foreach ($dosens as $dosen) {
            Dosen::create($dosen);
        }
    }
}
