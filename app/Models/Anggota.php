<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = "anggota";

    protected $fillable = [
        "nomor_anggota",
        "nik",
        "nama_anggota",
        "no_handphone",
        "email"
    ];

    
}
