<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_InfoDeskripsiPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'info_deskripsi_pekerjaan';
    protected $primaryKey = 'id_info_deskripsi_pekerjaan';
    public $incrementing = true; // Pastikan ini true untuk auto-increment
    protected $keyType = 'integer'; // Tipe primary key adalah integer

    protected $fillable = [
        'id_info_loker',
        'deskripsi_pekerjaan'
    ];

    public function loker()
    {
        return $this->belongsTo(M_InfoLoker::class, 'id_info_loker', 'id_info_loker');
    }

}
