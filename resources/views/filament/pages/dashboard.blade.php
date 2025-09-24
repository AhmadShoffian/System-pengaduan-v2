<x-filament-panels::page>
    {{-- Overview widgets --}}
    <x-filament-widgets::widgets
        :widgets="[
            \App\Filament\Widgets\DashboardOverview::class,
        ]"
        :columns="2"
    />

    {{-- Chart widgets --}}
    <x-filament-widgets::widgets
        :widgets="[
            \App\Filament\Widgets\UserChartWidget::class,
            \App\Filament\Widgets\PengaduanChartWidget::class,
        ]"
        :columns="2"
    />

    <x-filament-widgets::widgets
        :widgets="[
            \App\Filament\Widgets\StatusChartWidget::class,
            \App\Filament\Widgets\CountPengaduanChartWidget::class,
        ]"
        :columns="2"/>
</x-filament-panels::page>
