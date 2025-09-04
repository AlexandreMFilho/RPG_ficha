<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Criatura;
use App\Models\Valquiria;
use App\Models\Personagem;
use App\Models\Monstro;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        
        // Criando 1 Mestre
        User::factory()->create(['perfil' => 'mestre']);

        // Criando 3 Jogadores
        User::factory(3)->create(['perfil' => 'jogador']);

        // Criando 7 Valquírias
        Valquiria::factory(2)->create();

        // Criando 20 Personagens
        // Personagem::factory(10)->create();

        // Criando 50 Monstros
        Monstro::factory(10)->create();
    }
}
