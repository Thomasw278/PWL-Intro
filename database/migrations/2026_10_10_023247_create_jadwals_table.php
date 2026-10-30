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
        Schema::create('jadwals', function (Blueprint $table) {
            $table->id('jadwalId');
            $table->string('hari', 6)->nullable();
            $table->char('waktu')->default('07.30-10.20');
            $table->char('kodeMk', 6);
            $table->char('grup', 1)->default('A');
            $table->char('nik', 7)->nullable();
            $table->string('ruang', 25)->nullable();
            $table->timestamps();

            // Foreign Key ke Tabel Matakuliah
            $table->foreign('kodeMk')
                ->references('kodeMk')
                ->on('matakuliahs')
                ->restrictOnDelete()
                ->cascadeOnUpdate();

            // Foreign Key ke Tabel Dosen
            $table->foreign('nik')
                ->references('nik')
                ->on('dosens')
                ->restrictOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwals');
    }
};
