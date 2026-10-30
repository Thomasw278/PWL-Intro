<?php

namespace Database\Factories;

use App\Models\Matakuliah;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Matakuliah>
 */
class MatakuliahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kodeMk' => fake()->unique()->numerify('MK###'),
            'namaMk' => substr(fake()->text(40), 0, 40),
            'sks' => fake()->randomElement([3, 6, 9]),
        ];
    }
}
