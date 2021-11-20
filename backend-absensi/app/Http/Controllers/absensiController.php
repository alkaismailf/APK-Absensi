<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class absensiController extends Controller
{
    public function index() 
    {
        $data_absensi = \App\Absensi::join('tb_karyawan', 'tb_karyawan.nip', '=', 'tb_absensi.nip')
        ->select('tb_absensi.*', 'tb_karyawan.nama_pegawai', 'tb_karyawan.fungsional','tb_karyawan.struktural')
        ->orderBy('tb_absensi.tgl_absensi')
        ->get();
        return view('absensi.index', ['data_absensi' => $data_absensi]);
    }

    public function indexLaporan() 
    {            
        // $data_laporan = DB::table('tb_absensi')
        //     ->select(DB::raw('tb_absensi.nip, tb_karyawan.nama_pegawai, tb_karyawan.fungsional, tb_karyawan.struktural, tb_absensi.tgl_absensi, sum(tb_absensi.hadir) as total_hadir, sum(tb_absensi.sakit) as total_sakit, sum(tb_absensi.izin) as total_izin, sum(tb_absensi.alpa) as total_alpa'))
        //     ->join('tb_karyawan', 'tb_karyawan.nip', '=', 'tb_absensi.nip')
        //     ->groupBy('tb_absensi.nip')
        //     ->orderBy('tb_absensi.tgl_absensi')
        //     ->get();

        $data_laporan = DB::select(DB::raw("
            select `tb_absensi`.`nip`, `tb_karyawan`.`nama_pegawai`, `tb_karyawan`.`fungsional`, `tb_karyawan`.`struktural`, tb_absensi.tgl_absensi, sum(tb_absensi.hadir) as total_hadir, sum(tb_absensi.sakit) as total_sakit, sum(tb_absensi.izin) as total_izin, sum(tb_absensi.alpa) as total_alpa
            from `tb_absensi` 
            inner join `tb_karyawan` on `tb_absensi`.`nip` = `tb_karyawan`.`nip` 
            group by tb_absensi.nip, month(tb_absensi.tgl_absensi) order by month(tb_absensi.tgl_absensi)
        "));

        return view('absensi.indexLaporan', ['data_laporan' => $data_laporan]);
    }
}
