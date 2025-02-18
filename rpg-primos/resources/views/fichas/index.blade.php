@extends('layouts.app')

@section('content')
<div class="container card" style="height:95%;">
    <h2 class="text-center text-uppercase" style="border:1px solid black">Ficha 1</h2>

    <!-- <div  style="display:flex;flex-direction:row;"> -->
    <div>

        <!-- Nome e imagem da Valquíria -->
        <div class="col center" style="
            display:flex;flex-direction:column;justify-content:center;align-items:center;
            border:1px solid black; height:300px;width:300px;
            ">
            <div >
                <img src="{{ asset('imgs/Max.jpg') }}" alt="Imagem da Valquíria" class="img-fluid">
            </div>
        </div>
    
        <!-- Atributos e Deslocamento -->
        <div class="row" style="border:1px solid black">
            <div class="col-md-6" style="display:flex;flex-direction:column;flex-wrap:wrap">
                <h4>Atributos</h4>
                <ul class="list-group">
                        <li class="list-group-item"><strong>Força:</strong> 1 </li>
                        <li class="list-group-item"><strong>Destreza:</strong> 1 </li>
                        <li class="list-group-item"><strong>Constituição:</strong> 1 </li>
                        <li class="list-group-item"><strong>Inteligência:</strong> 1 </li>
                        <li class="list-group-item"><strong>Percepção:</strong> 1 </li>
                        <li class="list-group-item"><strong>Carisma:</strong> 1 </li>
                        <li class="list-group-item"><strong>Agilidade:</strong> 1 </li>
                        <li class="list-group-item"><strong>Vigor:</strong> 1 </li>
                        <li class="list-group-item"><strong>Raciocínio:</strong> 1 </li>
                </ul>
            </div>
        </div>
        <div>
            <h4>Deslocamento</h4>
            <p class="lead">9 metros</p>
        </div>
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

    <!-- Personagens associados -->
    <div class="row mt-3">
        <h4>Personagens</h4>
        <div class="d-flex">
                <a href="" class="btn btn-outline-primary mx-1">
                    <img src="" alt="Personagem" class="img-thumbnail" width="50">
                </a>
        </div>
    </div>

    <!-- Robar Dados -->
    <div class="row mt-3">
        <h4>Robar Dados</h4>
        <p>PLOT</p>
    </div>
</div>
@endsection
