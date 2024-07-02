<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;
     // Tentukan nama tabel jika berbeda dari nama model (optional)
    protected $table = 'challenges';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
        'judul',
        'preview',
        'deskripsi',
    ];
}