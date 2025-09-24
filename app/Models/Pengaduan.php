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
        'nomor_registrasi', 
        'status',           
    ];

    protected static function booted()
    {
        static::creating(function ($pengaduan) {
            // Nomor registrasi acak 8 digit dengan prefix
            $pengaduan->nomor_registrasi = 'REG' . mt_rand(10000000, 99999999);

            // Status default
            $pengaduan->status = 'Draft';
        });
    }

    public function files()
    {
        return $this->hasMany(PengaduanFile::class);
    }

    public function pelapor()
    {
        return $this->hasMany(Pelapor::class, 'pengaduan_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class, 'province_id');
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class, 'regency_id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id');
    }
}
