<?php

namespace App\Models;

use App\Enums\StatusPengaduan;
use App\Events\StatusPengaduanUpdated;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'user_id',
    ];

    protected static function booted()
    {
        static::creating(function ($pengaduan) {
            // Nomor registrasi acak 8 digit dengan prefix
            $pengaduan->nomor_registrasi = 'REG' . mt_rand(10000000, 99999999);

            // Status default
            $pengaduan->status = 'Open';
        });
    }

    protected $casts = [
        'status' => StatusPengaduan::class,
        'waktu_kejadian' => 'datetime',
    ];

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

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function riwayat()
    {
        // Pastikan nama method 'riwayat' sudah benar
        return $this->hasMany(RiwayatPengaduan::class)->orderBy('created_at', 'desc');
    }

    // Di dalam class Pengaduan
    public function ubahStatus(StatusPengaduan $status, ?string $catatan, ?int $adminId): void
    {
        $statusLama = $this->status->value;
        $statusBaru = $status->value;

        // 1. Update status record utama
        $this->update(['status' => $statusBaru]);

        // 2. Buat entri riwayat baru
        $riwayat = $this->riwayat()->create([
            'status' => $statusBaru,
            'deskripsi' => $catatan ?? "Status diubah dari {$statusLama} menjadi {$statusBaru}.",
            'user_id' => $adminId,
        ]);

        // 3. Siarkan event
        broadcast(new StatusPengaduanUpdated($riwayat))->toOthers();
    }
}
