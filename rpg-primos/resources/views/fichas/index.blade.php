@extends('layouts.app')

@section('content')
<div class="container card" style="height:95%;border:5px solid green;

">
    <h2 class="text-center text-uppercase">Ficha 1</h2>

    <div style="
        display: flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        border: 3px solid red;
        height: 100%;
        width: 100%;
        margin-right: 10px;
        gap: 10px;

        
    ">
        <!-- Moldura Personagem -->
        <div style="
        border: 3px solid blue;
        
    ">
            @include('fichas.partials.MolduraPersonagem', ['imagem' => 'max.jpg'])
        </div>

        <!-- Atributos e Deslocamento -->
        <div style="
        border: 3px solid blue;
        ">

        <div style="
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-around;
            border: 1px solid #ccc;
            padding: 15px;
            width: 280px;
            height: 80%;
            border-radius: 8px;
            
        "
        >
            <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Atributos</h4>
            <table style="width: 100%; height: 100%; border-collapse: collapse;">
                <tr>
                    <td style="vertical-align: middle;"><strong>Força:</strong> 1</td>
                    <td style="vertical-align: middle;"><strong>Destreza:</strong> 1</td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><strong>Constituição:</strong> 1</td>
                    <td style="vertical-align: middle;"><strong>Inteligência:</strong> 1</td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><strong>Percepção:</strong> 1</td>
                    <td style="vertical-align: middle;"><strong>Carisma:</strong> 1</td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><strong>Agilidade:</strong> 1</td>
                    <td style="vertical-align: middle;"><strong>Vigor:</strong> 1</td>
                </tr>
                <tr>
                    <td style="vertical-align: middle;"><strong>Raciocínio:</strong> 1</td>
                    <td style="vertical-align: middle;"><strong>Sabedoria:</strong> 1</td>
                </tr>
                
            </table>
        </div>

        </div >
        <!-- Alinhamento e Cores -->
        <div style="display: flex;
        flex-grow: 1;
        align-items: center;
        padding: 15px;
        height: 80%;
        border: 3px solid blue;
        
        ">


                        <div>
                        <canvas style ="width: 240px; positon:relative; padding-bottom:15px" id="myChart"></canvas>
                        </div>

                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                        <script>
                        const ctx = document.getElementById('myChart');
                        
                        new Chart(ctx, {
                            type: 'radar',
                            data: {
                            labels: ['', '', '', '', ''],
                            datasets: [{
                                backgroundColor: 'rgba(0, 0, 255, 0.8)',
                                label: '',
                                data: [10/*branco*/, 100/*azul*/, 10/*preto*/, 10/*vermelho*/, 10/*verde*/],
                                borderWidth: 3
                            }]
                            },
                            options: {
                                plugins: {
                                    legend: {
                                        display: false
                                    }
                                }
                            }
                        });
                        </script>

                        <img src="{{ asset('imgs/Branca.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:-140px;
                            margin-top:-80px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Azul.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:50px;
                            margin-top:60px;
                            margin-left:60px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Preta.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:0;
                            margin-bottom:-280px;
                            margin-left:-80px;
                            position:relative;
                            top:-60px;
                            ">
                        
                        <img src="{{ asset('imgs/Vermelha.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-left:0;
                            margin-bottom:-280px;
                            margin-left:-165px;
                            position:relative;
                            top:-60px;
                            ">

                        <img src="{{ asset('imgs/Verde.png') }}" alt="Imagem da Valquíria" class="img-fluid" 
                            style="width:40px;
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            margin-bottom:-60px;
                            margin-left:-75px;
                            position:relative;
                            top:-60px;
                            ">
                            
        </div>

        </div>

        <div class="h-100" style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            min-height:100px;
            margin:10px;padding:10px;
            gap:5px;
            ">
            <h4>Deslocamento</h4>
            <p class="lead">9 metros</p>
            
            <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#myModal">
                Equipamento
            </button>

            <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#myModal">
                Mochila
            </button>

            <button type="button" class="btn btn-secondary " data-bs-toggle="modal" data-bs-target="#myModal">
                Itens
            </button>

            @php
                $modalId = 'ModalEquipamentos';
                $modalBody = 'Equipamentos na sua Bolsa:';
                $modalTitle = 'Equipamentos';
                $equipamentos = [
                    [
                        'nome' => 'Espada Longa',
                        'descricao' => 'Uma espada de lâmina longa e afiada. Ideal para combate corpo a corpo.',
                        'observacoes' => 'Boa para dano físico, mas lenta para ataques rápidos.',
                        'dano' => 15,
                        'peso' => 3.5,
                        'valor' => 120
                    ],
                    [
                        'nome' => 'Arco Curvo',
                        'descricao' => 'Arco flexível com boa precisão à longa distância. Ideal para ataques à distância.',
                        'observacoes' => 'Requer habilidade para ser usado com eficácia.',
                        'dano' => 10,
                        'peso' => 2.0,
                        'valor' => 100
                    ],
                    [
                        'nome' => 'Cajado Mágico',
                        'descricao' => 'Cajado encantado que canaliza o poder mágico do usuário, aumentando suas habilidades arcanas.',
                        'observacoes' => 'Necessita de treinamento em magia para ser usado corretamente.',
                        'dano' => 20,
                        'peso' => 4.0,
                        'valor' => 250
                    ],
                    [
                        'nome' => 'Armadura de Ferro',
                        'descricao' => 'Armadura robusta feita de ferro, oferecendo excelente proteção contra ataques físicos.',
                        'observacoes' => 'Pode ser pesada e reduzir a mobilidade.',
                        'dano' => 0,
                        'peso' => 15.0,
                        'valor' => 300
                    ],
                    [
                        'nome' => 'Elmo de Ouro',
                        'descricao' => 'Elmo resistente que oferece boa proteção para a cabeça. Feito de ouro reforçado.',
                        'observacoes' => 'Protege bem contra impactos, mas é mais caro.',
                        'dano' => 0,
                        'peso' => 5.0,
                        'valor' => 500
                    ]
                ];
            @endphp

            @include('partials.ModalItens', compact('modalId', 'modalTitle', 'modalBody', 'equipamentos'))
            
        </div>
    <!-- Personagens associados -->
    <div style="display:flex;flex-direction:column;
            justify-content:space-around;align-items:flex-start;
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <div>
                <h4>Heróis</h4>
            </div>
            <div id="carousel">
                <a href="" class="item" >
                    <img src="{{asset('imgs/mulher_verde.jpg')}}" alt="Personagem" class="img-thumbnail" width="130" style="
                        border-radius: 100px;
                    ">
                </a>
                <a href="" >
                    <img src="{{asset('imgs/mulher_verde.jpg')}}" alt="Personagem" class="img-thumbnail" width="130" style="
                        border-radius: 100px;
                    ">
                </a>
                <a href="" >
                    <img src="{{asset('imgs/mulher_verde.jpg')}}" alt="Personagem" class="img-thumbnail" width="130" style="
                        border-radius: 100px;
                    ">
                </a>
            </div>
        </div>
            <div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <h4>Rolar Dados</h4>
               
    <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#rolarDadosModal">
        Rolar Dados
    </button>
            @include('partials.ModalRolarDados')

            <div>
            <canvas id="myChart"></canvas>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

            <script>
            const ctx = document.getElementById('myChart');

            new Chart(ctx, {
                type: 'radar',
                data: {
                labels: ['Branca', 'Azul', 'Preto', 'Vermelho', 'Verde'],
                datasets: [{
                    backgroundColor: 'rgba(0, 0, 255, 0.2)',
                    label: '',
                    data: [10, 100, 10, 10, 10],
                    borderWidth: 3
                }]
                },
                options: {
                }
            });
            </script>



        </div>
</div>



@endsection
