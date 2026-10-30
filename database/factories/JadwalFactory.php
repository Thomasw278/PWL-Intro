<?php

namespace Database\Factories;

use App\Models\Jadwal;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Dosen;
use App\Models\Matakuliah;

/**
 * @extends Factory<Jadwal>
 */
class JadwalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hari' => fake()->randomElement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu']),
            'waktu' => fake()->randomElement(['07.30-10.20', '10.30-13.20', '13.30-16.20', '16.30-19.20']),
            'kodeMk' => Matakuliah::factory(),
            'grup' => fake()->randomElement(['A', 'B', 'C', 'D']),
            'nik' => Dosen::factory(),
            'ruang' => fake()->numerify('R###'),
        ];
    }
}
