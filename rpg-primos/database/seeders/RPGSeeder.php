<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Fichas;
use App\Models\Criatura;
use App\Models\Valquiria;
use App\Models\Personagem;
use App\Models\Monstro;

class RPGSeeder extends Seeder
{
    /**
     * Executa o seeder para popular o banco de dados com dados iniciais de RPG.
     *
     * @return void
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // --- 1. CRIAÇÃO DO MESTRE E SUA FICHA ---
        // Cria um usuário com o perfil de mestre do jogo.
        $mestre = User::create([
            'name' => 'Mestre do Jogo',
            'email' => 'mestre@rpg.com',
            'password' => Hash::make('password'), // Lembre-se de usar senhas seguras
        ]);

        // Cria uma ficha para o mestre, que será usada para associar os monstros.
        $mestreFicha = Fichas::create([
            'user_id' => $mestre->id,
        ]);


        // --- 2. CRIAÇÃO DOS JOGADORES E SUAS FICHAS/CRIATURAS ---
        // Inicia um laço para criar 3 jogadores distintos.
        for ($i = 1; $i <= 3; $i++) {
            /** @var User $jogador */
            $jogador = User::create([
                'name' => "Jogador {$i}",
                'email' => "jogador{$i}@rpg.com",
                'password' => Hash::make('password'),
            ]);

            // Primeiro, cria a Ficha do jogador.
            $fichaJogador = Fichas::create([
                'user_id' => $jogador->id,
            ]);

            // Cria a Criatura base que será uma Valquíria, associada à Ficha do jogador.
            $criaturaValquiria = Criatura::create([
                'fichas_id' => $fichaJogador->id,
                'name' => "Valquíria de {$jogador->name}",
                'tipo' => 'valquiria',
            ]);

            $valquiria = Valquiria::create([
                'criatura_id' => $criaturaValquiria->id,
                'user_id' => $jogador->id,
                'nome' => $faker->name(),
                'raca' => 'Asgardiana',
                'classe' => 'Protetora',
                'personagens' => json_encode([]),
                'armadura' => $faker->randomElement(['Placas de Aço', 'Couro Reforçado', 'Manto de Magia']),
                'arma_1' => $faker->randomElement(['Espada Longa', 'Machado Duplo', 'Lança Sagrada']),
                'arma_2' => $faker->randomElement(['Escudo Divino', 'Adaga Rúnica', 'Cajado Místico']),
                'ataque' => $faker->randomElement(['Golpe Celestial', 'Lança Flamejante', 'Explosão Arcana']),
                'equipamento' => $faker->sentence(2),
                'mochila' => $faker->sentence(2),
                'partes_freya' => $faker->sentence(2),
                'tesouros_odin' => $faker->sentence(2),
                'historia' => $faker->paragraph(3),
                'observacoes' => $faker->sentence(2),
                'mana' => $faker->numberBetween(50, 200),
                'itens' => $faker->sentence(1),
            ]);

            // Agora, dentro do loop de jogador, criamos os 3 personagens para a Valquíria.
            $personagensIds = [];
            for ($j = 1; $j <= 3; $j++) {
                // Cria a Criatura base que será um Personagem, também ligada à ficha do jogador.
                $criaturaPersonagem = Criatura::create([
                    'fichas_id' => $fichaJogador->id,
                    'name' => "Personagem {$j} (Servo da Valquíria de {$jogador->name})",
                    'tipo' => 'personagem',
                ]);

                // Cria o registro específico do Personagem.
                Personagem::create([
                    // CORREÇÃO: Usa o ID da criatura criada na etapa anterior.
                    'criatura_id' => $criaturaPersonagem->id,
                    'raca' => 'Personagens',
                    'classe' => $faker->word(),
                    'armadura' => $faker->word(),
                    'arma_1' => $faker->word(),
                    'arma_2' => $faker->word(),
                    'ataque' => $faker->word(),
                    'equipamento' => $faker->sentence(),
                    'mochila' => $faker->sentence(),
                    'partes_de_freya' => $faker->sentence(),
                    'tesouros_de_odin' => $faker->sentence(),
                    'historia' => $faker->paragraph(),
                    'observacoes' => $faker->sentence(),
                    'mana' => $faker->numberBetween(10, 100),
                    'itens' => $faker->sentence(),
                    'last_used_at' => $faker->dateTime(),
                    'expires_at' => $faker->optional()->dateTime(),
                ]);

                // Guarda o ID da CRIATURA do personagem para associar à Valquíria.
                $personagensIds[] = $criaturaPersonagem->id;
            }

            // Atualiza o registro da Valquíria com os IDs dos personagens recém-criados.
            $valquiria->update(['personagens' => json_encode($personagensIds)]);
        }


        // --- 3. CRIAÇÃO DOS MONSTROS ---
        // Cria 4 monstros genéricos, associados à ficha do Mestre.
        // for ($k = 1; $k <= 4; $k++) {
        //     // Cria a Criatura base que será um Monstro.
        //     $criaturaMonstro = Criatura::create([
        //         'fichas_id' => $mestreFicha->id, // CORREÇÃO: Adicionado o ID da ficha do mestre.
        //         'name' => "Goblin #{$k}",
        //         'tipo' => 'monstro',
        //     ]);

        //     // Cria o registro específico do Monstro.
        //     Monstro::create([
        //         'criatura_id' => $criaturaMonstro->id,
        //         'atributos' => json_encode(['forca' => 8, 'destreza' => 14]),
        //         'habilidades' => json_encode(['ataque_furtivo']),
        //     ]);
        // }
    }
}

