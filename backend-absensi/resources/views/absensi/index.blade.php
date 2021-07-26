@extends('layouts.body')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Absensi</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Absensi</li>
            <li class="breadcrumb-item active">Data Absensi</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Absensi</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example3" class="table table-sm table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th class="text-center">No.</th>
                                    <th>NIP</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan Fungsional</th>
                                    <th>Jabatan Struktural</th>
                                    <th>Tanggal Absensi</th>
                                    <th class="text-center">Hadir</th>
                                    <th class="text-center">Sakit</th>
                                    <th class="text-center">Izin</th>
                                    <th class="text-center">Alpa</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_absensi as $i => $absensi)
                                <tr>
                                    <td class="text-center">{{ $i +1  }}</td>
                                    <td>{{ $absensi->nip }}</td>
                                    <td>{{ $absensi->nama_pegawai }}</td>
                                    <td>{{ $absensi->fungsional }}</td>
                                    <td>{{ $absensi->struktural }}</td>
                                    <td class="text-center">{{ date('d M Y', strtotime($absensi->tgl_absensi)) }}</td>
                                    <td class="text-center">{{ $absensi->hadir == 1 ? '✓' : '-' }}</td>
                                    <td class="text-center">{{ $absensi->sakit == 1 ? '✓' : '-' }}</td>
                                    <td class="text-center">{{ $absensi->izin == 1 ? '✓' : '-' }}</td>
                                    <td class="text-center">{{ $absensi->alpa == 1 ? '✓' : '-' }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    Data absensi karyawan
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
@endsection