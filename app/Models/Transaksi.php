<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $fillable = [
        'nomor',
        'qty',
        'harga_transaksi',
        'produk_id',
        'pelanggan_id',
        'status_transaksi',
    ];

    public function getProduct()
    {
        return Produk::find($this->produk_id);
    }

    public function getPelanggan()
    {
        return Pelanggan::find($this->pelanggan_id);
    }
}
