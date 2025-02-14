<?php

namespace Database\Factories;

use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class CriaturaFactory extends Factory
{
    protected $model = Criatura::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'tipo' => $this->faker->randomElement(['valquiria', 'personagem', 'monstro']),
            'last_used_at' => now(),
            'expires_at' => now()->addDays(rand(1, 30)),
        ];
    }
}
