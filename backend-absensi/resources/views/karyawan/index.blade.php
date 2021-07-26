@extends('layouts.body')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Karyawan</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Karyawan</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        @if (session('sukses'))
            <div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
                {{ session('sukses') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Data Karyawan</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="col-12">
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success float-right mt-4 mr-3" data-toggle="modal" data-target="#exampleModal">
                            <i class="fas fa-plus"></i>
                            Tambah data
                        </button>
                    </div>
                    <div class="card-body">
                        
                        <table id="example2" class="table table-bordered table-hover">
                            <thead class="text-center">
                                <tr>
                                    <th>No.</th>
                                    <th>NIP</th>
                                    <th>Nama Pegawai</th>
                                    <th>Jabatan Fungsional</th>
                                    <th>Jabatan Struktural</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data_karyawan as $i => $karyawan)
                                <tr>
                                    <td class="text-center">{{ $i+1 }}</td>
                                    <td>{{ $karyawan->nip }}</td>
                                    <td>{{ $karyawan->nama_pegawai }}</td>
                                    <td>{{ $karyawan->fungsional }}</td>
                                    <td>{{ $karyawan->struktural }}</td>
                                    <td class="text-center">
                                        <a href="/karyawan/{{ $karyawan->id }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                        <a href="/karyawan/{{ $karyawan->id }}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan dihapus?')"><i class="far fa-trash-alt"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    Data karyawan aktif
                    </div>
                    <!-- /.card-footer-->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah data karyawan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form action="/karyawan/create" method="POST">
                @csrf
                <div class="mb-3">
                <label for="nip" class="form-label">Nomor Induk Pegawai</label>
                <input name="nip" type="text" class="form-control" id="nip" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                <label for="namaPegawai" class="form-label">Nama Pegawai</label>
                <input name="nama_pegawai" type="text" class="form-control" id="namaPegawai">
                </div>
                <div class="mb-3">
                <label for="fungsional" class="form-label">Jabatan Fungsional</label>
                <select name="fungsional" class="form-control" aria-label="Default select example">
                    <option selected></option>
                    <option value="Engineer">Engineer</option>
                    <option value="Administrasi">Administrasi</option>
                    <option value="Support">Support</option>
                </select>
                </div>
                <div class="mb-3">
                <label for="struktural" class="form-label">Jabatan Struktural</label>
                <select name="struktural" class="form-control" aria-label="Default select example">
                    <option selected></option>
                    <option value="Manager">Manager</option>
                    <option value="Team Leader">Team Leader</option>
                    <option value="Staff">Staff</option>
                </select>
                </div>  
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
</div>
</div>
@endsection