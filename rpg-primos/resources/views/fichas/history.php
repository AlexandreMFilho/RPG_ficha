@extends('layouts.app')

@section('content')
<style>
    .slider-container {
        width: 300px;
        height: 140px;
        margin: auto;
        border-radius: 50%;
        position: relative;
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

    <div style="display: flex; flex-direction: column; margin-bottom: 10px;">
        <div style="display: flex; justify-content: space-around; padding: 10px;">
            <!-- Imagem e Mana -->
            <div style="height: 100%; max-width: 300px;">
                <div style="display: flex; flex-direction: column; justify-content: center; align-items: center; height: 280px; max-width: 300px; border-radius: 8px;">
                    <img src="{{ asset('imgs/Max.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" style="width: 280px; border-radius: 8px;">
                </div>

                <!-- Icones de Mana -->
                <div style="display: flex; justify-content: space-between; position: relative; top: -60px;">
                    @foreach (['plains', 'island', 'swamp', 'montain', 'forest', 'colorless'] as $image)
                        <img src="{{ asset('imgs/'.$image.'.jpg') }}" alt="Imagem da Valquíria" class="img-fluid" style="width: 40px; border-radius: 8px; margin-left: 2px;">
                    @endforeach
                </div>

                <!-- Mana -->
                <div style="display: flex; justify-content: space-around; position: relative; top: -105px;">
                    @foreach (['white', 'blue', 'black', 'red', 'green', 'colorless'] as $color)
                        <span><strong style="font-size: 25px; color:white; text-shadow: 0 0 0.2em #000, 0 0 0.2em {{ $color }}">{{ 1 }}</strong></span>
                    @endforeach
                </div>
            </div>

            <!-- Atributos -->
            <div style="border: 1px solid #ccc; padding: 15px; width: 280px; display: flex; flex-direction: column;">
                <h4 style="color: brown; text-align: center; margin-bottom: 10px;">Atributos</h4>
                <table style="width: 100%; border-collapse: collapse;">
                    @foreach(['Força', 'Destreza', 'Constituição', 'Inteligência', 'Percepção', 'Carisma', 'Agilidade', 'Vigor', 'Raciocínio', 'Sabedoria'] as $attribute)
                        <tr>
                            <td style="vertical-align: middle;"><strong>{{ $attribute }}:</strong> 1</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

        <div style="display: flex; flex-direction: row; justify-content: space-between; margin: 10px;">
            <h4>Deslocamento</h4>
            <p class="lead">9 metros</p>
        </div>

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
                    <li class="list-group-item">item</li>
                </ul>
            </div>
            <div class="col-md-4">
                <h4>Itens</h4>
                <ul class="list-group">
                    <li class="list-group-item">item</li>
                </ul>
            </div>
        </div>

        <!-- Personagens associados -->
        <div style="display: flex; flex-direction: row; justify-content: space-around; margin: 10px;">
            <div style="border: 1px solid blue; margin: 10px; padding: 10px;">
                <h4>Heróis</h4>
               <div class="slider-container">
                    @if(isset($imagens) && count($imagens) > 0)
                        @foreach ($imagens as $index => $imagem)
                            <input type="radio" name="slider" id="slide{{ $index }}" {{ $index == 0 ? 'checked' : '' }}>
                        @endforeach
                    @else
                        <p>Nenhuma imagem disponível.</p>
                    @endif

            </div>

            <!-- Personagens -->
            <div style="border: 1px solid blue; margin: 10px; padding: 10px;">
                <h4>Heróis</h4>
                <div id="carousel">
                    @foreach([1, 2, 3] as $item)
                        <a href="" class="item">
                            <img src="{{ asset('imgs/mulher_verde.jpg') }}" alt="Personagem" class="img-thumbnail" width="130" style="border-radius: 100px;">
                        </a>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Robar Dados -->
        <div style="display: flex; flex-direction: row; margin: 10px;">
            <h4>Rolar Dados</h4>
        </div>
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
