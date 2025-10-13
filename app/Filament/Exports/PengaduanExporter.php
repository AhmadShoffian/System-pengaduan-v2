<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengaduanExport implements FromCollection, WithHeadings, WithMapping
{
    /**
    * Metode ini mengambil data dari database.
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Ambil semua data pengaduan, sertakan relasi user untuk efisiensi
        return Pengaduan::with('user')->get();
    }

    /**
     * Metode ini mendefinisikan judul untuk setiap kolom di baris pertama.
     * @return array
     */
    public function headings(): array
    {
        return [
            'Nomor Registrasi',
            'Perihal',
            'Status',
            'Alamat Kejadian',
            'Waktu Kejadian',
            'Pelapor',
            'Tanggal Dibuat',
        ];
    }

    /**
     * Metode ini memetakan data untuk setiap baris.
     * Urutannya harus sesuai dengan headings().
     * @param Pengaduan $pengaduan
     * @return array
     */
    public function map($pengaduan): array
    {
        return [
            $pengaduan->nomor_registrasi,
            $pengaduan->perihal,
            $pengaduan->status,
            $pengaduan->alamat_kejadian,
            $pengaduan->waktu_kejadian->format('d M Y, H:i'), // Format tanggal
            $pengaduan->user->name ?? 'N/A', // Ambil nama dari relasi, beri fallback 'N/A'
            $pengaduan->created_at->format('d M Y, H:i'),
        ];
    }
}