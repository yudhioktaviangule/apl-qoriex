<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'harga',
        'gambar',
        'kategori_id',
        'stok',
        'inisial',
        'kamera_depan',
        'kamera_belakang',
        'layar',
        'cpu',
        'gpu',
        'simcard',
        'battery',
    ];

    public function getKategori()
    {
      return Kategori::find($this->kategori_id);
    }
}
