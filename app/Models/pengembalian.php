<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\peminjaman;
class pengembalian extends Model
{
    use HasFactory;

    protected $table = 'pengembalian';

    protected $fillable = [
        'id_peminjaman',
        'tanggal_kembali',
        'denda',
    ];

    public function peminjaman()
    {
        return $this->belongsTo(peminjaman::class, 'id_peminjaman');
    }
}

