<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    //
    protected $table = 'laravel_tables';
    protected $primaryKey = 'id_movie';

    // Ensure bahwa primary key tidak auto-increment
    public $incrementing = false;

    // Set the primary key type to string
    protected $keyType = 'string';
    
    //Atribut yang dapat diisi
    protected $fillable = ['id_movie', 'id_genre', 'judul_movie', 'year', 'poster'];
    
    //Function genre untuk relasi many to one
    public function genre(){
        return $this->belongsTo(Genre::class, 'id_genre', 'id_genre');
    }
}