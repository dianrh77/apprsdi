<?php

namespace App\Filament\Resources\KelompokResource\Pages;

use App\Filament\Resources\KelompokResource;
use App\Models\Kelompok;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListKelompoks extends ListRecords
{
    protected static string $resource = KelompokResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    protected function getTableQuery(): ?Builder
    {
        return Kelompok::whereRaw('LEFT(kd_kelpk, 3) <> ?', ['KP0'])
            ->orderBy('kd_kelpk');
    }
}
