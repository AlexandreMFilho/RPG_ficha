<?php

namespace Database\Factories;

use App\Models\Valquiria;
use App\Models\Criatura;
use Illuminate\Database\Eloquent\Factories\Factory;

class ValquiriaFactory extends Factory
{
    protected $model = Valquiria::class;

    public function definition(): array
    {
        return [
            'criatura_id' => Criatura::factory()->create(['tipo' => 'valquiria'])->id,
            'raça' => $this->faker->word(),
            'classe' => $this->faker->word(),
            'armadura' => $this->faker->word(),
            'personagens' => json_encode([]), // Inicialmente vazio
        ];
    }
}
