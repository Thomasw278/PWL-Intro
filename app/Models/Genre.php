<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'id_genre';

    // Ensure bahwa primary key tidak auto-increment
    public $incrementing = false;

    // Set the primary key type to string
    protected $keyType = 'string';
    
    //Atribut yang dapat diisi
    protected $fillable = ['id_genre', 'nama_genre'];
    
    //Function movie untuk relasi one to many
    public function movie(){
        return $this->hasMany(Movie::class, 'id_genre', 'id_genre');
    }

}
