<?php

namespace App\Filament\Resources\McuTransactionResource\Pages;

use App\Filament\Resources\McuTransactionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMcuTransactions extends ListRecords
{
    protected static string $resource = McuTransactionResource::class;

    protected ?string $heading = 'Transaksi MCU';

    protected function getHeaderActions(): array
    {
        return [];
    }
}
