<?php

namespace App\Exports;

use App\Models\Pengaduan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class Export implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Pengaduan::select(
            'nomor_registrasi',
            'perihal',
            'status',
            'waktu_kejadian'
        )->get();
    }

    public function headings(): array
    {
        return [
            'Nomor Registrasi',
            'Perihal',
            'Status',
            'Waktu Kejadian',
        ];
    }
}
