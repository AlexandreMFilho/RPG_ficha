<?php

namespace Database\Factories;

use App\Models\Personagens;
use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonagensFactory extends Factory
{
    protected $model = Personagens::class;

    public function definition(): array
    {
        return [
            'criatura_id' => Criatura::factory()->create()->id, // Garante que existe uma Criatura antes
            'raca' => 'Personagens',
            'classe' => $this->faker->word(),
            'armadura' => $this->faker->word(),
            'arma_1' => $this->faker->word(),
            'arma_2' => $this->faker->word(),
            'ataque' => $this->faker->word(),
            'equipamento' => $this->faker->sentence(),
            'mochila' => $this->faker->sentence(),
            'partes_de_freya' => $this->faker->sentence(),
            'tesouros_de_odin' => $this->faker->sentence(),
            'historia' => $this->faker->paragraph(),
            'observacoes' => $this->faker->sentence(),
            'mana' => $this->faker->numberBetween(10, 100),
            'itens' => $this->faker->sentence(),
            'last_used_at' => $this->faker->dateTime(),
            'expires_at' => $this->faker->optional()->dateTime(),
        ];
    }
}
