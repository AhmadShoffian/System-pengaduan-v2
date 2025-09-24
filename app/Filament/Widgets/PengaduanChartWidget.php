<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use Illuminate\Support\Facades\DB;
use Leandrocfe\FilamentApexCharts\Widgets\ApexChartWidget;

class PengaduanChartWidget extends ApexChartWidget
{
    protected static ?string $heading = 'Jumlah Pengaduan per Unit Kerja';

    protected int|string|array $columnSpan = '1/2';
    protected static ?string $maxHeight = '300px';

    protected function getOptions(): array
    {
        $pengaduan = Pengaduan::select(
            'unit_id',
            DB::raw('COUNT(*) as total')
        )
        ->with('unit:id,name')
        ->groupBy('unit_id')
        ->get();

        $labels = $pengaduan->map(fn($item) => $item->unit?->name ?? 'Tidak ada')->toArray();
        $data   = $pengaduan->pluck('total')->toArray();

        $colors = [
            '#3b82f6',
            '#f59e0b',
            '#10b981',
            '#ef4444',
            '#8b5cf6',
            '#06b6d4',
        ];

        return [
            'chart' => [
                'type' => 'pie',
            ],
            'labels' => $labels,
            'series' => $data,
            'colors' => $colors,
            'legend' => [
                'position' => 'bottom',
            ],
            'responsive' => [
                [
                    'breakpoint' => 480,
                    'options' => [
                        'chart' => [
                            'width' => 300,
                        ],
                        'legend' => [
                            'position' => 'bottom',
                        ],
                    ],
                ],
            ],
        ];
    }
}
