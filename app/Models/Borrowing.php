<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Borrowing extends Model
{
    protected $fillable = [
        'buku_id',
        'users_id',
        'borrowed_at',
        'due_date',
        'returned_at',
        'fine'
    ];

    public function book()
    {
        return $this->belongsTo(Buku::class, 'buku_id'); // Pastikan penamaan relasi dan kolom yang digunakan benar
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'users_id'); // Pastikan penamaan relasi dan kolom yang digunakan benar
    }

    public function calculateFine()
    {
        $finePerDay = 2500;
        if ($this->returned_at > $this->due_date) {
            $lateDays = Carbon::parse($this->returned_at)->diffInDays($this->due_date);
            return $finePerDay * $lateDays;
        }
        return 0;
    }
}


