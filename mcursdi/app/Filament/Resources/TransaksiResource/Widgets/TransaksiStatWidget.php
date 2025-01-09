<?php

namespace App\Filament\Resources\TransaksiResource\Widgets;

use Carbon\Carbon;
use App\Models\Transaksi;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;

class TransaksiStatWidget extends BaseWidget
{

    protected function getStats(): array
    {
        return [
            stat::make('Hari ini', Transaksi::whereBetween('tg_masuk', [
                Carbon::parse(now())->startOfDay(),
                Carbon::parse(now())->endOfDay(),
            ])
                ->where('nama_ruang', 'mcu')
                ->whereNotNull('kd_regpoli')->count())
                ->description('Pasien mendaftar MCU hari ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            stat::make('Bulan ini', Transaksi::whereBetween('tg_masuk', [
                Carbon::parse(now())->startOfMonth(),
                Carbon::parse(now())->endOfMonth(),
            ])
                ->where('nama_ruang', 'mcu')
                ->whereNotNull('kd_regpoli')->count())
                ->description('Pasien mendaftar MCU bulan ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
            stat::make('Tahun ini', Transaksi::whereBetween('tg_masuk', [
                Carbon::parse(now())->startOfYear(),
                Carbon::parse(now())->endOfYear(),
            ])
                ->where('nama_ruang', 'mcu')
                ->whereNotNull('kd_regpoli')->count())
                ->description('Pasien mendaftar MCU tahun ini')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                ->color('success'),
        ];
    }
}
