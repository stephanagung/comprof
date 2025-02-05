<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_InfoTingkatPendidikan extends Model
{
    use HasFactory;

    protected $table = 'info_tingkat_pendidikan';
    protected $primaryKey = 'id_info_tingkat_pendidikan';
    public $incrementing = true; // Pastikan ini true untuk auto-increment
    protected $keyType = 'integer'; // Tipe primary key adalah integer

    protected $fillable = [
        'id_info_loker',
        'nama_tingkat_pendidikan'
    ];

    public function loker()
    {
        return $this->belongsTo(M_InfoLoker::class, 'id_info_loker', 'id_info_loker');
    }

}
