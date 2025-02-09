<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    use HasFactory;
    protected $table = 'buku';
    protected $fillable = ['id', 'judul', 'penulis', 'penerbit', 'tahun_terbit', 'deskripsi', 'cover', 'halaman'];
    public function kategori(){
        return $this->belongsToMany(KategoriBuku::class, 'buku_relasi', 'buku_id', 'kategori_id');
    }
}
