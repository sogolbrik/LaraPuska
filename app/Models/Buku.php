<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $fillable = [
        'kategori_id',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit',
        'deskripsi',
        'cover',
        'stok',
        'status',
    ];

    public function kategori(){
        return $this->belongsTo(Kategori::class);
    }
}
