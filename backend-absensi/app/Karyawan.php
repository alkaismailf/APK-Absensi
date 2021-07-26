<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'tb_karyawan';

    protected $fillable = ['nip', 'nama_pegawai', 'fungsional', 'struktural'];
}
