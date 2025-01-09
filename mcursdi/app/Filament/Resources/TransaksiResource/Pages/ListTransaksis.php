<?php

namespace App\Filament\Resources\TransaksiResource\Pages;

use Filament\Actions;
use App\Models\Transaksi;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TransaksiResource;

class ListTransaksis extends ListRecords
{
    protected static string $resource = TransaksiResource::class;

    protected ?string $heading = 'Daftar Pasien MCU';



    // protected function getTableQuery(): ?Builder
    // {
    //     return Transaksi::whereDate('tg_masuk', '2024-10-07')
    //         ->where('nama_ruang', 'mcu')
    //         ->orderByDesc('tg_masuk');
    // }

    // public function getTabs(): array
    // {
    //     return [
    //         'today' => Tab::make('Hari Ini')
    //             ->modifyQueryUsing(fn(Builder $query) => $query->whereDate('tg_masuk', now())
    //                 ->where('nama_ruang', 'mcu')
    //                 ->orderByDesc('tg_masuk')),
    //         'all' => Tab::make('Semua')
    //             ->modifyQueryUsing(
    //                 fn(Builder $query) => $query->where('nama_ruang', 'mcu')
    //                     ->whereNotNull('kd_regpoli')
    //                     ->whereYear('tg_masuk', '2024')
    //             )
    //     ];
    // }
}
