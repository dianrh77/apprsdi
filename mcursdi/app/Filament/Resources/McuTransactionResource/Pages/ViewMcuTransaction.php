<?php

namespace App\Filament\Resources\McuTransactionResource\Pages;

use App\Filament\Resources\McuTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewMcuTransaction extends ViewRecord
{
    protected static string $resource = McuTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
