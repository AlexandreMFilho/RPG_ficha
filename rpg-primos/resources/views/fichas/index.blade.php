@extends('layouts.app')

@section('content')
<div class="container card" style="height:95%;border:1px solid black">
    <h2 class="text-center text-uppercase">Ficha 1</h2>

    <!-- <div  style="display:flex;flex-direction:row;"> -->
    <div style="
        display:flex;flex-direction:column;
        /* justify-content:center;align-items:center; */
        border:1px solid red; height:100%;margin-bottom:10px;
        ">
        <div style="display:flex;flex-direction:row;
            justify-content:space-around;align-items:flex-start;
            border:1px solid blue; height:300px;
            margin:10px;padding:10px;
            ">

            <div style="
                    /* display:flex;flex-direction:column; */
                    /* justify-content:center;align-items:center; */
                    /* border:1px solid red; */
                    height:100%;margin-bottom:10px;
                    ">
                <!-- Nome e imagem da Valquíria -->
                <div style="
                    display:flex;flex-direction:column;
                    justify-content:center;align-items:center;
                    /* border:1px solid gray; */
                    height:280px;max-width:300px;
                    border-radius: 8px;

                    ">
                        <img src="{{ asset('imgs/Max.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                        style="width:280px;
                        border: 0px solid #ccc;
                        border-radius: 8px;
                        ">
                </div>
              
                <img src="{{ asset('imgs/mana_array_4.webp') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:275px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-80px;
                    ">
                <div style="
                    display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-around;
                    justify-content:space-around;
                    position:relative;
                    top:-105px;
                    ">
                    <!-- Mana branca -->
                    <span>1</span>

                    <!-- Mana azul -->                    
                    <span>1</span>

                    <!-- Mana preta -->
                    <span>1</span>

                    <!-- Mana vermelha -->
                    <span>1</span>

                    <!-- Mana verde -->
                    <span>1</span>
                    
                </div>
            </div>
            
        
            <!-- Atributos e Deslocamento -->
            
            <div style="
                border: 1px solid #ccc; 
                padding: 15px; 
                width: 280px; 
                height: 100%; 
                border-radius: 8px;
                display: flex; 
                flex-direction: column;
            ">
                <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Atributos</h4>
                <div style="flex-grow: 1; display: flex; align-items: center;">
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
                            <td colspan="2" style="text-align: center; vertical-align: middle;">
                                <strong>Raciocínio:</strong> 1
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

            <div style="display:flex;flex-direction:row;
            justify-content:space-around;align-items:flex-start;
            border:1px solid blue; height:280px;
            ">
                <div style="
                    border: 1px solid #ccc; 
                    padding: 15px; 
                    width: 280px; 
                    height: 100%; 
                    border-radius: 8px;
                    display: flex; 
                    flex-direction: column;
                ">
                    <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Cor</h4>
                    <div style="flex-grow: 1; display: flex; align-items: center;">
                        <!-- <ul>
                            <li style="vertical-align: middle;"><strong>Branca:</strong> 1</li>
                            <li style="vertical-align: middle;"><strong>Vermelha:</strong> 1</li>
                            <li style="vertical-align: middle;"><strong>Preta:</strong> 1</li>
                            <li style="vertical-align: middle;"><strong>Verde:</strong> 1</li>
                            <li style="vertical-align: middle;"><strong>Azul:</strong> 1</li>
                        </ul> -->
                        <img src="{{ asset('imgs/mana_circle_5.png') }}" alt="Imagem da Valquíria" class="img-fluid"
                            style="
                            /* width: 275px; */
                            border: 0px solid #ccc;
                            border-radius: 8px;
                            position:relative;
                            margin-top:-50px;
                            ">
                    </div>
                </div>

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
        <div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <h4>Personagens</h4>
            <div >
                    <a href="" class="btn btn-outline-primary mx-1">
                        <img src="" alt="Personagem" class="img-thumbnail" width="50">
                    </a>
            </div>
            
            <!-- Robar Dados -->
            <div>
                <h4>Robar Dados</h4>
                <p>PLOT</p>
            </div>
        </div>
    </div>
</div>

@endsection
