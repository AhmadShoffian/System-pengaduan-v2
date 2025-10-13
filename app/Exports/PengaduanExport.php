<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class PengaduanExport implements FromCollection, WithHeadings, WithMapping, WithStyles, WithColumnWidths
{
    private int $rowNumber = 0;
    protected Collection $records;

    public function __construct(Collection $records)
    {
        $this->records = $records;
    }

    public function collection()
    {
        // [PERUBAHAN] Muat relasi jamak 'pelapors'
        return $this->records;
        // return Pengaduan::with(['user', 'pelapor', 'unit', 'province', 'regency'])->get();
    }


    public function headings(): array
    {
        // Judul kolom tidak perlu diubah
        return [
            'No',
            'Nomor Registrasi',
            'Status',
            'Nama Unit',
            'Provinsi',
            'Kabupaten/Kota',
            'Perihal',
            'Alamat Kejadian',
            'Waktu Kejadian',
            'Uraian',
            'Nama Pelapor',
            'NIP Pelapor',
            'Unit Pelapor',
            'Jabatan Pelapor',
        ];
    }

    public function map($pengaduan): array
    {
        return [
            ++$this->rowNumber,
            $pengaduan->nomor_registrasi,
            $pengaduan->status->value,
            $pengaduan->unit?->name ?? 'N/A',
            $pengaduan->province?->name ?? 'N/A',
            $pengaduan->regency?->name ?? 'N/A',
            $pengaduan->perihal,
            $pengaduan->alamat_kejadian,
            $pengaduan->waktu_kejadian->format('d M Y, H:i'),
            $pengaduan->uraian,

            // [PERUBAHAN UTAMA] Gabungkan data dari semua pelapor
            $pengaduan->pelapor->pluck('nama')->implode("\n"),    // Gabungkan semua nama dengan baris baru
            $pengaduan->pelapor->pluck('nip')->implode("\n"),     // Gabungkan semua NIP dengan baris baru
            $pengaduan->pelapor->pluck('unit')->implode("\n"),    // Gabungkan semua unit dengan baris baru
            $pengaduan->pelapor->pluck('jabatan')->implode("\n"), // Gabungkan semua jabatan dengan baris baru
        ];
    }

    public function columnWidths(): array
    {
        // Lebar kolom bisa disesuaikan lagi
        return [
            'A' => 5, 'B' => 20, 'C' => 15, 'D' => 25, 'E' => 25,
            'F' => 25, 'G' => 40, 'H' => 40, 'I' => 20, 'J' => 50,
            'K' => 30, 'L' => 25, 'M' => 30, 'N' => 30,
        ];
    }

    public function styles(Worksheet $sheet)
    {
        // Membuat header tebal dan mengaktifkan "Wrap Text" untuk kolom pelapor
        return [
            1    => ['font' => ['bold' => true]],
            // [TAMBAHAN] Aktifkan wrap text untuk kolom K sampai N
            'K'  => ['alignment' => ['wrapText' => true]],
            'L'  => ['alignment' => ['wrapText' => true]],
            'M'  => ['alignment' => ['wrapText' => true]],
            'N'  => ['alignment' => ['wrapText' => true]],
        ];
    }
}