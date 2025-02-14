<?php

namespace Database\Factories;

use App\Models\Personagem;
use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonagemFactory extends Factory
{
    protected $model = Personagem::class;

    public function definition(): array
    {
        return [
            'criatura_id' => Criatura::factory()->create(['tipo' => 'personagem'])->id,
            'nome' => $this->faker->name(),
            'classe' => $this->faker->word(),
            'raça' => $this->faker->word(),
            'nível' => rand(1, 20),
            'atributos' => json_encode([
                'força' => rand(1, 20),
                'destreza' => rand(1, 20),
                'constituição' => rand(1, 20),
                'inteligência' => rand(1, 20),
                'sabedoria' => rand(1, 20),
                'carisma' => rand(1, 20),
            ]),
        ];
    }
}
