<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matakuliah extends Model
{
    protected $table = 'matakuliahs';
    protected $primaryKey = 'kodeMk';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['kodeMk','namaMk','sks'];
    public $timestamp = true;

    // Relasi ke Tabel Jadwal
    public function jadwals(){
        return $this->hasMany(Jadwal::class,'kodeMk','kodeMk');
    }
}
