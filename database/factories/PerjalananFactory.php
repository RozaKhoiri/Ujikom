<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Perjalanan>
 */
class PerjalananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_user' => mt_rand(1,2),
            'lokasi' => $this->faker->city(),
            'suhu' => $this->faker->randomFloat(1, 30, 45),
            'tanggal' => $this->faker->date(),
            'jam' => $this->faker->time(),
        ];
    }
}