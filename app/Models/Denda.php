<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denda extends Model
{
    use HasFactory;

    protected $table = "denda";

    protected $fillable = [
        "id_peminjaman",
        "jumlah_hari_denda",
        "denda",
    ];

    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class, "id_peminjaman");
    }
}
