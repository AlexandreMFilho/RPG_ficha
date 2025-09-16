/**
 * MockRPGJson.js
 * * Este arquivo contém uma estrutura de dados mockada que simula o resultado
 * do RPGSeeder.php. É útil para o desenvolvimento e teste do frontend.
 * * Estrutura:
 * - users: Contém o Mestre e os Jogadores.
 * - fichas: As fichas de cada usuário.
 * - criaturas: A camada base para Valquírias e Personagens.
 * - valquirias: Os personagens principais dos jogadores.
 * - personagens: Os "servos" ou personagens secundários associados a cada Valquíria.
 */
export const rpgData = {
  // --- Tabela de Usuários ---
  users: [
    {
      id: 1,
      name: 'Mestre do Jogo',
      email: 'mestre@rpg.com',
    },
    {
      id: 2,
      name: 'Jogador 1',
      email: 'jogador1@rpg.com',
    },
    {
      id: 3,
      name: 'Jogador 2',
      email: 'jogador2@rpg.com',
    },
    // ... mais jogadores podem ser adicionados
  ],

  // --- Tabela de Fichas ---
  fichas: [
    {
      id: 1,
      user_id: 1, // Ficha do Mestre do Jogo
    },
    {
      id: 2,
      user_id: 2, // Ficha do Jogador 1
    },
    {
      id: 3,
      user_id: 3, // Ficha do Jogador 2
    },
  ],

  // --- Tabela de Criaturas (Entidade base) ---
  criaturas: [
    // Criaturas do Jogador 1
    {
      id: 1,
      ficha_id: 2,
      name: 'Valquíria de Jogador 1',
      tipo: 'valquiria',
    },
    {
      id: 2,
      ficha_id: 2,
      name: 'Personagem 1 (Servo da Valquíria de Jogador 1)',
      tipo: 'personagem',
    },
    {
      id: 3,
      ficha_id: 2,
      name: 'Personagem 2 (Servo da Valquíria de Jogador 1)',
      tipo: 'personagem',
    },
    {
      id: 4,
      ficha_id: 2,
      name: 'Personagem 3 (Servo da Valquíria de Jogador 1)',
      tipo: 'personagem',
    },
    // Criaturas do Jogador 2
    {
      id: 5,
      ficha_id: 3,
      name: 'Valquíria de Jogador 2',
      tipo: 'valquiria',
    },
    {
      id: 6,
      ficha_id: 3,
      name: 'Personagem 1 (Servo da Valquíria de Jogador 2)',
      tipo: 'personagem',
    },
    // ... etc.
  ],

  // --- Tabela de Valquírias ---
  valquirias: [
    {
      id: 1,
      criatura_id: 1, // Ligada à criatura da Valquíria do Jogador 1
      user_id: 2, // Ligada ao Jogador 1
      nome: 'Astrid, A Fúria do Trovão',
      raca: 'Asgardiana',
      classe: 'Protetora',
      // No seeder, isso é um JSON.stringify de um array de IDs de criaturas.
      personagens: JSON.stringify([2, 3, 4]), 
      armadura: 'Placas de Aço',
      arma_1: 'Machado Duplo',
      arma_2: 'Escudo Divino',
      ataque: 'Golpe Celestial',
      equipamento: 'Elmo com chifres e um anel de força.',
      mochila: 'Corda, tochas e rações de viagem.',
      partes_freya: 'O Colar Brisingamen.',
      tesouros_odin: 'A Lança Gungnir.',
      historia: 'Forjada na batalha, Astrid jurou proteger os Nove Reinos das ameaças sombrias que espreitam nas sombras.',
      observacoes: 'Leal aos seus companheiros, mas desconfiada de estranhos.',
      mana: 150,
      itens: 'Poção de cura menor.',
    },
    {
      id: 2,
      criatura_id: 5, // Ligada à criatura da Valquíria do Jogador 2
      user_id: 3, // Ligada ao Jogador 2
      nome: 'Freya, A Vidente',
      raca: 'Asgardiana',
      classe: 'Oráculo',
      personagens: JSON.stringify([6]), // Supondo que o jogador 2 tenha apenas 1 personagem por enquanto
      armadura: 'Manto de Magia',
      arma_1: 'Cajado Místico',
      arma_2: 'Adaga Rúnica',
      ataque: 'Explosão Arcana',
      equipamento: 'Orbe de visão e um grimório antigo.',
      mochila: 'Ervas medicinais e pergaminhos.',
      partes_freya: 'Manto de penas de falcão.',
      tesouros_odin: 'O Olho de Odin.',
      historia: 'Com o dom da visão, Freya guia seus aliados através dos perigos, lendo os fios do destino.',
      observacoes: 'Fala em enigmas e tem premonições.',
      mana: 200,
      itens: 'Pergaminho de teleporte.',
    }
  ],
  
  // --- Tabela de Personagens (Servos) ---
  personagens: [
    {
      id: 1,
      criatura_id: 2, // Ligado à primeira criatura "personagem" do Jogador 1
      raca: 'Humano',
      classe: 'Bárbaro',
      armadura: 'Peles de urso',
      arma_1: 'Espada Montante',
      arma_2: 'N/A',
      ataque: 'Fúria de Batalha',
      equipamento: 'Amuleto de dente de lobo.',
      mochila: 'Cantil de hidromel.',
      partes_de_freya: 'N/A',
      tesouros_de_odin: 'N/A',
      historia: 'Um guerreiro tribal que jurou lealdade a Astrid.',
      observacoes: 'Impulsivo e corajoso.',
      mana: 20,
      itens: 'Carne seca.',
    },
    {
      id: 2,
      criatura_id: 3, // Ligado à segunda criatura "personagem" do Jogador 1
      raca: 'Elfo',
      classe: 'Ladino',
      armadura: 'Couro batido',
      arma_1: 'Adaga',
      arma_2: 'Arco curto',
      ataque: 'Ataque Furtivo',
      equipamento: 'Ferramentas de ladrão.',
      mochila: 'Bolsa de moedas.',
      partes_de_freya: 'N/A',
      tesouros_de_odin: 'N/A',
      historia: 'Um batedor ágil das florestas antigas.',
      observacoes: 'Silencioso e calculista.',
      mana: 40,
      itens: 'Veneno para lâminas.',
    },
    // ... mais personagens
  ],
};