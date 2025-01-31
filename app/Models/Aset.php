<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aset extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_aset',
        'jenis_aset',
        'nama_aset',
        'status',
        'deskripsi',
    ];
}
