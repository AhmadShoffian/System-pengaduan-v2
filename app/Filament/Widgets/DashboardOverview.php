<?php

namespace App\Filament\Widgets;

use App\Models\Pengaduan;
use App\Models\Unit;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class DashboardOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Total User", User::count()),
            Stat::make("Total Pengaduan", Pengaduan::count()),
            Stat::make("Total Unit Kerja", Unit::count()),
        ];
    }
}
