<?php

namespace App\Http\Controllers;

use App\Absensi;
use App\Karyawan;
use Illuminate\Http\Request;

class kehadiranController extends Controller
{
    public function getAll()
    {
        $absensi = Absensi::all();
        return response()->json($absensi);
    }

    public function getAllKaryawan()
    {
        $karyawan = Karyawan::all();
        return response()->json($karyawan);
    }

    // konfirmasi kehadiran, proses buat data baru
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required',
            'tgl_absensi' => 'required'
        ]);
        $absensi = Absensi::create($request->all());
        return response()->json(['message' => 'Konfirmasi kehadiran berhasil!', 'absensi' => $absensi]);
    }
}
