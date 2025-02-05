<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class M_InfoLoker extends Model
{
    use HasFactory;

    protected $table = 'info_loker';
    protected $primaryKey = 'id_info_loker';
    public $incrementing = true; // Pastikan ini true untuk auto-increment
    protected $keyType = 'integer'; // Tipe primary key adalah integer

    protected $fillable = [
        'nama_perusahaan',
        'posisi_pekerjaan',
        'departemen',
        'lokasi_penempatan',
        'durasi_kerja',
        'periode_lamar_berakhir',
        'jenis_pekerjaan',
        'metode_kerja'
    ];

    public function tingkatPendidikan()
    {
        return $this->hasMany(M_InfoTingkatPendidikan::class, 'id_info_loker', 'id_info_loker');
    }

    public function deskripsiPekerjaan()
    {
        return $this->hasMany(M_InfoDeskripsiPekerjaan::class, 'id_info_loker', 'id_info_loker');
    }

    public function dokumenPersyaratan()
    {
        return $this->hasMany(M_InfoDokumenPersyaratan::class, 'id_info_loker', 'id_info_loker');
    }

}
