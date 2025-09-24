<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class UserChartWidget extends ApexChartWidget
{
    protected static ?string $chartId = 'userChart';
    protected static ?string $heading = 'Jumlah User 5 Tahun Terakhir';

    protected function getOptions(): array
    {
        // Ambil data user per tahun
        $users = User::select(
                DB::raw('YEAR(created_at) as year'),
                DB::raw('COUNT(*) as total')
            )
            ->groupBy('year')
            ->orderBy('year')
            ->get()
            ->pluck('total', 'year');

        // Range tahun (5 tahun terakhir termasuk tahun ini)
        $endYear   = date('Y');
        $startYear = $endYear - 4;
        $labels    = range($startYear, $endYear);

        // Data sesuai tahun, isi 0 kalau tidak ada
        $data = [];
        foreach ($labels as $year) {
            $data[] = $users[$year] ?? 0;
        }

        return [
            'chart' => [
                'type' => 'bar', // bisa 'line' kalau mau diganti
                'height' => 300,
            ],
            'series' => [
                [
                    'name' => 'Total User',
                    'data' => $data,
                ],
            ],
            'xaxis' => [
                'categories' => $labels,
            ],
            'colors' => ['#3b82f6'],
            'dataLabels' => [
                'enabled' => true,
            ],
            'plotOptions' => [
                'bar' => [
                    'borderRadius' => 4,
                    'horizontal' => false,
                ],
            ],
        ];
    }
}
