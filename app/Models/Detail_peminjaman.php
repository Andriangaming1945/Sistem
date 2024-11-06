<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_peminjaman extends Model
{
    use HasFactory;

    protected $table = "detail_peminjaman";

    protected $fillable = [
        "id_peminjaman",
        "id_buku",
        "tgl_peminjaman",
        "tgl_pengembalian",
        "keterangan"
    ];
}
