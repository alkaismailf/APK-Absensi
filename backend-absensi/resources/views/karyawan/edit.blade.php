@extends('layouts.master')

@section('content')
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <!-- Default box -->
                        <div class="card mt-4">
                            <div class="card-header">
                                <h3 class="card-title">Edit Data Karyawan</h3>
                        
                                
                            </div>
                            <div class="card-body">      
                                <form action="/karyawan/{{ $karyawan->id }}/update" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                    <label for="nip" class="form-label">Nomor Induk Pegawai</label>
                                    <input name="nip" type="text" class="form-control" id="nip" value="{{ $karyawan->nip }}">
                                    </div>
                                    <div class="mb-3">
                                    <label for="namaPegawai" class="form-label">Nama Pegawai</label>
                                    <input name="nama_pegawai" type="text" class="form-control" id="namaPegawai" value="{{ $karyawan->nama_pegawai }}">
                                    </div>
                                    <div class="mb-3">
                                    <label for="fungsional" class="form-label">Jabatan Fungsional</label>
                                    <select name="fungsional" class="form-control" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="Engineer" @if($karyawan->fungsional == 'Engineer') selected @endif>Engineer</option>
                                        <option value="Administrasi" @if($karyawan->fungsional == 'Administrasi') selected @endif>Administrasi</option>
                                        <option value="Support" @if($karyawan->fungsional == 'Support') selected @endif>Support</option>
                                    </select>
                                    </div>
                                    <div class="mb-3">
                                    <label for="struktural" class="form-label">Jabatan Struktural</label>
                                    <select name="struktural" class="form-control" aria-label="Default select example">
                                        <option selected></option>
                                        <option value="Manager" @if($karyawan->struktural == 'Manager') selected @endif>Manager</option>
                                        <option value="Team Leader" @if($karyawan->struktural == 'Team Leader') selected @endif>Team Leader</option>
                                        <option value="Staff" @if($karyawan->struktural == 'Staff') selected @endif>Staff</option>
                                    </select>
                                    </div>
                                    <button type="submit" class="btn btn-warning">Update</button>
                                    
                                </form>  
                            </div>
                            <!-- /.card-body -->
                            
                            <!-- /.card-footer-->
                        </div>
                        <!-- /.card -->  
                    </div>
                </div>
            </div>
        </section> 
@endsection 