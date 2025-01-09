<?php

namespace App\Filament\Resources\TransaksiResource\Pages;

use Filament\Actions;
use Filament\Pages\Actions\ButtonAction;
use Filament\Resources\Pages\ViewRecord;
use App\Filament\Resources\TransaksiResource;

class ViewTransaksi extends ViewRecord
{
    protected static string $resource = TransaksiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //Actions\EditAction::make(),
        ];
    }
}
