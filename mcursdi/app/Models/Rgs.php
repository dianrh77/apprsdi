<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Rgs extends Model
{
    protected $connection = 'sqlsrv2'; // database2
    protected $table = 'rgs';


    protected $primaryKey = 'kd_rekmed'; // Nama kolom primary key

    // Jika primary key bukan integer atau auto-increment, tambahkan ini
    public $incrementing = false;
    protected $keyType = 'string'; // Ubah menjadi 'int' jika kolom primary key adalah integer

    public function transaksi_pasien(): HasMany
    {
        return $this->hasMany(McuTransaction::class, 'kd_rekmed', 'kd_rekmed');
    }
}
