<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;

    protected $table = "peminjaman";

    protected $fillable = [
        "id_anggota",
        "id_pengguna",
        "kd_peminjaman"
    ];

    public function anggota(){
        return $this->belongsTo(Anggota::class, 'id_anggota');
    }

    public function pengguna(){
        return $this->belongsTo(Kategori::class, 'id_pengguna');
    }
}
