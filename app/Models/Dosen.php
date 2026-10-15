<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = 'dosens';
    protected $primaryKey = 'nik';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nik', 'namaDosen'];
    public $timestamps = true;

    // Relasi ke Tabel Jadwal
    public function jadwals(){
        return $this->hasMany(Jadwal::class, 'nik', 'nik');
    }
}
