@extends('layouts.app')

@section('content')
<div class="container card" style="height:90%;width:100%;">
    <h2 class="text-center text-uppercase" style="border:1px solid black">Ficha 1</h2>

    <div style="display:flex;flex-direction:row">

        <!-- Nome e imagem da Valquíria -->
        <div class="row" style="border:1px solid black; height:400px;width:400px;margin-left:20px">
            <div class="col-md-4 text-center">
                <img src="" alt="Imagem da Valquíria" class="img-fluid rounded">
            </div>
            <div class="col-md-8">
                <h3 class="text-danger"></h3>
            </div>
        </div>
    
        <!-- Atributos e Deslocamento -->
        <div class="row mt-3" style="border:1px solid black">
            <div class="col-md-6">
                <h4>Atributos</h4>
                <ul class="list-group">
                        <li class="list-group-item"><strong>amuleto:</strong> 1 </li>
                </ul>
            </div>
            <div class="col-md-6">
                <h4>Deslocamento</h4>
                <p class="lead">9 metros</p>
            </div>
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
