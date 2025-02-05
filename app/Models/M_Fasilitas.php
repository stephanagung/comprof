<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_Fasilitas extends Model
{
    use HasFactory;

    protected $table = 'fasilitas';
    protected $primaryKey = 'id_fasilitas';
    public $incrementing = true; // Pastikan ini true untuk auto-increment
    protected $keyType = 'integer'; // Tipe primary key adalah integer

    protected $fillable = [
        'kategori_fasilitas',
        'nama_item',
        'qty_item'
    ];
}
