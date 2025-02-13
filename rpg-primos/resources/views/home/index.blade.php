<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Bem-vindo, {{ Auth::user()->name }}</h1>
    
    @if (Auth::user()->perfil == 'mestre')
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalListarFichas">Ver Fichas</button>
    @endif

    @if (Auth::user()->perfil == 'jogador')
        <div>
            <h2>Sua Valquiria</h2>
            <!-- Mostrar a ficha da valquiria do jogador -->
            <a href="{{ route('ficha.show', $valquiria->id) }}" class="btn btn-info">Ver Ficha da Valquiria</a>
            
            <h3>Personagens</h3>
            <ul>
                @foreach ($valquiria->personagens as $personagem)
                    <li><a href="{{ route('ficha.show', $personagem->id) }}">{{ $personagem->nome }}</a></li>
                @endforeach
            </ul>
        </div>
    @endif

    @include('fichas.ModalListarFichas')
@endsection
