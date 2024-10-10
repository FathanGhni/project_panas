<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    use HasFactory;

    protected $table = 'wargas';

    protected $fillable = [
        'id',
        'nama_warga',
        'nik',
        'alamat',
        'tanggal_lahir',
        'umur',
        'pekerjaan',
        'jenis_kelamin',
        'status_perkawinan',
        'agama',
        'status_kewarganegaraan',
    ];
}

