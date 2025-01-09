<?php

namespace App\Filament\Resources\TransaksiResource\Widgets;

use Carbon\Carbon;
use App\Models\Transaksi;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class TransaksiMcuPerMonthChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        $start = now()->startOfYear();
        $end = now()->endOfYear();

        // Query untuk mendapatkan jumlah data per bulan
        $data = Transaksi::selectRaw('MONTH(tg_masuk) as month, COUNT(*) as count')
            ->whereBetween('tg_masuk', [$start, $end])
            ->where('nama_ruang', 'mcu')
            ->whereNotNull('kd_regpoli')
            ->groupBy(DB::raw('MONTH(tg_masuk)'))
            ->orderBy('month')
            ->get()
            ->mapWithKeys(function ($item) {
                return [Carbon::create(null, $item->month)->format('F') => $item->count];
            });

        // Menyiapkan data bulan dan jumlah data per bulan
        $labels = [];
        $values = [];
        foreach (range(1, 12) as $month) {
            $monthName = Carbon::create(null, $month)->format('F');
            $labels[] = $monthName;
            $values[] = $data->get($monthName, 0); // Menggunakan 0 jika tidak ada data untuk bulan tersebut
        }


        return [
            'datasets' => [
                [
                    'label' => 'Pasien mendaftar MCU tahun ini',
                    'data' => $values,
                    'backgroundColor' => 'rgba(54, 162, 235, 0.2)',
                    'borderColor' => 'rgba(54, 162, 235, 1)',
                    'borderWidth' => 1,
                ],
            ],
            'labels' => $labels,
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
