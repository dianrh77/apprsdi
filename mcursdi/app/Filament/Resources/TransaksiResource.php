<?php

namespace App\Filament\Resources;

use Carbon\Carbon;
use App\Models\Rgs;
use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Transaksi;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Grid;
use Filament\Tables\Filters\Filter;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Tabs\Tab;
use Filament\Tables\Actions\LinkAction;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\TransaksiResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;
use App\Filament\Resources\TransaksiResource\RelationManagers;
use App\Filament\Resources\TransaksiResource\RelationManagers\McutransactionRelationManager;
use App\Filament\Resources\TransaksiResource\RelationManagers\McutransactionTodayRelationManager;

class TransaksiResource extends Resource
{
    protected static ?string $model = Transaksi::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationLabel = 'Pasien MCU';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('I. Identitas Pasien')->schema([
                    Forms\Components\TextInput::make('kd_rekmed')
                        ->label('Nomor Rekam Medis')
                        ->columnSpan(1)
                        ->readOnly(),

                    Forms\Components\TextInput::make('nama')
                        ->label('Nama Pasien')
                        ->columnSpan(3)
                        ->readOnly(),

                    Forms\Components\TextInput::make('diagnosa')
                        ->label('Dokter')
                        ->columnSpan(2)
                        ->disabled(),
                ])->columns(4),
            ]);
    }



    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tg_masuk')
                    ->label('Tanggal')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kd_rekmed')
                    ->label('No RM')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_ruang')
                    ->label('Poli'),
                Tables\Columns\BadgeColumn::make('mcutransaction_today.kd_regpoli')
                    ->label('MCU')
                    ->colors([
                        'success' => fn($record): bool => !empty($record->mcutransaction_today?->kd_regpoli),  // Hijau jika ada nilai
                        'danger' => fn($record): bool => empty($record->mcutransaction_today?->kd_regpoli),    // Merah jika null atau kosong
                    ])
                    ->getStateUsing(fn($record) => $record->mcutransaction_today?->kd_regpoli ? 'Sudah' : 'Belum')
            ])
            ->filters([
                // Filter berdasarkan rentang tanggal
                Filter::make('Rentang Tanggal')
                    ->form([
                        Grid::make()->schema([
                            Forms\Components\DatePicker::make('start_date')
                                ->label('Tanggal Mulai')
                                ->placeholder('Pilih Tanggal Mulai')
                                ->default(now()->subDay()),
                            Forms\Components\DatePicker::make('end_date')
                                ->label('Tanggal Akhir')
                                ->placeholder('Pilih Tanggal Akhir')
                                ->default(now()),
                        ])->columns(2)
                    ])
                    ->query(function ($query, array $data) {
                        // Filter query berdasarkan rentang tanggal
                        if ($data['start_date'] && $data['end_date']) {
                            $query->whereBetween('tg_masuk', [
                                Carbon::parse($data['start_date'])->startOfDay(),
                                Carbon::parse($data['end_date'])->endOfDay(),
                            ])
                                ->where('nama_ruang', 'mcu')
                                ->whereNotNull('kd_regpoli');
                        }
                    })
                    ->label('Filter Berdasarkan Tanggal'),
            ], layout: FiltersLayout::AboveContent)
            ->filtersFormColumns(2)
            ->actions([
                Tables\Actions\EditAction::make()
                    ->label('Assessment MCU'),
            ])
            ->bulkActions([]);
    }


    public static function getRelations(): array
    {
        return [
            McutransactionTodayRelationManager::class,
            McutransactionRelationManager::class,
        ];
    }


    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTransaksis::route('/'),
            'create' => Pages\CreateTransaksi::route('/create'),
            'view' => Pages\ViewTransaksi::route('/{record}'),
            'edit' => Pages\EditTransaksi::route('/{record}/edit'),
        ];
    }
}
