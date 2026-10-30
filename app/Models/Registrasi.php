<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Registrasi extends Model
{
    use HasFactory;
    protected $table = 'registrasis';
    protected $primaryKey = 'noReg';
    public $incrementing = true;
    protected $keyType = 'integer';
    protected $fillable = ['tanggal','nim'];
    public $timestamp = true;

    // Relasi ke Tabel Mahasiswa
    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class,'nim','nim');
    }

    // Relasi ke Tabel Krskhs
    public function krskhs(){
        return $this->hasMany(Krskhs::class,'noReg','noReg');
    }
}
