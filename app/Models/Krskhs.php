<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Krskhs extends Model
{
    protected $table = 'krskhs';
    protected $primaryKey = 'idKrs';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['noReg','jadwalId','nilai'];
    public $timestamp = true;

    // Relasi ke Tabel Registrasi
    public function registrasi(){
        return $this->belongsTo(Registrasi::class,'noReg','noReg');
    }

    // Relasi ke Tabel Jadwal
    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'jadwalId','jadwalId');
    }
}
