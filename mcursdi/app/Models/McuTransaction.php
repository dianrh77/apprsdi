<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;

class McuTransaction extends Model
{
    use HasFactory;

    protected $connection = 'sqlsrv'; // database1
    protected $table = 'mcu_transactions';

    protected $guarded = [];

    public function pendaftaranmcu_today()
    {
        return $this->belongsTo(Transaksi::class, 'kd_regpoli', 'kd_regpli');
    }


    public function dokter()
    {
        return $this->belongsTo(User::class, 'kd_dokter', 'kd_dokter');
    }
}
