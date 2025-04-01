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
    <div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <h4>Deslocamento</h4>
            <p class="lead">9 metros</p>
            
            
            <!-- Equipamentos e Mochila -->
            <div class="row mt-3">
                <div class="col-md-4">
                    <h4>Equipamento</h4>
                    <ul class="list-group">
                        
                            <li class="list-group-item">Tocha</li>
                        </ul>
                </div>
                <div class="col-md-4">
                    <h4>Mochila</h4>
                    <ul class="list-group">
                            <li class="list-group-item"> item</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Itens</h4>
                    <ul class="list-group">
                        <li class="list-group-item">item</li>
                    </ul>
                </div>
            </div>
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
