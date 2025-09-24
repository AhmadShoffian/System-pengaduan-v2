<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;
use Illuminate\Support\Facades\DB;

class StatusChartWidget extends ApexChartWidget
{
    protected static ?string $chartId = 'statusChart';
    protected static ?string $heading = 'Jumlah Pengaduan per Status';

    protected function getOptions(): array
    {
        $pengaduan = Pengaduan::select(
            'status',
            DB::raw('COUNT(*) as total')
        )
        ->groupBy('status')
        ->get();

        $labels = $pengaduan->pluck('status')->toArray();
        $data   = $pengaduan->pluck('total')->toArray();

        return [
            'chart' => [
                'type' => 'donut',
                'height' => 300,
            ],
            'series' => $data,   // wajib array
            'labels' => $labels, // wajib array
            'legend' => [
                'position' => 'bottom',
            ],
            'plotOptions' => [
                'pie' => [
                    'donut' => [
                        'labels' => [
                            'show' => true,
                            'total' => [
                                'show' => true,
                                'label' => 'Total',
                            ],
                        ],
                    ],
                ],
            ],
        ];
    }
}
