<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tarif>
 */
class TarifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'daya' => fake()->randomFloat(2, 450, 5000),
            'tarifperkwh' => fake()->randomFloat(2, 1000, 2000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
