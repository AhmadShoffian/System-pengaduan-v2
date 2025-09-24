<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class CountPengaduanChartWidget extends ApexChartWidget
{
    protected static ?string $heading = 'Jumlah Pengaduan per Bulan (Tahun Ini)';
    protected int|string|array $columnSpan = '1/2';
    protected static ?string $maxHeight = '295px';

    protected function getOptions(): array
    {
        $tahun = date('Y');

        $pengaduan = Pengaduan::select(
            DB::raw('MONTH(created_at) as bulan'),
            DB::raw('COUNT(*) as total')
        )
            ->whereYear('created_at', $tahun)
            ->groupBy('bulan')
            ->orderBy('bulan')
            ->get()
            ->pluck('total', 'bulan');

        $labels = ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'];

        $data = [];
        foreach (range(1, 12) as $i) {
            $data[] = $pengaduan[$i] ?? 0;
        }

        return [
            'chart' => [
                'type' => 'bar',
                'height' => 295,
            ],
            'series' => [
                [
                    'name' => 'Total Pengaduan',
                    'data' => $data, // array numerik, aman
                ],
            ],
            'xaxis' => [
                'categories' => $labels,
            ],
        ];
    }
}
