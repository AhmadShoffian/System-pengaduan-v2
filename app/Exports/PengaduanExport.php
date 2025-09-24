<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Support\Facades\Storage;

class PengaduanExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Pengaduan::with(['unit', 'pelapor', 'files'])->get()->map(function($pengaduan) {
            // Pelapor
            $namaPelapor = $pengaduan->pelapor->pluck('nama')->join(', ');
            $nipPelapor = $pengaduan->pelapor->pluck('nip')->join(', ');
            $unitPelapor = $pengaduan->pelapor->pluck('unit')->join(', ');
            $jabatanPelapor = $pengaduan->pelapor->pluck('jabatan')->join(', ');

            // Lampiran (link)
            $lampiran = $pengaduan->files->map(function($file) {
                return $file->file_path ? asset('storage/' . $file->file_path) : null;
            })->filter()->join(', ');

            return [
                'Nomor Registrasi' => $pengaduan->nomor_registrasi,
                'Perihal' => $pengaduan->perihal,
                'Status' => $pengaduan->status,
                'Waktu Kejadian' => $pengaduan->waktu_kejadian,
                'Unit' => $pengaduan->unit?->name,
                'Nama Pelapor' => $namaPelapor,
                'NIP Pelapor' => $nipPelapor,
                'Unit Pelapor' => $unitPelapor,
                'Jabatan Pelapor' => $jabatanPelapor,
                'Lampiran' => $lampiran,
            ];
        });
    }

    public function headings(): array
    {
        return [
            'Nomor Registrasi',
            'Perihal',
            'Status',
            'Waktu Kejadian',
            'Unit',
            'Nama Pelapor',
            'NIP Pelapor',
            'Unit Pelapor',
            'Jabatan Pelapor',
            'Lampiran (Link)',
        ];
    }
}
