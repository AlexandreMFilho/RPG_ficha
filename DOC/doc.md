# Passos inicias

##### Criar o projeto laravel:
```
composer create-project "laravel/laravel:^10.0" rpg-primos
```
##### Iniciar o server laravel (http://localhost:8000/): 
```
php artisan serve
```


##### Criar banco


##### Configurar Banco







## SVGs para o projeto 
`https://www.svgrepo.com/svg/527886/shield`

## Paleta de cores do projeto
`https://coolors.co/palette/001219-005f73-0a9396-94d2bd-e9d8a6-ee9b00-ca6702-bb3e03-ae2012-9b2226`

# Regras de Negócio

#### perfis;
* Admin
* Mestre
* Jogador

#### funções do sistema

* Rolagem de Dados
* Galeria
    Possui todas as imagens, mestre pode escolher imagens para não aparecer aos jogadores
* CRUD fichas (Ver,Criar,Editar,~~Excluir~~)
    * Tipo de fichas:
        * Valquiria
        * Personagem
        * Criatura/Monstro
    
    * Ficha Valquiria
        * Raça
        * Classe
        * Armadura
        * Arma (2)
        * Ataque
        * Equipamento
        * Mochila
        * Partes de Freya
        * Tesouros de Odin
        * História
        * Observações
        * Personagens
        * Mana
        * Itens

    * Ficha de Personagem
        * Nome
        * Classe
        * Raça
        * Tendência
        * Nível
        * Deslocamento
        * Bonus Base
        * Altura
        * Peso
        * Idade
        * Sexo
        * Atributos
            * Força
            * Destreza
            * Constituição
            * Inteligência
            * Sabedoria
            * Carisma
        * CA (Classe de Armadura) = Armadura + Destreza + Bônus
        * PV (Pontos de Vida) = Dx + Constituição
        * Iniciativa (maior atributo (Sabedoria ou Destreza))
        * Habilidades de Campo
            * Titulo
            * Descrição
        * Habilidades (Magias/Poder/Ataques/Passivas) (5)
            * Nome
            * Dano
            * Acerto
            * CD (Cooldown)
            * Distância
            * Tipo
            * Passiva ?
        * Berloque
            * Nome
            * Atributo 1
            * Atributo 2
            * Atributo 3
            * Atributo 4
        * Corpo
            * Nome
            * Atributo 1
            * Atributo 2
            * Atributo 3
            * Atributo 4
        * Mãos
            * Nome
            * Atributo 1
            * Atributo 2
            * Atributo 3
            * Atributo 4
        * Anotações
        * Itens

#### Entidades

* Users (Admin/Mestre/Jogador)
* Ficha (Valquiria/Personagem/"Criatura/Monstro")
* ~~Item(Equipamento/Arma/Consumíveis/Miscelania/Objetos)~~
