<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Jadwal extends Model
{
    use HasFactory;
    protected $table = 'jadwals';
    protected $primaryKey = 'jadwalId';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['hari','waktu','kodeMk','grup','nik','ruang'];
    public $timestamp = true;

    // Relasi ke Tabel Matakuliah
    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class,'kodeMk','kodeMk');
    }

    // Relasi ke Tabel Dosen
    public function dosen(){
        return $this->belongsTo(Dosen::class,'nik','nik');
    }
}
