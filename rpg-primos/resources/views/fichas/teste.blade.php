@extends('layouts.app')

@section('content')
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<style>
    .slider-container {
        width: 300px;
        height: 140px;
        border-radius: 50%;
        overflow: hidden;
    }

    .slider {
        display: flex;
        transition: transform 0.5s ease-in-out;
        width: 100%;
    }

    .slide {
        flex-shrink: 0;
    }

    .slide img {
        height: 130px;
        border-radius: 50%;
        width: 130px;
    }

    input[type="radio"] {
        display: none;
    }

    .controls {
        display: flex;
        justify-content: center;
        margin-top: 10px;
    }

    .controls label {
        width: 15px;
        height: 15px;
        background-color: gray;
        border-radius: 50%;
        margin: 5px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .controls label:hover {
        background-color: black;
    }
</style>




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
                    border:1px solid gray;
                    height:280px;max-width:300px;
                    border-radius: 8px;

                    ">
                        <img src="{{ asset('imgs/Max.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                        style="width:280px;
                        border: 0px solid #ccc;
                        border-radius: 8px;
                        ">
                </div>
              
                <img src="{{ asset('imgs/plains.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                <img src="{{ asset('imgs/island.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                <img src="{{ asset('imgs/swamp.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                <img src="{{ asset('imgs/montain.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                <img src="{{ asset('imgs/forest.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                <img src="{{ asset('imgs/colorless.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" 
                    style="width:40px;
                    border: 0px solid #ccc;
                    border-radius: 8px;
                    margin-left:2px;
                    position:relative;
                    top:-60px;
                    ">
                
                <div style="
                    display:flex;flex-direction:row;flex-wrap:nowrap;justify-content:space-around;
                    justify-content:space-around;
                    position:relative;
                    top:-105px;
                    right:2px;
                    ">
                    <!-- Mana branca -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #FFF">1</strong></span>

                    <!-- Mana azul -->                    
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em blue">1</strong></span>

                    <!-- Mana preta -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #000">1</strong></span>

                    <!-- Mana vermelha -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em red">1</strong></span>

                    <!-- Mana verde -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em green">1</strong></span>

                    <!-- Mana sem cor -->
                    <span><strong style="font-size:25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em #fff">1</strong></span>
                    
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
                            <td style="vertical-align: middle;"><strong>Raciocínio:</strong> 1</td>
                            <td style="vertical-align: middle;"><strong>Sabedoria:</strong> 1</td>
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
                        <img src="{{ asset('imgs/mana_circle_5.png') }}" alt="Quantidade de Manas" class="img-fluid"
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


        <!-- Personagens associados -->
        <div style="display:flex;flex-direction:row;
            justify-content:space-around;align-items:flex-start;
            border:1px solid blue;
            /* margin:10px;padding:10px; */
            ">
            <div style="display:flex;flex-direction:column;
                justify-content:space-around;align-items:flex-start;
                border:1px solid blue;
                /* margin:10px;padding:10px; */
                ">
               <div style="border: 1px solid blue;
               margin: 10px; padding: 10px;
               ">
                <h4>Heróis</h4>
                <div id="slider">
                    @foreach([1,2] as $item)
                        <a href="" class="item">
                            <img src="{{ asset('imgs/mulher_verde.jpg') }}" alt="Personagem" class="img-thumbnail" width="130" style="border-radius: 100px;">
                        </a>
                    @endforeach
                </div>
            </div>

            <div class="controls">

            </div>

            </div>
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
        </div>


        <!-- Robar Dados -->
        <div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <h4>Rolar Dados</h4>
        </div>
        <!-- <div style="display:flex;flex-direction:row;
            /* justify-content:space-around;align-items:flex-start; */
            border:1px solid blue;
            margin:10px;padding:10px;
            ">
            <h4>Deslocamento</h4>
            <p class="lead">9 metros</p>
            
            
            Equipamentos e Mochila
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
        </div> -->
    </div>


</div>


<script>
    document.querySelectorAll('input[name="slider"]').forEach((input, index) => {
        input.addEventListener('change', () => {
            document.querySelector('.slider').style.transform = `translateX(-${index * 100}%)`;
        });
    });
</script>
@endsection
