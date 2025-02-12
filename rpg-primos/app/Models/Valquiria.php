<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valquiria extends Model
{
    use HasFactory;

    protected $fillable = [
        'criatura_id',
        'raca',
        'classe',
        'armadura',
        'arma_1',
        'arma_2',
        'ataque',
        'equipamento',
        'mochila',
        'partes_freya',
        'tesouros_odin',
        'historia',
        'observacoes',
        'personagens',
        'mana',
        'itens',
    ];

    protected $casts = [
        'personagens' => 'json',
        'itens' => 'json',
    ];

    public function criatura()
    {
        return $this->belongsTo(Criatura::class);
    }
}
