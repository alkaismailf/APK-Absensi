@extends('layouts.body')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Laporan Kehadiran</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Absensi</li>
            <li class="breadcrumb-item active">Laporan Kehadiran</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Laporan Kehadiran</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-sm table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>NIP</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan Fungsional</th>
                                    <th>Jabatan Struktural</th>
                                    <th>Bulan</th>
                                    <th class="text-center">Hadir</th>
                                    <th class="text-center">Sakit</th>
                                    <th class="text-center">Izin</th>
                                    <th class="text-center">Alpa</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($data_laporan as $i => $laporan)
                                <tr>
                                    <td>{{ $i+1 }}</td>
                                    <td>{{ $laporan->nip }}</td>
                                    <td>{{ $laporan->nama_pegawai }}</td>
                                    <td>{{ $laporan->fungsional }}</td>
                                    <td>{{ $laporan->struktural }}</td>
                                    <td>{{ date('F Y', strtotime($laporan->tgl_absensi)) }}</td>
                                    <td>{{ $laporan->total_hadir }}</td>
                                    <td>{{ $laporan->total_sakit }}</td>
                                    <td>{{ $laporan->total_izin }}</td>
                                    <td>{{ $laporan->total_alpa }}</td>                    
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection