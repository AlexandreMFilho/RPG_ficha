<?php

namespace Database\Factories;

use App\Models\Valquiria;
use App\Models\Criatura;
use App\Models\User;
use App\Models\Personagens;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValquiriaFactory extends Factory
{
    protected $model = Valquiria::class;

    public function definition(): array
    {
        return [
            'criatura_id' => Criatura::factory()->create(['tipo' => 'valquiria'])->id,
            'user_id' => User::factory()->create()->id,
            'nome' => $this->faker->firstName(),
            'raca' => 'valquiria', // Valor fixo conforme a migration
            'classe' => $this->faker->randomElement(['Guerreira', 'Feiticeira', 'Guardião']),
            'armadura' => $this->faker->randomElement(['Placas de Aço', 'Couro Reforçado', 'Manto de Magia']),
            'arma_1' => $this->faker->randomElement(['Espada Longa', 'Machado Duplo', 'Lança Sagrada']),
            'arma_2' => $this->faker->randomElement(['Escudo Divino', 'Adaga Rúnica', 'Cajado Místico']),
            'ataque' => $this->faker->randomElement(['Golpe Celestial', 'Lança Flamejante', 'Explosão Arcana']),
            'equipamento' => $this->faker->sentence(2),
            'mochila' => $this->faker->sentence(2),
            'partes_freya' => $this->faker->sentence(2),
            'tesouros_odin' => $this->faker->sentence(2),
            'historia' => $this->faker->paragraph(3),
            'observacoes' => $this->faker->sentence(2),
            'personagens' => json_encode([
                Personagens::factory()->create()->id,
                Personagens::factory()->create()->id,
            ]),
            'mana' => $this->faker->numberBetween(50, 200),
            'itens' => $this->faker->sentence(1),
            'last_used_at' => now()->subDays($this->faker->numberBetween(1, 30)),
            'expires_at' => now()->addDays($this->faker->numberBetween(10, 60)),
        ];
    }
}
