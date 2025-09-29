<?php
// File: app/Enums/StatusPengaduan.php
namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum StatusPengaduan: string implements HasColor, HasIcon, HasLabel
{
    case Draft = 'Draft';
    case Open = 'Open';
    case Proses = 'Proses';
    case Selesai = 'Selesai';

    public function getLabel(): string
    {
        return $this->value; // langsung tampilkan sesuai value
    }

    public function getColor(): string|array|null
    {
        return match ($this) {
            self::Draft => 'gray',
            self::Open => 'info',
            self::Proses => 'warning',
            self::Selesai => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Draft => 'heroicon-o-pencil',
            self::Open => 'heroicon-o-envelope-open',
            self::Proses => 'heroicon-o-arrow-path',
            self::Selesai => 'heroicon-o-check-circle',
        };
    }
}
