<?php

namespace Database\Factories;

use App\Models\Monstro;
use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class MonstroFactory extends Factory
{
    protected $model = Monstro::class;

    public function definition(): array
    {
        return [
            'criatura_id' => Criatura::factory()->create(['tipo' => 'monstro'])->id,
            'tipo' => $this->faker->word(),
            'ataque' => $this->faker->word(),
            'defesa' => $this->faker->word(),
            'hp' => rand(10, 100),
        ];
    }
}
