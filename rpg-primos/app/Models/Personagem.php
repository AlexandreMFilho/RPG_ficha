<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    use HasFactory;

    protected $table = 'personagem';

    protected $fillable = [
        'criatura_id',
        'nome',
        'classe',
        'raca',
        'tendencia',
        'nivel',
        'deslocamento',
        'bonus_base',
        'altura',
        'peso',
        'idade',
        'sexo',
        'atributos',
        'ca',
        'pv',
        'iniciativa',
        'habilidades_campo',
        'habilidades',
        'berloque',
        'corpo',
        'maos',
        'anotacoes',
        'itens'
    ];

    protected $casts = [
        'atributos' => 'json',
        'habilidades_campo' => 'json',
        'habilidades' => 'json',
        'berloque' => 'json',
        'corpo' => 'json',
        'maos' => 'json',
        'itens' => 'json',
    ];

    public function criatura()
    {
        return $this->belongsTo(Criatura::class);
    }
}
