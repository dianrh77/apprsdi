<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelompok extends Model
{
    protected $connection = 'sqlsrv2'; // database2
    protected $table = 'kelompok';


    protected $primaryKey = 'kd_kelpk'; // Nama kolom primary key

    // Jika primary key bukan integer atau auto-increment, tambahkan ini
    public $incrementing = false;
    protected $keyType = 'string'; // Ubah menjadi 'int' jika kolom primary key adalah integer
}
