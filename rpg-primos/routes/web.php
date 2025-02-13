<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/login/login');
});
Route::get('/ficha/{id}', function () {
    return view('/ficha/');
});
Route::get('/welcome', function () {
    return view('/welcome');
});


// Para Jogadores:
Route::middleware(['auth', 'perfil:jogador'])->group(function () {
    // Visualizar a ficha de Valquíria do jogador
    Route::get('/ficha/{id}', [FichaController::class, 'show'])->name('ficha.show');

    // Editar a ficha de Valquíria ou personagem do jogador
    Route::post('/ficha/{id}/editar', [FichaController::class, 'edit'])->name('ficha.edit');
});

// Para Mestres/Admins:
Route::middleware(['auth', 'perfil:mestre'])->group(function () {
    // Lista todas as fichas filtradas por tipo
    Route::get('/fichas', [FichaController::class, 'index'])->name('fichas.index');

    // Visualizar ficha de qualquer tipo de criatura
    Route::get('/ficha/{id}', [FichaController::class, 'show'])->name('ficha.show');

    // Editar qualquer ficha de qualquer tipo de criatura
    Route::post('/ficha/{id}/editar', [FichaController::class, 'edit'])->name('ficha.edit');
});

// Para Admins (caso haja rotas específicas para admin):
Route::middleware(['auth', 'perfil:admin'])->group(function () {
    // Rotas para administradores, se necessário
});

// Página principal (Home) onde o mestre pode ver as fichas
Route::get('/home', function () {
    return view('home');
})->middleware('auth');

// Rota para a galeria (ainda não implementada, mas já presente)
Route::get('/galeria', function () {
    return view('galeria');
})->middleware('auth');