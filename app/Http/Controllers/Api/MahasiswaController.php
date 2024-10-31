<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa beserta jurusan, prodi, dan kelas yang terhubung
        $mahasiswas = Mahasiswa::with(['jurusan', 'prodi', 'kelas'])->get();

        return response()->json($mahasiswas);
    }

    public function show($id)
    {
        // Mengambil data mahasiswa berdasarkan ID beserta jurusan, prodi, dan kelas yang terhubung
        $mahasiswa = Mahasiswa::with(['jurusan', 'prodi', 'kelas'])->find($id);

        if (!$mahasiswa) {
            return response()->json(['message' => 'Mahasiswa not found'], 404);
        }

        return response()->json($mahasiswa);
    }
}
