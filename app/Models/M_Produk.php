<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Produk extends Model
{
    use HasFactory;

    protected $table = 'produk';
    protected $primaryKey = 'id_produk';
    public $incrementing = true; // Pastikan ini true untuk auto-increment
    protected $keyType = 'integer'; // Tipe primary key adalah integer

    protected $fillable = [
        'nama_produk',
        'kategori_produk',
        'jenis_produk',
        'foto_produk',
        'pt_produksi',
    ];
}
