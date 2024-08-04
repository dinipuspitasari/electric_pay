<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Level;

class LevelFactory extends Factory
{
    protected $model = Level::class;

    public function definition()
    {
        return [
            'nama_level' => fake()->randomElement(['Administrator', 'Pelanggan']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}