<?php

namespace Database\Seeders;

use App\Models\Jurusan;
use Illuminate\Database\Seeder;

class JurusanSeeder extends Seeder
{
    public function run()
    {
        $jurusans = [
            ['nama_jurusan' => 'Teknik Informatika'],
            ['nama_jurusan' => 'Teknik Elektro'],
            ['nama_jurusan' => 'Manajemen Bisnis']
        ];

        foreach ($jurusans as $jurusan) {
            Jurusan::create($jurusan);
        }
    }
}
