<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;

    protected $table = "buku";

    protected $fillable = [
        "id_lokasi",
        "id_kategori",
        "judul",
        "pengarang",
        "penerbit",
        "tahun_terbit",
        "keterangan",
        "stok",
    ];

    public function lokasi(){
        return $this->belongsTo(Lokasi::class, 'id_lokasi');
    }

    public function kategori(){
        return $this->belongsTo(Kategori::class, 'id_kategori');
    }
}
