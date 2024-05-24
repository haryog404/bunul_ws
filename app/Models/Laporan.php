<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_laporan',
        'nama_pelapor',
        'klasifikasi_laporan',
        'judul_laporan',
        'isi_laporan',
        'tgl_kejadian',
        'lokasi_kejadian',
        'gambar',
        'created_at',
        'updated_at'
    ];
}
