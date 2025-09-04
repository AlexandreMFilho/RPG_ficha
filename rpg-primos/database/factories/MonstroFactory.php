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
            'criatura_id' => Criatura::factory()->create()->id, // Garante que existe uma Criatura antes
            'habilidade_especial' => $this->faker->word(),
            'forca' => $this->faker->numberBetween(5, 100),
            'resistencia' => $this->faker->numberBetween(5, 100),
            'ataques' => json_encode([
                'ataque1' => $this->faker->word(),
                'ataque2' => $this->faker->word(),
                'dano' => $this->faker->numberBetween(1, 50),
            ]), 
            'last_used_at' => $this->faker->optional()->dateTime(),
            'expires_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
