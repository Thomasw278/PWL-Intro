<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswas';
    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim','nama','kota'];
    public $timestamp = true;

    // Relasi ke Tabel Registrasi
    public function registrasis(){
        return $this->hasMany(Registrasi::class,'nim','nim');
    }
}
