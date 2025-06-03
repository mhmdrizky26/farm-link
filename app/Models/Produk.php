<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    // Nama-nama kolom yang bisa diisi lewat mass assignment
    protected $fillable = [
        'nama',
        'gambar',
        'harga',
        'stok',
        'deskripsi',
    ];
}
