<!-- resources/views/fichas/show.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Ficha da Criatura: {{ $criatura->nome }}</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Nome: {{ $criatura->nome }}</h5>
            <p class="card-text"><strong>Tipo:</strong> {{ ucfirst($criatura->tipo) }}</p>
            <p class="card-text"><strong>HP:</strong> {{ $criatura->hp }}</p>
            <p class="card-text"><strong>Mana:</strong> {{ $criatura->mana }}</p>
            
            <!-- Adicionar outras informações da ficha aqui -->
            
            @if (Auth::user()->id == $criatura->user_id || Auth::user()->perfil == 'mestre')
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editarFichaModal">Editar Ficha</button>
            @endif
        </div>
    </div>
    
    @include('fichas.ModalEditarFicha')
@endsection
