<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warga extends Model
{
    protected $primaryKey = 'id_warga';
    protected $fillable = [
        'nik', 
        'no_kk', 
        'nama', 
        'tempat_tanggal_lahir', 
        'jenis_kelamin', 
        'alamat', 
        'agama', 
        'status', 
        'pekerjaan', 
        'kewarganegaraan', 
    ];
}
