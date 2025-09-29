<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPengaduan extends Model
{
    use HasFactory;

    /**
     * Atribut yang diizinkan untuk diisi secara massal (mass assignable).
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'pengaduan_id',
        'status',
        'deskripsi',
        'user_id',
    ];

    /**
     * Relasi ke model Pengaduan.
     */
    public function pengaduan()
    {
        return $this->belongsTo(Pengaduan::class);
    }

    /**
     * Relasi ke model User (admin yang mengubah).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}