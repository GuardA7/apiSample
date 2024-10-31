<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dosen;

class DosenController extends Controller
{
    public function index()
    {
        // Mengambil semua data dosen beserta jurusan yang terhubung
        $dosens = Dosen::with('jurusan')->get();

        return response()->json($dosens);
    }

    public function show($id)
    {
        // Mengambil data dosen berdasarkan ID beserta jurusan yang terhubung
        $dosen = Dosen::with('jurusan')->find($id);

        if (!$dosen) {
            return response()->json(['message' => 'Dosen not found'], 404);
        }

        return response()->json($dosen);
    }
}
