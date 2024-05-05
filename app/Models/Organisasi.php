<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organisasi extends Model
{
    protected $primaryKey = 'id_organisasi';
    protected $fillable = [
        'nama_organisasi',
        'ketua',
        'wakil',
        'jumlah_anggota',
    ];
}
