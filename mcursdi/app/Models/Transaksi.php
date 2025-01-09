<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Transaksi extends Model
{
    protected $connection = 'sqlsrv2'; // database2
    protected $table = 'transaksi';


    protected $primaryKey = 'kd_regpoli'; // Nama kolom primary key

    // Jika primary key bukan integer atau auto-increment, tambahkan ini
    public $incrementing = false;
    protected $keyType = 'string'; // Ubah menjadi 'int' jika kolom primary key adalah integer

    public function mcutransaction(): HasMany
    {
        return $this->hasMany(McuTransaction::class, 'kd_rekmed', 'kd_rekmed');
    }

    public function mcutransaction_today()
    {
        return $this->hasOne(McuTransaction::class, 'kd_regpoli', 'kd_regpoli');
    }

    public function pasien()
    {
        return $this->belongsTo(Rgs::class, 'kd_rekmed', 'kd_rekmed');
    }
}
