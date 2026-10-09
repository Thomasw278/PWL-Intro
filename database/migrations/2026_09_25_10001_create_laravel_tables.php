<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('laravel_tables', function (Blueprint $table) {
            $table->char('id_movie', 5)->primary();
            $table->string('judul_movie',30);
            $table->char('id_genre', 5);
            $table->year('year');
            $table->string('poster',4);
            $table->timestamps();

            #Buat Foreign Key
            $table->foreign('id_genre')->references('id_genre')->on('genre_tables')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laravel_tables');
    }
};
