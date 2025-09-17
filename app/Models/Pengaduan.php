<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $fillable = [
        'perihal',
        'alamat_kejadian',
        'tanggal_kejadian',
        'waktu_kejadian',
        'unit_id',
        'province_id',
        'regency_id',
        'uraian',
        'pelapor_id',
        'pengaduan_file'
        // 'nama',
        // 'nip',
        // 'unit',
        // 'jabatan'
    ];

    public function files()
    {
        return $this->hasMany(PengaduanFile::class);
    }

    public function pelapor()
    {
        return $this->hasMany(Pelapor::class);
    }
}
