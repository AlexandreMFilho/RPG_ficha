@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="text-center text-uppercase">Ficha da Valquíria</h2>

    <!-- Nome e imagem da Valquíria -->
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="" alt="Imagem da Valquíria" class="img-fluid rounded">
        </div>
        <div class="col-md-8">
            <h3 class="text-danger">{{ $valquiria->nome }}</h3>
        </div>
    </div>

    <!-- Atributos e Deslocamento -->
    <div class="row mt-3">
        <div class="col-md-6">
            <h4>Atributos</h4>
            <ul class="list-group">
                @foreach ($valquiria->atributos as $key => $valor)
                    <li class="list-group-item"><strong>{{ ucfirst($key) }}:</strong> {{ $valor }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <h4>Deslocamento</h4>
            <p class="lead">{{ $valquiria->deslocamento }}</p>
        </div>
    </div>

    <!-- Equipamentos e Mochila -->
    <div class="row mt-3">
        <div class="col-md-4">
            <h4>Equipamento</h4>
            <ul class="list-group">
                @foreach ($valquiria->equipamento as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Mochila</h4>
            <ul class="list-group">
                @foreach ($valquiria->mochila as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-md-4">
            <h4>Itens</h4>
            <ul class="list-group">
                @foreach ($valquiria->itens as $item)
                    <li class="list-group-item">{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>

    <!-- Personagens associados -->
    <div class="row mt-3">
        <h4>Personagens</h4>
        <div class="d-flex">
            @foreach ($valquiria->personagens as $personagem)
                <a href="{{ route('personagens.show', $personagem->id) }}" class="btn btn-outline-primary mx-1">
                    <img src="{{ asset('images/personagem.jpg') }}" alt="Personagem" class="img-thumbnail" width="50">
                    {{ $personagem->nome }}
                </a>
            @endforeach
        </div>
    </div>

    <!-- Robar Dados -->
    <div class="row mt-3">
        <h4>Robar Dados</h4>
        <p>{{ $valquiria->historia }}</p>
    </div>
</div>
@endsection
