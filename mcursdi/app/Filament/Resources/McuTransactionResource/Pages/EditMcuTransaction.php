<?php

namespace App\Filament\Resources\McuTransactionResource\Pages;

use App\Filament\Resources\McuTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMcuTransaction extends EditRecord
{
    protected static string $resource = McuTransactionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
