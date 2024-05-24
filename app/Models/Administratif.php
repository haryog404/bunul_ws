<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administratif extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_pengajuan', // Kolom 'id_pengajuan'
        'nama_pengajuan', // Kolom 'nama_pengajuan'
        'nik_pengajuan', // Kolom 'nik_pengajuan'
        'kk_pengajuan', // Kolom 'kk_pengajuan'
        'alamat_pengajuan', // Kolom 'alamat_pengajuan'
        'tujuan_pengajuan', // Kolom 'tujuan_pengajuan'
        'jenis_pengajuan', // Kolom 'jenis_pengajuan'
        'no_hp', // Kolom 'no_hp'
        'catatan_pengajuan', // Kolom 'catatan_pengajuan'// Kolom 'waktu_pengajuan'
        'verifikasi_pengajuan',
        'created_at',
        'updated_at',
    ];
}
